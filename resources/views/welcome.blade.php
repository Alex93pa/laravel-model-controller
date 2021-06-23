<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>
        
        <div class="">

        @foreach($movies as $movie)

        <div class="card" >
            <div class="">
                <h5 class=""><strong>Title: </strong>  {{$movie->title}}</h5>
                <p class=""><strong>Original title: </strong>  {{$movie->original_title}}</p>
                <p class=""><strong>Nationality: </strong>  {{$movie->nationality}}</p>
                <p class=""><strong>Date: </strong> {{$movie->date}}</p>
                <p class=""><strong>Vote: </strong> {{$movie->vote}}</p>
            </div>
        </div>
        @endforeach
    </div>

    </body>
</html>
