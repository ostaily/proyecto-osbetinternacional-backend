<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Modelos
use App\Models\ventas_detalles;

class VentasDetallesController extends Controller
{
    ///**Guardar las ventas_detalles//


    public function save(Request $request){
    
        //Creacion de las ventas_detalles
        $ventas_detalles = new ventas_detalles;
        $ventas_detalles->venta_id=$request->venta_id;
        $ventas_detalles->producto_id=$request->producto_id;
        $ventas_detalles->cantidad=$request->cantidad;
        $ventas_detalles->valor_unitario=$request->valor_unitario;
        $ventas_detalles->impuesto_id=$request->impuesto_id;
        $ventas_detalles->save();


        return response()->json([
            'status'=> '200',
            'message'=> 'ventas_detalles guardado',
            'result'=> $ventas_detalles
        ]);
    }
    
    /**
     * Obtener todos las ventas_detalles
     */
    public function get(Request $request){

        $ventas_detalles = ventas_detalles::orderBy('id')->get();
        return response()->json([
            'status'=> '200',
            'message'=> $ventas_detalles,
        ]);
    }
    
    /**
     * Actualiza la informacion de una Venta por el ID
     */
    public function update(Request $request){
        $ventas_detalles = ventas_detalles::find($request->id);
        $ventas_detalles->venta_id=$request->venta_id;
        $ventas_detalles->producto_id=$request->producto_id;
        $ventas_detalles->cantidad=$request->cantidad;
        $ventas_detalles->valor_unitario=$request->valor_unitario;
        $ventas_detalles->impuesto_id=$request->impuesto_id;
        $ventas_detalles->save();

        return response()->json([
            'status'=> '200',
            'messge'=> 'Actualizacion exitosa',
        ]);
    }
    
    /**
     * Elimina una Venta por el ID
     */
    public function delete($id){
        $ventas_detalles = ventas_detalles::find($id);
        $ventas_detalles->delete();

        return response()->json([
            'status'=> '200',
            'message'=> 'Venta eliminado',
        ]);
    }

    /**
     * Muestra la informacion de una ventas_detalles por el ID
     */
    public function show($id){
        $ventas_detalles = ventas_detalles::find($id);
        return response()->json([
            'status'=> '200',
            'message'=> $ventas_detalles,
        ]);
    }
}
