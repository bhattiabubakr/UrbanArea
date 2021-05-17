<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $city = $this->faker->city;
        $slug = Str::slug($city, '-');
        return [
            //
        'name' => $city,
        'country_id' => \App\Models\Country::pluck('id')->random(),
        'slug' => $slug,
        'image' => 'http://lorempixel.com/720/480/city/'.rand(1,10),
        'intro' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        ];
    }
}
