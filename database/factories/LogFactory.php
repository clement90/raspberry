<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LogFactory extends Factory
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
            'temperature' => $this->faker->numberBetween(0,100),
            'tension' => $this->faker->numberBetween(0,50),
            'storage' => $this->faker->numberBetween(0,1000),
            'up_time' => $this->faker->randomDigitNotNull(),
            'ip_lan' => $this->faker->ipv6(),
            'ip_one' => $this->faker->ipv6(),
            'ping' => $this->faker->numberBetween(0,1000),
            'status' => $this->faker->boolean(),
            'isActif' => $this->faker->boolean(),
            'isDeleted' => $this->faker->boolean(),
            'createdUserId' => $this->faker->randomDigitNotNull(),
            'updatedUserId' => $this->faker->randomDigitNotNull(),
        ];
    }
}
