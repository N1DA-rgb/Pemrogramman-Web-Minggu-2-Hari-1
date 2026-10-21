<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('items', function (Blueprint $table) {
            // Pastikan kolom belum ada sebelum ditambah, atau biarkan jika yakin
            if (!Schema::hasColumn('items', 'location')) {
                $table->string('location', 100)->nullable()->after('stock');
            }
        });
    }

    public function down(): void
    {
        Schema::table('items', function (Blueprint $table) {
            // Cek dulu keberadaan kolom sebelum di-drop agar tidak error saat rollback
            if (Schema::hasColumn('items', 'location')) {
                $table->dropColumn('location');
            }
        });
    }
};