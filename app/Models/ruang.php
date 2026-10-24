<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Ruang extends Model
{
    protected $fillable = ['id', 'name_ruang', 'kapasitas'];
}