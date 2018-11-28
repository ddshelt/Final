<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="/css/app.css" rel="stylesheet">
  </head>
  <body>
    <h1 class= "header"> We Talk Culture </h1>
    This is where you will come to find the Underground!!
    <div class="container-fluid around">
      <div class="row justify-content-center">
            @foreach($items as $item)

            <div class= "card-deck">
              <div class="col card ml-4 mr-4">
                <p><img class="mx-auto d-block" src="{{ $albums[$loop->index] }}" alt="$items" style="width:175px; height:175px;"></p>

                <div class="comments text-center">


                   @foreach($item->comments as $reaction)
                       <li>{{ $reaction->comment }}</li>
                   @endforeach


                </div>

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


        <form class="" method="post" action="/contents">
          {{csrf_field()}}
          <div class= "form-group text-center">
            <label for ="itemcomment"> What ya got to say</label>
            <input name="itemcomment" id="itemcomment" placeholder="How do you feel about the Top 5?" class="center text-center" type="text" style="width:500px; height:100px;"> </input>
          </div>
          <!-- <div class="text-center">
            <button type= "submit" class="btn btn-success"> Post it!</button>

            <select name="itemlist">
              <option value="Damn">DAMN</option>
              <option value="Victory Lap">Victory Lap</option>
              <option value="Culture II">Culture II</option>
              <option value="Invasion of Privacy">Invasion of Privacy</option>
              <option value="Astro World">AstroWorld</option>
            </select>
          </div> -->
        </form>

        <p><a href="/contents/create"> Tell us how you feel! </a></p>


      <div class="height"></div>



      <div class="row justify-content-center ">
        <div class="card ml-5 mt-5 mb-5" style="width: 18rem;">
          <img class="card-img-top" src="https://i.imgflip.com/uuhms.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Gossip</h5>
            <p class="card-text">Gossip Gossip Gossip Gossip Gossip Gossip</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div>
          <div class="card ml-5 mt-5" style="width: 18rem;">
            <img class="card-img-top" src="https://www.dhresource.com/0x0s/f2-albu-g5-M01-89-27-rBVaI1h2sjSAYlHIAAFDwMafTcQ850.jpg/off-white-hoodies-hommes-femmes-1-1-haute.jpg" alt="Card image cap" style="height:240px;">
            <div class="card-body">
              <h5 class="card-title">Trends</h5>
              <p class="card-text">Trends Trends Trends Trends Trends</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div>
          <div class="card ml-5 mt-5" style="width: 18rem;">
            <img class="card-img-top" src="https://www.dhresource.com/0x0s/f2-albu-g5-M01-89-27-rBVaI1h2sjSAYlHIAAFDwMafTcQ850.jpg/off-white-hoodies-hommes-femmes-1-1-haute.jpg" alt="Card image cap" style="height:240px;">
            <div class="card-body">
              <h5 class="card-title">Trends</h5>
              <p class="card-text">Trends Trends Trends Trends Trends</p>
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
