<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::updateOrCreate(['slug'=>'ascot'],['title'=>'Ascot']);
        Location::updateOrCreate(['slug'=>'bracknell'],['title'=>'Bracknell']);
        Location::updateOrCreate(['slug'=>'crowthorne'],['title'=>'Crowthorne']);
        Location::updateOrCreate(['slug'=>'camberley'],['title'=>'Camberley']);
        Location::updateOrCreate(['slug'=>'farnborough'],['title'=>'Farnborough']);
        Location::updateOrCreate(['slug'=>'fleet'],['title'=>'Fleet']);
        Location::updateOrCreate(['slug'=>'reading'],['title'=>'Reading']);
        Location::updateOrCreate(['slug'=>'sandhurst'],['title'=>'Sandhurst']);
        Location::updateOrCreate(['slug'=>'maidenhead'],['title'=>'Maidenhead']);
        Location::updateOrCreate(['slug'=>'windsor'],['title'=>'Windsor']);
        Location::updateOrCreate(['slug'=>'wokingham'],['title'=>'Wokingham']);
    }
}
