<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Modelos
use App\Models\usuarios;

class UsuariosController extends Controller
{
    //
    /**
     * Guarda los usuarios 
     */
    public function save(Request $request){
    
        //Creacion del usuario
        $usuario = new usuarios;
        $usuario->username=$request->username;
        $usuario->password=$request->password;
        $usuario->save();

        return response()->json([
            'status'=> '200',
            'message'=> 'Usuario guardado',
            'result'=> $usuario
        ]);
    }
    
    /**
     * Obtener todos los usuarios
     */
    public function get(Request $request){

        $usuarios = usuarios::orderBy('username')->get();
        return response()->json([
            'status'=> '200',
            'message'=> $usuarios,
        ]);
    }
    
    /**
     * Actualiza la informacion de un usuario por el ID
     */
    public function update(Request $request){
        $usuarios = usuarios::find($request->id);
        //Actualizacion del usuario
        $usuarios->username=$request->username;
        $usuarios->password=$request->password;
        $usuarios->save();

        return response()->json([
            'status'=> '200',
            'messge'=> 'Actualizacion exitosa',
        ]);
    }
    
    /**
     * Elimina un usuario por el ID
     */
    public function delete($id){
        $usuarios = usuarios::find($id);
        $usuarios->delete();

        return response()->json([
            'status'=> '200',
            'message'=> 'Usuario eliminado',
        ]);
    }

    /**
     * Muestra la informacion de un usuario por el ID
     */
    public function show($id){
        $usuarios = usuarios::find($id);
        return response()->json([
            'status'=> '200',
            'message'=> $usuarios,
        ]);
    }
}
