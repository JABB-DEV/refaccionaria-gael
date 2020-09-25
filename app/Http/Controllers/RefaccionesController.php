<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;
use App\Refacciones;
use Session;


use Illuminate\Support\Facades\Storage;

class RefaccionesController extends Controller
{
    public function index()
    {
     $tipos = Tipo::all();
     return view('refacciones.index', compact('tipos')); 
    }

    public function create()
    {
        $tipos = Tipo::all();
        return view('refacciones.new', compact('tipos'));
    }

    public function store(Request $request)
    {
        $file = request('file');
        if($refacciones = Refacciones::getFileName($file)){
            $request->request->add( ['foto' => $refacciones] );
        }
        $data = request()->except(['_token', 'file']);
        Refacciones::create($data);
        Session::flash('success', 'Registro almacenado de forma exitosa');
        return redirect('refacciones');
    }

    public function show(Request $request, $id)
    {

        //return response(compact('refacciones'), 200);
    }

    public function edit($id)
    {
        $refacciones = Refacciones::query()
        ->leftjoin('tipos', 'refacciones.tipo_id', '=', 'tipos.id')
        ->where('refacciones.id', '=', $id)
        ->get(['tipos.nombre','refacciones.*']);
        $tipos = Tipo::all();
        return view('refacciones.edit')->with(compact(['refacciones','tipos']));
    }

    public function update(Request $request, $id)
    {
        if(request('file') == null){
            $data = $request->except(['_token','_method','foto']);
            Refacciones::where('id','=',$id)->update($data);
            Session::flash('success', 'El producto se actualizo exitosamente');
            return redirect()->route('refacciones.index');
        }

            $file = request('file');
            if($refacciones = Refacciones::getFileName($file)){
                $request->request->add( ['foto' => $refacciones] );
            }
            $data = $request->except(['_token','_method','file']);
            Refacciones::where('id','=',$id)->update($data);
            Session::flash('success', 'El producto se actualizo exitosamente');
            return redirect()->route('refacciones.index');
    }

    public function destroy($id)
    {
        Refacciones::destroy($id);
        Session::flash('danger', 'El producto se eliminó exitosamente');
            return redirect()->route('refacciones.index');
    }
}
