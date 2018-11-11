<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\etiqueta;
use App\pdf;


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
        $pdfs = pdf::all();
        $etiquetas = etiqueta::all();
        return view('home',compact('etiquetas','pdfs'));
    }
}
