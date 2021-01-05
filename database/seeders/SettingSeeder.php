<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::unguarded(function () {
            $data = collect([
                'company_name' => '1xShopASIA',
                'company_email' => 'mail@1xshopasia.com',
                'logo_path' => 'logo/default.png',
                'tagline' => 'The Best Way To Top Up Player ID in Batting Site 1xBetASIA.',
            ])->map(function ($value, $name) {
                return compact('value', 'name');
            })->toArray();

            Setting::insert($data);
        });
    }
}
