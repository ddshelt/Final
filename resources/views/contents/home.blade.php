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
                 {{ $item->likecount() }}
               </div>
              </form>

              <form class="" method="post" action="/items/{{$item->id}}/dislike">
                {{csrf_field()}}
               <input name="likereaction" id="likereaction" class="centerbuttons" type="hidden"></input>
               <div style="text-align:center;">
                 <button type="submit" class="btn btn-warning">
                    <span class="fas fa-thumbs-down"></span>
                 </button>
                 {{ $item->dislikecount() }}
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
      <div class="container card rumors">
        <h3 class="headerfont text-danger"> Trending Topics </h3>
        <div class="accordion" id="accordionExample">
          <div class="card bg-secondary">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link btn-danger" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Tekashi 69 Vs. DJ Akademiks
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show text-center" aria-labelledby="headingOne" data-parent="#accordionExample">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/6xSt2G6AWgU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <div class="card-body text-warning">


                  Tekashi 69 has been catching a lot of heat recently due to alot of recent legal allegations realating to him possibly being affiliated with local NY gang.
                Tekashi initially took the rap game by storm by constantly taking part in a new online way to gain a large following (clout)
                also known as "trolling". Even with the Hip Hop community totally against anything he stood for, he still managed to find his way
                into the top 10 of Billboards Top 100 ten times; with the first 10 tracks he had recorded with his new found fame.

                As Tekashi 69's fame grew, he built alot of unexpecting relationships with people you would least expect. As well as, becoming so infamous
                that he began to rival with figures in the industry that no one dared to ever challenge. A few examples being Cheif Keef, The Game, and YG.
                The hate artists had for Tekashi 69 was so great that at one point fans would worry about the safety of the Tekashi's life being that a whole
                coast could not stand the mere sight of him, he was not welcome to any part of Chicago, and at one point was even kidnapped in his own homestate.

                With all eyes being on Tekashi 69, he made it a point to force his image down the average consumers' throats. He started appearing on Instagram
                with all of his rivals ex-girlfriends which caused alot of online commotion, there were allegedly hits ordered by him, and he also would constantly
                broadcast his raunchy and disruptive POVs on the internet through  DJ Akademik's Twitch and Youtube platforms. Dj Akademiks is a well-known figure in hip hop as well.
                Known for his cringeworthy live streams, and always having the latest information on any artist's personal or legal issues.

                Fans noticed early on in the friendship between Tekashi 69 and DJ Akademiks that Tekashi and Akademiks could possibly be genuine friends, but ofcourse
                once Tekashi was arrested and all the smoke cleared it seemed almost as if DJ Akademiks had exploited his own friend for momentary recognition. Which
                might've landed Tekashi 69 in jail for an extremly long time.

                ......"TREYWAY" !


              </div>
            </div>
          </div>
          <div class="card bg-secondary">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link btn-danger collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Jada Pinkett-Smith "Red Table Talk"
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse text-center" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fredtabletalk%2Fvideos%2F343064719835818%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
              <div class="card-body text-warning">
                The Smiths are the only family that could make me watch a TV show on Facebook, a platform I’d otherwise like to avoid. They’re interesting, they’re good-looking, they’re funny — and, let’s be honest, I haven’t yet quit the website. In May, Facebook Watch, the social media platform’s burgeoning video on demand arm, introduced Red Table Talk a confessional talk show starring Willow Smith, Jada Pinkett Smith, and Jada’s mother Adrienne Banfield-Jones, each weekly episode focusing on various aspects of life like parenting, loss, and body image. But beyond the inevitable curiosity surrounding a show starring one of America’s most famous families, Red Table Talk is a sentimental, sweet series that offers open familial conversations without falling into the contrived overexposure of other celebrity family reality shows.
                Ever since Oprah taught TV producers it’s ok — profitable, even — to have people be vulnerable on air if they’re trying to be healed, U.S. TV viewers have been pelted with every manner of confessional reality TV. RED TABLE TALK is a rare show about Hollywood families that does not focus on dysfunction. The conversations between three generations of Smiths whom all offer a model of progressive family dialogue.
              </div>
            </div>
          </div>
          <div class="card bg-secondary">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link btn-danger collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Cardi B and Offset joint album?
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse text-center" aria-labelledby="headingThree" data-parent="#accordionExample">
            <img class="card-img" src="/CardiOffsetImage.jpg" alt="Card image cap" style="height:315px; width:560px;">
              <div class="card-body text-warning">
                While chatting with The New York Times about his upcoming debut solo album, Offset teased a possible project with his wife-y. "I have no distractions. And me and her? We haven’t even dropped an album yet.
                That’s a whole other realm," he admitted before gushing about how his relationship with the "Money" rapper has made him a better rapper.
                Settling down was “the best thing that’s happened to me personally, which helps me make the music, which helps my career," Offset said.
                "I have a wife and a child — that changed my whole everything...I was a young hothead, but now I understand the value of life.
                Earlier this week, the married couple teamed up for a rap battle on the app TikTok. That wasn't the first time the two have worked together.
                Cardi and Offset also rapped together on their mega-hit "MotorSport" last year, and Offset was featured on Cardi's song "Lick."
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container text-danger mt-4">
        <h3 class="text-center">Contact</h3>
        <p class="text-center"><em>We love our fans.. but juicy headlines more ☺ </em></p>
        <div class="row test">
          <div class="col-md-4">
            <p>Fan? Got any leads?.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span>Kentucky, US</p>
            <p><span class="glyphicon glyphicon-phone"></span>Phone: +01 2705055855</p>
            <p><span class="glyphicon glyphicon-envelope"></span>Email: WTCnews@me.com</p>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
              </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
            <div class="row">
              <div class="col-md-12 form-group">
                <button class="btn pull-right btn-danger" type="submit">Send</button>
              </div>
            </div>
          </div>
        </div>
      </div>



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
            The trek, preceded by a run of U.K. and European dates in January, kicks off February 12th in Vancouver, British Columbia
            and concludes March 28th in San Antonio, Texas. Tickets for the R&B singer’s “Debut Tour” go on sale October 26th.
          </p>

          <div class="column">
            <div class="">
              <div class="thumbnail">
                <img src="/SeattleImage.jpg" alt="Paris">
                  <div class="tour-text text-warning mt-3">
                    <p><strong>Seattle</strong></p>
                    <p>Fri. 22 February 2019</p>
                    <button class="btn btn-warning">Buy Tickets</button>
                  </div>
              </div>
            </div>
            <div class="">
              <div class="thumbnail">
                <img src="/SacramentoImage.jpg" alt="New York">
                  <div class= "text-warning mt-3">
                    <p><strong>Sacramento</strong></p>
                    <p>Thurs. 28 February 2019</p>
                    <button class="btn btn-warning">Buy Tickets</button>
                  </div>
              </div>
            </div>
            <div class="">
              <div class="thumbnail">
                <img src="/TorontoImage.jpg" alt="San Francisco">
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
