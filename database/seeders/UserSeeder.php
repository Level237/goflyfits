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
            'email'=>"user@goflyfits.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
            'town_id'=>1,
            'country'=>"cameroon",
            'phone_number'=>"690394365",
            'isChoice'=>0,
            'gender_user'=>1,
            'size'=>"xl",
            'weight'=>"67",
            'color'=>"red"
        ],
        );
    }
}
