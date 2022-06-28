<?php

use Faker\Generator as Faker;
use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $newTrain = new Train();
            $newTrain->brand = $faker->company;
            $newTrain->start_station = $faker->address;
            $newTrain->arrival_station = $faker->address;
            $newTrain->start_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->text(6);
            $newTrain->num_carriages = $faker->numberBetween(0, 255);
            $newTrain->in_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->save();
        }
    }
}
