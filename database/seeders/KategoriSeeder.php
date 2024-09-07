<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            [
                'id' => 1,
                'namaKategori' => 'Elektronik',
                'descKategori' => 'Kategori elektronik mencakup berbagai perangkat yang menggunakan teknologi untuk berbagai tujuan, seperti komunikasi, hiburan, dan produktivitas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'namaKategori' => 'Pakaian',
                'descKategori' => 'Kategori pakaian mencakup berbagai jenis busana dan aksesoris yang dikenakan untuk berbagai keperluan, termasuk gaya, kenyamanan, dan perlindungan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'namaKategori' => 'Makanan dan Minuman',
                'descKategori' => 'Kategori makanan dan minuman mencakup berbagai produk yang dikonsumsi untuk memenuhi kebutuhan nutrisi dan selera.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'namaKategori' => 'Perabotan Rumah Tangga',
                'descKategori' => 'Kategori perabotan rumah tangga mencakup berbagai barang yang digunakan untuk melengkapi dan mendekorasi ruang di rumah, serta meningkatkan kenyamanan dan fungsionalitas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'namaKategori' => 'Kesehatan dan Kecantikan',
                'descKategori' => 'Kategori kesehatan dan kecantikan mencakup produk yang digunakan untuk perawatan pribadi dan menjaga kesehatan. Produk dalam kategori ini meliputi produk perawatan kulit, suplemen, dan kosmetik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
