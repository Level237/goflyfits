<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category_title'=>"Workshop",
        ],
        );

        Category::create([
            'category_title'=>"AfterWork",
        ],
        );

        Category::create([
            'category_title'=>"Business",
        ],
        );

        Category::create([
            'category_title'=>"Conference",
        ],
        );

        Category::create([
            'category_title'=>"Diplomatic Conference",
        ],
        );

        Category::create([
            'category_title'=>"Entertainment",
        ],
        );

        Category::create([
            'category_title'=>"Wedding",
        ],
        );

        Category::create([
            'category_title'=>"Pubs",
        ],
        );
    }
}
