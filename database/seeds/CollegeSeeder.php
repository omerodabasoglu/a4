<?php

use Illuminate\Database\Seeder;
use App\College;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colleges = [
            ['Stanford University', 'https://s-media-cache-ak0.pinimg.com/736x/b6/b2/98/b6b2989e5c5d649dba3a008653596e43.jpg'],
            ['CalTech', 'https://d9tyu2epg3boq.cloudfront.net/institutions/caltech.png'],
            ['UC Berkeley', 'http://ivyprep.com.sg/wp-content/uploads/2015/07/Berkeley.jpg'],
            ['MIT', 'http://savary.scripts.mit.edu/images/logo-mit.png'],
            ['Harvard University', 'https://upload.wikimedia.org/wikipedia/en/thumb/3/3a/Harvard_Wreath_Logo_1.svg/1051px-Harvard_Wreath_Logo_1.svg.png'],
            ['Princeton University', 'https://www.princeton.edu/~oktour/virtualtour/korean/Images/Small/Shield.gif'],
            ['University of Pennsylvania', 'http://ceet.upenn.edu/wp-content/uploads/2013/09/upenn-300x268.gif'],
            ['Columbia University', 'https://twogaybullies.files.wordpress.com/2011/06/columbia.jpg']
        ];
        $timestamp = Carbon\Carbon::now()->subDays(count($colleges));

        foreach($colleges as $college) {
            $timestampForThisCollege = $timestamp->addDay()->toDateTimeString();
            College::insert([
                  'created_at' => $timestampForThisCollege,
                  'updated_at' => $timestampForThisCollege,
                  'college_name' => $college[0],
                  'logo_url' => $college[1],
            ]);
        }

    }
}
