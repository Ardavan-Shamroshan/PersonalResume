<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'title' => "Your Title",
            'logo' => "logo.png",
            'copy_right' => '© 1995–2022 Copyright Ardavan Shamroshan. All rights reserved.',
            'created_at' => now(),
        ]);
    }
}
