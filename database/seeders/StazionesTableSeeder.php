<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Stazione;

use Faker\Generator as Faker;
use Faker\Provider\en_US\Address;

class StazionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $stazione = new Stazione();

            $stazione->name = $faker->word();
            $stazione->state = $faker->state();
            $stazione->city = $faker->city();
            $stazione->street_address = $faker->streetAddress();
            $stazione->postcode = $faker->postcode();
            $stazione->country = $faker->country();

            $stazione->save();
        }
    }
}
