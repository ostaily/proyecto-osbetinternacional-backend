<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Modelos
use App\Models\contactos;

class ContactosController extends Controller
{
    //
     /**
     * Guarda las contacto
     */
    public function save(Request $request){
    
        //Creacion de contacto
        $contacto = new contacto;
        $contacto->nombre=$request->nombre;
        $contacto->save();

        return response()->json([
            'status'=> '200',
            'message'=> 'Contacto guardada',
            'result'=> $contacto
        ]);
    }
    
    /**
     * Obtener todas los conctactos
     */
    public function get(Request $request){

        $tallas = contacto::orderBy('nombre')->get();
        return response()->json([
            'status'=> '200',
            'message'=> $contacto,
        ]);
    }
    
    /**
     * Actualiza la informacion de un contacto por el ID
     */
    public function update(Request $request){
        $contacto = contacto::find($request->id);
        //Actualizacion del cliente
        $contacto->nombre=$request->nombre;
        $contacto->save();

        return response()->json([
            'status'=> '200',
            'messge'=> 'Actualizacion exitosa',
        ]);
    }
    
    /**
     * Elimina un contacto por el ID
     */
    public function delete($id){
        $contacto = contacto::find($id);
        $contacto->delete();

        return response()->json([
            'status'=> '200',
            'message'=> 'Contacto eliminada',
        ]);
    }

    /**
     * Muestra la informacion de un contacto por el ID
     */
    public function show($id){
        $contacto = contacto::find($id);
        return response()->json([
            'status'=> '200',
            'message'=> $contacto,
        ]);
    }
}
