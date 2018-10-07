<?php

use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
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
            DB::table('doctors')->insert([
                'name' => $faker->name,
            ]);
        }
    }
}
