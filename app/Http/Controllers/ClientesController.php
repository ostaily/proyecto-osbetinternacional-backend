<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Modelos
use App\Models\clientes;

class ClientesController extends Controller
{
    /**
     * Guarda los clientes 
     */
    public function save(Request $request){
    
        //Creacion del cliente
        $cliente = new clientes;
        $cliente->nombre=$request->nombre;
        $cliente->direccion=$request->direccion;
        $cliente->telefono=$request->telefono;
        $cliente->correo=$request->correo;
        $cliente->nit=$request->nit;
        $cliente->tipo_cliente_id=$request->tipo_cliente_id;
        $cliente->save();

        return response()->json([
            'status'=> '200',
            'message'=> 'Cliente guardado',
            'result'=> $cliente
        ]);
    }
    
    /**
     * Obtener todos los clientes
     */
    public function get(Request $request){

        $clientes = clientes::orderBy('nombre')->get();
        return response()->json([
            'status'=> '200',
            'message'=> $clientes,
        ]);
    }
    
    /**
     * Actualiza la informacion de un cliente por el ID
     */
    public function update(Request $request){
        $cliente = clientes::find($request->id);
        //Actualizacion del cliente
        $cliente->nombre=$request->nombre;
        $cliente->direccion=$request->direccion;
        $cliente->telefono=$request->telefono;
        $cliente->correo=$request->correo;
        $cliente->nit=$request->nit;
        $cliente->tipo_cliente_id=$request->tipo_cliente_id;
        $cliente->save();

        return response()->json([
            'status'=> '200',
            'messge'=> 'Actualizacion exitosa',
        ]);
    }
    
    /**
     * Elimina un cliente por el ID
     */
    public function delete($id){
        $cliente = clientes::find($id);
        $cliente->delete();

        return response()->json([
            'status'=> '200',
            'message'=> 'Cliente eliminado',
        ]);
    }

    /**
     * Muestra la informacion de un cliente por el ID
     */
    public function show($id){
        $cliente = clientes::find($id);
        return response()->json([
            'status'=> '200',
            'message'=> $cliente,
        ]);
    }
}