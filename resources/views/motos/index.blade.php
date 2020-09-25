@extends('layouts.main')
@section('content')
    <p class="h3 text-center">Tipo de motos</p>

    <div class="row">
        <div class="col-md-4 container">
            <div class="mb-3 mt-3">
            <a href="{{url('tipo/create')}}">Agregar registro</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TIPO</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tipos as $tipo)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $tipo->nombre }}</td>
                        <td>
                            <a href="{{url('tipo/'.$tipo->id.'/edit')}}" class="btn btn-outline-secondary btn-block">Editar</a>
                            <form action="{{url('tipo/'.$tipo->id.'')}}" method="POST" class="form-inline">
                                @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-block mt-2">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        
                        @empty
                            <tr>
                                <td colspan="3" class="text-center text-danger">Sin registros...</td>
                            </tr>
                        
                    @endforelse


                </tbody>
            </table>
        </div>
    </div>
@endsection