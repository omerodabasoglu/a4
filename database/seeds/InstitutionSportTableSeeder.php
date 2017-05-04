<?php

use Illuminate\Database\Seeder;
use App\Institution;
use App\Sport;

class InstitutionSportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $institutions =[
            'Stanford University' => ['Baseball', 'Basketball','Field Hockey', 'Football'],
            'Harvard University' => ['Bowling', 'Boxing','classic','Golf', 'Gymnastics'],
            'Princeton University' => ['Cross Country','Ice Hockey','Lacrosse', 'Rowing'],
            'UC San Diego' => ['Soccer', 'Swimming', 'Tennis', 'Volleyball']
        ];

        foreach($institutions as $college => $sports) {

            $institution = Institution::where('college','like',$college)->first();

            foreach($sports as $category) {
                $sport = Sport::where('categories','LIKE',$category)->first();

                $institution->sports()->save($sport);
            }
        }
    }
}
