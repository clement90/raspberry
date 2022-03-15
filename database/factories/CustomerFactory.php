<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'adress_zip_code' => $this->faker->numberBetween(1,9000),
            'adress_country' => $this->faker->country(),
            'adress_street' => $this->faker->streetName(),
            'adress_number' => $this->faker->numberBetween(1,600),
            'reference' => $this->faker->word(1, true),
            'status' => $this->faker->boolean(),
            'isActif' => $this->faker->boolean(),
            'isDeleted' => $this->faker->boolean(),
            'createdUserId' => $this->faker->randomDigitNotNull(),
            'updatedUserId' => $this->faker->randomDigitNotNull(),
        ];
    }
}
