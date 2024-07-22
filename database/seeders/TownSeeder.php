<?php

namespace Database\Seeders;

use App\Models\Town;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Town::create([
            'town_name'=>"douala",
        ]);
        Town::create([
            'town_name'=>"yaoundé",
        ]);
        Town::create([
            'town_name'=>"bafoussam",
        ]);
        Town::create([
            'town_name'=>"kribi",
        ]);

        Town::create([
            'town_name'=>"Bertoua",
        ]);

        Town::create([
            'town_name'=>"Nkongsamba",
        ]);
    }
}
