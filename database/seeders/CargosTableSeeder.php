<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->insert([

        [
            'name' => 'Pediatria'
        ],

        [
            'name' => 'Endocrinologia pediátrica'
        ],

        [
            'name' => 'Gastroenterologia pediátrica'
        ],

        [
            'name' => 'Neurologia pediátrica'
        ],

        [
            'name' => 'Nutrologia pediátrica'
        ],

        [
            'name' => 'Ortopedia pediátrica'
        ],

        [
            'name' => 'Pneumologia pediátrica'
        ],

        [
            'name' => 'Psiquiatria infantil e adolescente'
        ],

        ]);
    }
}
