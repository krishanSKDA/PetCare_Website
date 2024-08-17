<?php

namespace Database\Factories;

use App\Models\Orders;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
{
    protected $model = Orders::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'contact_number' => $this->faker->phoneNumber(),
            'products' => $this->faker->words(3, true), // Example: "product1, product2, product3"
            'payment_method' => $this->faker->randomElement(['Credit Card', 'PayPal', 'Bank Transfer']),
            'cost' => $this->faker->randomFloat(2, 20, 500), // Random cost between $20 and $500
            'address' => $this->faker->address(),
            'created_at' => now(),
            'shipping_status' => $this->faker->randomElement(['Pending', 'Shipped', 'Delivered', 'Cancelled']),
        ];
    }
}
