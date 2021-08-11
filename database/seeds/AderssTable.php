<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AderssTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adress')->insert([
            'user_id' => 1,
            'state' => 'Barishal',
            'city' => 'Barguna',
            'country' => 'Bangladesh'
        ]);
        DB::table('adress')->insert([
            'user_id' => 2,
            'state' => 'Dhaka',
            'city' => 'Khulna',
            'country' => 'USA'
        ]);
    }
}
