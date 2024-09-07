<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
            [
                'id' => 1,
                'namaProduk' => 'Wedang Jahe',
                'foto' => 'img/qDqmKH5cnXevfElbjZYyJNCQpjW37dlzSovTViPr.jpg',
                'harga' => '50000.00',
                'descProduk' => 'Produk ini dapat menghangatkan tubuh dikala suhu sekitarnya dingin',
                'kategori_id' => 5,
                'created_at' => '2024-09-06 00:20:14',
                'updated_at' => '2024-09-06 00:20:14',
            ],
            [
                'id' => 2,
                'namaProduk' => 'Kipas angin Hihi',
                'foto' => 'img/PXMvBaZIpIRVDq9CEwyeVDzdC6PCcfxpxKVUNygp.jpg',
                'harga' => '200000.00',
                'descProduk' => 'Kipas angin ini menggunakan material pvc dan menggunakan teknologi jepang mutakhir.',
                'kategori_id' => 1,
                'created_at' => '2024-09-06 00:11:31',
                'updated_at' => '2024-09-06 00:11:31',
            ],
            [
                'id' => 3,
                'namaProduk' => 'Kapuyuak T-shirt',
                'foto' => 'img/onKElBWJN4KQB8jlzINcRIUAVqn23Xmv1qZVFS3x.jpg',
                'harga' => '100000.00',
                'descProduk' => 'T-shirt ini terbuat dari bahan cotton combed 30s',
                'kategori_id' => 2,
                'created_at' => '2024-09-06 00:11:47',
                'updated_at' => '2024-09-06 00:11:47',
            ],
            [
                'id' => 4,
                'namaProduk' => 'Lemari deltabox',
                'foto' => 'img/4ATM9fh9pIZaCPUmykQo8qN4NAjBLSiTWXAjxqyO.jpg',
                'harga' => '800000.00',
                'descProduk' => 'Lemari ini terbuat dari kayu jati pilihan serta diukir oleh seniman terampil dari Jepara.',
                'kategori_id' => 4,
                'created_at' => '2024-09-06 00:12:05',
                'updated_at' => '2024-09-06 00:12:05',
            ],
            [
                'id' => 5,
                'namaProduk' => 'Kwetiau Ajo Lapuak',
                'foto' => 'img/z7PssvaTQBgB67oivNzVCXCpN5eHfQATPfvy0RLM.jpg',
                'harga' => '15000.00',
                'descProduk' => 'Kwetiau ini diracik menggunakan bumbu rahasia yang ditelah diwariskan dari generasi ke generasi.',
                'kategori_id' => 3,
                'created_at' => '2024-09-06 00:12:20',
                'updated_at' => '2024-09-06 00:12:20',
            ],
            [
                'id' => 6,
                'namaProduk' => 'Smartphone XYZ',
                'foto' => 'img/ThzdaSyE5Hk6NaMqBIRXsDSw4xYAtCnTbDk1GSGb.jpg',
                'harga' => '2999900.00',
                'descProduk' => 'Smartphone XYZ dengan kamera 12MP dan RAM 6GB.',
                'kategori_id' => 1,
                'created_at' => '2024-09-06 06:16:35',
                'updated_at' => '2024-09-06 06:16:35',
            ],
            [
                'id' => 7,
                'namaProduk' => 'Jacket Musim Dingin',
                'foto' => 'img/pD8HWmcUtXvaJlFg9zWhkbdNDUHYSdMQ6OHrL9Gk.jpg',
                'harga' => '89900.00',
                'descProduk' => 'Jacket musim dingin yang nyaman dan hangat.',
                'kategori_id' => 2,
                'created_at' => '2024-09-06 06:16:35',
                'updated_at' => '2024-09-06 06:16:35',
            ],
            [
                'id' => 8,
                'namaProduk' => 'Snack Sehat',
                'foto' => 'img/8xJkbo2OTUgQNu8icasA6CxnEfONcy4BPO9uUyYU.jpg',
                'harga' => '4990.00',
                'descProduk' => 'Snack sehat dengan bahan alami.',
                'kategori_id' => 3,
                'created_at' => '2024-09-06 06:16:35',
                'updated_at' => '2024-09-06 06:16:35',
            ],
            [
                'id' => 9,
                'namaProduk' => 'Sofa Modern',
                'foto' => 'img/FPbFF2uAY3PjCxR75j2lQ0BA2JexohM2uzWdDPXv.jpg',
                'harga' => '3999900.00',
                'descProduk' => 'Sofa modern dengan desain elegan dan nyaman.',
                'kategori_id' => 4,
                'created_at' => '2024-09-06 06:16:35',
                'updated_at' => '2024-09-06 06:16:35',
            ],
            [
                'id' => 10,
                'namaProduk' => 'Krim Wajah Anti-Aging',
                'foto' => 'img/PUy0bfBK1J47EK0w53YyRtS350LUYs6o9oVuNEVz.jpg',
                'harga' => '29900.00',
                'descProduk' => 'Krim wajah anti-aging untuk kulit lebih muda.',
                'kategori_id' => 5,
                'created_at' => '2024-09-06 06:16:35',
                'updated_at' => '2024-09-06 06:16:35',
            ],
        ]);
    }
}
