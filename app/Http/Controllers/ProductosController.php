<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Modelos
use App\Models\productos;

class ProductosController extends Controller
{
    //
    /**
     * Guarda los productos
     */
    public function save(Request $request){
    
        //Creacion del producto
        $productos = new productos;
        $productos->tipo_producto_id  = $request->tipo_producto_id;
        $productos->color_id  = $request->color_id;
        $productos->talla_id  = $request->talla_id;
        $productos->tela_id  = $request->tela_id;
        $productos->descripcion  = $request->descripcion;
        $productos->es_estampado  = $request->es_estampado;
        $productos->valor_venta  = $request->valor_venta;
        $productos->impuesto_id  = $request->impuesto_id;

        $productos->save();

        return response()->json([
            'status'=> '200',
            'message'=> 'Telefono del contacto registrado',
            'result'=> $productos
        ]);
    }
    
    /**
     * Obtener todos los Telefonos de los contactos
     */
    public function get(Request $request){

        $productos = productos::orderBy('id')->get();
        return response()->json([
            'status'=> '200',
            'message'=> $productos,
        ]);
    }
    
    /**
     * Actualiza la informacion de un usuario por el ID
     */
    public function update(Request $request){
        $productos = productos::find($request->id);
        //Actualizacion del usuario
        $productos->tipo_producto_id  = $request->tipo_producto_id;
        $productos->color_id  = $request->color_id;
        $productos->talla_id  = $request->talla_id;
        $productos->tela_id  = $request->tela_id;
        $productos->descripcion  = $request->descripcion;
        $productos->es_estampado  = $request->es_estampado;
        $productos->valor_venta  = $request->valor_venta;
        $productos->impuesto_id  = $request->impuesto_id;
        $productos->save();

        return response()->json([
            'status'=> '200',
            'messge'=> 'Actualizacion exitosa',
        ]);
    }
    
    /**
     * Elimina un usuario por el ID
     */
    public function delete($id){
        $productos = productos::find($id);
        $productos->delete();

        return response()->json([
            'status'=> '200',
            'message'=> 'Usuario eliminado',
        ]);
    }

    /**
     * Muestra la informacion de un usuario por el ID
     */
    public function show($id){
        $productos = productos::find($id);
        return response()->json([
            'status'=> '200',
            'message'=> $productos,
        ]);
    }
}
