<?php

use Illuminate\Database\Seeder;

class Courses_UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Course_User::truncate();
        factory(\App\Course_User::class, 5)->create();
    }
}
