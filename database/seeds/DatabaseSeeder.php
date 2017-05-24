<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(DisciplinesTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(WorksTableSeeder::class);
        $this->call(FilesTableSeeder::class);
        $this->call(Courses_DisciplinesTableSeeder::class);
        $this->call(Disciplines_UsersTableSeeder::class);
        $this->call(Courses_UsersTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
    }
}
