<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre = $this->faker->sentence();
        return [
            'nombre' => $nombre,
            'slug' => Str::slug($nombre, '-'),
            'descripcion' => $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(['Programación', 'Diseño', 'Marketing']),
        ];
    }
}
