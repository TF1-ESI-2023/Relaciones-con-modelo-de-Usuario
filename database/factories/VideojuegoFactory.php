<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideojuegoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this-> faker -> word(),
            'anio' => $this -> faker ->dateTimeThisMonth(),
            'genero' => $this -> faker -> RandomElement(['Accion', 'Aventura', 'Pelea'])

        ];
    }
}
