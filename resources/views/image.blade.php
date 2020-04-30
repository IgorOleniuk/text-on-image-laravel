<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<div class="container">
  <div class="panel panel-primary mt-5">
    <div class="panel-heading"><h2>Laravel image</h2></div>
    <div class="panel-body mt-3">
        <div class="row">
            <div class="col-4">
              @if ($img = Session::get('img_path'))
                <img style="width: 100%" src="{{ asset('images/'.$img) }}">
              @else
                <img style="width: 100%" src="{{ asset('images/postcard-1.jpg') }}">
              @endif
              <form action="{{ route('image.postcard1') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-3">
                  <div class="col-md-6">
                    <button class="btn btn-primary mt-3 changeButton">Change Text</button>
                  </div>
                </div>
              </form>
            </div>

          <div class="col-4">
            @if ($img = Session::get('img_path2'))
              <img style="width: 100%" src="{{ asset('images/'.$img) }}">
            @else
              <img style="width: 100%" src="{{ asset('images/postcard-2.jpg') }}">
            @endif
            <form action="{{ route('image.postcard2') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mt-3">
                <div class="col-md-6">
                  <button class="btn btn-primary mt-3 changeButton">Change Text</button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-4">
            @if ($img = Session::get('img_path3'))
              <img style="width: 100%" src="{{ asset('images/'.$img) }}">
            @else
              <img style="width: 100%" src="{{ asset('images/postcard-3.jpg') }}">
            @endif
            <form action="{{ route('image.postcard3') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mt-3">
                <div class="col-md-6">
                  <button class="btn btn-primary mt-3 changeButton">Change Text</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      <hr>
    </div>
  </div>
</div>
</body>
</html>


