<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SexeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['Masculin', 'Féminin']);
        return [
            'libelle' => $gender,
            // 'id_eleve' => $this->faker->numberBetween(1,20),
        ];
    }
}
