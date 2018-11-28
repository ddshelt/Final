# Final

- Heroku Deployment
  + click Resources, once APP_KEY is added
  + search Postgres, add
  + DATABASE_URL should now appear
  + copy link, and select Import from URL in Clipboard
  + run: heroku run bash
    - php artisan migrate
    - answer question

- Building tables
  + run migrations
    - php artisan make:migration create_<name>_ table
    - php artisan make:migration create_items_table --create=items (--create= allows you to name table in terminal)
  + edit table values

- Create Seeds

- User Seeds
  + DB::table('users')->insert([
    'name' => 'Derrick',
    'email' => 'ddshelton0001@gmail.com',
    'password' => bcrypt('1234'),
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now()      OR

  + $user = new \App\User;
    $user->name = 'Derrick';
    $user->email = 'ddshelton0001@gmail.com';
    $user->password = bcrypt('Amirahsdad17');
    $user->save();

- Item Seeds
  + DB::table('items')->insert([
    'title' => 'Astro World',
    'subtitle' => 'by Travis Scott',
    'description' => 'Travis Scott’s third album is inarguably his strongest to date. His skill as a curator helps sculpt a sticky, humid, psychedelic world with dazzling production and odd pleasures at every turn.',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now()

  ]);

- Reaction Seeds
  + DB::table('reactions')->insert([
    'reaction' => false,
    'item_id' => $itemTwo->id,
    'user_id' => $angelina->id,
    'comment' => 'This sucks',
    'rating' => 1,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now()

  ]);

- Database should update once php artisan migrate:refresh --seed is ran
- If fatal: CRLF would be replaced by LF in public/js/app.js. appears:
  + delete public/js/app.js
  + run: npm run dev
