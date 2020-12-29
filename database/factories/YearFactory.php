<?php

namespace Database\Factories;

use App\Models\year;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class YearFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = year::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'y_name'    =>  $this->faker->year
        ];
    }
}
