<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Modelos
use App\Models\Ventas;
class VentasController extends Controller
{
    
    /**
     * Guarda las ventas
     */
    public function save(Request $request){
    
        //Creacion de las Ventas
        $Ventas = new Ventas;

        $Ventas->cliente_id=$request->cliente_id;
        $Ventas->fecha_hora_venta=$request->fecha_hora_venta;
        $Ventas->factura_id=$request->factura_id;
        $Ventas->save();


        return response()->json([
            'status'=> '200',
            'message'=> 'Ventas guardado',
            'result'=> $Ventas
        ]);
    }
    
    /**
     * Obtener todos las Ventas
     */
    public function get(Request $request){

        $Ventas = Ventas::orderBy('id')->get();
        return response()->json([
            'status'=> '200',
            'message'=> $Ventas,
        ]);
    }
    
    /**
     * Actualiza la informacion de una Venta por el ID
     */
    public function update(Request $request){
        $Ventas = Ventas::find($request->id);
        $Ventas->cliente_id=$request->cliente_id;
        $Ventas->fecha_hora_venta=$request->fecha_hora_venta;
        $Ventas->factura_id=$request->factura_id;
        $Ventas->save();



        return response()->json([
            'status'=> '200',
            'messge'=> 'Actualizacion exitosa',
        ]);
    }
    
    /**
     * Elimina una Venta por el ID
     */
    public function delete($id){
        $Ventas = Ventas::find($id);
        $Ventas->delete();

        return response()->json([
            'status'=> '200',
            'message'=> 'Venta eliminado',
        ]);
    }

    /**
     * Muestra la informacion de una Ventas por el ID
     */
    public function show($id){
        $Ventas = Ventas::find($id);
        return response()->json([
            'status'=> '200',
            'message'=> $Ventas,
        ]);
    }
}
