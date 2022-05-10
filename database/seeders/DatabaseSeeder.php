<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Reservation;
use App\Models\Review;
use App\Models\Role;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $user = new User();
        $user->name = 'admin';
        $user->surname = 'admin';
        $user->dni = '12345678A';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('1234');
        $user->role = '2';
        $user->save();

        User::factory(5)->create();
        Game::factory(3)->create();
        Room::factory(6)->create();
        Reservation::factory(4)->create();
        Review::factory(30)->create();
    }
}
