<?php

use Illuminate\Database\Seeder;

class Disciplines_UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Discipline_User::truncate();
        factory(\App\Discipline_User::class, 6)->create();
    }
}
