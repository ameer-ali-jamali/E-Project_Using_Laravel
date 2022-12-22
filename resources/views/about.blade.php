<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>

<body>
    @foreach ( $data as $value)
    <div class="card" style="width:18rem;">
        <h1>{{ $value->id }}</h1>
        <img src="{{ $value->img }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $value->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted ">{{ $value->details }}</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            b5
        </div>
    </div>
    @endforeach

</body>

</html>
