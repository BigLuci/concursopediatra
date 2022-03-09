<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * $table->id();
     */
    public function run()
    {
        DB::table('candidatos')->insert([

            [
                'id'    => '2',
                'cpf'   => '99999999999',
                'name'  => 'TESTE1',
                'sex'   => 'Feminino',
                'nationality' => 'brasileiro',
                'birth_place' => 'Manaus',
                'parentage_1' => 'nome parente',
                'marital_status' => 'solteiro',
                'rg' => '99999999',
                'birth_date' => '2001-07-17',
                'issuing_agency' => 'ssp',
                'specialization' => 'Pediatria',
                'pcd' => 'Não',
                'email' => 'teste123@gmail.com',
                'phone' => '92999999923',
            ],

            [
                'id'    => '3',
                'cpf'   => '99999999991',
                'name'  => 'TESTE2',
                'sex'   => 'Masculino',
                'nationality' => 'brasileiro',
                'birth_place' => 'Manaus',
                'parentage_1' => 'nome parentee',
                'marital_status' => 'solteiro',
                'rg' => '99999991',
                'birth_date' => '2001-07-17',
                'issuing_agency' => 'ssp',
                'specialization' => 'Neurologia pediátrica',
                'pcd' => 'Não',
                'email' => 'teste1230@gmail.com',
                'phone' => '92999999999'
            ],

            [
                'id'    => '4',
                'cpf'   => '99999999992',
                'name'  => 'TESTE3',
                'sex'   => 'Masculino',
                'nationality' => 'brasileiro',
                'birth_place' => 'Manaus',
                'parentage_1' => 'nome parente',
                'marital_status' => 'solteiro',
                'rg' => '99999992',
                'birth_date' => '2001-07-17',
                'issuing_agency' => 'ssp',
                'specialization' => 'Nutrologia pediátrica',
                'pcd' => 'Não',
                'email' => 'teste1220@gmail.com',
                'phone' => '92999999999'
            ]
        ]);
    }
}
