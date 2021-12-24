<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            "name" => "bpn",
            "email" => "bpn@mail.com",
            "status" => "bpn",
            "password" => '$2y$10$H9cR19X8qmKbC/KpvAA3J.noK9nFTVjyiOsY3R1PVYJAE5JHa3YXW'
        ]);

        User::create([
            "name" => "nain",
            "email" => "nain@mail.com",
            "status" => "loket",
            "password" => '$2y$10$H9cR19X8qmKbC/KpvAA3J.noK9nFTVjyiOsY3R1PVYJAE5JHa3YXW'
        ]);

        User::create([
            "name" => "malik",
            "email" => "malik@mail.com",
            "status" => "pengukur",
            "password" => '$2y$10$H9cR19X8qmKbC/KpvAA3J.noK9nFTVjyiOsY3R1PVYJAE5JHa3YXW'
        ]);
    }
}
