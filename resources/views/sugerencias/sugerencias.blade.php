@extends('layouts.app')

@section('content')
  <div class="col-md-8">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Lista de sugerencias</h3>
      </div>
      <div class="panel-body">
        @include('sugerencias.list')
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="js/sugerencias.js"></script>
@endsection
