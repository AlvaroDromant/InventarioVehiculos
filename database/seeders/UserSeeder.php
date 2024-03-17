<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            $email = "user$i@example.com";
            User::create([
                'name' => "User $i",
                'email' => $email,
                'password' => Hash::make('12341234'),
            ]);
        }
    }
    

}