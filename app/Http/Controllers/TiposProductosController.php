<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Modelos
use App\Models\tipos_productos;

class TiposProductosController extends Controller
{
    //////
    /**
     * Guarda los tipos de productos 
     */
    public function save(Request $request){
    
        //Creacion del tipo de productos 
        $tipoproductos  = new tipos_productos;
        $tipoproductos ->nombre = $request->nombre;
        $tipoproductos ->save();

        return response()->json([
            'status'=> '200',
            'message'=> 'Tipo de fproductos guardado',
            'result'=> $tipoproductos 
        ]);
    }
    
    /**
     * Obtener todos los tipos de productos 
     */
    public function get(Request $request){

        $tipos_productos  = tipos_productos::orderBy('nombre')->get();
        return response()->json([
            'status'=> '200',
            'message'=> $tipos_productos ,
        ]);
    }
    
    /**
     * Actualiza la informacion de una productos  por el ID
     */
    public function update(Request $request){
        $tipos_productos  = tipos_productos ::find($request->id);
        //Actualizacion del tipo de productos 
        $tipos_productos ->nombre=$request->nombre;
        $tipos_productos ->save();

        return response()->json([
            'status'=> '200',
            'messge'=> 'Actualizacion exitosa',
        ]);
    }
    
    /**
     * Elimina un tipo de productos  por el ID
     */
    public function delete($id){
        $tipos_productos  = tipos_productos ::find($id);
        $tipos_productos ->delete();

        return response()->json([
            'status'=> '200',
            'message'=> 'Tipo de productos eliminado',
        ]);
    }

    /**
     * Muestra la informacion de un tipo de productos por el ID
     */
    public function show($id){
        $tipos_productos  = tipos_productos ::find($id);
        return response()->json([
            'status'=> '200',
            'message'=> $tipos_productos ,
        ]);
    }
}
