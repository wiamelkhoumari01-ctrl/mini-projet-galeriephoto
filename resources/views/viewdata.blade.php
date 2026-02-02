<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .container{
        max-width:700px;
        margin:80px auto;
        background:#fff;
        border-radius:12px;
        padding:30px;
        box-shadow:0 10px 25px rgba(0,0,0,0.1);
    }
    h1, h3{
        color:#333;
    }
    ul{
        list-style:none;
        padding:0;
    }
    ul li{
        padding:8px 0;
        border-bottom:1px solid #eee;
    }
    a{
        display:inline-block;
        margin-top:20px;
        text-decoration:none;
        color:#007BFF;
        font-weight:500;
    }
    a:hover{
        text-decoration:underline;
    }
</style>
</head>
<body>

    <div class="container">
        <h1>Data</h1>
        <ul>
             <li><strong>Cin : </strong>{{ $cin }}</li>
            <li><strong>Nom : </strong>{{ $nom }}</li>
            <li><strong>Prenom : </strong>{{ $prenom }}</li>

            <li><strong>Email : </strong>{{ $email }}</li>
            <li><strong>Password : </strong>{{ $password }}</li>
            <li><strong>age :</strong>{{ $age }}</li>
             <li><strong>Date d'entretien : </strong>{{ $date_entretien }}</li>
        </ul>
          <h3>CV :</h3>
  <p><strong>Nom du CV :</strong> {{ $cv_name }}</p>
  <p><strong>Type du CV :</strong> {{ $cv_type }}</p>
  <p><strong>Taille du CV :</strong> {{ round($cv_size/1024, 2) }} Ko</p>

  <hr>

  <h3>Photo :</h3>
  <p><strong>Nom de la photo :</strong> {{ $photo_name }}</p>
  <p><strong>Type de la photo :</strong> {{ $photo_type }}</p>
  <p><strong>Taille de la photo :</strong> {{ round($photo_size/1024, 2) }} Ko</p><br>
    <a href="{{ route("user.index") }}">Retour à l’inscription  </a>
</div>
</body>
</html>