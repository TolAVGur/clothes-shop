<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;                     // Для генерации строк

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->words($nb=4, $asText=true);
        $slug = Str::slug($name);
        return [
            'name' => $name,
            'slug' => $slug,
            'short_description' => $this->faker->text(50),
            'description' => $this->faker->text(100),
            'sizes' => "S,L,M,XL",
            'sale_price' => $this->faker->numberBetween(100,1000),
            'discount'=> $this->faker->numberBetween(10, 30),
            'SKU' => 'No'.$this->faker->unique()->numberBetween(1,99),
            'stock_status' => 'instock',
            'quantity' => $this->faker->numberBetween(1,10),
            'image' => 'p'.$this->faker->unique()->numberBetween(1,13).'.jpg',
            'category_id' => $this->faker->numberBetween(1,5),
            'brand_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
