<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pdf;
use Auth;
class PdfsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('pdf')){

            $file = $request->file('pdf');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/pdfs/',$name);
        }

        $pdf = new pdf();
        $pdf->titulo_pdf = $request->titulo_pdf;
        $pdf->pdf = $name;
        $pdf->etiqueta_id = $request->etiqueta;
        $pdf->imagen = time()."_"."default.jpg";
        $pdf->usuario_id = Auth::User()->id;


        $pdf->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function download ($file){

      $pathFile = "C:Users\Daniel\Documents\VK_web_2.0\public\pdfs\\".$file;
      return response()->download($pathFile);
    }
}
