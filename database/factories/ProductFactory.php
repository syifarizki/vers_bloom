<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => $this->faker->sentence(mt_rand(1,3)),
            'common_name' => $this->faker->sentence(mt_rand(1,8)),
            'code' => $this->faker->numerify('TM-####'),
            'price' => $this->faker->numerify('Rp.###.###'),
            'description' => collect($this->faker->paragraphs(mt_rand(2,4)))->map(fn($p) => "<p>$p</p>")->implode(''),
            'category_id' => mt_rand(1,2)
        ];
    }
}
