<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'RH SES-AM',
            'email' => 'dgrh@saude.am.gov.br',
            'password' => bcrypt('q1w2e3r4t5y6!'),
        ]);
    }
}
