<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('items')->insert([
          'title' => 'DAMN',
          'subtitle' => 'by Kendrick Lamar',
          'description' => 'the fourth studio album by American rapper Kendrick Lamar. It was released on April 14, 2017, by Aftermath Entertainment, Interscope Records and Top Dawg Entertainment. The album also won the 2018 Pulitzer Prize for Music, making it the first non-jazz or classical work to earn the accolade.',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);

        DB::table('items')->insert([
          'title' => 'Victory Lap',
          'subtitle' => 'by Nipsey Hussle',
          'description' => 'his first album on a multi-project deal with Atlantic Records, is more than six years in the making. It is formally his “debut album” but functionally his big cash in. Bridging several generations of West Coast rap, Victory Lap uses his cache of war stories to power the most gripping entry in his catalog, recouping an investment.',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);

        DB::table('items')->insert([
          'title' => 'Culture II',
          'subtitle' => 'by Migos',
          'description' => 'Where Culture was an event, its follow-up feels more like an occurrence, the quality of its songs handicapped by an album that plays like a long and formless grab bag.',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()

        ]);

        DB::table('items')->insert([
          'title' => 'Invasion of Privacy',
          'subtitle' => 'by Cardi B',
          'description' => 'The album is showy and upfront, at once brazen and vulnerable. On her assured and outspoken debut, Cardi shuffles from pop-rap to designer trap to sing-song ballads and strutting promenades.',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()

        ]);

        DB::table('items')->insert([
          'title' => 'Astro World',
          'subtitle' => 'by Travis Scott',
          'description' => 'Travis Scott’s third album is inarguably his strongest to date. His skill as a curator helps sculpt a sticky, humid, psychedelic world with dazzling production and odd pleasures at every turn.',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()

        ]);
    }
}
