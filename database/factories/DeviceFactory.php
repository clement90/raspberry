<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => $this->faker->numberBetween(1,10),
            'reference' => $this->faker->word(1,true),
            'name' => $this->faker->name(),
            'ip_local' => $this->faker->ipv6(),
            'ip_public' => $this->faker->ipv6(),
            'mac_adress' => $this->faker->macAddress(),
            'status' => $this->faker->boolean(),
            'isActif' => $this->faker->boolean(),
            'isDeleted' => $this->faker->boolean(),
            'createdUserId' => $this->faker->randomDigitNotNull(),
            'updatedUserId' => $this->faker->randomDigitNotNull(),
        ];
    }
}
