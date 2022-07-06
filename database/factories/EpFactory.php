<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ep>
 */
class EpFactory extends Factory
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
            'anime_id' => 10,
            'name' => $this->faker->name(),
            'ep' => 1,
            'watch' => 'link to watch'
        ];
    }
}
