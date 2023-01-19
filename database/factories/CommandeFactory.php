<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commande>
 */
class CommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "id_client" => $this->faker->numberBetween($min = 150, $max = 250),
            "id_produit" => $this->faker->numberBetween($min = 150, $max = 250),
            "quantite" => $this->faker->numberBetween($min = 5, $max = 10),
            "date" => $this->faker->dateTimeBetween('-1 week', '+1 week')
        ];
    }
}
