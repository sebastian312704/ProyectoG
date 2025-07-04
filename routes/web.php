<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//RUTAS ADMINISTRADOR

Route::resource('admin/dashboard', controller: AdminController::class)
    ->middleware(['auth','role:admin']);

Route::get("/Administrador", [AdminController::class,"index"])->name("index");
Route::get("/Registar_Usuarios", [AdminController::class,"Registrar_Usuarios"])->name("Registrar_Usuarios");
Route::get("/Ver_Usuarios", [AdminController::class,"Ver_Usuarios"])->name("Ver_Usuarios");
route::get("/Registra_Perfume_Hombre", [AdminController::class, "Registrar_perfum_hombre"])->name("Registrar_perfum_hombre");
route::get("/Ver_Perfumes_Hombre", [AdminController::class,"Ver_Perfum_H"])->name("Ver_Perfum_H");
route::get("/Registra_Perfume_mujer", [AdminController::class,"Registrar_perfum_mujer"])->name("Registrar_perfum_mujer");
route::get("/Ver_Perfumes_Mujer", [AdminController::class,"Ver_Perfum_M"])->name("Ver_Perfum_M");
route::get("/Registar_Perfume_Unisex", [AdminController::class,"Registrar_perfum_unisex"])->name("Registrar_perfum_unisex");
route::get("/Ver_Perfume_Unisex", [AdminController::class,"Ver_Perfum_U"])->name("Ver_Perfum_U");
route::get("/Registar_Pedido", [AdminController::class,"Registrar_Pedido"])->name("Registrar_Pedido");
route::get("/Ver_Pedido", [AdminController::class,"Ver_Pedido"])->name("Ver_Pedido");


//RUTAS USER

Route::resource('user/dashboard', UserController::class)
    ->middleware(['auth','role:user']);

Route::get("/Usuario", [UserController::class,"index1"])->name("index1");
Route::get("/Ver-usuarios-user", [UserController::class,"Ver_Usuarios_user"])->name("Ver_Usuarios_user");
Route::get("/Ver-perfumes-hombre-user", [UserController::class,"Ver_Perfum_H_User"])->name("Ver_Perfum_H_User");
Route::get("/Ver-perfumes-mujer-user", [UserController::class,"Ver_Perfum_M_User"])->name("Ver_Perfum_M_User");
Route::get("/Ver-perfumes-unisex-user", [UserController::class,"Ver_Perfum_U_User"])->name("Ver_Perfum_U_User");
Route::get("/Registrar-pedidos-user", [UserController::class,"Registrar_Pedido_User"])->name("Registrar_Pedido_User");
Route::get("/Ver-pedidos-user", [UserController::class,"Ver_Pedido_User"])->name("Ver_Pedido_User");

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



