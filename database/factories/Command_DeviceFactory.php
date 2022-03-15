<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Command_DeviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'command_id' => $this->faker->numberBetween(1,10),
            'device_id' => $this ->faker->numberBetween(1,10),
            'status' => $this->faker->boolean(),
            'isActif' => $this->faker->boolean(),
            'isDeleted' => $this->faker->boolean(),
            'createdUserId' => $this->faker->randomDigitNotNull(),
            'updatedUserId' => $this->faker->randomDigitNotNull(),
        ];
    }
}
