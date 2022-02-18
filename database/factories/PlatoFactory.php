<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $array_categoria = array("Entrante", "Primero", "Segundo", "Postre");
        return [
            'nombre' => "Plato",
            'categoria' => $array_categoria[array_rand($array_categoria)],
            'precio' => rand(3, 20),
            'foto' => " "
        ];
    }

    
}
