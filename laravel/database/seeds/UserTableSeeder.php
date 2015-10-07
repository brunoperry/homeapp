<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

  public function run() {

    DB::table('users')->delete();

    DB::table('users')->insert([

	'username' => 'brunperry',
        'password' => Hash::make('surfada') 
    ]);

  }
}
