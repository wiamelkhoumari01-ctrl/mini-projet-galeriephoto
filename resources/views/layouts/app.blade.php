<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>   
    body{
        margin:0;
        font-family: 'Segoe UI', sans-serif;
        background:#f7f7f7;
    }
    nav{
        background: #ffffff;
        padding: 15px 40px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        display:flex;
        justify-content:center;
        gap:30px;
        position: sticky;
        top:0;
        z-index:100;
    }
    nav a{
        text-decoration:none;
        color:#333;
        font-weight:500;
        transition:0.3s;
    }
    nav a:hover{
        color:#007BFF;
    }
    .content{
        padding:40px;
    }
</style>


</head>
<body>
        <nav><br>
                <a href="{{ route('home') }}">     Accueil |     </a>
                <a href="{{ route('galerie') }}">     Galerie |      </a>
                <a href="{{ route('apropos') }}">     A propos |     </a>
                <a href="{{ route('user.index') }}">    Se connecter   </a><br>
        </nav>
    <div class="content">
       @yield('content')
    </div>
</body>
</html>