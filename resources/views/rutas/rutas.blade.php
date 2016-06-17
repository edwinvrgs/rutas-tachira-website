@extends('layouts.app')

@section('content')
  <div class="col-md-6">
    <div class="input-group">
      <input type="text" name="search" class="ruta form-control" placeholder="Ingrese ruta a buscar">
    <span class="input-group-btn">
      <button class="btn btn-primary buscar-rutas" type="button">Buscar</button>
    </span>
    </div>
  </div>

@endsection

@section('scripts')
  <script src="js/rutas.js"></script>
@endsection
