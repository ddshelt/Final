<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
          'name' => 'Derrick',
          'email' => 'ddshelton0001@gmail.com',
          'password' => bcrypt('1234'),
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
          'name' => 'Lonnie',
          'email' => 'Ldog1@gmail.com',
          'password' => bcrypt('4321'),
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);

        $user = new \App\User;
          $user->name = 'Angelina';
          $user->email = 'Ablackwell1@gmail.com';
          $user->password = bcrypt('Amirahsmom17');
          $user->save();

        $user = new \App\User;
          $user->name = 'Dejah';
          $user->email = 'dejahs@gmail.com';
          $user->password = bcrypt('1234');
          $user->save();
        
    }
}
