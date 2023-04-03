<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
{


    public function definition(): array
    {
        return [
            'user_name' => fake()->name(),
            'title' => fake()->text(50),
            'description' => fake()->text(100),
            'user_id' => User::get()->random()->id
        ];
    }
}
