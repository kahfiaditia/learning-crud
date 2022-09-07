<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EdulevelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => fake()->name()->unique(),
            "desc" => faker->desc(),
            
        ];
    }
}
