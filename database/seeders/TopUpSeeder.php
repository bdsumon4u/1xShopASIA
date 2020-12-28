<?php

namespace Database\Seeders;

use App\Models\TopUp;
use Illuminate\Database\Seeder;

class TopUpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TopUp::factory()->count(mt_rand(15, 25))->create();
    }
}
