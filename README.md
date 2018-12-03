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
  + run: npm run dev or prod

- Added Hero Image to the top of website
  + div tags, and css

- Corrected routing
  - created view for comments to be created on individual items
  - in web.php adjusted route to show id of current item being commented on
    + Route::resource('/contents/{id}', 'ReactionController');

- Established relationship between comments and items
  + In Item Model:
    - public function comments() {

      return $this->hasMany('App\Reaction');

    }

- Established relationship between usernames and comments
  + In the Reaction Model:
    - public function user(){

      return $this->belongsTo('App\User');

    }

- Connected comment link to Item controller
  + In between @foreach and @endforeach
    - <p class="text-center"><a href="/items/{{ $item->id }}"> Comment </a></p>

- localhost:8000/items/(id#):
  + populates a create page using Item Controller
  + are able to add comments to database

- Add Navbar
  + extended layouts.app to all pages

- Adding Like buttons
  + edited reaction migrations
  + set the relation between User model and Item model
  + created routes for the likes (reactions)
  + Added logic to the Item Controller
  + pulled in thumbs up image using Font Awesome
  + added the necessary code
  + add like button logic

- Adding CSS styling
