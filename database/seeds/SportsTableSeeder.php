<?php

use Illuminate\Database\Seeder;
use App\Sport;

class SportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sports = [
            'Baseball', 'Basketball', 'Bowling', 'Boxing', 'Cross Country',
            'Field Hockey', 'Football', 'Golf', 'Gymnastics', 'Ice Hockey',
            'Lacrosse', 'Rowing', 'Soccer', 'Swimming', 'Tennis', 'Volleyball'];

        foreach($sports as $sport) {
            $sport = new Sport();
            $sport->categories = $sport;
            $sport->save();
        }
    }
}
