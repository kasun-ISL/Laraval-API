<?php
 
namespace Database\Factories;
use App\Models\Catogery;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CatogeryFactory extends Factory
{

    protected $model = Catogery::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'name' => $this->faker ->name,
        ];
    }
}
