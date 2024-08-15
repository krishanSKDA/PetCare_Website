<?php

namespace Database\Factories;


use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    protected $model = Appointment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'petowner_name' => $this->faker->name,
            'pet_name' => $this->faker->word,
            'pet_type' => $this->faker->word,
            'appointment_date' => $this->faker->date(),
            'appointment_time' => $this->faker->time(),
            'petowner_email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
            'service_required' => $this->faker->randomElement(['Grooming', 'Vaccination', 'Checkup', 'Surgery']),
        ];
    }
}
