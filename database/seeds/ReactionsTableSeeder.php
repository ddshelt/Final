<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $derrick = \App\User::where('name', 'Derrick')->first();
        $lonnie = \App\User::where('name', 'Lonnie')->first();
        $angelina = \App\User::where('name', 'Angelina')->first();
        $dejah = \App\User::where('name', 'Dejah')->first();

        $item = \App\Item::where('subtitle', 'by Kendrick Lamar')->first();
        $itemTwo = \App\Item::where('subtitle', 'by Cardi B')->first();
        $itemThree = \App\Item::where('subtitle', 'by Migos')->first();
        $itemFour = \App\Item::where('subtitle', 'by Nipsey Hussle')->first();
        $itemFive = \App\Item::where('subtitle', 'by Travis Scott')->first();


        $users = [$derrick, $lonnie, $dejah, $angelina];

      foreach ($users as $user)
        DB::table('reactions')->insert([
          'reaction' => true,
          'item_id' => $item->id,
          'user_id' => $user->id,
          'comment' => 'I dk whats going on yet, but I like it',
          'rating' => 5,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()

        ]);

        DB::table('reactions')->insert([
          'reaction' => false,
          'item_id' => $itemTwo->id,
          'user_id' => $angelina->id,
          'comment' => 'This sucks',
          'rating' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()

        ]);

        DB::table('reactions')->insert([
          'reaction' => false,
          'item_id' => $itemThree->id,
          'user_id' => $dejah->id,
          'comment' => 'I dont even listen to this type of music',
          'rating' => 3,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()

        ]);

        DB::table('reactions')->insert([
          'reaction' => false,
          'item_id' => $itemFour->id,
          'user_id' => $derrick->id,
          'comment' => 'She does not write her own music',
          'rating' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()

        ]);

        DB::table('reactions')->insert([
          'reaction' => false,
          'item_id' => $itemFive->id,
          'user_id' => $lonnie->id,
          'comment' => 'I have never heard of him, but my GF likes him',
          'rating' => 4,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()

        ]);
    }
}
