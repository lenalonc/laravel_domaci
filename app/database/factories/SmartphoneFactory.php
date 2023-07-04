<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Manufacturer;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Smartphone>
 */
class SmartphoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'serijski_broj' => $this->faker->regexify('[A-Za-z0-9]{6}'),
            'model' => $this->faker->word(),
            'memorija' => $this->faker->randomElement(['64GB', '128GB', '256GB', '512GB']),
            'cena' => $this->faker->numberBetween(200, 1000),
            'user_id'=> User::factory(),
            'manufacturer_id'=>Manufacturer::factory(),
        ];
    }
}
