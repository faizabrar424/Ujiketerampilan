<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post')->insert([
            [
                'id' => 1,
                'judul' => '5 Inovasi Terbaru dalam Dunia Elektronik',
                'isi' => 'Artikel ini membahas inovasi terbaru dalam dunia elektronik seperti smartphone, TV pintar, dan perangkat wearable.',
                'tanggalDibuat' => '2024-09-05 10:00:00',
                'kategori_id' => 1,
                'created_at' => '2024-09-06 06:34:27',
                'updated_at' => '2024-09-06 06:34:27',
            ],
            [
                'id' => 2,
                'judul' => 'Panduan Memilih Jacket Musim Dingin Terbaik',
                'isi' => 'Panduan lengkap untuk memilih jacket musim dingin yang tepat, termasuk bahan, ukuran, dan gaya.',
                'tanggalDibuat' => '2024-09-05 10:00:00',
                'kategori_id' => 2,
                'created_at' => '2024-09-06 06:34:27',
                'updated_at' => '2024-09-06 06:34:27',
            ],
            [
                'id' => 3,
                'judul' => 'Resep Snack Sehat untuk Menjaga Kebugaran',
                'isi' => 'Resep mudah untuk membuat snack sehat di rumah, termasuk bahan-bahan dan cara membuatnya.',
                'tanggalDibuat' => '2024-09-05 10:00:00',
                'kategori_id' => 3,
                'created_at' => '2024-09-06 06:34:27',
                'updated_at' => '2024-09-06 06:34:27',
            ],
            [
                'id' => 4,
                'judul' => 'Tips Memilih Sofa yang Nyaman untuk Ruang Tamu',
                'isi' => 'Artikel ini memberikan tips dan trik dalam memilih sofa yang nyaman dan cocok untuk ruang tamu Anda.',
                'tanggalDibuat' => '2024-09-05 10:00:00',
                'kategori_id' => 4,
                'created_at' => '2024-09-06 06:34:27',
                'updated_at' => '2024-09-06 06:34:27',
            ],
            [
                'id' => 5,
                'judul' => 'Produk Kesehatan yang Wajib Dimiliki di Rumah',
                'isi' => 'Daftar produk kesehatan yang sebaiknya ada di rumah, termasuk suplemen, krim, dan obat-obatan penting.',
                'tanggalDibuat' => '2024-09-05 10:00:00',
                'kategori_id' => 5,
                'created_at' => '2024-09-06 06:34:27',
                'updated_at' => '2024-09-06 06:34:27',
            ],
        ]);
    }
}
