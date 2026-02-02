<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <style>
    h2{
        text-align:center;
        margin-top:30px;
    }
    .form{
        max-width:600px;
        margin:40px auto;
        background:#fff;
        padding:30px;
        border-radius:12px;
        box-shadow:0 10px 30px rgba(0,0,0,0.1);
    }
    form label{
        display:block;
        margin-top:15px;
        font-weight:500;
    }
    form input{
        width:100%;
        padding:10px;
        margin-top:5px;
        border-radius:6px;
        border:1px solid #ccc;
    }
    form input[type="submit"],
    form input[type="reset"]{
        width:48%;
        margin-top:25px;
        cursor:pointer;
        background:#007BFF;
        color:white;
        border:none;
        font-weight:600;
    }
    form input[type="reset"]{
        background:#6c757d;
    }
    span{
        font-size:13px;
    }
</style>
</head>
<body>
     @extends('layouts.app')
    @section('content')
 <h2>Se connecter </h2>
    <div class='form'>
        
    <form action="{{ route("user.store") }}" method="POST" enctype="multipart/form-data" >
        @csrf

          <label>CIN : </label>
          <input type="text" name="cin" id="cin"><br> 
          @error('cin')
             <span style="color:red;" >{{ $message }}</span>
          @enderror 

           <label>Nom : </label>
          <input type="text" name="nom" id="nom"><br> 
          @error('nom')
            <span style="color:red;" >{{ $message }}</span>
          @enderror

          <label>Prenom : </label>
          <input type="text" name="prenom" id="prenom"><br>            
          @error('prenom')
               <span style="color:red;" >{{ $message }}</span>
          @enderror

          <label>Email : </label>
          <input type="text" placeholder="Entrer votre email.." name="email" id="email"><br>                
          @error('email')
              <span style="color:red;" >{{ $message }}</span>
          @enderror

          <label>Mot de passe :</label>
          <input type="text" placeholder="Entrer votre mot de passe.."name="mdp" id="mdp"><br>          
          @error('mdp')
              <span style="color:red;" >{{ $message }}</span>
          @enderror

          <label>Confirmer mot de passe :</label>
          <input type="text" name="mdp_confirmation" id="mdp_confirmation"><br>            
          @error('mdp_confirmation')
              <span style="color:red;" >{{ $message }}</span>
          @enderror

          <label>Age : </label>
          <input type="text" name="age" id="age"><br>            
          @error('age')
               <span style="color:red;" >{{ $message }}</span>
          @enderror

          <label>Date d'entretien : </label>
          <input type="date" name="date" id="date"><br>            
          @error('date')
               <span style="color:red;" >{{ $message }}</span>
          @enderror

          <label> Attacher votre CV : </label>
          <input type="file" name="cv" id="cv"><br>            
          @error('cv')
               <span style="color:red;" >{{ $message }}</span>
          @enderror

          <label>Attacher votre photo : </label>
          <input type="file" name="photo" id="photo"><br>            
          @error('photo')
               <span style="color:red;" >{{ $message }}</span>
          @enderror

         <input type="submit" value="Connexion"><br>
         <input type="reset" value="Recommencer">
    </form>
    </div>
      @endsection
</body>
</html>