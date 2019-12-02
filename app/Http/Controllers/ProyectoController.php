<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\UsuarioProyecto;
use Illuminate\Support\Facades\DB;

class ProyectoController extends Controller
{
    public function index(){
        $proyectos = Proyecto::all();
        return $proyectos;
   }

    public function agregar(Request $request){
        $proyecto = new Proyecto();
        $proyecto->id_usuario = 1;
        $proyecto->titulo = $request->titulo;
        $proyecto->cliente = $request->cliente;
        $proyecto->f_inicio = $request->f_inicio;
        $proyecto->f_final = $request->f_final;
        $proyecto->condicion = '1';
        $proyecto->save();



        if (!$request->ajax()) return redirect('/');
         
        try{
            DB::beginTransaction();
            $proyecto = new Proyecto();
            $proyecto->titulo = $request->titulo;
            $proyecto->cliente = $request->cliente;
            $proyecto->f_inicio = $request->f_inicio;
            $proyecto->f_final = $request->f_final;
            $proyecto->presupuesto = $request->presupuesto;
            $proyecto->progreso = $request->progreso;
            $proyecto->descripcion = $request->descripcion;
            $proyecto->save();
 
            $usuarioProyecto = new UsuarioProyecto();
            $usuarioProyecto->id_proyecto = $proyecto->id;
            $usuarioProyecto->id_usuario = $request->id_usuario;          
            $usuarioProyecto->save();
 
            DB::commit();
 
        } catch (Exception $e){
            DB::rollBack();
        }
   }


}
