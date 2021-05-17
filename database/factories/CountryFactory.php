<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Country::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $country = $this->faker->country;
        $slug = Str::slug($country);
        return [
            //
        'name' => $country,
        'slug' => $slug,
        'intro' => $country.' '.'is an important country of the world. It is of great importance.'.$this->faker->paragraph,
        'currency' => $this->faker->currencyCode,    
        'image' => 'http://lorempixel.com/720/480/city/'.rand(1,10),
        ];
    }
}
