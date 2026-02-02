<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <style>
    .body{
        min-height:100vh;
        background-image: url("{{ asset('images/galerie.jpg') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;

        text-align:center;
        color:rgb(255, 255, 255);
        padding:40px;
    }
    .body h1{
        font-size:36px;
        text-shadow: 0px 4px 15px rgba(0,0,0,0.6);
    }
    .body p{
        font-size:18px;
        max-width:700px;
        text-shadow:0px 4px 10px rgba(0,0,0,0.6);
    }
    button{
        padding:12px 25px;
        font-size:16px;
        background:#007BFF;
        color:rgb(0, 0, 0);
        border:none;
        border-radius:8px;
        cursor:pointer;
        transition:0.3s;
    }
    button:hover{
        background:#0056b3;
    }
    footer{
        background:#ffffff;
        padding:30px;
        text-align:center;
        box-shadow:0 -2px 10px rgba(0,0,0,0.08);
    }
    footer p{
        margin:5px 0;
        color:#555;
    }
</style>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="body"><hr><br>
       <h1 style="-webkit-text-stroke: 2px black;paint-order: stroke fill">Capturer l'instant, figer l'émotion.</h1>
       <p style="-webkit-text-stroke: 2px black;paint-order: stroke fill">Photographe passionné spécialisé dans les paysages naturels et le portrait intimiste. Bienvenue dans mon univers visuel.</p><br>
       <a href="{{ route('galerie') }}"><button>Découvrir la Galerie</button></a><br><br>
    </div><br><br><br><br><br><br><br><br>
       <footer>
        <div>
            <p>Disponible pour vos projets, mariages ou séances privées.</p>
            <p>contact@monportfolio.fr | +33 6 00 00 00 00</p>
            <p>Instagram | Behance | LinkedIn</p>
            <p>© 2026 – Tous droits réservés.</p>
        </div>
       </footer>
    @endsection
</body>
</html>