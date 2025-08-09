<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    public function index()
    {
        $tablas = ['perfumes', 'perfumes1', 'perfumes2'];
        $stockBajo = [];

        foreach ($tablas as $tabla) {
            // Verificamos si la tabla existe (opcional pero recomendable)
            if (DB::getSchemaBuilder()->hasTable($tabla)) {
                $resultados = DB::table($tabla)
                    ->where('cantidad', '<', 20)
                    ->get();

                foreach ($resultados as $perfume) {
                    $stockBajo[] = [
                        'tabla' => $tabla,
                        'nombre' => $perfume->nombre ?? 'Sin nombre',
                        'cantidad' => $perfume->cantidad ?? 0,
                    ];
                }
            }
        }

        // Retorna la vista del dashboard con las notificaciones
        //return view('index', compact('stockBajo'));
    }
}
