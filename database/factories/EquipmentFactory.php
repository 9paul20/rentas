<?php

namespace Database\Factories;

use App\Models\Equipments\Category;
use App\Models\Equipments\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipment>
 */
class EquipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'noSerie' => fake()->unique()->ean8(),
            'modelo' => fake()->word(),
            'descripcion' => fake()->sentence(),
            'clvDisponibilidad' => Status::inRandomOrder()->first()->clvDisponibilidad,
            'clvCategoria' => Category::inRandomOrder()->first()->clvCategoria,
        ];
    }
}