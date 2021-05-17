<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'designation' => $this->faker->jobTitle,
            'intro' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'team_id' => rand(1,2),
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'emergency_contact_name' => $this->faker->name,
            'emergency_contact_relation' => $this->faker->randomElement(array('Father', 'Brother', 'Mother', 'Uncle')),
            'emergency_contact_phone' => $this->faker->name,
            'image' => 'http://lorempixel.com/200/200/people/'.rand(1,10),
            'twitter' => 'https://twitter.com/'.rand(500,1000),
            'linkedin' => 'https://www.linkedin.com/feed/'
        ];
    }
}
