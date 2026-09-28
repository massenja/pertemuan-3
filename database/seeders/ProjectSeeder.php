<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $projects = [
            [
                'title' => 'Sistem Informasi Akademik',
                'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
                'teknologi' => 'Laravel & bootstrap',
                'image' => 'project1.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'E-Commerce SEO Optimization',
                'description' => 'Aplikasi optimalisasi struktur heading dan indexing halaman web toko online.',
                'teknologi' => 'PHP & Google Search Console',
                'image' => 'project2.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Redesign Cover & Branding',
                'description' => 'Perancangan elemen grafis personal branding dan desain sampul buku Rekayasa Web.',
                'teknologi' => 'Figma & Canva',
                'image' => 'project3.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Portal Berita Mahasiswa',
                'description' => 'Platform publikasi artikel dan kegiatan kampus berbasis web interaktif.',
                'teknologi' => 'Laravel & Bootstrap',
                'image' => 'project4.jpg',
                'status' => 'In Progress',
            ],
            [
                'title' => 'Aplikasi E-Perpustakaan',
                'description' => 'Sistem manajemen peminjaman buku digital dan pengarsipan katalog online.',
                'teknologi' => 'CodeIgniter & Bootstrap',
                'image' => 'project5.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Dashboard Landing Page UMKM',
                'description' => 'Pembuatan profil usaha dan katalog produk lokal berbasis responsif mobile.',
                'teknologi' => 'HTML, CSS, JS & Bootstrap',
                'image' => 'project6.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Sistem Kasir (POS) Toko',
                'description' => 'Aplikasi pencatatan transaksi penjualan dan manajemen stok barang harian.',
                'teknologi' => 'Java Swing & MySQL',
                'image' => 'project7.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Audit & Monitoring SEO Web',
                'description' => 'Analisis performa halaman web dan peningkatan lalu lintas pencarian organik.',
                'teknologi' => 'Ahrefs & Google Analytics',
                'image' => 'project8.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Desain Prototipe Mobile App',
                'description' => 'Perancangan wireframe dan UI kit untuk aplikasi pengingat jadwal kuliah.',
                'teknologi' => 'Figma & Adobe XD',
                'image' => 'project9.jpg',
                'status' => 'In Progress',
            ],
            [
                'title' => 'Sistem Inventaris Kampus',
                'description' => 'Pengelolaan sarana dan prasarana barang inventaris di lingkungan laboratorium.',
                'teknologi' => 'Laravel & Livewire',
                'image' => 'project10.jpg',
                'status' => 'selesai',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}