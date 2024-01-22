<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap-grid.min.css">
    <title>Movie</title>
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach ($movie as $movies)
                <div class="col-2 ">
                    <h1>{{$movies->title}}</h1>
                    <p>{{$movies->original_tilte}}</p>
                    <p>{{$movies->nationality}}</p>
                    <p>{{$movies->date}}</p>
                    <p>{{$movies->vote}}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
<style scoped>
    body{
        background-color: #222;
        color: white;
    }
</style>
</html>