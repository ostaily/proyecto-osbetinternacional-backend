<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Modelos
use App\Models\impuestos;

class ImpuestosController extends Controller
{
    /**
     * Guarda los clientes 
     */
    public function save(Request $request){
    
        //Creacion del impuesto
        $impuesto = new impuestos;
        $impuesto->nombre=$request->nombre;
        $impuesto->valor=$request->valor;
        $impuesto->activo=$request->activo;
        $impuesto->save();

        return response()->json([
            'status'=> '200',
            'message'=> 'Impuesto guardado',
            'result'=> $impuesto
        ]);
    }
    
    /**
     * Obtener todos los impuestos
     */
    public function get(Request $request){

        $impuestos = impuestos::orderBy('nombre')->get();
        return response()->json([
            'status'=> '200',
            'message'=> $impuestos,
        ]);
    }
    
    /**
     * Actualiza la informacion de un impuesto por el ID
     */
    public function update(Request $request){
        $impuesto = impuestos::find($request->id);
        //Actualizacion del cliente
        $impuesto->nombre=$request->nombre;
        $impuesto->valor=$request->valor;
        $impuesto->activo=$request->activo;
        $impuesto->save();

        return response()->json([
            'status'=> '200',
            'messge'=> 'Actualizacion exitosa',
        ]);
    }
    
    /**
     * Elimina un impuesto por el ID
     */
    public function delete($id){
        $impuesto = impuestos::find($id);
        $impuesto->delete();

        return response()->json([
            'status'=> '200',
            'message'=> 'Impuesto eliminado',
        ]);
    }

    /**
     * Muestra la informacion de un impuesto por el ID
     */
    public function show($id){
        $impuesto = impuestos::find($id);
        return response()->json([
            'status'=> '200',
            'message'=> $impuesto,
        ]);
    }
}
