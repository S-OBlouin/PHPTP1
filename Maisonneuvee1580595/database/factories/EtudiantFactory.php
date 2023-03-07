<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ville;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'nom'=> $this->faker->firstName($gender = null|'male'|'female'),
        'adresse'=> $this->faker->streetAddress(),
        'tel'=> $this->faker->phoneNumber(),
        'email'=> $this->faker->safeEmail(),
        'ddn'=> $this->faker->date(),
        'ville_id' => $this->faker->randomElement(Ville::all())['id']
        ];
    }
}
