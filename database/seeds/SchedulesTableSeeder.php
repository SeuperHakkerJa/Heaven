<?php

use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1,20) as $i) {
            DB::table('schedules')->insert([
                'date' => $faker->date(),
                'time' => $faker->time(),
                'patient_id' => random_int(1, 100),
                'status' => $faker->randomElement(['incomplete', 'complete', 'checked']),
                'doctor_id' => random_int(1, 20),

            ]);
        }
    }
}
