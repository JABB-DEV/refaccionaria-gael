<?php

namespace App\Http\Controllers;

use App\Refacciones;
use Illuminate\Http\Request;
use App\Tipo;

class TipoController extends Controller
{
    public function index(){
        $tipos = Tipo::all();
        return view('motos.index', compact('tipos'));
    }
    public function create(){
        return view('motos.new');
    }
    public function destroy(Request $request, $id){
        if(sizeof(Refacciones::where('tipo_id', '=', $id)->get()) == 0){
            Tipo::destroy($id);
            \Session::flash('success', 'Registro eliminado de forma exitosa');
        }else{
            \Session::flash('danger', 'No se puede eliminar el tipo de moto porque hay refacciones asociadas');
        }
        return redirect('tipo');
    }
    public function store(Request $request){
        $data = request()->except('_token');
        Tipo::create($data);
        \Session::flash('success', 'Registro almacenado de forma exitosa');
        return redirect('tipo');
    }
    public function edit($id){
        $tipo = Tipo::FindOrFail($id);
        return view('motos.edit', compact('tipo'));
    }
    public function update(Request $request, $id){
        $data = request()->except(['_token', '_method']);
        Tipo::where('id', '=', $id)
        ->update($data);
        \Session::flash('success', 'Registro actualizado de forma exitosa');
        return redirect('tipo');
    }
}
