@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading center">Upload</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ url('upload') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                            <label for="photo" class="col-md-4 control-label">Picture</label>

                            <div class="col-md-6">
                                <input id="name" type="file" class="form-control" name="photo" value="" required autofocus>

                                @if ($errors->has('photo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('caption') ? ' has-error' : '' }}">
                            <label for="caption" class="col-md-4 control-label">Caption</label>

                            <div class="col-md-6">
                                <textarea id="username" type="text-field" class="form-control" name="caption" value="{{ old('caption') }}" required autofocus> </textarea>

                                @if ($errors->has('caption'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('caption') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Upload
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
