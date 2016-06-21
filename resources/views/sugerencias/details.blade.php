@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-8">
      <h2>Sugerencia</h2>
      <p>
        <a href="{{ url('sugerencias') }}">Volver a la lista de sugerencias</a>
      </p>
      <hr>
      <span class="label label-info">{{ $sugerencia->id }}</span>
      {{ $sugerencia->descripcion }}
    </div>
  </div>
@endsection
