<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=> fake()->word(),
            'descripcion'=>fake()->text(),
            'precio'=>fake()->numberBetween($min=0,$max=999999),
            'categoria_id'=>fake()->numberBetween($min=1,$max=2),
            'imagen'=>fake()->url(),
        ];
    }
}
