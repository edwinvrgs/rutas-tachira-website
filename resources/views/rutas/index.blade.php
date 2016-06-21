@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-9">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="input-group">
            <input type="text" name="search" class="punto form-control" placeholder="Busqueda de rutas por puntos">
            <span class="input-group-btn">
              <button class="btn btn-default buscar-rutas" type="button">Buscar</button>
            </span>
          </div>
        </div>
        <div class="panel-body">
          @include('rutas.list')
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="js/rutas.js"></script>
@endsection
