<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1,100) as $i) {
            DB::table('patients')->insert([
                'name' => $faker->name,
                'what_happened' => $faker->sentence,
                'date_of_surgery' => $faker->date(),
                'age' => random_int(1,90),
                'doctor_id' => random_int(1, 50)
            ]);
        }
    }
}
