<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdatePerfumeRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index(){
        return view ('user.User');
    }

     public function index1(){
        return view ('user.User');
    }

     public function Pedido1()
    {
        return view('user.R_Pedidos_U');
    }

    public function Ver_Pedido1()
    {
        return view('user.V_Pedidos_U');
    }

    //vista para ver los perfumes de hombre modo user
    public function Ver_Perfum_H_User()
    {
        $datos = DB::select("select * from perfumes");
        return view('user.V_P_User')->with("datos", $datos);
    }
    //vista para ver los perfumes de mujer modo user
    public function Ver_Perfum_M_User()
    {
        $datos = DB::select("select * from perfumes1");
        return view('user.Ver_Perfum_M_User')->with("datos", $datos);
    }
    //vista para ver los perfumes unisex modo user
    public function Ver_Perfum_U_User()
    {
        $datos = DB::select("select * from perfumes2");
        return view('user.Ver_Perfum_U_User')->with("datos", $datos);
    }
    //vista para registrar los pedidos modo user
    public function Registrar_Pedido_User()
    {
        return view('Registar_P_User');
    }
    //vista para ver los pedidos modo user
    public function Ver_Pedido_User()
    {
        return view('Ver_P_User');
    }

     public function create(UpdatePerfumeRequest $request){
        
        Try{
            $sql=DB::insert("insert into perfumes (id, casa, nombre, cantidad, tipo_perfume, frasco_ml, fecha, hora) values(?,?,?,?,?,?,?,?)" ,[
                $request->txtcodigo,
                $request->txtcasa,
                $request->txtnombre,
                $request->txtcantidad,
                $request->txttipo,
                $request->txtfrasco,
                $request->txtfecha,
                $request->txthora,
            ]);
        }catch (\Throwable $th){
            $sql = 0;
        }
        if ($sql == true){
            return back()->with("Correcto" ,"Perfume registrado correctamente");
        }else{
            return back()->with("Incorrecto" ,"Error al registar el perfume");
        }

    }

    public function update(UpdatePerfumeRequest $request){

        try{
            $sql=DB::update("update perfumes set casa=?, nombre=?, cantidad=?, tipo_perfume=?, frasco_ml=?, fecha=?, hora=? where id=?",[
                $request->txtcasa,
                $request->txtnombre,
                $request->txtcantidad,
                $request->txttipo,
                $request->txtfrasco,
                $request->txtfecha,
                $request->txthora,
                $request->txtcodigo,
            ]);
            if($sql==0){
                $sql=1;
            }
        }catch (\Throwable $th){
            $sql = 0;
        }
        if ($sql == true){
            return back()->with("Correcto" ,"Perfume modificado correctamente");
        }else{
            return back()->with("Incorrecto" ,"Error al modificar el perfume");
        }

    }

    public function delete($id){
        Try{
            $sql=DB::delete("delete from perfumes where id=$id");
        }catch (\Throwable $th){
            $sql = 0;
        }
        if ($sql == true){
            return back()->with("Correcto" ,"Perfume eliminado correctamente");
        }else{
            return back()->with("Incorrecto" ,"Error al eliminar el perfume");
        }
    }

    public function create1(UpdatePerfumeRequest $request){
        
        Try{
            $sql=DB::insert("insert into perfumes1 (id, casa, nombre, cantidad, tipo_perfume, frasco_ml, fecha, hora) values(?,?,?,?,?,?,?,?)" ,[
                $request->txtcodigo,
                $request->txtcasa,
                $request->txtnombre,
                $request->txtcantidad,
                $request->txttipo,
                $request->txtfrasco,
                $request->txtfecha,
                $request->txthora,
            ]);
        }catch (\Throwable $th){
            $sql = 0;
        }
        if ($sql == true){
            return back()->with("Correcto" ,"Perfume registrado correctamente");
        }else{
            return back()->with("Incorrecto" ,"Error al registar el perfume");
        }

    }

    public function update1(UpdatePerfumeRequest $request){

        try{
            $sql=DB::update("update perfumes1 set casa=?, nombre=?, cantidad=?, tipo_perfume=?, frasco_ml=?, fecha=?, hora=? where id=?",[
                $request->txtcasa,
                $request->txtnombre,
                $request->txtcantidad,
                $request->txttipo,
                $request->txtfrasco,
                $request->txtfecha,
                $request->txthora,
                $request->txtcodigo,
            ]);
            if($sql==0){
                $sql=1;
            }
        }catch (\Throwable $th){
            $sql = 0;
        }
        if ($sql == true){
            return back()->with("Correcto" ,"Perfume modificado correctamente");
        }else{
            return back()->with("Incorrecto" ,"Error al modificar el perfume");
        }

    }

    public function delete1($id){
        Try{
            $sql=DB::delete("delete from perfumes1 where id=$id");
        }catch (\Throwable $th){
            $sql = 0;
        }
        if ($sql == true){
            return back()->with("Correcto" ,"Perfume eliminado correctamente");
        }else{
            return back()->with("Incorrecto" ,"Error al eliminar el perfume");
        }
    }

    public function create2(UpdatePerfumeRequest $request){
        
        Try{
            $sql=DB::insert("insert into perfumes2 (id, casa, nombre, cantidad, tipo_perfume, frasco_ml, fecha, hora) values(?,?,?,?,?,?,?,?)" ,[
                $request->txtcodigo,
                $request->txtcasa,
                $request->txtnombre,
                $request->txtcantidad,
                $request->txttipo,
                $request->txtfrasco,
                $request->txtfecha,
                $request->txthora,
            ]);
        }catch (\Throwable $th){
            $sql = 0;
        }
        if ($sql == true){
            return back()->with("Correcto" ,"Perfume registrado correctamente");
        }else{
            return back()->with("Incorrecto" ,"Error al registar el perfume");
        }

    }

    public function update2(UpdatePerfumeRequest $request){

        try{
            $sql=DB::update("update perfumes2 set casa=?, nombre=?, cantidad=?, tipo_perfume=?, frasco_ml=?, fecha=?, hora=? where id=?",[
                $request->txtcasa,
                $request->txtnombre,
                $request->txtcantidad,
                $request->txttipo,
                $request->txtfrasco,
                $request->txtfecha,
                $request->txthora,
                $request->txtcodigo,
            ]);
            if($sql==0){
                $sql=1;
            }
        }catch (\Throwable $th){
            $sql = 0;
        }
        if ($sql == true){
            return back()->with("Correcto" ,"Perfume modificado correctamente");
        }else{
            return back()->with("Incorrecto" ,"Error al modificar el perfume");
        }

    }

    public function delete2($id){
        Try{
            $sql=DB::delete("delete from perfumes2 where id=$id");
        }catch (\Throwable $th){
            $sql = 0;
        }
        if ($sql == true){
            return back()->with("Correcto" ,"Perfume eliminado correctamente");
        }else{
            return back()->with("Incorrecto" ,"Error al eliminar el perfume");
        }
    }
}
