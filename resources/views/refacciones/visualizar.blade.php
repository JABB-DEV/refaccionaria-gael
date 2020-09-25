@extends('layouts.main')
@section('content')
    <div class="row">
        @foreach ($refacciones as $refaccion)
            <div class="col-md-4 container mt-1">
                <div class="card">
                    <img class="img-rounded" src="{{ asset('storage/imagenes/caratulas/'.$refaccion->foto) }}"alt="Card image cap">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Tipo de moto: </label>
                            <input type="text" class="form-control" value="{{ $refaccion->nombre}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Cilindraje: </label>
                            <input type="text" class="form-control" value="{{$refaccion->cilindraje}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Año: </label>
                            <input type="text" class="form-control" value="{{$refaccion->year}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Modelo: </label>
                            <input type="text" class="form-control" value="{{$refaccion->modelo}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Color: </label>
                            <input type="text" class="form-control" value="{{$refaccion->color}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Sistema: </label>
                            <input type="text" class="form-control" value="{{$refaccion->sistema}}" readonly>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{url('refacciones/'.$refaccion->id.'/edit')}}" class="btn btn-secondary btn-block">Editar</a>
                        <form action="{{url('refacciones/'.$refaccion->id.'')}}" method="POST" class="form-inline">
                            @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-block mt-2">Eliminar</button>
                            </form>
                    </div>
                </div>
            </div> 
        @endforeach
    </div>
@endsection