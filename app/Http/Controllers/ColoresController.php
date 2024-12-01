<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Modelos
use App\Models\colores;

class ColoresController extends Controller
{
    //
     /**
     * Guarda los Colores
     */
    public function save(Request $request){
    
        //Creacion de colores
        $color = new colores;
        $color->nombre=$request->nombre;
        $color->save();

        return response()->json([
            'status'=> '200',
            'message'=> 'Color guardado',
            'result'=> $color
        ]);
    }
    
    /**
     * Obtener todos los colores
     */
    public function get(Request $request){

        $colores = colores::orderBy('nombre')->get();
        return response()->json([
            'status'=> '200',
            'message'=> $colores,
        ]);
    }
    
    /**
     * Actualiza la informacion de un color por el ID
     */
    public function update(Request $request){
        $color = colores::find($request->id);
        //Actualizacion del cliente
        $color->nombre=$request->nombre;
        $color->save();

        return response()->json([
            'status'=> '200',
            'messge'=> 'Actualizacion exitosa',
        ]);
    }
    
    /**
     * Elimina un color por el ID
     */
    public function delete($id){
        $color = colores::find($id);
        $color->delete();

        return response()->json([
            'status'=> '200',
            'message'=> 'Color eliminada',
        ]);
    }

    /**
     * Muestra la informacion de un color por el ID
     */
    public function show($id){
        $color = colores::find($id);
        return response()->json([
            'status'=> '200',
            'message'=> $color,
        ]);
    }
}
