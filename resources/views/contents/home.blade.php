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
                <p><img class="mx-auto d-block" src="{{ $albums[$loop->index] }}" alt="$items" style="width:200px; height:200px;"></p>
                <p class="text-center text-warning">{{$item->title}}</p>
                <p class="text-center text-warning">{{$item->subtitle}}</p>
                <p class="text-center"><a href="/items/{{ $item->id }}"> Comment </a></p>

                <form class="" method="post" action="/items/{{$item->id}}/like">
                  {{csrf_field()}}
                 <input name="likereaction" id="likereaction" class="centerbuttons" type="hidden"></input>
                 <div style="text-align:center;">
                   <button type="submit" class="btn btn-warning">
                      <span class="fas fa-thumbs-up"></span>
                   </button>
                 </div>
                </form>

                <form class="" method="post" action="/items/{{$item->id}}/like">
                  {{csrf_field()}}
                 <input name="likereaction" id="likereaction" class="centerbuttons" type="hidden"></input>
                 <div style="text-align:center;">
                   <button type="submit" class="btn btn-warning">
                      <span class="fas fa-thumbs-down"></span>
                   </button>
                 </div>
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
        <div>
          <div class="card ml-5 mt-5" style="width: 18rem;">
            <img class="card-img-top" src="/FashionImage.jpg" alt="Card image cap" style="height:240px;">
            <div class="card-body bg-secondary">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
              <div style="text-align:center;">
                <a href="/contents/fashion" class="btn btn-primary">Trends</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card ml-5 mt-5 mb-5" style="width: 18rem;">
          <img class="card-img-top" src="/GossipImage.jpg" alt="Card image cap">
          <div class="card-body bg-secondary">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
            <div style="text-align:center;">
              <a href="/contents/gossip" class="btn btn-primary">Gossip</a>
            </div>
          </div>
        </div>
        <div>
          <div class="card ml-5 mt-5" style="width: 18rem;">
            <img class="card-img-top" src="/UndergroundImage.jpg" alt="Card image cap" style="height:240px;">
            <div class="card-body bg-secondary">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
              <div style="text-align:center;">
                <a href="/contents/underground" class="btn btn-primary">The Underground</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="height"></div>
      <div class="DJvideo">
        <iframe width="560" height="300" src="https://www.worldstarhiphop.com/embed/130727" frameborder="0" allowfullscreen></iframe>
        <p class="text-danger text-center text-danger mt-2">
          Is DJ Akademiks the reason why Tekashi 69 is in jail?
        </p>
      </div>

      <div class="Emvideo">
        <iframe width="560" height="315" src="https://www.worldstarhiphop.com/embed/130802" frameborder="0" allowfullscreen></iframe>
        <p class="text-danger text-center mt-2"> Freestyle x Eminem </p>
      </div>
    <div class="height"></div>

    <div class="JBvideo">
      <iframe width="560" height="300" src="https://www.youtube.com/embed/s_eilRAWhO0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <p class="text-danger text-center mt-2"> Justin Beiber in the "hood" !?!</p>
    </div>


    <div class="TScottvideo">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/PJWHAiDARMQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <p class="text-danger text-center mt-2"> Yosemite x Travis Scott (2018)</p>
    </div>

    <div class="height"></div>
    <div class="height"></div>

    <div class="container2 col-md-4 row">
      <div class="text-center">
        <img class="MeekMillImage"src="/MeekMillImage3.jpg" alt="Paris">
        <div class="text-warning mt-3">

          <h2><strong>Meek Mill Announces "The Motivation" Tour</strong></h2>
          <p>Fri. 27 November 2019</p>
          <button class="btn btn-warning">Buy Tickets</button>

          <p class="text-warning tour-text">
            Meek Mill's highly anticipated first post-prison studio album, CHAMPIONSHIPS is due out this Friday. </br>
            The rapper's been teasing the project for a few months, </br> reassuring fans that the album would arrive before the end of the year. </br>
            As we approach the project's release date, Meek Mill has revealed tour dates for 2019.
          </p>

          <div class="column">
            <div class="">
              <div class="thumbnail">
                <img src="/ParisImage.jpg" alt="Paris">
                  <div class="tour-text text-warning mt-3">
                    <p><strong>Paris</strong></p>
                    <p>Fri. 27 January 2019</p>
                    <button class="btn btn-warning">Buy Tickets</button>
                  </div>
              </div>
            </div>
            <div class="">
              <div class="thumbnail">
                <img src="/NewYorkImage.jpg" alt="New York">
                  <div class= "text-warning mt-3">
                    <p><strong>New York</strong></p>
                    <p>Sat. 28 January 2019</p>
                    <button class="btn btn-warning">Buy Tickets</button>
                  </div>
              </div>
            </div>
            <div class="">
              <div class="thumbnail">
                <img src="/SFImage.jpg" alt="San Francisco">
                  <div class="text-warning mt-3">
                    <p><strong>San Francisco</strong></p>
                    <p>Sun. 29 January 2019</p>
                    <button class="btn btn-warning">Buy Tickets</button>
                  </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container3 col-md-4 row">
      <div class="text-center">
        <img class="MeekMillImage"src="/EllaMai.jpg" alt="Paris">
        <div class="text-warning mt-2">

          <h2><strong>Ella Mai Announces "The Debut" Tour</strong></h2>
          <p>Fri. 27 November 2019</p>
          <button class="btn btn-warning">Buy Tickets</button>

          <p class="text-warning tour-text">
            Ella Mai announced a headlining North American tour in support of her recently issued, self-titled debut LP.
            The trek, preceded by a run of U.K. and European dates in January, kicks off February 12th in Vancouver, British Columbia and concludes March 28th in San Antonio, Texas. Tickets for the R&B singer’s “Debut Tour” go on sale October 26th.
          </p>

          <div class="column">
            <div class="">
              <div class="thumbnail">
                <img src="/ParisImage.jpg" alt="Paris">
                  <div class="tour-text text-warning mt-3">
                    <p><strong>Seattle</strong></p>
                    <p>Fri. 22 February 2019</p>
                    <button class="btn btn-warning">Buy Tickets</button>
                  </div>
              </div>
            </div>
            <div class="">
              <div class="thumbnail">
                <img src="/NewYorkImage.jpg" alt="New York">
                  <div class= "text-warning mt-3">
                    <p><strong>Sacramento</strong></p>
                    <p>Thurs. 28 February 2019</p>
                    <button class="btn btn-warning">Buy Tickets</button>
                  </div>
              </div>
            </div>
            <div class="">
              <div class="thumbnail">
                <img src="/SFImage.jpg" alt="San Francisco">
                  <div class="text-warning mt-3">
                    <p><strong>Toronto</strong></p>
                    <p>Wed. 6 March 2019</p>
                    <button class="btn btn-warning">Buy Tickets</button>
                  </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>




@endsection
