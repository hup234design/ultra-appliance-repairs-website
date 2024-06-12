<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::updateOrCreate(['slug'=>'aeg'],['title'=>'AEG']);
        Brand::updateOrCreate(['slug'=>'baumatic'],['title'=>'Baumatic']);
        Brand::updateOrCreate(['slug'=>'beko'],['title'=>'Beko']);
        Brand::updateOrCreate(['slug'=>'belling'],['title'=>'Belling']);
        Brand::updateOrCreate(['slug'=>'bosch'],['title'=>'Bosch']);
        Brand::updateOrCreate(['slug'=>'brittania'],['title'=>'Britannia']);
        Brand::updateOrCreate(['slug'=>'candy'],['title'=>'Candy']);
        Brand::updateOrCreate(['slug'=>'canon'],['title'=>'Canon']);
        Brand::updateOrCreate(['slug'=>'cda'],['title'=>'CDA']);
        Brand::updateOrCreate(['slug'=>'creda'],['title'=>'Creda']);
        Brand::updateOrCreate(['slug'=>'delonghi'],['title'=>'DeLonghi']);
        Brand::updateOrCreate(['slug'=>'electrolux'],['title'=>'Electrolux']);
        Brand::updateOrCreate(['slug'=>'fagor'],['title'=>'Fagor']);
        Brand::updateOrCreate(['slug'=>'haier'],['title'=>'Haier']);
        Brand::updateOrCreate(['slug'=>'hoover'],['title'=>'Hoover']);
        Brand::updateOrCreate(['slug'=>'hotpoint'],['title'=>'Hotpoint']);
        Brand::updateOrCreate(['slug'=>'indesit'],['title'=>'Indesit']);
        Brand::updateOrCreate(['slug'=>'kenwood'],['title'=>'Kenwood']);
        Brand::updateOrCreate(['slug'=>'lg'],['title'=>'LG']);
        Brand::updateOrCreate(['slug'=>'lamona'],['title'=>'Lamona']);
        Brand::updateOrCreate(['slug'=>'miele'],['title'=>'Miele']);
        Brand::updateOrCreate(['slug'=>'neff'],['title'=>'Neff']);
        Brand::updateOrCreate(['slug'=>'samsung'],['title'=>'Samsung']);
        Brand::updateOrCreate(['slug'=>'smeg'],['title'=>'Smeg']);
        Brand::updateOrCreate(['slug'=>'siemens'],['title'=>'Siemens']);
        Brand::updateOrCreate(['slug'=>'whirlpool'],['title'=>'Whirlpool']);
        Brand::updateOrCreate(['slug'=>'zanussi'],['title'=>'Zanussi']);
    }
}
