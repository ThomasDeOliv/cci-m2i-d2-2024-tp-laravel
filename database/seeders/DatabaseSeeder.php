<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    function run() {
        User::create([
            "id" => uniqid(),
            "name" => "admin", 
            "email" => "contact@pepina.com", 
            "password" => "ThePepina67"
        ]);
    }
}
