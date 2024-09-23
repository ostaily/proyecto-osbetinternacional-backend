<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Modelos
use App\Models\tallas;

class TallasController extends Controller
{
    //
     /**
     * Guarda las tallas 
     */
    public function save(Request $request){
    
        //Creacion de la talla
        $talla = new tallas;
        $talla->nombre=$request->nombre;
        $talla->save();

        return response()->json([
            'status'=> '200',
            'message'=> 'Talla guardada',
            'result'=> $talla
        ]);
    }
    
    /**
     * Obtener todas las tallas
     */
    public function get(Request $request){

        $tallas = tallas::orderBy('nombre')->get();
        return response()->json([
            'status'=> '200',
            'message'=> $tallas,
        ]);
    }
    
    /**
     * Actualiza la informacion de una talla por el ID
     */
    public function update(Request $request){
        $talla = tallas::find($request->id);
        //Actualizacion del cliente
        $talla->nombre=$request->nombre;
        $talla->save();

        return response()->json([
            'status'=> '200',
            'messge'=> 'Actualizacion exitosa',
        ]);
    }
    
    /**
     * Elimina una talla por el ID
     */
    public function delete($id){
        $talla = tallas::find($id);
        $talla->delete();

        return response()->json([
            'status'=> '200',
            'message'=> 'Talla eliminada',
        ]);
    }

    /**
     * Muestra la informacion de una talla por el ID
     */
    public function show($id){
        $talla = tallas::find($id);
        return response()->json([
            'status'=> '200',
            'message'=> $talla,
        ]);
    }
}
