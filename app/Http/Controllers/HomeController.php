<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function saluta($nome) {
        return "Qua ti sto salutando: Ciao " . $nome . "!";
    }
    public function quadrato($numero) {
        if(is_numeric($numero)) {
           return "Il quadrato di " . $numero . " è " . $numero * $numero;  
        } else {
            return "ERRORE: Il parametro fornito non è un numero.";
        }
       
    }
}
