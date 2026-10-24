<?php

namespace Database\Seeders;

use App\Models\rooms;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        $ruangan = [
            ['nama_ruangan' => 'Laboratorium Komputer A',     'kapasitas' => 40],
            ['nama_ruangan' => 'Laboratorium Jaringan',       'kapasitas' => 30],
            ['nama_ruangan' => 'Laboratorium Sistem Digital', 'kapasitas' => 50],
        ];

        foreach ($ruangan as $data) {
            rooms::create($data);
        }
    }
}