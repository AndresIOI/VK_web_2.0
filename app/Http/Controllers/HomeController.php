<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\etiqueta;
use App\pdf;
use App\video;
use App\examen;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examen = examen::all();
        $pdfs = pdf::all();
        $etiquetas = etiqueta::all();
        $videos = video::all();
        return view('home',compact('etiquetas','pdfs','videos'));
    }
}
