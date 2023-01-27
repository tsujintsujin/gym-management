<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
    
        for($i = 0; $i < 10; $i++){
            $fakename = fake()->firstName;
            \App\Models\members::create([
                'name' => $fakename,
                'email' => $fakename."@gmail.com",
                'membership_expiration' => fake()->date,
                'trainer_id' => fake()->randomDigit,
                'membership_id' => fake()->randomDigit,

            ]);
        }

        for($j = 0; $j < 10; $j++){
            $fakename = fake()->firstName;
            \App\Models\trainers::create([
               
                'name' => $fakename,
                'email' => $fakename."@gmail.com",
                'specialization' => fake()->word,
                'phone' => fake()->phoneNumber  ,
            ]);
        }

        for($j = 0; $j < 10; $j++){
            \App\Models\memberships::create([
                'membership_type' => fake()->word,
                'membership_price' => fake()->randomDigit*37.73
            ]);
        }
    }
}
