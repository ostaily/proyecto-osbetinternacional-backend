<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Modelos
use App\Models\tipos_facturas;

class TiposFacturasController extends Controller
{
    ////
    /**
     * Guarda los tipos de facturas 
     */
    public function save(Request $request){
    
        //Creacion del tipo de facturas
        $tipofacturas = new tipos_facturas;
        $tipofacturas->nombre = $request->nombre;
        $tipofacturas->save();

        return response()->json([
            'status'=> '200',
            'message'=> 'Tipo de facturas guardado',
            'result'=> $tipofacturas
        ]);
    }
    
    /**
     * Obtener todos los tipos de facturas
     */
    public function get(Request $request){

        $tipos_facturas = tipos_facturas::orderBy('nombre')->get();
        return response()->json([
            'status'=> '200',
            'message'=> $tipos_facturas,
        ]);
    }
    
    /**
     * Actualiza la informacion de una facturas por el ID
     */
    public function update(Request $request){
        $tipos_facturas = tipos_facturas::find($request->id);
        //Actualizacion del tipo de facturas
        $tipos_facturas->nombre=$request->nombre;
        $tipos_facturas->save();

        return response()->json([
            'status'=> '200',
            'messge'=> 'Actualizacion exitosa',
        ]);
    }
    
    /**
     * Elimina un tipo de facturas por el ID
     */
    public function delete($id){
        $tipos_facturas = tipos_facturas::find($id);
        $tipos_facturas->delete();

        return response()->json([
            'status'=> '200',
            'message'=> 'Tipo de facturas eliminado',
        ]);
    }

    /**
     * Muestra la informacion de un tipo de facturas por el ID
     */
    public function show($id){
        $tipos_facturas = tipos_facturas::find($id);
        return response()->json([
            'status'=> '200',
            'message'=> $tipos_facturas,
        ]);
    }
}
