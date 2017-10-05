@extends('master')

	@section('konten')
		My name is
		@if(count($bios))
			@foreach($bios as $bio)
				{{$bio->name}}
			@endforeach
		@endif		
	@stop