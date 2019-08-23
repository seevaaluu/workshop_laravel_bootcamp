<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Authors;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 100; $i++) { 
            Authors::create([
                'nombre' => $faker->firstName,
                'apellido_paterno' => $faker->lastName,
                'apellido_materno' => $faker->lastName
            ]);
        }
    }
}
