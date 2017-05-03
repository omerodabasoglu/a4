<?php

use Illuminate\Database\Seeder;
use App\Institution;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $institutions = [
          ['Stanford University', 'Division I', 'Private', 'https://s-media-cache-ak0.pinimg.com/736x/b6/b2/98/b6b2989e5c5d649dba3a008653596e43.jpg'],
          ['CalTech', 'Division III', 'Private', 'https://d9tyu2epg3boq.cloudfront.net/institutions/caltech.png'],
          ['UC Berkeley', 'Division I', 'Public', 'http://ivyprep.com.sg/wp-content/uploads/2015/07/Berkeley.jpg'],
          ['MIT', 'Division III', 'Private', 'http://savary.scripts.mit.edu/images/logo-mit.png'],
          ['Harvard University', 'Division I', 'Private', 'https://upload.wikimedia.org/wikipedia/en/thumb/3/3a/Harvard_Wreath_Logo_1.svg/1051px-Harvard_Wreath_Logo_1.svg.png'],
          ['Princeton University', 'Division II', 'Private', 'https://www.princeton.edu/~oktour/virtualtour/korean/Images/Small/Shield.gif'],
          ['University of Pennsylvania', 'Division II', 'Private', 'http://ceet.upenn.edu/wp-content/uploads/2013/09/upenn-300x268.gif'],
          ['UC San Diego', 'Division II',  'Public', 'http://ucpa.ucsd.edu/img/brand/ucsd-triton-logo.svg']
        ];

        $timestamp = Carbon\Carbon::now()->subDays(count($institutions));

        foreach($institutions as $institution) {
            $timestampForThisInstitution = $timestamp->addDay()->toDateTimeString();
            Institution::insert([
                  'created_at' => $timestampForThisInstitution,
                  'updated_at' => $timestampForThisInstitution,
                  'college' => $institution[0],
                  'level' => $institution[1],
                  'type' => $institution[2],
                  'logo' => $institution[3],
            ]);
        }
    }
}
