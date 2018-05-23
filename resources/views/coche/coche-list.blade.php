@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-5 pt-5">
        <div class="col-md-12">
          <div class="row justify-content-center">
            @if(Session::has('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ Session::get('delete') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @elseif(Session::has('create'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('create') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @elseif(Session::has('update'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {{ Session::get('update') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
          </div>
                <div class="row">
                  <div class="col">
                      <h1 class="display-4">Coches de Venta</h1>
                  </div>
                  <div class="col">
                      <form action="/" method="GET">
                    <div class="text-right mt-2 pt-2">
                        <input type="button" class="btn btn-success" onclick=" location.href='/coche-createNew' " value="Registrar Nuevo" name="boton" /> 
                    </div>
                  </form>
                  </div>
                </div>
                
                <hr class="bg-info">
                <div class="table-responsive mt-3 pt-3">
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Combustible</th>
                        <th scope="col">Color</th>
                        <th scope="col">Tipo de Cambio</th>
                        <th scope="col">Km</th>
                        <th scope="col">Precio</th>
                      </tr>
                    </thead>
                    <tbody>
                    @forelse($coches as $coche)
                      <tr>
                        <td><a href="/coches-item/{{ $coche->id }}"> {{ $coche->marca_coche }}<a></td>
                        <td>{{ $coche->modelo }}</td>
                        <td>{{ $coche->combustible }}</td> 
                        <td>{{ $coche->color }}</td>
                        <td>{{ $coche->tipo_cambio }}</td>
                        <td>{{ $coche->kilometraje }}</td>
                        <td>{{ $coche->precio }}</td>
                      </tr>
                      @empty
                      <tr>
                          <td>No Existen Coches</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
	                  @endforelse
                    </tbody>
                  </table>
                </div>
                </div>
</div>

@endsection