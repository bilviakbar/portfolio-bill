<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // ── Data semua project ─
    private function projects(): array
    {
        return [
            'ecommerce-sports-app' => [
                'slug'     => 'ecommerce-sports-app',
                'title'    => 'E-Commerce Sports App',
                'screenshot_type' => 'mobile',
                'tagline'  => 'Aplikasi belanja perlengkapan olahraga dengan pengalaman checkout yang mulus dan desain modern.',
                'tech'     => 'Firebase · Flutter',
                'tech_list'=> ['Flutter', 'Firebase', 'Dart'],
                'img' => asset('images/ecommerce.png'),
                'duration' => '1 Bulan',
                'role'     => 'Fullstack',
                'platform' => 'Mobile',
                'status'   => 'Selesai',

                'overview' => 'Aplikasi mobile e-commerce untuk perlengkapan olahraga yang dibangun dengan Flutter dan Firebase. Menampilkan katalog produk, keranjang belanja, autentikasi pengguna, dan alur checkout yang lengkap. Project ini dikerjakan sebagai tugas akhir mata kuliah Pemrograman Mobile.',

                'screenshots' => [
                    asset('images/ecommerce/login.png'),
                    asset('images/ecommerce/register.png'),
                    asset('images/ecommerce/reset_password.png'),
                    asset('images/ecommerce/home.png'),
                    asset('images/ecommerce/category_sepatu.png'),
                    asset('images/ecommerce/category_baju.png'),
                    asset('images/ecommerce/category_peralatan.png'),
                    asset('images/ecommerce/category_nutrisi.png'),
                    asset('images/ecommerce/product_category.png'),
                    asset('images/ecommerce/pilih_size.png'),
                    asset('images/ecommerce/cart.png'),
                    asset('images/ecommerce/checkout.png'),
                    asset('images/ecommerce/payments.png'),
                    asset('images/ecommerce/pesanan.png'),
                    asset('images/ecommerce/profil_page.png'),
                    
                    
                ],

                'features' => [
                    [
                        'title' => 'Autentikasi Pengguna',
                        'desc'  => 'Login dan registrasi menggunakan Firebase Authentication dengan validasi form.',
                    ],
                    [
                        'title' => 'Katalog Produk',
                        'desc'  => 'Menampilkan daftar produk dari Firestore dengan filter kategori dan pencarian.',
                    ],
                    [
                        'title' => 'Keranjang Belanja',
                        'desc'  => 'Tambah, hapus, dan ubah jumlah produk di keranjang secara real-time.',
                    ],
                    [
                        'title' => 'Checkout & Riwayat Order',
                        'desc'  => 'Proses pemesanan dengan ringkasan pesanan dan histori transaksi pengguna.',
                    ],
                ],

                'tech_detail' => [
                    ['name' => 'Flutter',   'purpose' => 'UI Framework'],
                    ['name' => 'Dart',      'purpose' => 'Bahasa Pemrograman'],
                    ['name' => 'Firebase Auth',      'purpose' => 'Autentikasi'],
                    ['name' => 'Firestore', 'purpose' => 'Database Real-time'],
                ],

                'challenge' => 'Mengelola state keranjang belanja yang sinkron dengan Firestore secara real-time tanpa lag, terutama saat banyak item diubah sekaligus.',
                'solution'  => 'Menggunakan StreamBuilder dengan debounce untuk meminimalkan rebuild widget, dan menyimpan state lokal sementara sebelum sync ke Firestore.',
                'learning'  => 'Project ini mengajarkan saya pentingnya state management yang terstruktur di Flutter, cara bekerja dengan data real-time, dan bagaimana merancang alur UX yang intuitif untuk proses checkout.',

                'github' => '', //  link GitHub 
                'demo'   => '', //  link demo
            ],

            'web-analytics' => [
                'slug'     => 'web-analytics',
                'title'    => 'Web Analytics Produksi Daging Domba Jawa Barat',
                'screenshot_type' => 'web',
                'tagline'  => 'Dashboard analytics berbasis big data untuk visualisasi dan analisis produksi daging domba di Jawa Barat menggunakan Flask dan PySpark..',
                'tech'     => 'Flask · PySpark',
                'tech_list'=> ['Python', 'PySpark', 'Flask', 'JavaScript', 'CSS'],
                'img'      => asset('images/web_py/home1.png'),
                'duration' => '2 Minggu',
                'role'     => 'Data Engineer & Fullstack',
                'platform' => 'Web Analytics',
                'status'   => 'Selesai',

                'overview' => 'Web analytics ini dibangun untuk menganalisis data produksi daging domba di Jawa Barat menggunakan teknologi big data. Sistem menampilkan visualisasi interaktif seperti grafik produksi, kontribusi wilayah, dan tren tahunan berdasarkan data resmi dari Open Data Jabar.',

                'screenshots' => [
                    
                    asset('images/web_py/home1.png'),
                    asset('images/web_py/home2.png'),
                    asset('images/web_py/home3.png'),
                ],

                'features' => [
                    [
                        'title' => 'Dashboard Analytics',
                        'desc'  => 'Ringkasan total barang, stok menipis, dan aktivitas terbaru dalam tampilan visual yang informatif.',
                    ],
                    [
                        'title' => 'Filter Tahun Produksi',
                        'desc'  => 'Pengguna dapat melakukan analisis berdasarkan tahun tertentu untuk melihat perubahan produksi dari 2013–2025.',
                    ],
                    [
                        'title' => 'Visualisasi Big Data',
                        'desc'  => 'Menggunakan PySpark untuk mengolah dataset produksi dalam skala besar secara lebih cepat dan efisien.',
                    ],
                    [
                        'title' => 'API Data Dinamis',
                        'desc'  => 'Backend Flask menyediakan API JSON untuk kebutuhan chart, tabel data, dan analisis tren produksi.',
                    ],
                ],

                'tech_detail' => [
                    ['name' => 'Python', 'type' => 'Programming Language'],
                    ['name' => 'Flask', 'type' => 'Backend Framework'],
                    ['name' => 'PySpark', 'type' => 'Big Data Processing'],
                    ['name' => 'JavaScript', 'type' => 'Interactive Visualization'],
                    ['name' => 'CSS', 'type' => 'UI Styling'],
                    ['name' => 'Open Data Jabar', 'type' => 'Dataset Source'],
                ],

                'challenge' => 'Tantangan utama dalam project ini adalah mengolah dataset produksi dari berbagai wilayah dengan performa yang tetap optimal serta menampilkan visualisasi data yang mudah dipahami pengguna.',
                'solution'  => 'Solusi yang digunakan adalah memanfaatkan PySpark untuk proses agregasi dan filtering data, kemudian Flask digunakan untuk menyediakan API yang terhubung langsung dengan visualisasi chart interaktif pada frontend.',
                'learning'  => 'Melalui project ini saya mempelajari implementasi big data analytics menggunakan PySpark, integrasi backend Flask dengan visualisasi web, serta pengolahan dataset publik dari Open Data Jabar menjadi dashboard analytics yang informatif.',

                'github' => '', 
                'demo'   => '', 
            ],
        ];
    }

    // ── Halaman utama ─
    public function index()
    {
        return view('index', [
            'projects' => array_values($this->projects()),
        ]);
    }

    // ── Halaman detail project ─
    public function show(string $slug)
    {
        $projects = $this->projects();

        if (!isset($projects[$slug])) {
            abort(404);
        }

        return view('project-detail', [
    'project' => $projects[$slug],
]);
    }
}