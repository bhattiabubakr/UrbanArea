<?php

namespace Database\Factories;

use App\Models\House;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class HouseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = House::class;

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
        'description' => $this->faker->paragraph($nbSentences = 5),
        'type_id' => rand(1,2),
        'covered' => $this->faker->randomElement(array('200 Sq ft', '300 Sq ft', '400 Sq ft', '500 Sq ft')),
        'beds' => $this->faker->randomElement(range(1,5)),
        'baths' => $this->faker->randomElement(range(1,5)),
        'kitchen' => $this->faker->randomElement(range(1,5)),
        'drawing' => $this->faker->randomElement(range(1,5)),
        'dining' => $this->faker->randomElement(range(1,5)),
        'area_id' => rand(1,2),
        'city_id' => rand(1,2),
        'amenity_id' => rand(1,2),
        'feature_id' => rand(1,2),
        'size_id' => rand(1,2),
        'image' => 'http://lorempixel.com/720/480/city/'.rand(1,10),
        'amount' => $this->faker->randomElement(array('250000', '500000', '1000000')),
        'featured' => rand(1,0),

        ];
    }
}
