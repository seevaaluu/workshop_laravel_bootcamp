<?php

use Illuminate\Database\Seeder;
use App\Books;
use Faker\Factory as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i <10 ; $i++) { 
            Books::create([
                'nombre' => $faker->text(15),
                'descripcion' => $faker->text(20),
                'autor_id' => 1
            ]);
        }
    }
}
