<?php

namespace Database\Factories;

use App\Models\PetDetails;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PetDetails>
 */
class PetDetailsFactory extends Factory
{
    protected $model = PetDetails::class;

    public function definition(): array
    {
        return [
            'pet_name' => $this->faker->firstName(),
            'pet_breed' => $this->faker->word(),
            'pet_gender' => $this->faker->randomElement(['Male', 'Female']),
            'date_of_birth' => $this->faker->date(),
            'pet_picture' => $this->faker->imageUrl(640, 480, 'animals', true),
        ];
    }
}
