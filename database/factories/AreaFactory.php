<?php

namespace Database\Factories;

use App\Models\Area;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\City;

class AreaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Area::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $area = $this->faker->streetAddress;
        $slug = Str::slug($area, '-');
        return [
        'name' => $area,
        'slug' =>$slug,
        'city_id' => rand(1,2),
        'image' => 'http://lorempixel.com/720/480/city/'.rand(1,10),
        'intro' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        ];
    }
}
