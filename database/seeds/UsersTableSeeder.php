<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([

        	'name' => 'Anghel Lupu',
        	'email' => 'angheluta.lupu@gmail.com',
        	'password' => bcrypt('kkll2389'),
            'admin' => 1

        ]);

        App\Profile::create([

            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/gravatar.png',
            'about' => 'Lorem ipsum dolor sit amet about default demo',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
