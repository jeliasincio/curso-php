<ul>
    @foreach($listado as $persona)
        <li>{!! $persona->id.'-'.$persona->apellido_paterno." ".$persona->apellido_materno !!}</li>
    @endforeach
</ul>