<?php

use Illuminate\Database\Seeder;

class RecordsTableSeeder extends Seeder
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
            DB::table('records')->insert([
                'record_body'=>$faker->sentence,
                'patient_id'=>random_int(1,100),
                'pic'=>$faker->url,
            ]);
        }
    }
}
