<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ParameterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'usage' => $this->faker->word(1, true),
            'resolution' => $this->faker->word(1, true),
            'orientation' => $this->faker->word(1, true),
            'status' => $this->faker->boolean(),
            'isActif' => $this->faker->boolean(),
            'isDeleted' => $this->faker->boolean(),
            'createdUserId' => $this->faker->randomDigitNotNull(),
            'updatedUserId' => $this->faker->randomDigitNotNull(),
        ];
    }
}
