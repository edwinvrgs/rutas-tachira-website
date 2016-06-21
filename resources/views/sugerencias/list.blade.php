<ul class="list-group">
  @if($sugerencias)
    @foreach($sugerencias as $sugerencia)
      <li class="list-group-item">
        {{ $sugerencia->descripcion }}
        <a href="{{ url('sugerencias/'.$sugerencia->id) }}" class="small">Detalles</a>
      </li>
    @endforeach
  @endif
</ul>
