<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(InstitutionsTableSeeder::class);
        $this->call(SportsTableSeeder::class);
        $this->call(InstitutionSportTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
