<?php

use Illuminate\Database\Seeder;

class PersonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
        	'nombre' => 'Pedro',
        	'paterno' => 'Trujillo',
        	'materno' => 'Natividad',
        	'codigo' => '0020010633',
        	'telefono' => '042155426',
        	'celular' => '92152515',
        	'email' => 'pedro@admin.com',
        	'password' => bcrypt('1234'),
        ]);
    }
}
