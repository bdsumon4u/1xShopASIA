<?php

namespace Database\Factories;

use App\Models\TopUp;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopUpFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TopUp::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $paymentMethods = [
            ['name' => 'bKash', 'number' => '01624093099'],
            ['name' => 'Rocket', 'number' => '01535895247'],
            ['name' => 'Nagad', 'number' => '01783110247'],
        ];

        return [
            'player_id' => mt_rand(),
            'currency' => ['USD', 'BDT', 'EUR'][mt_rand(0, 2)],
            'amount' => mt_rand(5, 100),
            'payment_method' => json_encode($paymentMethods[mt_rand(0, 2)]),
            'trx_id' => $this->faker->uuid,
            'email' => $this->faker->boolean() ? $this->faker->safeEmail : '',
            'status' => ['pending', 'completed', 'returned'][mt_rand(0, 2)],
        ];
    }
}
