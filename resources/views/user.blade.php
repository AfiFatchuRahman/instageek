@extends('layouts.app')

@section('content')

    <main role="main">
      <div class="container container-margin">
        <div class="row"> 
          <div class="col-md-2 offset-2">
            <div class="profile-picture">
              <img class="rounded-circle" src="{{ asset('images/kamil.jpg') }}" alt="Generic placeholder image" width="120px" height="120px">  
            </div> 
          </div>
          <div class="col-md-5 offset-1">            
            @if($user->id == Auth::user()->id)
            <div class="d-inline-flex profile-name pb-2 pt-4 mt-2">
                <h2>{{ $user->username}}</h2>
              <div class="d-inline-flex px-3">
                <button type="submit" class="btn btn-outline-success">follow</button>
              </div>
            </div>
            @else
                @if($user->following->contains($user))
                <div class="d-inline-flex profile-name pb-2 pt-4 mt-2">
                    <h2>{{ $user->username}}</h2>
                  <div class="d-inline-flex px-3">
                    <form action="{{ route('unfollow') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="{{ $user_id }}">
                        <button type="submit" class="btn btn-outline-success" onclick="showResults();">unfollow</button>
                    </form>
                  </div>
                </div>
                @else
                <div class="d-inline-flex profile-name pb-2 pt-4 mt-2">
                    <h2>{{ $user->username}}</h2>
                  <div class="d-inline-flex px-3">
                    <form action="{{ route('follow') }}" method="POST" enctype="multipart/form-data" >
                        <input type="hidden" name="user_id" value="{{ $user_id }}">
                        <button type="submit" class="btn btn-outline-success" onclick="showResults();">follow</button>
                    </form>
                  </div>
                </div>
                @endif
            @endif
            <div class="profile-info pb-2"> 
              <div class="d-inline-flex"> <h6>{{ $user->post_count }} Post</h6></div>
              <div class="d-inline-flex px-3"> <a href="" class="post-info-link"><h6>{{ $user->following_count }} Following</h6></a></div>
              <div class="d-inline-flex px-3"> <a href="" class="post-info-link"><h6>{{ $user->follower_count }} Follower</h6></a></div>
            </div>
            <div class="profile-bio pb-2"> 
              <div class="d-inline-block"> <h6><strong>{{ $user->name }}</strong> {{ $user->bio }}</h6></div>
            </div>
          </div>
        </div>
        <div class="pb-4"> </div>
        <div class="pb-2"> </div>
        <div class="row"> 
            <div class="col-md-10 offset-1"> 
                @foreach($user->posts as $post)
                    <div class="d-inline-block col-md-3-5 album" style="width: 100%; height: 280px;">
                        <div class="fix-img">
                            <a href="{{ route('post', ['id' => $post->id]) }}"><img src="../images/kamil.jpg" width="100%"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
      </div>
    </main>

@endsection