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
            'name'=>"martin",
            'full_name'=>"martin lunel",
            'birthday'=>"05/04/1999",
            'email'=>"user@goflyfits.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
            'town_id'=>1,
            'country'=>"cameroon",
            'measure_id'=>1,
            'phone_number'=>"690394365",
            'isChoice'=>0,
            'gender_user'=>1,
            'size'=>"xl",
            'weight'=>"67",
            'height'=>"175",
            'color'=>"red"
        ],
        );

        User::create([
            'name'=>"Carine",
            'full_name'=>"Carine clarisse",
            'birthday'=>"15/10/1995",
            'email'=>"clarisse@goflyfits.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
            'town_id'=>2,
            'country'=>"cameroon",
            'measure_id'=>2,
            'phone_number'=>"656382934",
            'isChoice'=>0,
            'gender_user'=>0,
            'size'=>"xl",
            'weight'=>"67",
            'height'=>"175",
            'color'=>"pink"
        ],
        );
    }
}
