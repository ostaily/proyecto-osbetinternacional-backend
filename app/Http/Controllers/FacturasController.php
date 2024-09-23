<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Modelos
use App\Models\facturas;

class FacturasController extends Controller
{
    //
    /**
     * Guarda los facturas
     */
    public function save(Request $request){
    
        //Creacion de la factura
        $facturas = new facturas;
        $facturas->prefijo  = $request->prefijo;
        $facturas->numero_factura  = $request->numero_factura;
        $facturas->tipo_factura_id  = $request->tipo_factura_id;

        $facturas->save();

        return response()->json([
            'status'=> '200',
            'message'=> 'Factura registrada',
            'result'=> $facturas
        ]);
    }
    
    /**
     * Obtener todos los Telefonos de los contactos
     */
    public function get(Request $request){

        $facturas = facturas::orderBy('id')->get();
        return response()->json([
            'status'=> '200',
            'message'=> $facturas,
        ]);
    }
    
    /**
     * Actualiza la informacion de un usuario por el ID
     */
    public function update(Request $request){
        $facturas = facturas::find($request->id);
        //Actualizacion del usuario
        $facturas->prefijo  = $request->prefijo;
        $facturas->numero_factura  = $request->numero_factura;
        $facturas->tipo_factura_id  = $request->tipo_factura_id;
        $facturas->save();

        return response()->json([
            'status'=> '200',
            'messge'=> 'Actualizacion exitosa',
        ]);
    }
    
    /**
     * Elimina un usuario por el ID
     */
    public function delete($id){
        $facturas = facturas::find($id);
        $facturas->delete();

        return response()->json([
            'status'=> '200',
            'message'=> 'Usuario eliminado',
        ]);
    }

    /**
     * Muestra la informacion de un usuario por el ID
     */
    public function show($id){
        $facturas = facturas::find($id);
        return response()->json([
            'status'=> '200',
            'message'=> $facturas,
        ]);
    }
}
