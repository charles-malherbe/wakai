<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class DefaultCookieBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cookieBannerExist = Setting::where('key', 'is_cookie_banner')->exists();

        if (! $cookieBannerExist) {
            Setting::create(['key' => 'is_cookie_banner', 'value' => '1']);
        }
    }
}
