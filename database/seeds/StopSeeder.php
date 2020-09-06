<?php

use Illuminate\Database\Seeder;
use App\Stop;

class StopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         collect([
            new Stop(['name' => 'ПТУ №33', 'city_id' => 1]),
            new Stop(['name' => 'Пожарка', 'city_id' => 1]),
            new Stop(['name' => 'Церковь(центр)', 'city_id' => 1]),
            new Stop(['name' => 'Преображенка', 'city_id' => 1]),
            new Stop(['name' => 'KOZAK(оскар)', 'city_id' => 1]),
            new Stop(['name' => 'Восточная', 'city_id' => 2]),
            new Stop(['name' => 'АТК', 'city_id' => 2]),
            new Stop(['name' => 'Кинотеатр(КОСМОС)', 'city_id' => 2]),
            new Stop(['name' => 'Автовокзал', 'city_id' => 2]),
            new Stop(['name' => 'Анголенко', 'city_id' => 2]),
            new Stop(['name' => 'Площадь свободы', 'city_id' => 2]),
        ])
            ->each(function (Stop $stop){
                try {
                    $stop->save();
                } catch (Throwable $throwable) {
                    $this->command->warn("Stop {$stop} is already exists");
                }
            });
    }
}
