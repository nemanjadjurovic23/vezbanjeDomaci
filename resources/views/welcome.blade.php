<!doctype html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        @foreach($ocene as $ocena)
            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$ocena->user->name}}</h5>
                        <p class="card-text">{{$ocena->predmet}}</p>
                        <p class="card-text">{{$ocena->ocena}}</p>
                        <p class="card-text">{{$ocena->profesor}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
