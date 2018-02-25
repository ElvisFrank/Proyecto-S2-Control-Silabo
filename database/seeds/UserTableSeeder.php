<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Elvis Frank',
        	'last_name' => 'Dominguez Vidal',
        	'type' => 'admin',
        	'email' => 'kenq@admin.com',
        	'password' => bcrypt('1234'),
        ]);

    }
}
