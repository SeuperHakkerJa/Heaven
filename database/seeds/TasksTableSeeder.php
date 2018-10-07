<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1,500) as $i) {
            DB::table('tasks')->insert([
                'name' => $faker->name,
                'to_do' => $faker->sentence,
                'instruction' => $faker->sentence,
                'status' => $faker->randomElement(['incomplete', 'complete', 'checked']),
                'assigned_time' => $faker->date(),
                'finished_time' => $faker->date(),
                'due_time' => $faker->date(),
                'patient_id' => random_int(1,100),
                'record_id' => $i,
            ]);
        }
    }
}
