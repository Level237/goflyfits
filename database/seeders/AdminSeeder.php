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
            'full_name'=>"admin",
            'birthday'=>"12/02/1995",
            'email'=>"admin@goflyfits.com",
            'role_id'=>1,
            'password'=>bcrypt('password'),
            'town_id'=>1,
            'country'=>"cameroon",
            'phone_number'=>"691594365",
            'isChoice'=>1,
            'measure_id'=>1,
            'size'=>"xl",
            'gender_user'=>1,
            'weight'=>"78",
            'height'=>"175",
            'color'=>"green"
        ],
        );
    }
}
