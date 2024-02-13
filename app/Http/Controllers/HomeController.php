<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    // aqui vai mostrar no navegador a pagina principal se não fizer isto, vai ficar em branco.
    public function index(){
        return view("blog/home", [
            /* "articles" => Articles::all()]);  */
            "articles" => Articles::inRandomOrder()->limit(3)->get()]); // isto vai dar a sensação que o site está sendo atualizado constantemente.

    }
}
