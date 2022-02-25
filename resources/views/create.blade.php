@extends('ejemploplantilla')
@section('contenido')
<h1 class="text-center">Formulario Persona</h1>
<form action="{{url('/')}}" method="post" class="col-md-6" enctype="multipart/form-data">
    {{csrf_field()}}
    @include('form')
    
    <input type="submit" class="btn btn-success" value="Agregar">
    <a class="btn btn-primary" href="{{url('/')}}">Inicio</a>
</form>
@endsection