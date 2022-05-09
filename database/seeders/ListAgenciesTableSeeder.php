<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ListAgenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('list_agencies')->delete();
        
        \DB::table('list_agencies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Department Of Science And Technology - I',
                'code' => 'R1',
                'acronym' => 'DOST-I',
                'website' => 'www.isko-r1.com',
                'status' => 'Active',
                'region_code' => '010000000',
                'created_at' => '2021-01-30 18:04:21',
                'updated_at' => '2021-01-30 18:04:21',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Department Of Science And Technology - II',
                'code' => 'R2',
                'acronym' => 'DOST-II',
                'website' => 'www.isko-r2.com',
                'status' => 'Active',
                'region_code' => '020000000',
                'created_at' => '2021-01-30 18:07:21',
                'updated_at' => '2021-01-30 18:08:59',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Department Of Science And Technology - III',
                'code' => 'R3',
                'acronym' => 'DOST-III',
                'website' => 'www.isko-r3.com',
                'status' => 'Active',
                'region_code' => '030000000',
                'created_at' => '2021-01-30 18:10:24',
                'updated_at' => '2021-01-30 18:10:24',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Department Of Science And Technology - IVA-L1',
                'code' => 'R4AL1',
                'acronym' => 'DOST-IVA-L1',
                'website' => 'www.isko-r4al1.com',
                'status' => 'Active',
                'region_code' => '040000000',
                'created_at' => '2021-01-30 18:11:45',
                'updated_at' => '2021-01-30 18:18:47',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Department Of Science And Technology - IVA-L2',
                'code' => 'R4AL2',
                'acronym' => 'DOST-IVA-L2',
                'website' => 'www.isko-r4al2.com',
                'status' => 'Active',
                'region_code' => '030000000',
                'created_at' => '2021-01-30 18:12:49',
                'updated_at' => '2021-01-30 18:15:23',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Department Of Science And Technology - IVB',
                'code' => 'R4B',
                'acronym' => 'DOST-IVB',
                'website' => 'www.isko-r4b.com',
                'status' => 'Active',
                'region_code' => '170000000',
                'created_at' => '2021-01-30 18:14:11',
                'updated_at' => '2021-01-30 18:14:11',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Department Of Science And Technology - V',
                'code' => 'R5',
                'acronym' => 'DOST-V',
                'website' => 'www.isko-r5.com',
                'status' => 'Active',
                'region_code' => '050000000',
                'created_at' => '2021-01-30 18:20:00',
                'updated_at' => '2021-01-30 18:20:00',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Department Of Science And Technology - VI',
                'code' => 'R6',
                'acronym' => 'DOST-VI',
                'website' => 'www.isko-r6.com',
                'status' => 'Active',
                'region_code' => '060000000',
                'created_at' => '2021-01-30 18:20:34',
                'updated_at' => '2021-01-30 18:20:34',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Department Of Science And Technology - VII',
                'code' => 'R7',
                'acronym' => 'DOST-VII',
                'website' => 'www.isko-r7.com',
                'status' => 'Active',
                'region_code' => '070000000',
                'created_at' => '2021-01-30 18:20:55',
                'updated_at' => '2021-01-30 18:20:55',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Department Of Science And Technology - VIII',
                'code' => 'R8',
                'acronym' => 'DOST-VIII',
                'website' => 'www.isko-r8.com',
                'status' => 'Active',
                'region_code' => '080000000',
                'created_at' => '2021-01-30 18:21:15',
                'updated_at' => '2021-01-30 18:21:15',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Department Of Science And Technology - IX',
                'code' => 'R9',
                'acronym' => 'DOST-IX',
                'website' => 'www.isko-r9.com',
                'status' => 'Active',
                'region_code' => '090000000',
                'created_at' => '2021-01-30 18:21:44',
                'updated_at' => '2021-01-30 18:21:44',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Department Of Science And Technology - X',
                'code' => 'R10',
                'acronym' => 'DOST-X',
                'website' => 'www.isko-10.com',
                'status' => 'Active',
                'region_code' => '100000000',
                'created_at' => '2021-01-30 18:22:23',
                'updated_at' => '2021-01-30 18:22:23',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Department Of Science And Technology - XI',
                'code' => 'R11',
                'acronym' => 'DOST-XI',
                'website' => 'www.isko-11.com',
                'status' => 'Active',
                'region_code' => '110000000',
                'created_at' => '2021-01-30 18:22:45',
                'updated_at' => '2021-01-30 18:22:45',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Department Of Science And Technology - XII-L1',
                'code' => 'R12L1',
                'acronym' => 'DOST-XII-L1',
                'website' => 'www.isko-12l1.com',
                'status' => 'Active',
                'region_code' => '120000000',
                'created_at' => '2021-01-30 18:25:03',
                'updated_at' => '2021-01-30 18:25:03',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Department Of Science And Technology - XII-L2',
                'code' => 'R12L2',
                'acronym' => 'DOST-XII-L2',
                'website' => 'www.isko-12l2.com',
                'status' => 'Active',
                'region_code' => '120000000',
                'created_at' => '2021-01-30 18:25:21',
                'updated_at' => '2021-01-30 18:25:21',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Department Of Science And Technology - XIII',
                'code' => 'R13',
                'acronym' => 'DOST-XIII',
                'website' => 'www.isko-r13.com',
                'status' => 'Active',
                'region_code' => '160000000',
                'created_at' => '2021-01-30 18:26:01',
                'updated_at' => '2021-01-30 18:26:01',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Department Of Science And Technology - Cordillera Administrative Region',
                'code' => 'CAR',
                'acronym' => 'DOST-CAR',
                'website' => 'www.isko-car.com',
                'status' => 'Active',
                'region_code' => '140000000',
                'created_at' => '2021-01-30 18:26:45',
                'updated_at' => '2021-01-30 18:26:45',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Department Of Science And Technology - Bangsamoro Autonomous Region In Muslim Mindanao',
                'code' => 'BARMM',
                'acronym' => 'DOST-BARMM',
                'website' => 'www.isko-barmm.com',
                'status' => 'Active',
                'region_code' => '150000000',
                'created_at' => '2021-01-30 18:27:21',
                'updated_at' => '2021-01-30 18:27:21',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Department Of Science And Technology - National Capital Region',
                'code' => 'NCR',
                'acronym' => 'DOST-NCR',
                'website' => 'www.isko-ncr.com',
                'status' => 'Active',
                'region_code' => '130000000',
                'created_at' => '2021-01-30 18:27:57',
                'updated_at' => '2021-01-30 18:27:57',
            ),
        ));
        
    }
}