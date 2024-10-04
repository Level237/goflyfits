<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(TownSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(BrandSeeder::class);
        //$this->call(AdminSeeder::class);
        //$this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ClothingSeeder::class);
        $this->call(ClothingCategorySeeder::class);

        $path = 'database/sql_files/category_user.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('category table seeded!');
    }
}
