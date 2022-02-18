<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;                     // Для генерации строк

class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->words($nb=3, $asText=true);
        $country = $this->faker->words($nb=2, $asText=true);
        return [
            'name' => $name,
            'country' => $country
        ];
    }
}
