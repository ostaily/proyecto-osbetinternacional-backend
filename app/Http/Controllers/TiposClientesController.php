<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Modelos
use App\Models\tipos_clientes;

class TiposClientesController extends Controller
{
    //
    /**
     * Guarda los tipos de clientes 
     */
    public function save(Request $request){
    
        //Creacion del tipo de cliente
        $tipoCliente = new tipos_clientes;
        $tipoCliente->nombre = $request->nombre;
        $tipoCliente->save();

        return response()->json([
            'status'=> '200',
            'message'=> 'Tipo de cliente guardado',
            'result'=> $tipoCliente
        ]);
    }
    
    /**
     * Obtener todos los tipos de clientes
     */
    public function get(Request $request){

        $tipos_clientes = tipos_clientes::orderBy('nombre')->get();
        return response()->json([
            'status'=> '200',
            'message'=> $tipos_clientes,
        ]);
    }
    
    /**
     * Actualiza la informacion de un cliente por el ID
     */
    public function update(Request $request){
        $tipos_clientes = tipos_clientes::find($request->id);
        //Actualizacion del tipo de cliente
        $tipos_clientes->nombre=$request->nombre;
        $tipos_clientes->save();

        return response()->json([
            'status'=> '200',
            'messge'=> 'Actualizacion exitosa',
        ]);
    }
    
    /**
     * Elimina un tipo de cliente por el ID
     */
    public function delete($id){
        $tipos_clientes = tipos_clientes::find($id);
        $tipos_clientes->delete();

        return response()->json([
            'status'=> '200',
            'message'=> 'Tipo de Cliente eliminado',
        ]);
    }

    /**
     * Muestra la informacion de un tipo de cliente por el ID
     */
    public function show($id){
        $tipos_clientes = tipos_clientes::find($id);
        return response()->json([
            'status'=> '200',
            'message'=> $tipos_clientes,
        ]);
    }
}
