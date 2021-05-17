<?php

namespace Database\Factories;

use App\Models\Dimension;
use Illuminate\Database\Eloquent\Factories\Factory;

class DimensionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dimension::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'dimension' => $this->faker->randomElement(array('25X50', '40X70', '50X90', '100x120')),
        ];
    }
}
