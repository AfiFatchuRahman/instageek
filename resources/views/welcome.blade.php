@extends('layouts.app')

@section('content')

    <main role="main">
      <div class="container container-margin">
        <div class="row"> 
          <div class="col-md-10 offset-1 album pt-4 mb-4"> 
            @foreach($posts as $post)  
            <div class="d-inline-block col-md-3-5 album" style="width: 100%; height: 280px;">
                <a href="{{ url('/post/' . $post->id) }}">
                    <img src="{{ asset('storage/'.$post->photo) }}" width="100%">
                </a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </main>

@endsection