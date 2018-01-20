<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Ejecutar consulta para enviar la info de la BD a la Vista (Tabla: DATOS DE USUARIOS)
        $resultado = Usuario::all(); 
        return view('index', ['usuarios' => $resultado]);
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
        $resultado = Usuario::insert([
            'nombre' => $request->nombre,
            'ap' => $request->ap,
            'am' => $request->am, 
            'email' => $request->email, 
            'contrasena' => $request->pass,
            'tipo' => $request->tipo]);
        //Te regresa de donde vienes
        return redirect()->action('UsuarioController@index');
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


    /*public function guardaredit(Request $request){
        $resultado = Usuario::update([
            'nombre' => $request->nombre, 
            'ap' => $request->ap, 
            'am' => $request->am, 
            'email' => $request->email,
            'contrasena' => $request->pass, 
            'tipo' => $request->tipo]);
        //Te regresa de donde vienes
        return redirect()->action('UsuarioController@index');
    }*/
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $resultado = Usuario::where("id","=",$request->id_usuario )->first();
        return view('updatedatos', ['usuario' => $resultado]);
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
     $resultado = Usuario::where(
        'id','=',$request->idusuario
        )->update([
        "nombre"=>$request->nombre,
        "ap"=>$request->ap,
        "am"=>$request->am,
        "email"=>$request->email,
        "contrasena"=>$request->pass]); 

        return redirect()->action('UsuarioController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $resultado = Usuario::where('id', '=', $request->id_usuario)->delete();
        return redirect()->action('UsuarioController@index');
    }
}
