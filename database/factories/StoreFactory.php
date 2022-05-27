<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'email'=>$this->faker->safeEmail,
            'password'=>\Hash::make('123'),
            'description'=>$this->faker->text,
            'x'=>$this->faker->latitude,
            'y'=>$this->faker->longitude,
        ];
    }
}
