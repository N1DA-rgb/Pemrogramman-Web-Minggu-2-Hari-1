<?php 
 
namespace App\Http\Controllers; 
 
use App\Models\Item; 
use App\Models\Loan; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB; 
 
class LoanController extends Controller 
{ 
    public function index(Request $request) 
    { 
        $query = Loan::with(['user', 'items'])->latest(); 
 
        // Mahasiswa hanya boleh melihat peminjamannya sendiri 
        if (! $request->user()->isAdmin()) { 
            $query->where('user_id', $request->user()->id); 
        } 
 
        // Filter berdasarkan status jika diisi
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // withQueryString() agar parameter filter tetap terbawa saat pindah halaman pagination
        $semuaPeminjaman = $query->paginate(10)->withQueryString(); 
 
        return view('peminjaman.index', compact('semuaPeminjaman')); 
    } 
 
    public function create() 
    { 
        $alatTersedia = Item::available()->orderBy('name')->get();   // hanya alat dengan stok > 0 
 
        return view('peminjaman.create', compact('alatTersedia')); 
    } 
 
    public function store(Request $request)
    {
        $validated = $request->validate([
            'items'    => 'required|array',
            'due_date' => 'required|date|after_or_equal:today|before_or_equal:' . now()->addDays(7)->toDateString(),
            'notes'    => 'nullable|max:255',
        ], [
            'items.required'           => 'Pilih minimal satu alat untuk dipinjam.',
            'due_date.required'        => 'Tanggal kembali wajib diisi.',
            'due_date.after_or_equal'  => 'Tanggal kembali tidak boleh sebelum hari ini.',
            'due_date.before_or_equal' => 'Lama peminjaman maksimal 7 hari.',
        ]);

        // Ambil hanya item yang jumlah pinjamnya > 0
        $itemsToLoan = array_filter($request->items, function ($qty) {
            return $qty > 0;
        });

        if (empty($itemsToLoan)) {
            return back()->withInput()->withErrors(['items' => 'Pilih minimal satu alat untuk dipinjam dengan jumlah lebih dari 0.']);
        }

        try {
            DB::transaction(function () use ($request, $validated, $itemsToLoan) {
                // 1. Catat peminjaman utama
                $peminjaman = $request->user()->loans()->create([
                    'loan_date' => today(),
                    'due_date'  => $validated['due_date'],
                    'status'    => 'dipinjam',
                    'notes'     => $validated['notes'] ?? null,
                ]);

                // 2. Loop setiap alat yang dipilih
                foreach ($itemsToLoan as $itemId => $qty) {
                    $alat = Item::findOrFail($itemId);

                    // Cek jika stok kurang
                    if ($qty > $alat->stock) {
                        throw new \Exception("Stok {$alat->name} hanya tersisa {$alat->stock}.");
                    }

                    // Catat ke tabel pivot loan_item dan kurangi stok
                    $peminjaman->items()->attach($itemId, ['qty' => $qty]);
                    $alat->decrement('stock', $qty);
                }
            });
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['items' => $e->getMessage()]);
        }

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil dicatat.');
    }
 
    public function kembalikan(Loan $peminjaman) 
    { 
        if ($peminjaman->status === 'dikembalikan') { 
            return back()->with('error', 'Peminjaman ini sudah dikembalikan.'); 
        } 
 
        DB::transaction(function () use ($peminjaman) { 
            // Kembalikan stok setiap alat sesuai jumlah yang dipinjam 
            foreach ($peminjaman->items as $alat) { 
                $alat->increment('stock', $alat->pivot->qty); 
            } 
 
            $peminjaman->update([ 
                'status'      => 'dikembalikan', 
                'returned_at' => today(), 
            ]); 
        }); 
 
        return back()->with('success', 'Alat sudah dikembalikan dan stok diperbarui.'); 
    } 
}