<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ColoresController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\ImpuestosController;
use App\Http\Controllers\TallasController;
use App\Http\Controllers\TelasController;
use App\Http\Controllers\TiposClientesController;
use App\Http\Controllers\TiposFacturasController;
use App\Http\Controllers\TiposProductosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ContactosTelefonosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\FacturasController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\VentasDetallesController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/////////////////////////////////////////////
////////////////// CLIENTES /////////////////
/////////////////////////////////////////////
Route::post('/clientes', [ClientesController::class, 'save']);//Api para crear un cliente
Route::get('/clientes', [ClientesController::class, 'get']);//Api para obtener todos los clientes
Route::get('/cliente/{id}', [ClientesController::class, 'show']);//Api para obtener la informacion del cliente
Route::patch('/clientes', [ClientesController::class, 'update']);//Actualiza la informacion de un cliente
Route::delete('/clientes/{id}', [ClientesController::class, 'delete']);//Elimina un cliente

/////////////////////////////////////////////
////////////////// COLORES //////////////////
/////////////////////////////////////////////
Route::post('/colores', [ColoresController::class, 'save']);//Api para crear un color
Route::get('/colores', [ColoresController::class, 'get']);//Api para obtener todos los colores
Route::get('/color/{id}', [ColoresController::class, 'show']);//Api para obtener la informacion de un color
Route::patch('/colores', [ColoresController::class, 'update']);//Actualiza la informacion de un color
Route::delete('/colores/{id}', [ColoresController::class, 'delete']);//Elimina un color

/////////////////////////////////////////////
////////////////// CONTACTOS ////////////////
/////////////////////////////////////////////
Route::post('/contactos', [ContactosController::class, 'save']);//Api para crear un contacto
Route::get('/contactos', [ContactosController::class, 'get']);//Api para obtener todos los contactos
Route::get('/contacto/{id}', [ContactosController::class, 'show']);//Api para obtener la informacion de un contacto
Route::patch('/contactos', [ContactosController::class, 'update']);//Actualiza la informacion de un contacto
Route::delete('/contactos/{id}', [ContactosController::class, 'delete']);//Elimina un contacto

/////////////////////////////////////////////
////////////////// IMPUESTOS ////////////////
/////////////////////////////////////////////
Route::post('/impuestos', [ImpuestosController::class, 'save']);//Api para crear un impuesto
Route::get('/impuestos', [ImpuestosController::class, 'get']);//Api para obtener todos los impuestos
Route::get('/impuesto/{id}', [ImpuestosController::class, 'show']);//Api para obtener la informacion de un impuesto
Route::patch('/impuestos', [ImpuestosController::class, 'update']);//Actualiza la informacion de un impuesto
Route::delete('/impuestos/{id}', [ImpuestosController::class, 'delete']);//Elimina un impuesto

/////////////////////////////////////////////
////////////////// TALLAS ////////////////
/////////////////////////////////////////////
Route::post('/tallas', [TallasController::class, 'save']);//Api para crear un tallas
Route::get('/tallas', [TallasController::class, 'get']);//Api para obtener todos los impuestos
Route::get('/talla/{id}', [TallasController::class, 'show']);//Api para obtener la informacion de un impuesto
Route::patch('/tallas', [TallasController::class, 'update']);//Actualiza la informacion de un impuesto
Route::delete('/tallas/{id}', [TallasController::class, 'delete']);//Elimina un impuesto

/////////////////////////////////////////////
////////////////// TELAS ////////////////////
/////////////////////////////////////////////
Route::post('/telas', [TelasController::class, 'save']);//Api para crear un telas
Route::get('/telas', [TelasController::class, 'get']);//Api para obtener todos los telas
Route::get('/tela/{id}', [TelasController::class, 'show']);//Api para obtener la informacion de un telas
Route::patch('/telas', [TelasController::class, 'update']);//Actualiza la informacion de un telas
Route::delete('/telas/{id}', [TelasController::class, 'delete']);//Elimina un telas


/////////////////////////////////////////////
////////////// TIPOS CLIENTES ///////////////
/////////////////////////////////////////////
Route::post('/tipos_clientes', [TiposClientesController::class, 'save']);//Api para crear un tipo de cliente
Route::get('/tipos_clientes', [TiposClientesController::class, 'get']);//Api para obtener todos los tipos de clientes
Route::get('/tipo_cliente/{id}', [TiposClientesController::class, 'show']);//Api para obtener la informacion de un tipo de cliente
Route::patch('/tipos_clientes', [TiposClientesController::class, 'update']);//Actualiza la informacion de un tipo de cliente
Route::delete('/tipos_clientes/{id}', [TiposClientesController::class, 'delete']);//Elimina un tipo de cliente



