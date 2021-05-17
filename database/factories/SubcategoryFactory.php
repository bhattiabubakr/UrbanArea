<?php

namespace Database\Factories;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
class SubcategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subcategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'name' => $this->faker->catchPhrase,
        'explanation' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
        'category_id' => rand(1,2),   
        ];
    }
}
