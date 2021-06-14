<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        	[
            	'username' => 'Admin',
            	'email' => 'admin@lkpcendana.com',
            	'password' => bcrypt('admin123'),
            	'role' => 'admin',
            	'created_at' => Carbon::now()
        	]
            
    	];

    	DB::table('users')->insert($users);
    }
}
