<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name' => 'Riki Saepulloh',
            'email' => 'rikisaepulloh27@gmail.com',
            'password' => bcrypt('riki1234')
        ]);
    }
}
