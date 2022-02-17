@include('header')

<form action="{{ url('/plato')}}" method="post" enctype="multipart/form-data">
@csrf
@include('plato.form')
    
</form>

@include('footer')