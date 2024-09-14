<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusans = [
            'Operator Komputer',
            'Bahasa Inggris',
            'Desain Grafis',
            'Tata Boga',
            'Tata Busana',
            'Tata Graha',
            'Teknik Pendingin',
            'Teknik Komputer',
            'Otomotif Sepeda Motor',
            'Jaringan Komputer',
            'Barista',
            'Bahasa Korea',
            'Makeup Artist',
            'Video Editor',
            'Content Creator',
            'Web Programming'
        ];

        foreach($jurusans as $jurusan) {
            DB::table('jurusans')->insert([
                'nama_jurusan' => $jurusan
            ]);
        }
    }
}
