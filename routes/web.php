<?php

use Illuminate\Support\Facades\Route;
use App\Refacciones;

Route::get('/', function () {
    return view('home');
});

Route::resource("refacciones", "RefaccionesController");


Route::post('/showSelect', function(){
    $data = request()->except(['_token', 'tipo', 'destino']);
    $refacciones = Refacciones::queryGenerator(request('destino'), request('tipo'), $data);
    return response($refacciones, 200);
});

Route::post('/showO', function(){
    $data = request()->except(['_token', 'tipo']);
    $refacciones = Refacciones::queryGenerator('*', request('tipo'), $data);
    return view('refacciones.visualizar')->with(compact('refacciones'));
});

Route::post('/buscador', function(){
    $data = request()->except(['_token']);
    $refacciones = Refacciones::queryGenerator('refacciones.*, tipos.nombre as nombre', '', $data);
    if(sizeof($refacciones)  == 0){
        session()->flash('danger', 'No se encontraron registros');
        return redirect('/');
    }
    return view('refacciones.visualizar')->with(compact('refacciones'));
});

Route::resource('tipo', 'TipoController');