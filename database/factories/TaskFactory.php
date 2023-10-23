<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {        
        return [
            'title' => $this->faker->word(3),
            'description' => $this->faker->paragraph()
        ];
    }
}
