<label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="{{ isset($plato->nombre)? $plato->nombre : '' }}"><br>
    <label for="nombre">Categoría:</label>
    <input type="text" name="categoria" id="categoria" value="{{ isset($plato->categoria)? $plato->categoria : '' }}"><br>
    <label for="nombre">Precio:</label>
    <input type="text" name="precio" id="precio" value="{{ isset($plato->precio)? $plato->precio : '' }}"><br> <!--El precio hay que ponerlo en formato '00.00'-->

    <label for="nombre">Foto:</label>
    @if(isset($plato->foto))
    <img width="100px" src="{{ asset('storage') . '/' . $plato->foto }}" alt="foto del plato {{ $plato->nombre }} "><br>
    @endif
    <input type="file" name="foto" id="foto"><br>

    <input type="submit" value="Enviar">

    