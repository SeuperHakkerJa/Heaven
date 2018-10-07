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
        $this->call(DoctorsTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(TasksTableSeeder::class);
    }
}
