<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'name' =>$this->faker->word(),
         'category_id' =>\App\Models\Catogery::inRandomOrder()->first()->id,
         'description'  =>$this ->faker->paragraph,
         'price' =>rand(1000,124567)
        ];
    }
}
