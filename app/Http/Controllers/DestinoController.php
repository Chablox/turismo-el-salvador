<?php

namespace App\Http\Controllers;

class DestinoController extends Controller
{
    public function index()
    {
        $ruta = storage_path('app/destinos.json');

        $datos = file_get_contents($ruta);

        $destinos = json_decode($datos, true);

        return view('destinos.index', compact('destinos'));
    }

    public function show($id)
    {
        $ruta = storage_path('app/destinos.json');

        $datos = file_get_contents($ruta);

        $destinos = json_decode($datos, true);

        $destino = collect($destinos)->firstWhere('id', (int) $id);

        if (!$destino) {
            abort(404);
        }

        return view('destinos.show', compact('destino'));
    }
}