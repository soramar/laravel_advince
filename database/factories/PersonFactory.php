<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Person;

class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = person::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'mail' => $this->faker->unique()->safeEmail,
            'age' => $this->faker->numberBetween(1,99)
        ];
    }
}