/////////////////////////////////////////////
////////////// TIPOS FACTURAS ///////////////
/////////////////////////////////////////////
Route::post('/tipos_facturas', [TiposFacturasController::class, 'save']);//Api para crear un tipo de facturas'
Route::get('/tipos_facturas', [TiposFacturasController::class, 'get']);//Api para obtener todos los tipos de facturas'
Route::get('/tipo_factura/{id}', [TiposFacturasController::class, 'show']);//Api para obtener la informacion de un tipo de facturas'
Route::patch('/tipos_facturas', [TiposFacturasController::class, 'update']);//Actualiza la informacion de un tipo de facturas'
Route::delete('/tipos_facturas/{id}', [TiposFacturasController::class, 'delete']);//Elimina un tipo de facturas'


/////////////////////////////////////////////
////////////// TIPOS PRODUCTOS ///////////////
/////////////////////////////////////////////
Route::post('/tipos_productos', [TiposProductosController::class, 'save']);//Api para crear un tipo de productos
Route::get('/tipos_productos', [TiposProductosController::class, 'get']);//Api para obtener todos los tipos de productos
Route::get('/tipo_producto/{id}', [TiposProductosController::class, 'show']);//Api para obtener la informacion de un tipo de productos
Route::patch('/tipos_productos', [TiposProductosController::class, 'update']);//Actualiza la informacion de un tipo de productos
Route::delete('/tipos_productos/{id}', [TiposProductosController::class, 'delete']);//Elimina un tipo de productos

/////////////////////////////////////////////
////////////////// USUARIOS /////////////////
/////////////////////////////////////////////
Route::post('/usuarios', [UsuariosController::class, 'save']);//Api para crear un usuario
Route::get('/usuarios', [UsuariosController::class, 'get']);//Api para obtener todos usuarios
Route::get('/usuario/{id}', [UsuariosController::class, 'show']);//Api para obtener la informacion de un usuario
Route::patch('/usuarios', [UsuariosController::class, 'update']);//Actualiza la informacion de un usuario
Route::delete('/usuarios/{id}', [UsuariosController::class, 'delete']);//Elimina un usuario

/////////////////////////////////////////////
//////// CONTACTOS TELEFONOS ////////////////
/////////////////////////////////////////////
Route::post('/contactos_telefonos', [ContactosTelefonosController::class, 'save']);//Api para crear un usuario
Route::get('/contactos_telefonos', [ContactosTelefonosController::class, 'get']);//Api para obtener todos usuarios
Route::get('/contacto_telefono/{id}', [ContactosTelefonosController::class, 'show']);//Api para obtener la informacion de un usuario
Route::patch('/contactos_telefonos', [ContactosTelefonosController::class, 'update']);//Actualiza la informacion de un usuario
Route::delete('/contactos_telefonos/{id}', [ContactosTelefonosController::class, 'delete']);//Elimina un usuario

/////////////////////////////////////////////
////////////// PRODUCTOS ////////////////////
/////////////////////////////////////////////
Route::post('/productos', [ProductosController::class, 'save']);//Api para crear un producto
Route::get('/productos', [ProductosController::class, 'get']);//Api para obtener todos productos
Route::get('/producto/{id}', [ProductosController::class, 'show']);//Api para obtener la informacion de un producto
Route::patch('/productos', [ProductosController::class, 'update']);//Actualiza la informacion de un producto
Route::delete('/productos/{id}', [ProductosController::class, 'delete']);//Elimina un producto

/////////////////////////////////////////////
////////////// FACTURAS ////////////////////
/////////////////////////////////////////////
Route::post('/facturas', [FacturasController::class, 'save']);//Api para crear un factura
Route::get('/facturas', [FacturasController::class, 'get']);//Api para obtener todos facturas
Route::get('/factura/{id}', [FacturasController::class, 'show']);//Api para obtener la informacion de un factura
Route::patch('/facturas', [FacturasController::class, 'update']);//Actualiza la informacion de un factura
Route::delete('/facturas/{id}', [FacturasController::class, 'delete']);//Elimina un factura

/////////////////////////////////////////////
////////////// VENTAS ////////////////////
/////////////////////////////////////////////
Route::post('/Ventas', [VentasController::class, 'save']);//Api para crear una Ventas
Route::get('/Ventas', [VentasController::class, 'get']);//Api para obtener todas Ventas
Route::get('/Venta/{id}', [VentasController::class, 'show']);//Api para obtener la informacion de una Venta
Route::patch('/Ventas', [VentasController::class, 'update']);//Actualiza la informacion de una Ventas
Route::delete('/Ventas/{id}', [VentasController::class, 'delete']);//Elimina una Ventas

////////////////////////////////////////////
////////////// VENTAS_DETALLES ////////////////////
/////////////////////////////////////////////
Route::post('/ventas_detalles', [VentasDetallesController::class, 'save']);//Api para crear una Ventas
Route::get('/ventas_detalles', [VentasDetallesController::class, 'get']);//Api para obtener todas Ventas
Route::get('/venta_detalle/{id}', [VentasDetallesController::class, 'show']);//Api para obtener la informacion de una Venta
Route::patch('/ventas_detalles', [VentasDetallesController::class, 'update']);//Actualiza la informacion de una Ventas
Route::delete('/ventas_detalles/{id}', [VentasDetallesController::class, 'delete']);//Elimina una Ventas