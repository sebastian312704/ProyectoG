<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\NotificacionController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//RUTAS ADMINISTRADOR

Route::resource('admin/dashboard', controller: AdminController::class)
    ->middleware(['auth','role:admin']);

Route::get("/Administrador", [AdminController::class,"index"])->name("index");
route::get("/Registra_Perfume_Hombre", [AdminController::class, "Registrar_perfum_hombre"])->name("Registrar_perfum_hombre");
route::get("/Ver_Perfumes_Hombre", [AdminController::class,"Ver_Perfum_H"])->name("Ver_Perfum_H");
route::get("/Registra_Perfume_mujer", [AdminController::class,"Registrar_perfum_mujer"])->name("Registrar_perfum_mujer");
route::get("/Ver_Perfumes_Mujer", [AdminController::class,"Ver_Perfum_M"])->name("Ver_Perfum_M");
route::get("/Registar_Perfume_Unisex", [AdminController::class,"Registrar_perfum_unisex"])->name("Registrar_perfum_unisex");
route::get("/Ver_Perfume_Unisex", [AdminController::class,"Ver_Perfum_U"])->name("Ver_Perfum_U");
route::get("/Registar_Pedido", [AdminController::class,"Pedido"])->name("Pedido");
route::get("/Ver_Pedido", [AdminController::class,"Ver_Pedido"])->name("Ver_Pedido");


//RUTAS USER

Route::resource('user/dashboard', UserController::class)
    ->middleware(['auth','role:user']);

Route::get("/Usuario", [UserController::class,"index1"])->name("index1");
Route::get("/Ver-perfumes-hombre-user", [UserController::class,"Ver_Perfum_H_User"])->name("Ver_Perfum_H_User");
Route::get("/Ver-perfumes-mujer-user", [UserController::class,"Ver_Perfum_M_User"])->name("Ver_Perfum_M_User");
Route::get("/Ver-perfumes-unisex-user", [UserController::class,"Ver_Perfum_U_User"])->name("Ver_Perfum_U_User");
Route::get("/Registrar-pedidos-user", [UserController::class,"Pedido1"])->name("Pedido1");
Route::get("/Ver-pedidos-user", [UserController::class,"Ver_Pedido1"])->name("Ver_Pedido1");

//rutas de crear
route::post("/registar perfume hombre", [AdminController::class, "create"])->name("crud.create");
route::post("/registar perfume mujer", [AdminController::class, "create1"])->name("crud.create1");
route::post("/registar perfume unisex", [AdminController::class, "create2"])->name("crud.create2");
route::post("/registar usuario", [AdminController::class, "createUsers"])->name("crud.createUsers");


//rutas de editar
route::post("/modificar perfume hombre", [AdminController::class, "update"])->name("crud.update");
route::post("/modificar perfume mujer", [AdminController::class, "update1"])->name("crud.update1");
route::post("/modificar perfume unisex", [AdminController::class, "update2"])->name("crud.update2");
route::post("/modificar usuario", [AdminController::class, "updateUsers"])->name("crud.updateUsers");

//rutas para eliminar
route::get("/eliminar perfume hombre--{id}", [AdminController::class, "delete"])->name("crud.delete");
route::get("/eliminar perfume mujer--{id}", [AdminController::class, "delete1"])->name("crud.delete1");
route::get("/eliminar perfume unisex--{id}", [AdminController::class, "delete2"])->name("crud.delete2");
route::get("/eliminar usuario--{id}", [AdminController::class, "deleteUsers"])->name("crud.deleteUsers");

Route::post('/perfume/updateCantidadFecha', [AdminController::class, 'updateCantidadFecha'])->name('updateCantidadFecha');
Route::post('/registrar-pedido', [PedidoController::class, 'store'])->name('registrar.pedido');




