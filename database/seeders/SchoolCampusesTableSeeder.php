<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchoolCampusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('school_campuses')->delete();
        
        \DB::table('school_campuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'shortcut' => 'WMSU',
                'campus' => 'main',
                'address' => 'normal road, baliwasan',
                'is_main' => 1,
                'municipality_code' => '097332000',
                'school_id' => 1,
                'created_at' => '2022-02-23 15:06:30',
                'updated_at' => '2022-02-23 15:06:30',
            ),
            1 => 
            array (
                'id' => 2,
                'shortcut' => 'ADZU',
                'campus' => 'main',
                'address' => 'La Purisima St',
                'is_main' => 1,
                'municipality_code' => '097332000',
                'school_id' => 2,
                'created_at' => '2022-02-23 15:07:12',
                'updated_at' => '2022-02-23 15:07:12',
            ),
            2 => 
            array (
                'id' => 3,
                'shortcut' => 'UZ',
                'campus' => 'main',
                'address' => 'La Purisima St',
                'is_main' => 1,
                'municipality_code' => '097332000',
                'school_id' => 3,
                'created_at' => '2022-02-23 15:07:41',
                'updated_at' => '2022-02-23 15:07:41',
            ),
            3 => 
            array (
                'id' => 4,
                'shortcut' => 'ZSCMST',
                'campus' => 'main',
                'address' => 'Fort Pilar',
                'is_main' => 1,
                'municipality_code' => '097332000',
                'school_id' => 4,
                'created_at' => '2022-02-23 15:09:01',
                'updated_at' => '2022-02-23 15:09:01',
            ),
            4 => 
            array (
                'id' => 5,
                'shortcut' => 'ZCSPC',
                'campus' => 'main',
                'address' => 'R.T. Lim, Blvd.',
                'is_main' => 1,
                'municipality_code' => '097332000',
                'school_id' => 5,
                'created_at' => '2022-02-23 15:09:53',
                'updated_at' => '2022-02-23 15:09:53',
            ),
            5 => 
            array (
                'id' => 6,
                'shortcut' => 'PILAR',
                'campus' => 'main',
                'address' => 'R.T. Lim, Blvd.',
                'is_main' => 1,
                'municipality_code' => '097332000',
                'school_id' => 6,
                'created_at' => '2022-02-23 15:10:16',
                'updated_at' => '2022-02-23 15:10:16',
            ),
            6 => 
            array (
                'id' => 7,
                'shortcut' => 'JRMSU',
                'campus' => 'main',
                'address' => 'Gov. Sta. Cruz, Guading Adasa St',
                'is_main' => 1,
                'municipality_code' => '097201000',
                'school_id' => 7,
                'created_at' => '2022-02-23 15:11:18',
                'updated_at' => '2022-02-23 15:11:18',
            ),
            7 => 
            array (
                'id' => 8,
                'shortcut' => 'ABC',
                'campus' => 'main',
                'address' => 'Quezon Avenue College Park',
                'is_main' => 1,
                'municipality_code' => '097202000',
                'school_id' => 8,
                'created_at' => '2022-02-23 15:12:26',
                'updated_at' => '2022-02-23 15:12:26',
            ),
            8 => 
            array (
                'id' => 9,
                'shortcut' => 'BSC',
                'campus' => 'main',
                'address' => 'Sumagdang',
                'is_main' => 1,
                'municipality_code' => '099701000',
                'school_id' => 9,
                'created_at' => '2022-02-23 15:13:52',
                'updated_at' => '2022-02-23 15:13:52',
            ),
            9 => 
            array (
                'id' => 10,
                'shortcut' => 'SCC',
                'campus' => 'main',
                'address' => 'Corner Cerilles & Sagun St.',
                'is_main' => 1,
                'municipality_code' => '097322000',
                'school_id' => 10,
                'created_at' => '2022-02-23 15:15:16',
                'updated_at' => '2022-02-23 15:15:16',
            ),
            10 => 
            array (
                'id' => 11,
                'shortcut' => 'SVC',
                'campus' => 'main',
                'address' => 'Padre Ramon St., Estaka',
                'is_main' => 1,
                'municipality_code' => '097202000',
                'school_id' => 11,
                'created_at' => '2022-02-23 15:15:48',
                'updated_at' => '2022-02-23 15:15:48',
            ),
            11 => 
            array (
                'id' => 12,
                'shortcut' => 'DCIT',
                'campus' => 'main',
                'address' => 'Dapitan Road',
                'is_main' => 1,
                'municipality_code' => '097202000',
                'school_id' => 12,
                'created_at' => '2022-02-23 15:16:40',
                'updated_at' => '2022-02-23 15:16:40',
            ),
            12 => 
            array (
                'id' => 13,
                'shortcut' => 'DMC',
                'campus' => 'main',
                'address' => 'Fr. Patangan Road, Sta. FIlomena St.',
                'is_main' => 1,
                'municipality_code' => '097202000',
                'school_id' => 13,
                'created_at' => '2022-02-23 15:17:38',
                'updated_at' => '2022-02-23 15:17:38',
            ),
            13 => 
            array (
                'id' => 14,
                'shortcut' => 'SMC',
                'campus' => 'main',
                'address' => 'Jamisola St, Sta.Lucia',
                'is_main' => 1,
                'municipality_code' => '097322000',
                'school_id' => 14,
                'created_at' => '2022-02-23 15:19:02',
                'updated_at' => '2022-02-23 15:19:02',
            ),
            14 => 
            array (
                'id' => 15,
                'shortcut' => 'SJCSI',
                'campus' => 'main',
                'address' => 'Jose Burgos St., National Highway',
                'is_main' => 1,
                'municipality_code' => '097218000',
                'school_id' => 15,
                'created_at' => '2022-02-23 15:19:42',
                'updated_at' => '2022-02-23 15:19:42',
            ),
            15 => 
            array (
                'id' => 16,
                'shortcut' => 'JHCSC',
                'campus' => 'main',
                'address' => 'National Highway, Brgy, San Miguel',
                'is_main' => 1,
                'municipality_code' => '097322000',
                'school_id' => 16,
                'created_at' => '2022-02-23 15:20:52',
                'updated_at' => '2022-02-23 15:20:52',
            ),
            16 => 
            array (
                'id' => 17,
                'shortcut' => 'MSU',
                'campus' => 'main',
                'address' => 'marawi',
                'is_main' => 1,
                'municipality_code' => '153617000',
                'school_id' => 17,
                'created_at' => '2022-02-23 15:24:27',
                'updated_at' => '2022-02-23 15:24:27',
            ),
            17 => 
            array (
                'id' => 18,
                'shortcut' => 'MSU-Buug',
                'campus' => 'Buug',
                'address' => 'Datu Panas St',
                'is_main' => 0,
                'municipality_code' => '098302000',
                'school_id' => 17,
                'created_at' => '2022-02-23 15:55:18',
                'updated_at' => '2022-02-23 15:55:18',
            ),
            18 => 
            array (
                'id' => 19,
                'shortcut' => 'MSU-Sindangan',
                'campus' => 'Sindangan',
                'address' => 'Extension',
                'is_main' => 0,
                'municipality_code' => '097218000',
                'school_id' => 17,
                'created_at' => '2022-02-23 15:56:41',
                'updated_at' => '2022-02-23 15:57:26',
            ),
            19 => 
            array (
                'id' => 20,
                'shortcut' => 'WMSU-Ipil',
                'campus' => 'ipil',
                'address' => 'WMSU Rd, Ipil Heights',
                'is_main' => 0,
                'municipality_code' => '098305000',
                'school_id' => 1,
                'created_at' => '2022-02-23 15:59:30',
                'updated_at' => '2022-02-23 15:59:30',
            ),
        ));
        
        
    }
}