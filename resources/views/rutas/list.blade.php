<table class="table table-hover table-responsive table-condensed">
  <thead>
    <tr>
      <th width="2%">ID</th>
      <th width="15%">Nombre</th>
      <th width="3%">Pasaje</th>
      <th width="15%">Empresa</th>
      <th width="65%">Y pasa por...</th>
    </tr>
  </thead>
  <tbody>
  @if($rutas)
    @foreach($rutas as $ruta)
      <tr>
        <th>{{ $ruta->id }}</td>
        <td>{{ $ruta->descripcion }}</td>
        <td>{{ $ruta->pasaje }} </td>
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
