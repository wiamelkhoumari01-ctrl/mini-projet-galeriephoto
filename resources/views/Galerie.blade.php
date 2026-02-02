<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    h1{
        text-align:center;
        margin-bottom:20px;
    }
    .p1{
        text-align:center;
        max-width:700px;
        margin:0 auto 30px;
        color:#555;
    }
    p{
        text-align:center;
        max-width:700px;
        margin:0 auto 30px;
    }
    ul{
        max-width:600px;
        margin:0 auto;
        padding:0;
        list-style:none;
    }
    ul li{
        background:#fff;
        margin:10px 0;
        padding:15px;
        border-radius:8px;
        box-shadow:0 5px 15px rgba(0,0,0,0.08);
        transition:0.3s;
    }
    ul li:hover{
        transform:translateY(-3px);
    }
    ul li a{
        text-decoration:none;
        color:#007BFF;
        font-weight:500;
    }
</style>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="container">
       <h1>Portfolio & Collections</h1><hr>
       <p class="p1">Plongez dans mes différents univers photographiques. Chaque album est une exploration thématique, du silence des grands espaces à l'effervescence des rues citadines.</p>
       <hr><hr>
       <p><strong>Notre collection : Capturer l'âme derrière le regard. Des portraits pris sur le vif ou en studio.</strong></p>
       <HR></HR>
       <ul>
           @foreach($image as $img)
           <li>
             <a href="{{ $img['url'] }}" target="_blank">
                {{ $img['nom'] }}
            </a></li>
            @endforeach
       </ul>
    </div>
    @endsection

</body>
</html>