<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->text(30), //Definindo quantos caracteres
            'color' => $this->faker->safeHexColor(), //Gera cores hexadecimais aleatorias
            'user_id' => User::all()->random(),
        ];
    }
}
