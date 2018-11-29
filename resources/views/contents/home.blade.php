<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="/css/app.css" rel="stylesheet">
  </head>
  <body>
    <!-- <nav class="navbar navbar-default navbar-right text-center">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Logo</a>
          <a href="#">HOME</a>
          <a href="#band">BAND</a>
          <a href="#tour">TOUR</a>
          <a href="#contact">CONTACT</a>
        </div>
      </div>
    </nav> -->

    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <div class="nav-item">
                  <a class="nav-link" href="/contents/home">Home</a>
                </div>

                <div class="nav-item">
                  <a class="nav-link" href="/contents/underground">Underground</a>
                </div>

                <div class="nav-item">
                  <a class="nav-link" href="/contents/gossip">Gossip</a>
                </div>

                <div class="nav-item">
                  <a class="nav-link" href="/contents/fashion">Fashion</a>
                </div>


                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


    <div class="hero-image">
      <div class="hero-text">
        <h1 class= "header backgroundhead"> We Talk Culture </h1>
      </div>
    </div>
    <div class="container-fluid around">
      <div class="row justify-content-center">
            @foreach($items as $item)

            <div class= "card-deck">
              <div class="col card ml-4 mr-4 bg-secondary">
                <p><img class="mx-auto d-block" src="{{ $albums[$loop->index] }}" alt="$items" style="width:175px; height:175px;"></p>

                <p class="text-center"><a href="/items/{{ $item->id }}"> Comment </a></p>
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

    <div class="height"></div>
    <div class="height"></div>

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
