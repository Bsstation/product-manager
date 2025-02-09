<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Validation\Rules\Enum;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = fake()->randomElement(['PF', 'PJ']);
        $document = $type == 'PF' ?
            fake()->numerify('###########') :
                fake()->numerify('###########1##');

        $name = $type == 'PF' ?
            fake()->unique()->name :
                fake()->unique()->company;

        return [
            'name' => $name,
            'type' => $type,
            'document' => $document,
            'adress' => fake()->unique()->address,
        ];
    }
}
