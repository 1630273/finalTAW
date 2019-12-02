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
        
        if (!$request->ajax()) return redirect('/');
         
        try{
            DB::beginTransaction();
            $proyecto = new Proyecto();
            $proyecto->id_creador = $request->id_creador;
            $proyecto->titulo = $request->titulo;
            $proyecto->cliente = $request->cliente;
            $proyecto->presupuesto = $request->presupuesto;
            $proyecto->progreso = $request->progreso;
            $proyecto->descripcion = $request->descripcion;
            $proyecto->f_inicio = $request->f_inicio;
            $proyecto->f_final = $request->f_final;
            
            $proyecto->save();
 
            $usuarioProyecto = new UsuarioProyecto();
            $usuarioProyecto->id_proyecto = $proyecto->id;
            $usuarioProyecto->id_creador = $request->id_creador;          
            $usuarioProyecto->save();
 
            DB::commit();
 
        } catch (Exception $e){
            DB::rollBack();
        }
   }

   public function pausar(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $proyecto = Proyecto::findOrFail($request->id);
        $proyecto->condicion = '2';
        $proyecto->save();
    }

    public function activar(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $proyecto = Proyecto::findOrFail($request->id);
        $proyecto->condicion = '1';
        $proyecto->save();
    }

    public function eliminar(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $proyecto = Proyecto::findOrFail($request->id);
        $proyecto->condicion = '0';
        $proyecto->save();
    }

    public function vista(){
        return redirect('/main');
    }


}
