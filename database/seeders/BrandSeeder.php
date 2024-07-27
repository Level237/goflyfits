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
        Brand::create([
            'brand_title'=>"Kappa",
        ],
        );
        Brand::create([
            'brand_title'=>"No name",
        ],
        );
        Brand::create([
            'brand_title'=>"Zara",
        ],
        );

        Brand::create([
            'brand_title'=>"Guccy",
        ],
        );
    }
}
