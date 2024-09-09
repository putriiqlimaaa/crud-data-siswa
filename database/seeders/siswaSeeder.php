<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \app\Models\Siswa::create([
            'firstName' => 'Putri',
            'lastName' => 'Iqlima',
            'jenis_kelamin' => 'Perempuan',
            'usia' => '20',
        ]);

        \app\Models\Siswa::create([
            'firstName' => 'Raya',
            'lastName' => 'Laura',
            'jenis_kelamin' => 'Perempuan',
            'usia' => '15',
        ]);

        \app\Models\Siswa::create([
            'firstName' => 'Riki',
            'lastName' => 'Harun',
            'jenis_kelamin' => 'Laki-laki',
            'usia' => '25',
        ]);
    }
}
