<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artikel>
 */
class ArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tittle' => $this->faker->sentence(mt_rand(2, 4)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(mt_rand(10, 20)),
            'body' => $this->faker->paragraph(mt_rand(5, 20)),
            'user_id' => mt_rand(1, 3)
        ];
    }
}
