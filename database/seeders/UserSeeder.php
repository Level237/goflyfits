<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id'=>1,
            'name'=>"martin",
            'email'=>"user@goflyfits.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
            'town'=>"douala",
            'country'=>"cameroon",
            'phone_number'=>"690394365",
            'isChoice'=>1
        ],
        );
    }
}
