<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $min = 1;
        $max = 120;
        
        for ($i = 0; $i < 200; $i++){    
            DB::table('people')->insert([

                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'age' => $faker->numberBetween($min, $max),
                'country' => $faker->country,
                'street' => $faker->streetAddress,
                'city' => $faker->city,
                'phone' => $faker->phoneNumber,

            ]);
        }
        
   
    }
}