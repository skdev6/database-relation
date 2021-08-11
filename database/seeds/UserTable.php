<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sumon',
            'email' => 'sumon@gmail.com',
            'password' => bcrypt(12345654)
        ]);
        DB::table('users')->insert([
            'name' => 'Sume',
            'email' => 'sume@gmail.com',
            'password' => bcrypt(123456544)
        ]);
    }
}
