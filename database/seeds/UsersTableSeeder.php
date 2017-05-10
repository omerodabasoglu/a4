<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = \App\User::firstOrCreate([
      'email' => 'omer@harvard.edu',
      'name' => 'Omer User',
      'password' => \Hash::make('omer123')
  ]);

  $user = \App\User::firstOrCreate([
      'email' => 'gary@harvard.edu',
      'name' => 'Gary User',
      'password' => \Hash::make('gary123')
  ]);
    }
}
