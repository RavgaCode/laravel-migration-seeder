<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0; $i < 6; $i++){
            // creo una nuova riga che equivale ad una nuova istanza del model
            $new_travel = new Travel();
            // popolo la riga
            $new_house->reference = $faker->randomNumber(5, true);
            $new_travel->destination = $faker->country();
            $new_travel->agent = $faker->name();
            $new_travel->departure_date = $faker->dateTime();
            $new_travel->price = $faker->randomFloat(2, 100, 999999);
            $new_travel->number_of_reviews = $faker->numberBetween(0, 500);
            $new_travel->is_available = $faker->boolean();
            // salvo la riga
            $new_travel->save();

        }
    }
}
