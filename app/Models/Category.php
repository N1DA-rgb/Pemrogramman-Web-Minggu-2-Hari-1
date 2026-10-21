<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Category extends Model
{
 // Kolom yang boleh diisi lewat create() dan update()
 protected $fillable = ['name', 'description'];

 // Relasi dengan model Item
 public function items(): HasMany
 {
 return $this->hasMany(Item::class);
 }
 
}
