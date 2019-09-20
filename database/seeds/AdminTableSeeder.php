<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jamii_admin')->insert([
            'name' => 'admin',
            'password' =>md5('admin'),
        ]);
    }
}
