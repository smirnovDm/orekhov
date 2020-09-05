<?php

use Illuminate\Database\Seeder;
use App\City;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = collect([
            new City(['name' => 'Орехов']),
            new City(['name' => 'Запорожье']),
            new City(['name' => 'Днепр']),
            new City(['name' => 'Энергодар']),
            new City(['name' => 'Днепрорудное']),
            new City(['name' => 'Киев']),
            new City(['name' => 'Бердянск']),
            new City(['name' => 'Приморск']),
            new City(['name' => 'Другой город'])
            ])
            ->each(function (City $city){
                try {
                    $city->save();
                } catch (Throwable $throwable) {
                    $this->command->warn("City {$city} already exists.");
                }
            });
    }
}
