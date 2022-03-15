<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reference' => $this->faker->word(1, true),
            'description' => $this->faker->text(100),
            'name' => $this->faker->name(),
            'order' => $this->faker->word(1,true)
        ];
    }
}
