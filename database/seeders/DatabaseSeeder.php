<?php

namespace Database\Seeders;

use App\Models\Cinema;
use App\Models\CinemaMovie;
use App\Models\Movie;
use Database\Factories\CinemaFactory;
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
        // \App\Models\User::factory(10)->create();
        Cinema::factory(8)->create();
        Movie::factory(30)->create();
        CinemaMovie::factory(50)->create();
    }
}
