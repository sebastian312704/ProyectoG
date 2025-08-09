<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    public function store(Request $request)
    {
        // Obtener datos del cliente
        $nombreCliente = $request->input('nombre_completo');
        $celular = $request->input('celular');
        $direccion = $request->input('direccion');

        // Obtener los perfumes seleccionados y sus cantidades
        $seleccionados = $request->input('seleccionados', []);
        $cantidades = $request->input('cantidades', []);

        // Validar que haya perfumes seleccionados
        if (empty($seleccionados)) {
            return redirect()->back()->with('error', 'Debes seleccionar al menos un perfume.');
        }

        // Tablas posibles
        $tablas = ['perfumes', 'perfumes1', 'perfumes2'];

        foreach ($seleccionados as $id) {
            $cantidadPedido = isset($cantidades[$id]) ? intval($cantidades[$id]) : 0;

            if ($cantidadPedido > 0) {
                $perfume = null;
                $tablaEncontrada = null;

                // Buscar el perfume en cada tabla
                foreach ($tablas as $tabla) {
                    $perfume = DB::table($tabla)->where('id', $id)->first();
                    if ($perfume) {
                        $tablaEncontrada = $tabla;
                        break;
                    }
                }

                // Si se encontró el perfume y la cantidad es válida, registrar pedido y descontar stock
                if ($perfume) {
                    DB::table('pedidos')->insert([
                        'nombre_completo' => $nombreCliente,
                        'celular'         => $celular,
                        'direccion'       => $direccion,
                        'casa'            => $perfume->casa,
                        'nombre'          => $perfume->nombre,
                        'cantidad'        => $cantidadPedido,
                        'tipo_perfume'    => $perfume->tipo_perfume,
                        'frasco_ml'       => $perfume->frasco_ml,
                        'created_at'      => now(),
                    ]);

                    // Actualizar stock en la tabla correspondiente
                    DB::table($tablaEncontrada)
                        ->where('id', $id)
                        ->decrement('cantidad', $cantidadPedido);
                }
            }
        }

        return redirect()->back()->with('success', 'Pedido registrado exitosamente.');
    }
}
