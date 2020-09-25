<header>
  <div class="encabezado">
     <a href="{{url('/')}}">
       <img src="{{asset('img/logotipo.jpg')}}" alt="Logotipo" width="150" height="100">
    </a> 

    <form action="{{url('/buscador')}}" class="form-inline" method="POST" autocomplete="off">
      @csrf
        <div class="buscador">
          <input type="search" class="buscador__input" name="nombre" placeholder="Buscar...">
          <button type="submit" class="buscador__button"><i class="fa fa-search" aria-hidden="true"></i><span>Buscar</span></button>
        </div>
      </form>
      
      <div class="nombre">
       Refaccionaria GAEL
      </div>

  </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="{{url('/')}}">Home</a>
            <a class="nav-item nav-link" href="{{url('/tipo')}}">Motos</a>
            <a class="nav-item nav-link" href="{{url('/refacciones')}}">Refacciones</a>
          </div>
        </div>
    </nav>
</header>