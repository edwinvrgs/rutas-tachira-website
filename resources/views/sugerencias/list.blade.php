<table class="table table-hover table-responsive table-condensed">
  <thead>
    <tr>
      <th width="5%">ID</th>
      <th width="13%">Usuario</th>
      <th width="12%">Empresa</th>
      <th width="70%">Descripcion</th>
    </tr>
  </thead>
  <tbody>
  @if($sugerencias)
    @foreach($sugerencias as $sugerencia)
      <tr>
        <th>{{ $sugerencia->id }}</td>
        <td>{{ $sugerencia->user->first_name.' '.$sugerencia->user->last_name }}</td>
        <td>{{ $sugerencia->empresa->descripcion }} </td>
        <td>{{ $sugerencia->descripcion }} </td>
      </tr>
    @endforeach
  @endif
  </tbody>
</table>
