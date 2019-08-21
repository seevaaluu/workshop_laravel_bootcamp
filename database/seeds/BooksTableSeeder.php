<?php

use Illuminate\Database\Seeder;
use App\Books;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Books::create([
            'nombre' => 'Algebra de Baldor',
            'descripcion' => 'Es un libro...'
        ]);

        Books::create([
            'nombre' => 'Inferno',
            'descripcion' => 'Es un libro...'
        ]);
    }
}
