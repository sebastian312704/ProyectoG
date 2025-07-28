<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdatePerfumeRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.Admin');
    }

    public function Pedido()
    {
       $datos = DB::select("
        SELECT * FROM perfumes1
        UNION
        SELECT * FROM perfumes
        UNION
        SELECT * FROM perfumes2
    ");

    return view('admin.R_Pedidos')->with("datos", $datos);
    
    }

    public function Ver_Pedido()
    {
        return view('admin.V_Pedidos');
    }

    public function Registrar_perfum_hombre()
    {
        $datos = DB::select("select * from perfumes");
        return view('admin.R_P_Hombre')->with("datos", $datos);
    }

    public function Ver_Perfum_H()
    {
        $datos = DB::select("select * from perfumes");
        return view('admin.Ver_Perfum_H')->with("datos", $datos);
    }

    public function Registrar_perfum_mujer()
    {
        $datos = DB::select("select * from perfumes1");
        return view('admin.R_P_mujer')->with("datos", $datos);
    }

    public function Ver_Perfum_M()
    {
        $datos = DB::select("select * from perfumes1");
        return view('admin.Ver_Perfum_M')->with("datos", $datos);
    }

    public function Registrar_perfum_unisex()
    {
        $datos = DB::select("select * from perfumes2");
        return view('admin.R_P_Unisex')->with("datos", $datos);
    }

    public function Ver_Perfum_U()
    {
        $datos = DB::select("select * from perfumes2");
        return view('admin.Ver_Perfum_U')->with("datos", $datos);
    }

    public function create(UpdatePerfumeRequest $request)
    {

        try {
            $sql = DB::insert("insert into perfumes (id, casa, nombre, cantidad, tipo_perfume, frasco_ml, fecha, hora) values(?,?,?,?,?,?,?,?)", [
                $request->txtcodigo,
                $request->txtcasa,
                $request->txtnombre,
                $request->txtcantidad,
                $request->txttipo,
                $request->txtfrasco,
                $request->txtfecha,
                $request->txthora,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("Correcto", "Perfume registrado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al registar el perfume");
        }
    }

    public function update(UpdatePerfumeRequest $request)
    {

        try {
            $sql = DB::update("update perfumes set casa=?, nombre=?, cantidad=?, tipo_perfume=?, frasco_ml=?, fecha=?, hora=? where id=?", [
                $request->txtcasa,
                $request->txtnombre,
                $request->txtcantidad,
                $request->txttipo,
                $request->txtfrasco,
                $request->txtfecha,
                $request->txthora,
                $request->txtcodigo,
            ]);
            if ($sql == 0) {
                $sql = 1;
            }
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("Correcto", "Perfume modificado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al modificar el perfume");
        }
    }

    public function delete($id)
    {
        try {
            $sql = DB::delete("delete from perfumes where id=$id");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("Correcto", "Perfume eliminado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al eliminar el perfume");
        }
    }

    public function create1(UpdatePerfumeRequest $request)
    {

        try {
            $sql = DB::insert("insert into perfumes1 (id, casa, nombre, cantidad, tipo_perfume, frasco_ml, fecha, hora) values(?,?,?,?,?,?,?,?)", [
                $request->txtcodigo,
                $request->txtcasa,
                $request->txtnombre,
                $request->txtcantidad,
                $request->txttipo,
                $request->txtfrasco,
                $request->txtfecha,
                $request->txthora,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("Correcto", "Perfume registrado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al registar el perfume");
        }
    }

    public function update1(UpdatePerfumeRequest $request)
    {

        try {
            $sql = DB::update("update perfumes1 set casa=?, nombre=?, cantidad=?, tipo_perfume=?, frasco_ml=?, fecha=?, hora=? where id=?", [
                $request->txtcasa,
                $request->txtnombre,
                $request->txtcantidad,
                $request->txttipo,
                $request->txtfrasco,
                $request->txtfecha,
                $request->txthora,
                $request->txtcodigo,
            ]);
            if ($sql == 0) {
                $sql = 1;
            }
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("Correcto", "Perfume modificado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al modificar el perfume");
        }
    }

    public function delete1($id)
    {
        try {
            $sql = DB::delete("delete from perfumes1 where id=$id");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("Correcto", "Perfume eliminado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al eliminar el perfume");
        }
    }

    public function create2(UpdatePerfumeRequest $request)
    {

        try {
            $sql = DB::insert("insert into perfumes2 (id, casa, nombre, cantidad, tipo_perfume, frasco_ml, fecha, hora) values(?,?,?,?,?,?,?,?)", [
                $request->txtcodigo,
                $request->txtcasa,
                $request->txtnombre,
                $request->txtcantidad,
                $request->txttipo,
                $request->txtfrasco,
                $request->txtfecha,
                $request->txthora,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("Correcto", "Perfume registrado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al registar el perfume");
        }
    }

    public function update2(UpdatePerfumeRequest $request)
    {

        try {
            $sql = DB::update("update perfumes2 set casa=?, nombre=?, cantidad=?, tipo_perfume=?, frasco_ml=?, fecha=?, hora=? where id=?", [
                $request->txtcasa,
                $request->txtnombre,
                $request->txtcantidad,
                $request->txttipo,
                $request->txtfrasco,
                $request->txtfecha,
                $request->txthora,
                $request->txtcodigo,
            ]);
            if ($sql == 0) {
                $sql = 1;
            }
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("Correcto", "Perfume modificado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al modificar el perfume");
        }
    }

    public function delete2($id)
    {
        try {
            $sql = DB::delete("delete from perfumes2 where id=$id");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("Correcto", "Perfume eliminado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al eliminar el perfume");
        }
    }

    public function updateCantidadFecha(Request $request)
    {
        try {
            $id = $request->txtcodigo;
            $nuevaCantidad = (int) $request->txtcantidad;
            $nuevaFecha = $request->txtfecha;

            // Listado de tablas a actualizar
            $tablas = ['perfumes', 'perfumes1', 'perfumes2'];

            foreach ($tablas as $tabla) {
                // Buscar perfume en la tabla
                $perfume = DB::table($tabla)->where('id', $id)->first();

                if ($perfume) {
                    $cantidadActual = (int) $perfume->cantidad;
                    $cantidadTotal = $cantidadActual + $nuevaCantidad;

                    // Actualizar cantidad y fecha
                    DB::table($tabla)->where('id', $id)->update([
                        'cantidad' => $cantidadTotal,
                        'fecha' => $nuevaFecha
                    ]);
                }
            }

            return back()->with("Correcto", "Cantidad y fecha actualizadas correctamente en todas las tablas");
        } catch (\Throwable $th) {
            return back()->with("Incorrecto", "Error al actualizar una o más tablas");
        }
    }
}
