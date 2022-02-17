@include('header')

@if(Session::has('message'))
    {{ Session::get('message') }} <!--Imprimimos los mensajes necesarios en caso de que existan-->
@endif

<a href="{{ url('plato/create') }}">Añadir plato</a>

<table class="class table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        @foreach($platos as $plato)
        <tr>
            <td>{{ $plato->id }}</td>
            <td>
                <img width="100px" src="{{ asset('storage/'. $plato->foto) }}" alt="foto del plato {{ $plato->nombre }}">
            </td>
            <td>{{ $plato->nombre }}</td>
            <td>{{ $plato->categoria }}</td>
            <td>{{ number_format( $plato->precio, 2) . '€' }}</td>
            <td><a href="{{ url('/plato/' . $plato->id . '/edit') }} ">Editar</a> | 
                <form action="{{ url('/plato/' . $plato->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Quieres borrar este plato?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@include('footer')