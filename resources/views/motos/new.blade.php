@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-6 container">
            <div class="card">
                <div class="card-header">
                    <p class="h3">Ingresa el tipo de moto</p>
                </div>
                <div class="card-body">
                <form action="{{url('tipo')}}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tipo: </label>
                            <input type="text" name="nombre" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection