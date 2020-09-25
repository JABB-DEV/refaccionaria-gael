@extends('layouts.main')
@section('content')
        @forelse ($refacciones as $refaccion)
        <div class="row">
        <div class="col-md-6 container">
            <div class="card">
                <div class="card-header">
                    <p class="h3">Ingresa el tipo de moto</p>
                </div>
                <div class="card-body">
                <form action="{{url('refacciones/'.$refaccion->id.'')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="tipo_id">Tipo de moto: </label>
                            <select name="tipo_id" id="tipo_id" class="form-control" required>
                                <option value="">Seleccione el tipo de moto</option>
                                @foreach ($tipos as $tipo)
                                    <option value="{{$tipo->id}}" @if ($tipo->id == $refaccion->tipo_id) {{'selected'}} @endif >{{$tipo->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cilindraje">Ingresa el cilindraje</label>
                        <input type="text" name="cilindraje" class="form-control" value="{{$refaccion->cilindraje}}" required>
                        </div>
                        <div class="form-group">
                            <label for="year">Ingresa el año</label>
                        <input type="text" name="year" class="form-control" value="{{$refaccion->year}}" required>
                        </div>
                        <div class="form-group">
                            <label for="modelo">Ingresa el modelo</label>
                            <input type="text" name="modelo" class="form-control" value="{{$refaccion->modelo}}" required>
                        </div>
                        <div class="form-group">
                            <label for="color">Ingresa el color</label>
                            <input type="text" name="color" class="form-control" value="{{$refaccion->color}}" required>
                        </div>
                        <div class="form-group">
                            <label for="sistema">Ingresa el sistema</label>
                            <input type="text" name="sistema" class="form-control" value="{{$refaccion->sistema}}" required>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" name="file" value="{{ asset('storage/imagenes/caratulas/'.$refaccion->foto) }}" alt="Imagen" class="form-control" accept="image/png, .jpeg, .jpg, image/gif">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        @empty
        <div class="alert alert-danger" role="alert">
            No hay registros
        </div>
        @endforelse
@endsection