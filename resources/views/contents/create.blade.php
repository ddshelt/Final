@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Personal thoughts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



 <form class="" method="post" action="/contents">
    {{csrf_field()}}
    <div class="form-group text-center">
      <label for="itemcomment">Create Comment</label>
      <input type="text" id="itemcomment" name="itemcomment" placeholder="What do you want to comment?" class="form-control input-lg text-center">
      <!-- <input type="text" id="postpost" name="postpost" placeholder="Express how you feel today?" class="form-control input-lg text-center mt-3"> -->
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-success">Post it!</button>

      <select name="itemlist">
        <option value="1">DAMN</option>
        <option value="2">Invasion of Privacy</option>
        <option value="3">Culture II</option>
        <option value="4">Victory Lap</option>
        <option value="5">AstroWorld</option>
      </select>
    </div>
</form>

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
