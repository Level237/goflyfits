<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Clothing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClothingCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all the roles attaching up to 3 random roles to each user
        $category = Category::all();

// Populate the pivot table
Clothing::all()->each(function ($clothings) use ($category) {
    $clothings->categories()->attach(
        $category->random(rand(1, 8))->pluck('id')->toArray()
    );
});
    }
}
