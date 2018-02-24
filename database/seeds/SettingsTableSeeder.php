<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

        	'site_name' => 'Lara CMS',
        	'contact_number' => '008 800 008',
        	'contact_email' => 'info@default.org',
        	'address' => "King's Street, London, UK"
        ]);
    }
}
