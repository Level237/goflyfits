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
            'town_name'=>"Douala",
        ]);
        Town::create([
            'town_name'=>"Yaoundé",
        ]);
        Town::create([
            'town_name'=>"Bafoussam",
        ]);
        Town::create([
            'town_name'=>"Kribi",
        ]);

        Town::create([
            'town_name'=>"Bertoua",
        ]);

        Town::create([
            'town_name'=>"Nkongsamba",
        ]);
    }
}
