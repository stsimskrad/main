<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ListProgramsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('list_programs')->delete();
        
        \DB::table('list_programs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'RA 7687',
                'others' => 'n/a',
                'is_sub' => 0,
                'is_active' => 1,
                'created_at' => '2022-04-19 13:28:33',
                'updated_at' => '2022-04-19 13:28:33',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ra 10612',
                'others' => 'n/a',
                'is_sub' => 0,
                'is_active' => 1,
                'created_at' => '2022-04-19 13:30:31',
                'updated_at' => '2022-04-19 13:30:31',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'merit',
                'others' => 'n/a',
                'is_sub' => 0,
                'is_active' => 1,
                'created_at' => '2022-04-19 13:30:39',
                'updated_at' => '2022-04-19 13:30:39',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'JLAP',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 0,
                'created_at' => '2022-04-19 13:31:50',
                'updated_at' => '2022-04-19 13:31:50',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'GREAT-M',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'created_at' => '2022-04-19 13:32:09',
                'updated_at' => '2022-04-19 13:32:09',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'RA 7687 Sophomore',
                'others' => 'n/a',
                'is_sub' => 1,
                'is_active' => 1,
                'created_at' => '2022-04-19 13:32:29',
                'updated_at' => '2022-04-19 13:32:29',
            ),
        ));
        
        
    }
}