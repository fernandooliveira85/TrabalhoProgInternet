<?php

use Illuminate\Database\Seeder;

class Courses_DisciplinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Course_Discipline::truncate();
        factory(\App\Course_Discipline::class, 4)->create();
    }
}
