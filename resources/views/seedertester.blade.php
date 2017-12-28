@if(count($post))

	<h1>Username : {{ $post->user->username }}</h1>
	<br>
	<h3>Caption : {{ $post->caption }}</h3>
	<br>
	@if(count($post->comment))
		@foreach($post->comment as $comment)
			<h5>{{ $comment->comment }}</h5>
		@endforeach
	@endif
@endif