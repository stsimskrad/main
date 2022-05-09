<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserProfilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_profiles')->delete();
        
        \DB::table('user_profiles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'firstname' => 'Ra-ouf',
                'lastname' => 'Jumli',
                'middlename' => 'Indanan',
                'suffix' => NULL,
                'gender' => 'Male',
                'mobile' => '09557650803',
                'user_id' => 1,
                'created_at' => '2022-02-21 08:08:13',
                'updated_at' => '2022-02-21 08:08:13',
            )
        ));
        
        
    }
}