<?php

namespace App\Http\Controllers;

use App\Marca;
use App\Auto;
use Illuminate\Http\Request;
use Response;

class AutoController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $marca = Marca::all();
        return view('Automovil.auto', compact('marca'));
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
        //
        $auto = new Auto();
        $auto->marca = $request->marca;
        $auto->modelo = $request->modelo;
        $auto->placa = $request->placa;
        $auto->color = $request->color;
        $auto->precio = $request->precio;
        $auto->save();
        return response::json($auto);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $auto = Auto::find($id);
        return response::json($auto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function edit(Auto $auto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $auto = Auto::find($id);
        $auto->marca = $request->marca;
        $auto->modelo = $request->modelo;
        $auto->placa = $request->placa;
        $auto->color = $request->color;
        $auto->precio = $request->precio;
        $auto->save();
        return response::json($auto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $auto = Auto::find($id);
        $auto->delete();
        return response::json($auto);
        
    }

    public function listarAuto(){
        $auto = Auto::all();
        return response::json($auto);
    }
}
