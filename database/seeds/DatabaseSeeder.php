<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

    	DB::table('users')->insert([
    		'status' => 'active',
    		'type' => 'admin',
    		'name' => 'Flottec Admin',
    		'company' => 'Flottec',
    		'telephone' => '123234345',
    		'locale' => 'en',
    		'email' => 'admin@flottec.com',
    		'password' => bcrypt('Flottec1234'),
    		'created_at' => date('r'),
    		'updated_at' => date('r'),
    	]);

    }
}
