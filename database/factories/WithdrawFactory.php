<?php

namespace Database\Factories;

use App\Models\Withdraw;
use Illuminate\Database\Eloquent\Factories\Factory;

class WithdrawFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Withdraw::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $paymentMethod = [
            'name' => ['bKash', 'Rocket', 'Nagad'][mt_rand(0, 2)],
            'number' => $this->faker->e164PhoneNumber
        ];

        return [
            'player_id' => mt_rand(),
            'currency' => ['USD', 'BDT', 'EUR'][mt_rand(0, 2)],
            'amount' => mt_rand(5, 100),
            'payment_method' => json_encode($paymentMethod),
            'withdrawal_code' => $this->faker->uuid,
            'email' => $this->faker->boolean() ? $this->faker->safeEmail : '',
            'status' => ['pending', 'completed', 'returned'][mt_rand(0, 2)],
        ];
    }
}
