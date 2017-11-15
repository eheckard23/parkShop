<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
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
        		'name' => 'Ethan Heckard',
        		'email' => 'test@gmail.com',
        		'password' => bcrypt('test')
        	]
        ];

        foreach($users as $user) {
        	User::create($user);
        }
    }
}
