@extends('layouts.app')

@section('content')
    <div class="row">
      <h2>Lista de sugerencias</h2>
      <br>
      @include('sugerencias.list')
    </div>
@endsection

@section('scripts')
  <script src="js/sugerencias.js"></script>
@endsection
