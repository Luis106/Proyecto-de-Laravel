<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fun_index(){
        //
        return view('juegos.index', 
        [
            "param1" => "Juegos",
        ]
    );}
    public function fun_create(){
        //
        return view('juegos.create');

    }
    public function fun_edit($id){


        $juego = Juego::findOrFail($id);
        return view ('juegos.edit', compact("juego") );
        
    }


    public function fun_pruebas(Request $request){

        $juegos = request() -> except('_token');


        Juego::insert($juegos);

         return response() -> json($juegos);
     }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $juegos = request() -> except('_token');
        Juego::insert($juegos);

         return  redirect('Juegos');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function show(Juego $juego)
    {
        $datos['juegos'] = Juego::all();
        return view('juegos.index', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $datos = request() -> except(['_token','id']);
        $id = request() -> only('id');
        Juego::where('id', '=', $id)->update($datos);

        return redirect('Juegos');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $datos = request() -> except(['_token','id']);
        return $datos;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request)
    {
        $id = request() -> except('_token');
        Juego::destroy($id);
        return redirect('Juegos');
    }
}
