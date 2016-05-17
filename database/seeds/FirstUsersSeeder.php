<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class FirstUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
	        'name' => 'Telmo Rafael Riofrio Tigse',
	        'email' => 'kytel0925@gmail.com',
	        'password' => bcrypt('coon138'),
	        'created_at' => time()
        ]);
    }
}
