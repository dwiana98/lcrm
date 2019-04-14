<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('days')->insert([
            ['day' => 'Senin'],
            ['day' => 'Selasa'],
            ['day' => 'Rabu'],
            ['day' => 'Kamis'],
            ['day' => 'Jum\'at'],
            ['day' => 'Sabtu'],
            ['day' => 'Minggu'],
        ]);
    }
}
