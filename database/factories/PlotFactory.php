<?php

namespace Database\Factories;

use App\Models\Plot;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PlotFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plot::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->streetAddress;

        $slug = $slug = Str::slug($title);
        return [
            //
        'title' => $title,
        'slug' => $slug,
        'description' => $this->faker->paragraph($nbSentences = 5, $variableNbSentences = true),
        'type_id' => rand(1,2),
        'size_id' => rand(1,2),
        'area_id' => rand(1,2),
        'city_id' => rand(1,2),
        'dimension_id' => rand(1,2),
        'feature_id' => rand(1,2),
        'featured' => 1,
        'amount' => 25000,
        'main_image' => 'http://lorempixel.com/720/480/city/'.rand(1,10),
        'images' => 'http://lorempixel.com/720/480/city/'.rand(1,10),

        ];
    }
}
