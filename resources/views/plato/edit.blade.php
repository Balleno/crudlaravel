@include('header')

<form action="{{ url('/plato/' . $plato->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('plato.form')


</form>

@include('footer')