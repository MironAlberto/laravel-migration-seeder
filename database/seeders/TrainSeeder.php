<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::truncate();

        for ($i = 0; $i < 15; $i++) {
            // Istanzio il Model
            $train = new Train();
            // Ne riempio le colonne
            $train->company = fake()->company();
            $train->departure_station = fake()->streetAddress();
            $train->arrival_station = fake()->streetAddress();
            $train->departure_time = fake()->date().' '.fake()->time();
            $train->arrival_time = fake()->date().' '.fake()->time();
            $train->train_code = fake()->randomNumber(8, true);
            $train->train_carriages = fake()->numberBetween(2, 20);
            $train->in_time = fake()->boolean();
            $train->deleted = fake()->boolean();
            // Lo salvo in persistenza
            $train->save();
        }
    }
}
