<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminOnceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $check_user = DB::table('users');
        if ( $check_user->count() == 0 ) {
            $check_user->insert([
                'nama' => 'lcrm',
                'email' => 'learningraawali2013@gmail.com',
                'username' => 'admin',
                'password' => Hash::make('learning2013')
            ]);
        }
    }
}
