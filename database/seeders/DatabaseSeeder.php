<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Reservation;
use App\Models\Review;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(5)->create();
        Game::factory(3)->create();
        Room::factory(6)->create();
        Reservation::factory(4)->create();
        Review::factory(30)->create();



    }
}
