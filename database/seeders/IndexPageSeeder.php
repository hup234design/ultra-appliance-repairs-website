<?php

namespace Database\Seeders;

use App\Models\IndexPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndexPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        IndexPage::updateOrCreate([
            'for' => 'services'
        ], [
            'title' => 'Services',
        ]);

        IndexPage::updateOrCreate([
            'for' => 'locations'
        ], [
            'title' => 'Locations',
        ]);

        IndexPage::updateOrCreate([
            'for' => 'testimonials'
        ], [
            'title' => 'Testimonials',
        ]);
    }
}
