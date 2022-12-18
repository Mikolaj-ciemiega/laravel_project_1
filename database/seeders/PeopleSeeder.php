<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\People;
use Faker\Factory as Faker;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 1 ; $i <= 51 ; $i++){
            People::create([
                'name' => $faker->firstName,
                'surname'  => $faker->lastName,
                'phone_number' => $faker->phoneNumber,
                'street'     => $faker->streetName,
                'country'   => $faker->country
            ]);
        } 
    }
}
