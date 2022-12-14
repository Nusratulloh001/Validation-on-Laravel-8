<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\BoodSeeder;
// use Illuminate\Database\AuthorsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> call([
            BookSeeder::class,
            // AuthorsSeeder::class
        ]);
    }
}
