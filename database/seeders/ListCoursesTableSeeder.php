<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ListCoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('list_courses')->delete();
        
        \DB::table('list_courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'AGRICULTURAL ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'AGRICULTURAL TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'AGRO-FORESTRY TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'ASSO. COMPUTER TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'ASSO. INFORMATION TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'ASSOCIATE COMPUTER',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'ASSOCIATE COMPUTER SCIENCE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'ASSOCIATE GEODETIC ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'AUTOMECHANICAL TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'AUTOMOTIVE ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'AUTOMOTIVE TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'BACHELOR IN AGRICULTURAL TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'BACHELOR OF APPLIED STATISTICS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'BACHELOR OF TECHNICAL TEACHER EDUCATION',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'BEED ELEMENTARY SCIENCE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'BIOCHEMICAL TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'BRIDGING PROGRAM',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'BACHELOR OF SCIENCE ',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'BACHELOR OF SCIENCE IN AGRICULTURAL AND BIOSYSTEMS ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'BACHELOR OF SCIENCE IN AGRICULTURAL BIOTECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'BACHELOR OF SCIENCE IN AGRICULTURAL BUSINESS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'BACHELOR OF SCIENCE IN AGRICULTURAL CHEMISTRY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'BACHELOR OF SCIENCE IN AGRICULTURAL ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'BACHELOR OF SCIENCE IN AGRICULTURE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'BACHELOR OF SCIENCE IN AGRONOMY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'BACHELOR OF SCIENCE IN APPLIED MATHEMATICS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'BACHELOR OF SCIENCE IN APPLIED MATHEMATICS WITH APPLIED COMPUTER SYSTEMS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'BACHELOR OF SCIENCE IN APPLIED PHYSICS',
                'abbreviation' => 'n/a',
                'others' => 'SPECIAL',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'BACHELOR OF SCIENCE IN APPLIED PHYSICS WITH APPLIED COMPUTER SYSTEMS',
                'abbreviation' => 'n/a',
                'others' => 'SPECIAL',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'BACHELOR OF SCIENCE IN APPLIED PHYSICS WITH MATERIALS SCIENCE AND ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'SPECIAL',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'BACHELOR OF SCIENCE IN APPLIED STATISTICS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'BACHELOR OF SCIENCE IN BASIC MEDICAL SCIENCES',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'BACHELOR OF SCIENCE IN BIOCHEMISTRY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'BACHELOR OF SCIENCE IN BIOCHEMISTRY/ BS MECHANICAL ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'BACHELOR OF SCIENCE IN BIOLOGICAL SCIENCES',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'BACHELOR OF SCIENCE IN BIOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'BACHELOR OF SCIENCE IN BIOLOGY FOR TEACHERS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'BACHELOR OF SCIENCE IN BIOTECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'BACHELOR OF SCIENCE IN BOTANY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'BACHELOR OF SCIENCE IN CERAMICS ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'BACHELOR OF SCIENCE IN CHEMICAL ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'BACHELOR OF SCIENCE IN CHEMISTRY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'BACHELOR OF SCIENCE IN CHEMISTRY FOR TEACHERS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'BACHELOR OF SCIENCE IN CHEMISTRY W/ACS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'BACHELOR OF SCIENCE IN CHEMISTRY WITH APPLIED COMPUTER SYSTEMS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'BACHELOR OF SCIENCE IN CHEMISTRY WITH MATERIALS SCIENCE AND ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'BACHELOR OF SCIENCE IN CHEMISTRY-PHYSICS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'BACHELOR OF SCIENCE IN CIVIL ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'BACHELOR OF SCIENCE IN CLOTHING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'BACHELOR OF SCIENCE IN COMMUNITY NUTRITION',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'BACHELOR OF SCIENCE IN COMPUTER ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'BACHELOR OF SCIENCE IN COMPUTER SCIENCE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'BACHELOR OF SCIENCE IN COMPUTER SCIENCE-IT',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'BACHELOR OF SCIENCE IN COMPUTER SCIENCE-MATHEMATICS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'BACHELOR OF SCIENCE IN EDUCATION',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'BACHELOR OF SCIENCE IN ELECTRICAL ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'BACHELOR OF SCIENCE IN ELECTRONICS AND COMMUNICATIONS ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'BACHELOR OF SCIENCE IN ELECTRONICS ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'BACHELOR OF SCIENCE IN ELECTRONICS TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'BACHELOR OF SCIENCE IN ENGINEERING TECHNOLOGY MANAGEMENT',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'BACHELOR OF SCIENCE IN ENVIRONMENTAL ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'BACHELOR OF SCIENCE IN ENVIRONMENTAL SCIENCE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'BACHELOR OF SCIENCE IN FISHERIES',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'BACHELOR OF SCIENCE IN FOOD AND NUTRITION',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'BACHELOR OF SCIENCE IN FOOD ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'BACHELOR OF SCIENCE IN FOOD TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'BACHELOR OF SCIENCE IN FOREST PRODUCT ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'BACHELOR OF SCIENCE IN FORESTRY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'BACHELOR OF SCIENCE IN GENERAL ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'BACHELOR OF SCIENCE IN GEODETIC ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'BACHELOR OF SCIENCE IN GEOLOGICAL SCIENCE AND ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'BACHELOR OF SCIENCE IN GEOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'SPECIAL',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'BACHELOR OF SCIENCE IN GEOTHERMAL ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'BACHELOR OF SCIENCE IN INDUSTRIAL ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'BACHELOR OF SCIENCE IN INDUSTRIAL MANAGEMENT ENGINEERING-INFORMATION TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'BACHELOR OF SCIENCE IN INDUSTRIAL TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'BACHELOR OF SCIENCE IN INFORMATION AND COMPUTER SCIENCE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'BACHELOR OF SCIENCE IN INSTRUMENTATION AND CONTROL ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'BACHELOR OF SCIENCE IN INSTRUMENTATION AND CONTROL TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'BACHELOR OF SCIENCE IN MANAGEMENT ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'BACHELOR OF SCIENCE IN MANUFACTURING ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'BACHELOR OF SCIENCE IN MANUFACTURING ENGINEERING AND MANAGEMENT WITH BIOMEDICAL ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'BACHELOR OF SCIENCE IN MANUFACTURING ENGINEERING MANAGEMENT-MECHATRONICS AND ROBOTICS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'BACHELOR OF SCIENCE IN MARINE BIOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'BACHELOR OF SCIENCE IN MARINE ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'BACHELOR OF SCIENCE IN MARINE SCIENCE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'BACHELOR OF SCIENCE IN MATERIALS ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'BACHELOR OF SCIENCE IN MATHEMATICAL SCIENCE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'BACHELOR OF SCIENCE IN MATHEMATICS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'BACHELOR OF SCIENCE IN MATHEMATICS AND SCIENCE TEACHING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'BACHELOR OF SCIENCE IN MATHEMATICS FOR TEACHERS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'BACHELOR OF SCIENCE IN MECHANICAL ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'BACHELOR OF SCIENCE IN MEDICAL TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'BACHELOR OF SCIENCE IN METALLURGICAL ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'BACHELOR OF SCIENCE IN METALLURGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'BACHELOR OF SCIENCE IN METEOROLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'BACHELOR OF SCIENCE IN MICROBIOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'BACHELOR OF SCIENCE IN MINING ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'SPECIAL',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'BACHELOR OF SCIENCE IN MOLECULAR BIOLOGY AND BIOTECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'BACHELOR OF SCIENCE IN NUTRITION',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'BACHELOR OF SCIENCE IN NUTRITION AND DIETETICS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'BACHELOR OF SCIENCE IN PETROLEUM ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'BACHELOR OF SCIENCE IN PHYSICAL SCIENCE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'BACHELOR OF SCIENCE IN PHYSICS',
                'abbreviation' => 'n/a',
                'others' => 'SPECIAL',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'BACHELOR OF SCIENCE IN PHYSICS FOR TEACHERS',
                'abbreviation' => 'n/a',
                'others' => 'SPECIAL',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'BACHELOR OF SCIENCE IN PHYSICS W/MSE',
                'abbreviation' => 'n/a',
                'others' => 'SPECIAL',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'BACHELOR OF SCIENCE IN PHYSICS WITH APPLIED COMPUTER SYSTEMS',
                'abbreviation' => 'n/a',
                'others' => 'SPECIAL',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'BACHELOR OF SCIENCE IN PHYSICS WITH MATERIALS SCIENCE',
                'abbreviation' => 'n/a',
                'others' => 'SPECIAL',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'BACHELOR OF SCIENCE IN PHYSICS WITH MATERIALS SCIENCE ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'SPECIAL',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'BACHELOR OF SCIENCE IN PSYCHOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'BACHELOR OF SCIENCE IN SOCIOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'BACHELOR OF SCIENCE IN STATISTICS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'BACHELOR OF SCIENCE IN SUGAR TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'BACHELOR OF SCIENCE IN VETERINARY MEDICINE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'BACHELOR OF SCIENCE IN ZOOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'BACHELOR OF SCIENCE INE BIOLOGICAL SCIENCES',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'BACHELOR OF SCIENCE INE BIOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'BACHELOR OF SCIENCE INE BIOLOGY-CHEMISTRY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'BACHELOR OF SCIENCE INE CHEMISTRY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'BACHELOR OF SCIENCE INE COMPUTER',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'BACHELOR OF SCIENCE INE ELEMENTARY EDUCATION',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'BACHELOR OF SCIENCE INE ENVIRONMENTAL SCIENCE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'BACHELOR OF SCIENCE INE GENERAL SCIENCES',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'BACHELOR OF SCIENCE INE MATHEMATICS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'BACHELOR OF SCIENCE INE MATHEMATICS AND SCIENCE TEACHING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'BACHELOR OF SCIENCE INE PHYSICAL SCIENCES',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'BACHELOR OF SCIENCE INE PHYSICS',
                'abbreviation' => 'n/a',
                'others' => 'SPECIAL',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'BACHELOR OF SCIENCE INE PHYSICS AND TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'SPECIAL',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'BACHELOR OF SCIENCE INE PHYSICS-CHEMISTRY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'BACHELOR OF SCIENCE INE PHYSICS-MATHEMATICS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'BACHELOR OF SCIENCE INE SCIENCE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'CERTIFICATE IN FORESTRY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'CHEMICAL ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'CHEMICAL TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'CIVIL ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'CIVIL TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'COMPUTER AND ELECTRONICS TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'COMPUTER AND INFORMATION MANAGEMENT',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'COMPUTER AND INFORMATION TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'COMPUTER ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'COMPUTER HARDWARE AND SERVICING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'COMPUTER PROGRAMMING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'COMPUTER PROGRAMMING AND OPERATION',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'COMPUTER SYSTEM AND NETWORK TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'COMPUTER SYSTEM DESIGN AND PROGRAMMING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'COMPUTER SYSTEM PROGRAMMING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'COMPUTER SYSTEM TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'COMPUTER TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'DIGITAL LOGIC TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'DIPLOMA IN AUTOMATION MAINTENANCE TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'DIPLOMA IN CHEMISTRY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'DIPLOMA TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'DRAFTING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'ELECTRICAL ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'ELECTRICAL TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'ELECTROMECHANICAL AND PROCESS ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'ELECTROMECHANICAL ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'ELECTROMECHANICAL TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'ELECTRONICS AND COMMUNICATIONS ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'ELECTRONICS AND COMMUNICATIONS TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'ELECTRONICS DATA PROCESS TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'ELECTRONICS ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'ELECTRONICS SERVICE ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'ELECTRONICS TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'FISHERIES PROCESSING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'FISHERIES TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'FOOD AND BEVERAGE PREPARATION AND SERVICE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'FOOD AND BEVERAGES TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'FOOD ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'FOOD SERVICE MANAGEMENT',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'FOOD TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'FOOD TRADES TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'FOREST RANGER TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'FORESTRY TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'FOUNDRY TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'GARMENTS TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'GEODETIC AND GEOMATIC ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'GEODETIC ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'GEODETIC TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'GRAPHICS ARTS AND PRINTING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'HEATING VENTILATING AIRCONDITIONING AND REFRIGERATION',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'INDUSTRIAL AUTOMATION AND CONTROL ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'INDUSTRIAL TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'INFORMATION AND COMMUNICATION TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'INFORMATION TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'INSTRUMENTATION AND CONTROL ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'INSTRUMENTATION AND CONTROL TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'INSTRUMENTATION AND FOOD PROCESSING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'INSTRUMENTATION AND PROCESS CONTROL TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'MACHINE SHOP TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'MANUFACTURING ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'MANUFACTURING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'MATERIALS ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'MATERIALS SCIENCE ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'MECHANICAL AND PRODUCT ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'MECHANICAL DESIGN AND FABRICATION TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'MECHANICAL ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'MECHANICAL TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'MEDIATRONICS TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'METAL WORKING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'METALLURGICAL ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'NON-DESTRUCTIVE TESTING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'NUTRITION AND FOOD TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'PRODUCT DESIGN AND DEVELOPMENT TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'RADIO COMMUNICATION TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'REFRIGERATION AND AIRCONDITIONING ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'REFRIGERATION AND AIRCONDITIONING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'SPRINT',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'TECHNICAL DRAFTING GRAPHICS ARTS AND DESIGN',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'TOOL AND DIE ENGINEERING TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'TOOL AND DIE TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'WELDING AND FABRICATION TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'BACHELOR OF SCIENCE IN PHARMACY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'BACHELOR IN MATHEMATICS EDUCATION',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'BACHELOR OF MEDICAL LABORATORY SCIENCE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'BACHELOR OF SCIENCE IN AGRIBUSINESS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'BACHELOR OF SCIENCE IN AGRIBUSINESS MANAGEMENT',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'BACHELOR OF SCIENCE IN AGRICULTURAL ECONOMICS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'BACHELOR OF SCIENCE IN AGRICULTURAL TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'BACHELOR OF SCIENCE IN ANIMAL HUSBANDRY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'BACHELOR OF SCIENCE IN ANIMAL SCIENCE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'BACHELOR OF SCIENCE IN FOOD SCIENCE AND TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'BACHELOR OF SCIENCE IN INDUSTRIAL DESIGN',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'BACHELOR OF SCIENCE IN INFORMATION SYSTEMS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'BACHELOR OF SCIENCE IN MECHANICAL ENGINEERING WITH MECHATRONICS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'BACHELOR OF SCIENCE IN PUBLIC HEALTH',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'DOCTOR OF VETERINARY MEDICINE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'BACHELOR OF SCIENCE IN AERONAUTICAL ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'BACHELOR OF SCIENCE IN INDUSTRIAL PHARMACY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'BACHELOR OF SCIENCE IN HUMAN BIOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'BACHELOR OF SCIENCE IN INFORMATION AND COMMUNICATIONS TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'n/a',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'BACHELOR OF SCIENCE IN MEDICAL LABORATORY SCIENCE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'BACHELOR OF SCIENCE IN LIFE SCIENCES',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'BACHELOR OF SCIENCE IN MECHATRONICS ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'BACHELOR OF SCIENCE IN ASTRONOMY',
                'abbreviation' => 'n/a',
                'others' => 'n/a',
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'BACHELOR OF SCIENCE IN MANAGEMENT INFORMATION SYSTEMS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'BACHELOR OF SCIENCE IN PHARMACEUTICAL SCIENCES',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'BACHELOR OF SCIENCE IN GEOGRAPHY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'BACHELOR OF LIBRARY AND INFORMATION SCIENCE',
                'abbreviation' => 'n/a',
                'others' => 'n/a',
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'BACHELOR OF SCIENCE IN ASTRONOMY TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER DISCIPLINE',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'BACHELOR OF SCIENCE IN HEALTH SCIENCES',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'BACHELOR OF SCIENCE IN INDUSTRIAL PSYCHOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'BACHELOR OF SCIENCE IN LIBRARY AND INFORMATION SCIENCE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'BACHELOR IN TECHNOLOGY AND LIVELIHOOD EDUCATION-INFORMATION AND COMMUNICATION TECHNOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'BACHELOR OF SCIENCE IN TECHNOLOGY TEACHER EDUCATION',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'BACHELOR OF SCIENCE IN AGRIBUSINESS MANAGEMENT AND ENTREPRENEURSHIP',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'BACHELOR OF SCIENCE IN AGRICULTURAL AND APPLIED ECONOMICS',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'BACHELOR OF SCIENCE IN ARCHITECTURE',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'BACHELOR OF SCIENCE IN AEROSPACE ENGINEERING',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'BACHELOR OF SCIENCE IN SPEECH PATHOLOGY',
                'abbreviation' => 'n/a',
                'others' => 'OTHER',
            ),
        ));
        
    }
}