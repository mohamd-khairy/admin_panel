<?php

use App\Models\Footer;
use App\Models\Header;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        Setting::updateOrCreate(['id' => 1], [
            'site_name' => 'Shamort',
            'image' => 'assets/img/logo',
            'language' => 'en'
        ]);

        Footer::updateOrCreate(['id' => 1], [
            'title' => 'شمورت',
            'description' => 'تقدر تتابع وتشوف افضل اسعار الفراخ وافضل منتجات الطيور معانا في شمورت دلوقتي مع شمورت هتشوف افضل واجود الانواع',
            'copyright' => 'copyright @' . date('Y') . ' made by JustCode Company'
        ]);
    }
}
