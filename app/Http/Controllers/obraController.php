<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Obra;
use App\Models\Ubicacion;
use Illuminate\Http\Request;

class obraController extends Controller
{
    /*Retorna todas las filas de la tabla. (SELECT * FROM)*/
    public function listarTodos()
    {
        $listaObras = Obra::get();
        $listaUbicaciones = Ubicacion::get();

        return view('iTecnicos', [
            'listaObras' => $listaObras,
            'listaUbicaciones' => $listaUbicaciones
        ]);
    }

    /*Retorna tan solo una fila concreta. (SELECT WHERE ID=x)*/
    public function listarConcreto($id)
    {
        return $obra = Obra::find($id);
    }


    /*Elimina al usuario recibido por POST*/
    public function eliminar(){
        Solicitante::where("ID", request("id"))->delete();

        //Mostrar de nuevo la tabla con los datos
        $lista = Solicitante::get();
        return view("listar", compact("lista"));
    }
}
