<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anggota::create([
            'nama' => 'Satoru',
            'email' => 'satoru@gmail.com',
            'no_hp' => '08123456789',
            'alamat' => 'Jogja',
        ]);
    }
}
