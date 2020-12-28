<?php

namespace Database\Seeders;

use App\Models\Withdraw;
use Illuminate\Database\Seeder;

class WithdrawSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Withdraw::factory()->count(mt_rand(15, 25))->create();
    }
}
