@extends('layouts.app')

@section('content')

    <main role="main">
      <div class="container container-margin">
        @foreach($posts as $post) 
        <div class="row row-margin">
          <div class="col-md-66 offset-3 album">  
            <div class="col-md-12 post-user" style="border-bottom: 1px solid #ced4da;">
              <a href="{{ url('/' . $post->user->username) }}"><img class="rounded-circle" src="{{ asset('images/kamil.jpg') }}" alt="Generic placeholder image" width="30px" height="30px"></a>
              <a href="{{ url('/' . $post->user->username) }}" class="name-link">{{ $post->user->username }}</a>
            </div>    
            <div class="img-upload">
                <a href="{{ url('/p/' . $post->id) }}">
                    <img src="{{ asset('storage/'.$post->photo) }}" width="225%">
                </a>   
            </div>       
            <div class="post-icon" style="border-top: 1px solid #ced4da;">
                <div class="d-inline-block col-md-33 mr-1">
                    @if($post->like->contains(Auth::user()))
                    <form method="POST" action="{{ route('dislike') }}" enctype="multipart/form-data">  
                        {{ csrf_field() }}
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <button type="submit"  class="imgs" style="margin-left:-20px;background-color:rgba(255,255,255,0.0); border:none;" id="resultButton" onclick="showResults();">
                            <img src="{{ asset('images/loved.png') }}" width="50%"/>
                        </button>
                    </form> 
                    @else
                    <form method="POST" action="{{ route('like') }}" enctype="multipart/form-data">  
                        {{ csrf_field() }}
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <button type="submit"  class="imgs" style="margin-left:-20px;background-color:rgba(255,255,255,0.0); border:none;" id="resultButton" onclick="showResults();">
                            <img src="{{ asset('images/love.png') }}" width="50%"/>
                        </button>
                    </form> 
                    @endif
                </div>

                <div class="d-inline-block col-md-33">
                    <form method="POST" action="{{ route('comment') }}" enctype="multipart/form-data">  
                        {{ csrf_field() }}
                        <button type="submit"  class="imgs" style="margin-left:-25px;background-color:rgba(255,255,255,0.0); border:none;" id="resultButton" onclick="showResults();">
                            <img src="{{ asset('images/comment.png') }}" width="50%"/>
                        </button>
                    </form>
                </div>
            </div>
            <div class="like-count">
              <h6><a href="" class="details-link"><strong>4 likes</strong></a></h6>
            </div>
            <div class="caption">
              <h6><a href="{{ url('/' . $post->user->username) }}" class="details-link"><strong>{{ $post->user->username }}</strong></a>{{ ' ' . $post->caption }}</h6>
            </div>

            <div class="comment">
                @foreach($post->comment as $comment)
                    <h6><a href="{{ url('/' . $comment->user->username) }}" class="details-link"><strong>{{ $comment->user->username }}</strong></a>{{ ' ' . $comment->comment }}</h6>
                @endforeach
            </div>
            <div class="time">
              <h6><a href="{{ url('/p/' . $post->id) }}" class="details-link">{{ $post->created_at }}</a></h6>
            </div>
            <div class="clear-border-post"> </div>
            <div class="post-margin"> 
                <form method="POST" action="{{ route('comment') }}" enctype="multipart/form-data">  
                    {{ csrf_field() }}
                    <input name="user_id" type="hidden" value="{{ Auth::user()->id }}"> 
                    <input name="post_id" type="hidden" value="{{ $post->id }}">
                    <input name="comment" class="styled-textarea" type="text" placeholder="Add a comment">
                </form>    
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </main>

@endsection