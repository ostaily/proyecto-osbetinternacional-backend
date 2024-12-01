<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Modelos
use App\Models\telas;

class TelasController extends Controller
{
    //
     /**
     * Guarda las telas 
     */
    public function save(Request $request){
    
        //Creacion de la tela
        $tela = new telas;
        $tela->nombre=$request->nombre;
        $tela->save();

        return response()->json([
            'status'=> '200',
            'message'=> 'Tela guardada',
            'result'=> $tela
        ]);
    }
    
    /**
     * Obtener todas las telas
     */
    public function get(Request $request){

        $telas = telas::orderBy('nombre')->get();
        return response()->json([
            'status'=> '200',
            'message'=> $telas,
        ]);
    }
    
    /**
     * Actualiza la informacion de una tela por el ID
     */
    public function update(Request $request){
        $tela = telas::find($request->id);
        //Actualizacion del cliente
        $tela->nombre=$request->nombre;
        $tela->save();

        return response()->json([
            'status'=> '200',
            'messge'=> 'Actualizacion exitosa',
        ]);
    }
    
    /**
     * Elimina una tela por el ID
     */
    public function delete($id){
        $tela = telas::find($id);
        $tela->delete();

        return response()->json([
            'status'=> '200',
            'message'=> 'Tela eliminada',
        ]);
    }

    /**
     * Muestra la informacion de una tela por el ID
     */
    public function show($id){
        $tela = telas::find($id);
        return response()->json([
            'status'=> '200',
            'message'=> $tela,
        ]);
    }
}
