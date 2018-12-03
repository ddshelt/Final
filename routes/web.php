<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contents/home', function (){

  $albums = [
      'https://respect-mag.com/wp-content/uploads/2018/04/DAMN.kendrick.jpg',
      'http://www.xxlmag.com/files/2017/12/Nipsey-hussle-victory-lap.jpg',
      'https://imagesaws.juno.co.uk/full/CS679658-01A-BIG.jpg',
      'https://www.rap-up.com/app/uploads/2018/03/cardi-b-invasion-of-privacy.jpg',
      'https://i.redd.it/wmz0gkv8lcd11.jpg'
  ];

 $reactions =  \App\Reaction::get();

 $items = \App\Item::get();


  return view('contents.home', compact('albums', 'reactions', 'items'));


});

Route::get('/index', function (){
  return view('contents.index');
});

Route::get('/items/', function (){

  $albums = [
      'https://respect-mag.com/wp-content/uploads/2018/04/DAMN.kendrick.jpg',
      'http://www.xxlmag.com/files/2017/12/Nipsey-hussle-victory-lap.jpg',
      'https://imagesaws.juno.co.uk/full/CS679658-01A-BIG.jpg',
      'https://www.rap-up.com/app/uploads/2018/03/cardi-b-invasion-of-privacy.jpg',
      'https://i.redd.it/wmz0gkv8lcd11.jpg'
  ];

  $items = \App\Item::get();

  return view('items.show', compact('albums', 'items'));
});

Route::get('/contents/underground', function (){

  $mixtapes = [
    'https://ssl.ulximg.com/image/750x750/cover/1509129270_c62666b06b8f8057291e751e5f940025.jpg/6cc270b6f088fd825353beaf506bae2a/1509129270_e83fac207d3cf253536a8b77e31e35f2.jpg',
    'http://www.xxlmag.com/files/2017/09/young-nudy-nudy-land.jpg', 'https://s3.amazonaws.com/hiphopdx-production/2018/10/181030-blocboy-jb-dont-think-that-cover.jpg',
    'https://thefader-res.cloudinary.com/private_images/w_640,c_limit,f_auto,q_auto:eco/Screen_Shot_2018-05-04_at_11.20.37_AM_wy7oqh/key-kenny-beats-777-album-stream.jpg',
    'http://s3.amazonaws.com/hiphopdx-production/2018/09/180906-nba-youngboy-4loyalty-cover.jpg'
  ];

  return view('contents.underground', compact('mixtapes'));


});

Route::get('/contents/gossip', function (){
  return view('contents.gossip');
});

Route::get('/contents/fashion', function (){
  return view('contents.fashion');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/contents', 'ReactionController');

Route::resource('/items', 'ItemController')->middleware('auth');

Route::get('/items/{id}/islikedbyme', 'ItemController@isLikedByMe');

Route::post('/items/{id}/like', 'ItemController@like');
