<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \DB::table('users')->insert([
        //     'email' => 'admin@dost.com',
        //     'password' => bcrypt('dost9ict'),
        //     'role' => 'Super Administrator',
        //     'is_active' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'email_verified_at' => now(),
        // ]);

        // \DB::table('user_profiles')->insert([
        //     'firstname' => 'Ra-ouf',
        //     'lastname' => 'Jumli',
        //     'middlename' => 'Indanan',
        //     'gender' => 'Male',
        //     'user_id' => 1,
        //     'mobile' => '09557650803',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        $this->call(UsersTableSeeder::class);
        $this->call(UserProfilesTableSeeder::class);
        $this->call(LocationRegionsTableSeeder::class);
        $this->call(LocationProvincesTableSeeder::class);
        $this->call(LocationMunicipalitiesTableSeeder::class);
        $this->call(LocationBarangaysTableSeeder::class);
        $this->call(ListDropdownsTableSeeder::class);
        $this->call(ListAgenciesTableSeeder::class);
        $this->call(ListBenefitsTableSeeder::class);
        $this->call(ListCoursesTableSeeder::class);
        $this->call(ListExpensesTableSeeder::class);
        $this->call(ListProgramsTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(SchoolCampusesTableSeeder::class);
    }
}
