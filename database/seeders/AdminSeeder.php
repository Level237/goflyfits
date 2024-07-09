<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>"Admin",
            'email'=>"admin@goflyfits.com",
            'role_id'=>1,
            'password'=>bcrypt('password'),
            'town'=>"douala",
            'country'=>"cameroon",
            'phone_number'=>"690394365",
            'isChoice'=>1
        ],
        );
    }
}
