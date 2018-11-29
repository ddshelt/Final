@extends('layouts.app')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="/css/app.css" rel="stylesheet">
  </head>
  <body>
  <div class="hero-image2">
    <div class="hero-text">
      <h1 class= "header"> The Underground </h1>
    </div>
  </div>
  <div class="container-fluid around">
    <div class="row justify-content-center">
          @foreach($mixtapes as $mixtape)
          <div class= "card-deck">
            <div class="col card ml-4 mr-4">
              <p><img class="mx-auto d-block" src="{{ $mixtape }}" alt="$mixtapes" style="width:200px; height:200px;"></p>
            </div>
          </div>
          @endforeach
    <!-- </div>
      <div class="card ml-5 mt-5" style="width: 18rem;">
        <img class="card-img-top" src="https://i.imgflip.com/uuhms.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Gossip</h5>
          <p class="card-text">Gossip Gossip Gossip Gossip Gossip Gossip</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div> -->
      </div>
    <div class="height"></div>



    <div class="row justify-content-center ">
      <div class="card ml-5 mt-5" style="width: 18rem;">
        <img class="card-img-top" src="https://i.imgflip.com/uuhms.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Gossip</h5>
          <p class="card-text">Gossip Gossip Gossip Gossip Gossip Gossip</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div>
        <div class="card ml-5 mt-5" style="width: 18rem;">
          <img class="card-img-top" src="https://i.imgflip.com/uuhms.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Gossip</h5>
            <p class="card-text">Gossip Gossip Gossip Gossip Gossip Gossip</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- <div class="card ml-5 mt-5" style="width: 18rem;">
      <img class="card-img-top" src=".../100px180/" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Gossip</h5>
        <p class="card-text">Gossip Gossip Gossip Gossip Gossip Gossip</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div> -->
  </body>
</html>
