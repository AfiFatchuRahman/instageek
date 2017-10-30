@extends('layouts.app')

@section('content')

<main role="main">
  <div class="container container-margin">
    <div class="row">
      <div class="col-md-8 offset-2 album">
        <div class="mx-auto pt-3 pb-2" style="width: 200px;">
          <center><h3>Share Fotomu</h3></center>
        </div>
        <form method="POST" enctype="multipart/form-data" action="{{ route('post.store') }}">
          <table class="table">
            <tbody>
              <tr>
                <td>
                  <label>Upload Foto</label>
                </td>
                <td>
                  :
                </td>
                <td colspan="2">
                  <label class="custom-file">
                    <input type="file" id="file2" class="custom-file-input">
                    <span class="custom-file-control"></span>
                  </label>
                </td>
              </tr>
              <tr>
                <td>
                  <label>Upload Foto</label>
                </td>
                <td>
                  :
                </td>
                <td colspan="2">
                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                 
                </td>
                <td>
                  
                </td>
                <td colspan="2">
                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-success float-xl-right">Upload</button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
    </div>
  </div>
</main>
<!--
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
-->
@endsection
