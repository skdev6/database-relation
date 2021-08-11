<?php

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
        $this->call(UserTable::class);
        $this->call(AderssTable::class);
        $this->call(PostTable::class);
    }
}