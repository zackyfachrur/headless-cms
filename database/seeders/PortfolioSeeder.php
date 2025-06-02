<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::create([
            'title' => 'Apotek Digital – Manajemen Apotek Modern',
        'description' => 'Aplikasi Apotek Digital mempermudah operasional apotek...',
        'category' => 'webapp|Web Aplikasi',
        'image' => 'apotikwebapps.png',
        'demo_url' => 'https://nusatechnoindonesia.com/aplikasiapotik/login',
        'demo_username' => 'userdemo',
        'demo_password' => '123',
        'detail_url' => 'https://nusatechnoindonesia.com/aplikasiapotik/login',
        ]);
    }
}
