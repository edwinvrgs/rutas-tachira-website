@extends('layouts.app')

@section('content')
  <div class="col-md-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="input-group">
          <input type="text" name="search" class="ruta form-control" placeholder="Ingrese punto a buscar">
          <span class="input-group-btn">
            <button class="btn btn-default buscar-rutas" type="button">Buscar</button>
          </span>
        </div>
      </div>
      <div class="panel-body">
        <table class="table table-hover table-responsive">
          <thead>
            <tr>
              <th>Código</th>
              <th>Nombre</th>
              <th>Pasaje</th>
              <th>Empresa</th>
              <th>Y pasa por...</th>
            </tr>
          </thead>
          <tbody>
          @if($rutas)
            @foreach($rutas as $ruta)
              <tr>
                <th>{{ $ruta->id }}</td>
                <td>{{ $ruta->descripcion }}</td>
                <td>{{ $ruta->pasaje }}</td>
                <td>{{ $ruta->empresa->descripcion }}</td>

                <td>
                  @foreach($ruta->puntos as $punto)
                    @if($punto)
                        &#8594;
                    @endif
                    {{ $punto->descripcion }}
                  @endforeach
                <td>
              </tr>
            @endforeach
          @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="js/rutas.js"></script>
@endsection
