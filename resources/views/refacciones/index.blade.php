@extends('layouts.main')

@section('content')
<div class="mt-2 mb-2 container text-center">
<a href="{{url('refacciones/create')}}">Agregar una nueva refacción</a>
</div>
    <form action="{{url('/showO')}}" method="post" id="formulario">
        @csrf
        <div class="row">
        <div class="col-md-3 col-lg-3 mt-2">
            <div class="card">
                <div class="card-header">
                    <select name="tipo" id="tipo" class="form-control" onchange="cambio(this,window.cilindraje, window.tipo_estado, 'tipo')" required>
                        <option value="">Selecciones una opción</option>
                        @foreach ($tipos as $tipo)
                    <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset('img/minus.jpg')}}" id="tipo_estado" class="rounded" alt="minus" width="50" height="50">
                        <p class="mt-1">Selecciona el tipo de moto</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 mt-2">
            <div class="card">
                <div class="card-header">
                    <select name="cilindraje" id="cilindraje" class="form-control" onchange="cambio(this,window.year, window.cilindraje_estado, 'cilindraje')">
                        <option value="">Cilindraje</option>
                    </select>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset('img/minus.jpg')}}" id="cilindraje_estado" class="rounded" alt="minus" width="50" height="50">
                        <p class="mt-1">Selecciona el cilindraje</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 mt-2">
            <div class="card">
                <div class="card-header">
                    <select name="year" id="year" class="form-control" onchange="cambio(this,window.modelo, window.year_estado, 'year')">
                        <option value="">Seleccione el año</option>
                    </select>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset('img/minus.jpg')}}" id="year_estado" class="rounded" alt="minus" width="50" height="50">
                        <p class="mt-1">Selecciona el año</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 mt-2">
            <div class="card">
                <div class="card-header">
                    <select name="modelo" id="modelo" class="form-control" onchange="cambio(this,window.color, window.modelo_estado, 'modelo')">
                        <option value="">Seleccione el modelo</option>
                    </select>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset('img/minus.jpg')}}" id="modelo_estado" class="rounded" alt="minus" width="50" height="50">
                        <p class="mt-1">Selecciona el modelo</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-lg-3 mt-2">
                <div class="card">
                    <div class="card-header">
                        <select name="color" id="color" class="form-control" onchange="cambio(this,window.sistema, window.color_estado, 'color')">
                            <option value="">Seleccione el color</option>
                        </select>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{asset('img/minus.jpg')}}" id="color_estado" class="rounded" alt="minus" width="50" height="50">
                            <p class="mt-1">Selecciona el color</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 mt-2">
                <div class="card">
                    <div class="card-header">
                        <select name="sistema" id="sistema" class="form-control" onchange="cambio(this,window.sistema, window.sistema_estado, 'sistema')">
                            <option value="">Seleccione el sitema</option>
                        </select>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{asset('img/minus.jpg')}}" id="sistema_estado" class="rounded" alt="minus" width="50" height="50">
                            <p class="mt-1">Selecciona el sistema</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 mt-2 container">
                <button class="btn btn-success btn-block" type="submit">Buscar</button>
            </div>
        </div>
    </form>
    <div id="domMessage" style="display:none;">
    </div> 
@endsection
@section('scripts')
<script src="{{asset('js/blockui.js')}}"></script>
<script type="text/javascript">
     const cambio = (select, objetivo, img, param) => {
            $(()=>{
            let data = $('#formulario').serialize() + "&destino="+objetivo.name
            switch (param) {
                case 'tipo':
                    if(select.value === ''){
                        objetivo.innerHTML = "<option selected disabled>Selecciona una opcion</option>"
                        window.year.innerHTML = '<option selected disabled>Selecciona una opcion</option>'
                        window.modelo.innerHTML = '<option selected disabled>Selecciona una opcion</option>'
                        window.color.innerHTML = '<option selected disabled>Selecciona una opcion</option>'

                        window.cilindraje_estado.setAttribute("src", "{{asset('img/minus.jpg')}}")
                        window.year_estado.setAttribute("src", "{{asset('img/minus.jpg')}}")
                        window.modelo_estado.setAttribute("src", "{{asset('img/minus.jpg')}}")
                        window.color_estado.setAttribute("src", "{{asset('img/minus.jpg')}}")
                        img.setAttribute("src", "{{asset('img/minus.jpg')}}")
                        return
                    }else{
                        objetivo.innerHTML = "<option selected disabled>Selecciona una opcion</option>"
                        window.year.innerHTML = '<option selected disabled>Selecciona una opcion</option>'
                        window.modelo.innerHTML = '<option selected disabled>Selecciona una opcion</option>'

                        window.cilindraje_estado.setAttribute("src", "{{asset('img/minus.jpg')}}")
                        window.year_estado.setAttribute("src", "{{asset('img/minus.jpg')}}")
                        window.modelo_estado.setAttribute("src", "{{asset('img/minus.jpg')}}")
                    }
                    break
                case 'sistema':
                    if(select.value === ''){
                        objetivo.innerHTML = ''
                        objetivo.innerHTML = "<option selected disabled>Selecciona una opcion</option>"
                        img.setAttribute("src", "{{asset('img/minus.jpg')}}")
                        return
                    }else{
                        img.setAttribute("src", "{{asset('img/ok.png')}}")
                    }
                    break
                default:
                if(select.value === ''){
                    objetivo.innerHTML = ''
                    objetivo.innerHTML = "<option selected disabled>Selecciona una opcion</option>"
                    img.setAttribute("src", "{{asset('img/minus.jpg')}}")
                    return
                }    
            }
                    $.ajax({
                        type:'POST',
                        url:"/showSelect",
                        data: data,
                        beforeSend: () =>{
                            $.blockUI({ message: '<img src="{{asset('img/91.gif')}}" width="150" height="150" /><br><p>Cargando recurso...</p>' })
                        },
                        success: data => {
                            for(let i = 0; i < data.length; i++){
                                $.each( data[i], (key, value)=>{
                                 objetivo.innerHTML += "<option value='"+value+"'>"+value+"</option>"
                            })
                            console.log(i)
                            }
                            img.setAttribute("src", "{{asset('img/ok.png')}}")
                        },
                        complete: (xhr, status)=>{
                            $.unblockUI()
                        }
                    })
            })
}
</script>
@endsection