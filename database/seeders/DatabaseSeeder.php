<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->count(10)
            ->create();

        $this->call([
            LocationSeeder::class,
            StationTypeSeeder::class,
            StationSeeder::class,
            TransportTypeSeeder::class,
            TransportSeeder::class,
            SeatClassSeeder::class,
            TransportSeatSeeder::class,
            RouteSeeder::class,
            BookingSeeder::class,
        ]);
    }
}
