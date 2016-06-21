<ul class="list-group">
  @if($sugerencias)
    @foreach($sugerencias as $sugerencia)
      <li class="list-group-item">
        {{ str_limit($sugerencia->descripcion, 100, '...') }}
        <a href="{{ url('sugerencias/'.$sugerencia->id) }}" class="small">Detalles</a>
      </li>
    @endforeach
  @endif
</ul>
