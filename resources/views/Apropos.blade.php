<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .about-container{
        max-width:900px;
        margin:60px auto;
        background:#ffffff;
        padding:40px;
        border-radius:14px;
        box-shadow:0 12px 30px rgba(0,0,0,0.1);
    }
    .about-container h1{
        text-align:center;
        font-size:36px;
        margin-bottom:10px;
        color:#333;
    }
    .quote{
        text-align:center;
        font-style:italic;
        color:#666;
        margin:20px 0;
        font-size:18px;
    }
    .about-container h2{
        margin-top:40px;
        color:#222;
        border-left:5px solid #007BFF;
        padding-left:10px;
    }
    .about-container p{
        line-height:1.7;
        color:#555;
        margin-top:15px;
        text-align:justify;
    }
    .about-container ul{
        margin-top:20px;
        padding-left:20px;
    }
    .about-container ul li{
        margin-bottom:12px;
        color:#444;
        line-height:1.6;
    }
    hr{
        border:none;
        height:1px;
        background:#e0e0e0;
        margin:30px 0;
    }
</style>
</head>
<body>
    @extends('layouts.app')
@section('content')

<div class="about-container">

   <h1>A propos.</h1>
   <hr>
   <p class="quote">
       "Je ne prends pas seulement des photos, je raconte des histoires de lumière et d'ombre."
   </p><hr>
   <h2>Biographie</h2>
   <p>
       Passionné par l'image depuis mon premier appareil argentique reçu à l'adolescence, j'ai passé les dix dernières années à explorer la relation entre l'homme et son environnement.
   </p><hr>
   <p>
       Ce qui m'anime ? Saisir la spontanéité d'un rire, la rudesse d'un sommet enneigé ou le calme plat d'une ruelle déserte à 4 heures du matin. Ma démarche artistique se veut minimaliste et authentique : je préfère la vérité d'un instant imparfait à la froideur d'une mise en scène trop travaillée.
   </p>
   <hr>
   <h2>Ma Philosophie</h2>
   <ul>
        <li><strong>Authenticité :</strong> Pas de retouches excessives, juste la mise en valeur du réel.</li>
        <li><strong>Discrétion :</strong> Savoir se faire oublier pour capturer les moments les plus naturels.</li>
        <li><strong>Engagement :</strong> Une implication totale dans chaque projet, du premier clic à la livraison finale.</li>
   </ul>
</div>
@endsection

</body>
</html>