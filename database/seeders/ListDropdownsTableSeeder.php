<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ListDropdownsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('list_dropdowns')->delete();
        
        \DB::table('list_dropdowns')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'N/a',
                'classification' => 'n/a',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '1st',
                'classification' => 'Level',
                'type' => '1',
                'color' => 'n/a',
                'others' => 'First Year',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '2nd',
                'classification' => 'Level',
                'type' => '2',
                'color' => 'n/a',
                'others' => 'Second Year',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '3rd',
                'classification' => 'Level',
                'type' => '3',
                'color' => 'n/a',
                'others' => 'Third Year',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '4th',
                'classification' => 'Level',
                'type' => '4',
                'color' => 'n/a',
                'others' => 'Fourth Year',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '5th',
                'classification' => 'Level',
                'type' => '5',
                'color' => 'n/a',
                'others' => 'Fifth Year',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Private',
                'classification' => 'Class',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Public',
                'classification' => 'Class',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'First Semester',
                'classification' => 'Semester',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'regular',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Second Semester',
                'classification' => 'Semester',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'regular',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Summer Class',
                'classification' => 'Semester',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'summer',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Semester',
                'classification' => 'Term Type',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Trimester',
                'classification' => 'Term Type',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Quarter Term',
                'classification' => 'Term Type',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Transmutation',
                'classification' => 'Grading System',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Percent Grading',
                'classification' => 'Grading System',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Per Grade',
                'classification' => 'Grading System',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Personal Services',
                'classification' => 'Expenditure',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'PS',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Maintenance And Other Operating Expenses',
                'classification' => 'Expenditure',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'MOOE',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Special Purposes',
                'classification' => 'Expenditure',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'SP',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Capital Outlay',
                'classification' => 'Expenditure',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'CO',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Engineering And Technology',
                'classification' => 'S&T Categories',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'CO',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Life Sciences',
                'classification' => 'S&T Categories',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'CO',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Physical And Earth Sciences',
                'classification' => 'S&T Categories',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'CO',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Agricultural And Veterinary Science',
                'classification' => 'S&T Categories',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'CO',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Medical And Health Sciences',
                'classification' => 'S&T Categories',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'CO',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Science / Mathematics Teaching',
                'classification' => 'S&T Categories',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'CO',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'IT / ICT',
                'classification' => 'S&T Categories',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'CO',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Mathematicians, Actuaries And Statisticians',
                'classification' => 'S&T Categories',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'CO',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Waiting',
                'classification' => 'Status',
                'type' => 'waiting',
                'color' => 'violet',
                'others' => 'n/a',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Good Standing',
                'classification' => 'Status',
                'type' => 'ongoing',
                'color' => 'green',
                'others' => 'n/a',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Suspended',
                'classification' => 'Status',
                'type' => 'ongoing',
                'color' => 'red',
                'others' => 'n/a',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Leave Of Absence',
                'classification' => 'Status',
                'type' => 'ongoing',
                'color' => 'yellow',
                'others' => 'n/a',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'No Report',
                'classification' => 'Status',
                'type' => 'ongoing',
                'color' => 'gray',
                'others' => 'n/a',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Graduating',
                'classification' => 'Status',
                'type' => 'ongoing',
                'color' => 'blue',
                'others' => 'n/a',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Graduated',
                'classification' => 'Status',
                'type' => 'n/a',
                'color' => 'green',
                'others' => 'n/a',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Terminated',
                'classification' => 'Status',
                'type' => 'n/a',
                'color' => 'red',
                'others' => 'n/a',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Non-compliance',
                'classification' => 'Status',
                'type' => 'n/a',
                'color' => 'yellow',
                'others' => 'n/a',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Withdrawn',
                'classification' => 'Status',
                'type' => 'n/a',
                'color' => 'gray',
                'others' => 'n/a',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Deceased',
                'classification' => 'Status',
                'type' => 'n/a',
                'color' => 'black',
                'others' => 'n/a',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'For Appeal',
                'classification' => 'Status',
                'type' => 'n/a',
                'color' => 'yellow',
                'others' => 'n/a',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Summa Cum Laude ',
                'classification' => 'Award',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => '1',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Magna Cum Laude',
                'classification' => 'Award',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => '2',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Cum Laude',
                'classification' => 'Award',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => '3',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Honorable Mention',
                'classification' => 'Award',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => '4',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Academic Distinction',
                'classification' => 'Award',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => '5',
            ),
        ));
        
    }
}