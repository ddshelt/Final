@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-secondary text-warning">{{$item->title}}
                  <p><img class="mx-auto d-block" src="{{ $item->url }}" alt="$items" style="width:175px; height:175px;"></p>
                  <p class="text-center text-warning">{{$item->description}}</p>
                </div>
                <div class="card-body bg-secondary">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                   <form class="" method="post" action="/items">
                      {{csrf_field()}}
                      <div class="form-group text-center text-success">
                        <label for="itemcomment">Create Comment</label>
                        <input type="text" id="itemcomment" name="itemcomment" placeholder="What do you want to comment?" class="form-control input-lg text-center">
                        <!-- <input type="text" id="postpost" name="postpost" placeholder="Express how you feel today?" class="form-control input-lg text-center mt-3"> -->
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-success">Post it!</button>

                        <select name="itemlist">
                          <option value="1">DAMN</option>
                          <option value="2">Victory Lap</option>
                          <option value="3">Culture II</option>
                          <option value="4">Invasion of Privacy</option>
                          <option value="5">AstroWorld</option>
                        </select>
                      </div>
                  </form>


                </div>
                <div class="comments text-center">


                   @foreach($item->comments as $reaction)
                   <div class="card-body">
                     <h5 class="card-title"></h5>
                     <h6 class="card-subtitle mb-2 text-muted">{{$reaction->user->name}}</h6>
                     <p class="card-text">{{ $reaction->comment }}</p>
                    </div>
                   @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
