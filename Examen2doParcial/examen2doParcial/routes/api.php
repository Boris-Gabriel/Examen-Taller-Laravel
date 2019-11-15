<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// 4. CRUD insert, update, delete and show
Route::post('proveedor/insert', 'proveedorController@insert');
Route::post('proveedor/update/{id}', 'proveedorController@update');
Route::post('proveedor/delete/{id}', 'proveedorController@delete');
Route::post('proveedor/show', 'proveedorController@show');
// 5. Mostrar productos por categoria
Route::post('producto/mostrarProductosPorCategoria/{categoria}', 'productoController@mostrarProductosPorCategoria');
// 6. Mostrar todos los productos comprados por un cliente, utilizar como parámetro buscador el nombre del cliente
Route::post('venta/mostrarProductosPorCliente/{cliente}', 'ventaController@mostrarProductosPorCliente');
// 7. Mostrar todos los productos proveídos por “Manaco”
Route::post('proveedor/mostrarProductosDeManaco', 'proveedorController@mostrarProductosDeManaco');
// 8. Listar clientes por ciudades
Route::post('cliente/listarClientesPorCiudad/{ciudad}', 'clienteController@listarClientesPorCiudad');
// 9. Listar cantidad de clientes por ciudad
Route::post('cliente/listarCantidadDeClientesPorCiudad/{ciudad}', 'clienteController@listarCantidadDeClientesPorCiudad');
// 10. Mostrar los productos más vendidos
Route::post('venta/mostrarProductosMasVendidos', 'ventaController@mostrarProductosMasVendidos');
// 11. Mostrar las categorías más vendidas por producto
Route::post('categoria/mostrarCategoriasMasVendidasPorProducto', 'categoriaController@mostrarCategoriasMasVendidasPorProducto');
// 12. Mostrar la ciudad que tiene menos clientes
Route::post('cliente/ciudadConMenosClientes', 'clienteController@ciudadConMenosClientes');
// 13. Mostrar la ciudad que compra más productos

// 14. Mostrar el cliente que más frecuente en compras

// 15. Mostrar productos en stock
Route::post('producto/mostrarProductoEnStock', 'productoController@mostrarProductoEnStock');