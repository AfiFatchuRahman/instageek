@extends('layouts.app')

@section('content')

    <main role="main">
      <div class="container container-margin">          
        <div class="row">
          <div class="col-md-66 offset-1 album">
            <div class="fix-images">
              <img src="{{ asset('storage/'.$post->photo) }}" width="100%">
            </div>
          </div>
          <div class="post-details album post-attribute">
            <div class="col-md-12 details-margin details-user">
              <a href="{{ url('/' . $post->user->username) }}"><img class="rounded-circle" src="{{ asset('images/kamil.jpg') }}" alt="Generic placeholder image" width="35px" height="35px"></a>
              <a href="{{ url('/' . $post->user->username) }}" class="name-link">{{ $post->user->username }}</a>
            </div>     

            <div class="clear-border "> </div>
            
            <div class="scrollit">
              <div class="post-caption">
                <h6><a href="{{ url('/' . $post->user->username) }}" class="details-link" ><strong>{{ $post->user->username }}</strong></a>{{ ' ' . $post->caption }}</h6>
              </div>

              <div class="details-margin">
                @foreach($post->comment as $comment)
                    <h6><a href="{{ url('/' . $comment->user->username) }}" class="details-link"><strong>{{ $comment->user->username }}</strong></a>{{ ' ' . $comment->comment }}</h6>
                @endforeach
              </div>
            </div>   
            <div class="clear-border"></div>
            <!--
            <div class="fixed">
              <div class="post-caption">
                <h6><a href="" class="details-link" ><strong>apip__</strong></a> Mencoba sesuatu yang baru..</h6>
              </div>

              <div class="details-margin">
                <h6><a href="" class="details-link"><strong>apip__</strong></a> Super Sekalii...</h6>
                <h6><a href="" class="details-link"><strong>apip__</strong></a> nice</h6>
                <h6><a href="" class="details-link"><strong>apip__</strong></a> goodvoy</h6>
                <h6><a href="" class="details-link"><strong>apip__</strong></a> Super Sekalii...</h6>
                <h6><a href="" class="details-link"><strong>apip__</strong></a> nice</h6>
                <h6><a href="" class="details-link"><strong>apip__</strong></a> goodvoy</h6>
                <h6><a href="" class="details-link"><strong>apip__</strong></a> Super Sekalii...</h6>
                <h6><a href="" class="details-link"><strong>apip__</strong></a> nice</h6>
                <h6><a href="" class="details-link"><strong>apip__</strong></a> goodvoy</h6>
                <h6><a href="" class="details-link"><strong>apip__</strong></a> Super Sekalii...</h6>
                <h6><a href="" class="details-link"><strong>apip__</strong></a> nice</h6>
                <h6><a href="" class="details-link"><strong>apip__</strong></a> goodvoy</h6>
                <h6><a href="" class="details-link"><strong>apip__</strong></a> Super Sekalii...</h6>
                <h6><a href="" class="details-link"><strong>apip__</strong></a> nice</h6>
                <h6><a href="" class="details-link"><strong>apip__</strong></a> goodvoy</h6>
              </div>
            </div> 
            -->  
            <div class="details-icon">
                <div class="d-inline-block col-md-33 mr-1">
                    @if($post->like->contains(Auth::user()))
                    <form method="POST" action="{{ route('dislike') }}" enctype="multipart/form-data">  
                        {{ csrf_field() }}
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <button type="submit"  class="imgs" style="margin-left:-7px;background-color:rgba(255,255,255,0.0); border:none;" id="resultButton" onclick="showResults();">
                            <img src="{{ asset('images/loved.png') }}" width="120%"/>
                        </button>
                    </form> 
                    @else
                    <form method="POST" action="{{ route('like') }}" enctype="multipart/form-data">  
                        {{ csrf_field() }}
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <button type="submit"  class="imgs" style="margin-left:-7px;background-color:rgba(255,255,255,0.0); border:none;" id="resultButton" onclick="showResults();">
                            <img src="{{ asset('images/love.png') }}" width="120%"/>
                        </button>
                    </form> 
                    @endif
                </div>

                <div class="d-inline-block col-md-33">
                    <button type="submit"  class="imgs" style="margin-left:-7px;background-color:rgba(255,255,255,0.0); border:none;" id="resultButton" onclick="showResults();">
                        <img src="{{ asset('images/comment.png') }}" width="120%"/>
                    </button>
                </div>
<!--
            <form method="POST" action="{{ route('comment') }}" enctype="multipart/form-data">  
                {{ csrf_field() }}
                <label for="imgs col-md-3">
                    <input type="submit" name="submit" id="imgs" value="img-btn">
                    <img src="{{ asset('images/love.png') }}" class="details-icon" id="imgs" width="12%">
                    <a href=""><img src="{{ asset('images/comment.png') }}" class="details-icon" width="12%"></a>
                </label>
            </form>      
                -->
            </div>
            <div class="details-likes">
              <h6><a href="" class="details-link"><strong>{{ $post->like_count }} likes</strong></a></h6>
            </div>            
            <div class="time-post">
              <h6><a href="{{ url('/post/' . $post->id) }}" class="details-link">{{ $post->created_at }}</a></h6>
            </div>
            <div class="clear-border"> </div>
            <form method="POST" action="{{ route('comment') }}" enctype="multipart/form-data">  
                {{ csrf_field() }}
                <input name="user_id" type="hidden" value="{{ Auth::user()->id }}"> 
                <input name="post_id" type="hidden" value="{{ $post->id }}">
                <input name="comment" class="styled-textarea" type="text" placeholder="Add a comment">
            </form>      
          </div>
        </div>
      </div>
    </main>

@endsection