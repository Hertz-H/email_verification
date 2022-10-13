<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
            'name' => 'Almsbahi'
        ]);
        Location::create([
            'name' => 'Daris'
        ]);
        Location::create([
            'name' => 'Hadda'
        ]);
        Location::create([
            'name' => 'Shomela'
        ]);
        Location::create([
            'name' => 'Sixty Street'
        ]);
    }
}
