<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Modelos
use App\Models\contactos;

class ContactosController extends Controller
{
    /**
     * Guarda los contactos 
     */
    public function save(Request $request){
    
        //Creacion del contacto
        $contacto = new contactos;
        $contacto->nombre=$request->nombre;
        $contacto->cargo=$request->cargo;
        $contacto->cliente_id=$request->cliente_id;

        $contacto->save();

        return response()->json([
            'status'=> '200',
            'message'=> 'Contacto guardado',
            'result'=> $contacto
        ]);
    }
    
    /**
     * Obtener todos los contactos
     */
    public function get(Request $request){

        $contactos = contactos::orderBy('nombre')->get();
        return response()->json([
            'status'=> '200',
            'message'=> $contactos,
        ]);
    }
    
    /**
     * Actualiza la informacion de un contacto por el ID
     */
    public function update(Request $request){
        $contacto = contactos::find($request->id);
        //Actualizacion del cliente
        $contacto->nombre=$request->nombre;
        $contacto->cargo=$request->cargo;
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
        $contacto = contactos::find($id);
        $contacto->delete();

        return response()->json([
            'status'=> '200',
            'message'=> 'Contacto eliminado',
        ]);
    }

    /**
     * Muestra la informacion de un contacto por el ID
     */
    public function show($id){
        $contacto = contactos::find($id);
        return response()->json([
            'status'=> '200',
            'message'=> $contacto,
        ]);
    }
}
