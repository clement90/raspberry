<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Device_ParameterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'device_id' => $this->faker->numberBetween(1,10),
            'parametre_id' => $this->faker->numberBetween(1,10),
            'status' => $this->faker->boolean(),
            'isActif' => $this->faker->boolean(),
            'isDeleted' => $this->faker->boolean(),
            'createdUserId' => $this->faker->randomDigitNotNull(),
            'updatedUserId' => $this->faker->randomDigitNotNull(),
        ];
    }
}
