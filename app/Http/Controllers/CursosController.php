<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class CursosController extends Controller
    {
        public static function cursos() {
            return view('site.cursos');
        }
    }
    
?>