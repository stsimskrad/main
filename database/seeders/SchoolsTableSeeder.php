<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('schools')->delete();
        
        \DB::table('schools')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => NULL,
                'name' => 'Western Mindanao State University',
                'avatar' => 'school.jpg',
                'class_id' => 8,
                'term_id' => 12,
                'grading_id' => 17,
                'created_at' => '2022-02-23 07:06:30',
                'updated_at' => '2022-02-23 07:06:30',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => NULL,
                'name' => 'Ateneo de Zamboanga University',
                'avatar' => 'school.jpg',
                'class_id' => 7,
                'term_id' => 12,
                'grading_id' => 17,
                'created_at' => '2022-02-23 07:07:12',
                'updated_at' => '2022-02-23 07:07:12',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => NULL,
                'name' => 'Universidad de Zamboanga',
                'avatar' => 'school.jpg',
                'class_id' => 7,
                'term_id' => 12,
                'grading_id' => 17,
                'created_at' => '2022-02-23 07:07:41',
                'updated_at' => '2022-02-23 07:07:41',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => NULL,
                'name' => 'Zamboanga State College of Marine Sciences and Technolgy',
                'avatar' => 'school.jpg',
                'class_id' => 8,
                'term_id' => 12,
                'grading_id' => 17,
                'created_at' => '2022-02-23 07:09:01',
                'updated_at' => '2022-02-23 07:09:01',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => NULL,
                'name' => 'Zamboanga City State Polytechnic College',
                'avatar' => 'school.jpg',
                'class_id' => 8,
                'term_id' => 12,
                'grading_id' => 17,
                'created_at' => '2022-02-23 07:09:53',
                'updated_at' => '2022-02-23 07:09:53',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => NULL,
                'name' => 'Pilar College',
                'avatar' => 'school.jpg',
                'class_id' => 7,
                'term_id' => 12,
                'grading_id' => 17,
                'created_at' => '2022-02-23 07:10:16',
                'updated_at' => '2022-02-23 07:10:16',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => NULL,
                'name' => 'Jose Rizal Memorial State University',
                'avatar' => 'school.jpg',
                'class_id' => 8,
                'term_id' => 12,
                'grading_id' => 17,
                'created_at' => '2022-02-23 07:11:18',
                'updated_at' => '2022-02-23 07:11:18',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => NULL,
                'name' => 'Andres Bonifacio College',
                'avatar' => 'school.jpg',
                'class_id' => 7,
                'term_id' => 12,
                'grading_id' => 17,
                'created_at' => '2022-02-23 07:12:26',
                'updated_at' => '2022-02-23 07:12:26',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => NULL,
                'name' => 'Basilan State College',
                'avatar' => 'school.jpg',
                'class_id' => 7,
                'term_id' => 12,
                'grading_id' => 17,
                'created_at' => '2022-02-23 07:13:52',
                'updated_at' => '2022-02-23 07:13:52',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => NULL,
                'name' => 'Saint Columban College',
                'avatar' => 'school.jpg',
                'class_id' => 7,
                'term_id' => 12,
                'grading_id' => 17,
                'created_at' => '2022-02-23 07:15:16',
                'updated_at' => '2022-02-23 07:15:16',
            ),
            10 => 
            array (
                'id' => 11,
                'code' => NULL,
                'name' => 'Saint Vincent\'s College',
                'avatar' => 'school.jpg',
                'class_id' => 7,
                'term_id' => 12,
                'grading_id' => 17,
                'created_at' => '2022-02-23 07:15:48',
                'updated_at' => '2022-02-23 07:15:48',
            ),
            11 => 
            array (
                'id' => 12,
                'code' => NULL,
                'name' => 'Dipolog City Institute of Technology',
                'avatar' => 'school.jpg',
                'class_id' => 7,
                'term_id' => 12,
                'grading_id' => 17,
                'created_at' => '2022-02-23 07:16:40',
                'updated_at' => '2022-02-23 07:16:40',
            ),
            12 => 
            array (
                'id' => 13,
                'code' => NULL,
                'name' => 'Dipolog Medical Center College Foundation Inc',
                'avatar' => 'school.jpg',
                'class_id' => 7,
                'term_id' => 12,
                'grading_id' => 17,
                'created_at' => '2022-02-23 07:17:38',
                'updated_at' => '2022-02-23 07:17:38',
            ),
            13 => 
            array (
                'id' => 14,
                'code' => NULL,
                'name' => 'Southern Mindanao College',
                'avatar' => 'school.jpg',
                'class_id' => 8,
                'term_id' => 12,
                'grading_id' => 17,
                'created_at' => '2022-02-23 07:19:02',
                'updated_at' => '2022-02-23 07:19:02',
            ),
            14 => 
            array (
                'id' => 15,
                'code' => NULL,
                'name' => 'St. Joseph College of Sindangan Inc.',
                'avatar' => 'school.jpg',
                'class_id' => 7,
                'term_id' => 12,
                'grading_id' => 17,
                'created_at' => '2022-02-23 07:19:42',
                'updated_at' => '2022-02-23 07:19:42',
            ),
            15 => 
            array (
                'id' => 16,
                'code' => NULL,
                'name' => 'JH Cerilles State College',
                'avatar' => 'school.jpg',
                'class_id' => 8,
                'term_id' => 12,
                'grading_id' => 17,
                'created_at' => '2022-02-23 07:20:52',
                'updated_at' => '2022-02-23 07:20:52',
            ),
            16 => 
            array (
                'id' => 17,
                'code' => NULL,
                'name' => 'Mindanao State University',
                'avatar' => 'school.jpg',
                'class_id' => 8,
                'term_id' => 12,
                'grading_id' => 17,
                'created_at' => '2022-02-23 07:24:27',
                'updated_at' => '2022-02-23 07:24:27',
            ),
        ));
        
        
    }
}