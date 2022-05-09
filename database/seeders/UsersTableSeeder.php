<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'admin@dost.com',
                'email_verified_at' => '2022-02-21 08:08:13',
                'password' => '$2y$10$RnZcTUb5A2vTRIpJzgYXfOsQsHXAtksvcv/4UZNow/e4bzpKP6/2y',
                'avatar' => 'avatar.jpg',
                'role' => 'Super Administrator',
                'is_active' => 1,
                'welcome_valid_until' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-02-21 08:08:13',
                'updated_at' => '2022-02-21 08:08:13',
            )
        ));
        
        
    }
}