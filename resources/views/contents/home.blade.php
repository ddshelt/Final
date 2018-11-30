@extends('layouts.app')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



@section('content')


    <div class="hero-image">
      <div class="hero-text">
        <h1 class= "header backgroundhead text-warning"> We Talk Culture </h1>
      </div>
    </div>
    <div class="container-fluid around">
      <div class="row justify-content-center">
            @foreach($items as $item)

            <div class= "card-deck">
              <div class="col card ml-4 mr-4 bg-secondary">
                <p><img class="mx-auto d-block" src="{{ $albums[$loop->index] }}" alt="$items" style="width:175px; height:175px;"></p>

                <p class="text-center"><a href="/items/{{ $item->id }}"> Comment </a></p>

                <form class="" method="post" action="/items/{{$item->id}}/like">
                  {{csrf_field()}}
                 <input name="likereaction" id="likereaction" class="center" type="hidden"></input>
                   <button type="submit" class="btn btn-warning">
                      <span class="fas fa-thumbs-up"></span>
                   </button>
                </form>

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


        <form class="" method="post" action="/items">
          {{csrf_field()}}
          <div class= "form-group text-center">
            <label for ="itemcomment"> What ya got to say</label>
            <input name="itemcomment" id="itemcomment" placeholder="How do you feel about the Top 5?" class="center text-center" type="text" style="width:500px; height:100px;"> </input>
          </div>
          <div class="text-center">
            <button type= "submit" class="btn btn-success"> Post it!</button>

            <select name="itemlist">
              <option value="1">DAMN</option>
              <option value="2">Victory Lap</option>
              <option value="3">Culture II</option>
              <option value="4">Invasion of Privacy</option>
              <option value="5">AstroWorld</option>
            </select>

          </div>
        </form>




      <div class="height"></div>



      <div class="row justify-content-center ">
        <div class="card ml-5 mt-5 mb-5" style="width: 18rem;">
          <img class="card-img-top" src="https://i.imgflip.com/uuhms.jpg" alt="Card image cap">
          <div class="card-body bg-secondary">
            <h5 class="card-title"></h5>
            <p class="card-text">Gossip Gossip Gossip Gossip Gossip Gossip</p>
            <a href="/contents/gossip" class="btn btn-primary">Gossip</a>
          </div>
        </div>
        <div>
          <div class="card ml-5 mt-5" style="width: 18rem;">
            <img class="card-img-top" src="https://www.dhresource.com/0x0s/f2-albu-g5-M01-89-27-rBVaI1h2sjSAYlHIAAFDwMafTcQ850.jpg/off-white-hoodies-hommes-femmes-1-1-haute.jpg" alt="Card image cap" style="height:240px;">
            <div class="card-body bg-secondary">
              <h5 class="card-title"></h5>
              <p class="card-text">Trends Trends Trends Trends Trends</p>
              <a href="/contents/fashion" class="btn btn-primary">Trends</a>
            </div>
          </div>
        </div>
        <div>
          <div class="card ml-5 mt-5" style="width: 18rem;">
            <img class="card-img-top" src="https://www.dhresource.com/0x0s/f2-albu-g5-M01-89-27-rBVaI1h2sjSAYlHIAAFDwMafTcQ850.jpg/off-white-hoodies-hommes-femmes-1-1-haute.jpg" alt="Card image cap" style="height:240px;">
            <div class="card-body bg-secondary">
              <h5 class="card-title"></h5>
              <p class="card-text">ughhhhhhhhhhhhhhhhh</p>
              <a href="/contents/underground" class="btn btn-primary">The Underground</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="height"></div>
    <div class="height"></div> -->
    <div class="height"></div>
    <div class="height"></div>

    <!-- <div class="container row text-center">
      <div class="tour-image">
        <div class="col-lg-12">
          <div class="thumbnail">
            <img src="/MeekMillImage.jpg" alt="Paris">
              <div class="text-warning text-center">
                <h2><strong>Meek Mill Announces "The Motivation" Tour</strong></h2>
                <p>Fri. 27 November 2019</p>
                <button class="btn">Buy Tickets</button>
              </div>
          </div>
        </div>
      </div>
    </div> -->

    <p class="text-warning text-center tour-text">
      Meek Mill's highly anticipated first post-prison studio album, CHAMPIONSHIPS is due out this Friday. </br>
      The rapper's been teasing the project for a few months, </br> reassuring fans that the album would arrive before the end of the year. </br>
      As we approach the project's release date, Meek Mill has revealed tour dates for 2019.
    </p>


      <div class="row text-center mt-5 tour-dates">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="/ParisImage.jpg" alt="Paris">
              <div class="text-warning">
                <p><strong>Paris</strong></p>
                <p>Fri. 27 November 2019</p>
                <button class="btn">Buy Tickets</button>
              </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="/NewYorkImage.jpg" alt="New York">
              <div class= "text-warning">
                <p><strong>New York</strong></p>
                <p>Sat. 28 November 2019</p>
                <button class="btn">Buy Tickets</button>
              </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="/SFImage.jpg" alt="San Francisco">
              <div class="text-warning">
                <p><strong>San Francisco</strong></p>
                <p>Sun. 29 November 2015</p>
                <button class="btn">Buy Tickets</button>
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
@endsection
