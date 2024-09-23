<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Modelos
use App\Models\contactos_telefonos;

class ContactosTelefonosController extends Controller
{
    //
    /**
     * Guarda telefonos del contacto 
     */
    public function save(Request $request){
    
        //Creacion del usuario
        $contactos_telefonos = new contactos_telefonos;
        $contactos_telefonos->contacto_id=$request->contacto_id;
        $contactos_telefonos->telefono=$request->telefono;
        $contactos_telefonos->save();

        return response()->json([
            'status'=> '200',
            'message'=> 'Telefono del contacto registrado',
            'result'=> $contactos_telefonos
        ]);
    }
    
    /**
     * Obtener todos los Telefonos de los contactos
     */
    public function get(Request $request){

        $contactos_telefonos = contactos_telefonos::orderBy('contacto_id')->get();
        return response()->json([
            'status'=> '200',
            'message'=> $contactos_telefonos,
        ]);
    }
    
    /**
     * Actualiza la informacion de un usuario por el ID
     */
    public function update(Request $request){
        $contactos_telefonos = contactos_telefonos::find($request->id);
        //Actualizacion del usuario
        $contactos_telefonos->contacto_id=$request->contacto_id;
        $contactos_telefonos->telefono=$request->telefono;
        $contactos_telefonos->save();

        return response()->json([
            'status'=> '200',
            'messge'=> 'Actualizacion exitosa',
        ]);
    }
    
    /**
     * Elimina un usuario por el ID
     */
    public function delete($id){
        $contactos_telefonos = contactos_telefonos::find($id);
        $contactos_telefonos->delete();

        return response()->json([
            'status'=> '200',
            'message'=> 'Usuario eliminado',
        ]);
    }

    /**
     * Muestra la informacion de un usuario por el ID
     */
    public function show($id){
        $contactos_telefonos = contactos_telefonos::find($id);
        return response()->json([
            'status'=> '200',
            'message'=> $contactos_telefonos,
        ]);
    }
}
