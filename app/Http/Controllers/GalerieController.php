<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalerieController extends Controller
{
public function home(){
    return view('home');
}
public function galerie (){
    $image=[
       ['nom'=>'La Joconde','url'=>'https://fr.wikipedia.org/wiki/La_Joconde'],
       ['nom'=>'La Nuit étoilée','url'=>'https://fr.wikipedia.org/wiki/La_Nuit_%C3%A9toil%C3%A9e_(1889)'],
       ['nom'=>'La Jeune Fille à la perle','url'=>'https://fr.wikipedia.org/wiki/La_Jeune_Fille_%C3%A0_la_perle'],
       ['nom'=>'Guernica','url'=>'https://fr.wikipedia.org/wiki/Guernica_(Picasso)'],
       ['nom'=>'La Persistance de la mémoire','url'=>'https://fr.wikipedia.org/wiki/La_Persistance_de_la_m%C3%A9moire']
    ];
    return view('galerie', compact('image'));
}
public function apropos(){
    return view('apropos');
}
}
