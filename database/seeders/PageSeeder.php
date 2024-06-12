<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::updateOrCreate([
            'is_home' => 1
        ], [
            'title' => 'Welcome to Ultra Appliance Repairs',
            'slug' => 'welcome-to-ultra-appliance-repairs',
        ]);

        Page::updateOrCreate([
            'slug' => 'about-us'
        ], [
            'title' => 'About Us',
        ]);

        Page::updateOrCreate([
            'slug' => 'contact'
        ], [
            'title' => 'Contact',
        ]);
    }
}
