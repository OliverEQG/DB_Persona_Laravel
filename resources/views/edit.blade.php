
@extends('ejemploplantilla')
@section('contenido')
<form action="{{url('/'.$persona->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('POST')}}
    @include('form')
    <input class="btn btn-success" type="submit" value="Editar">
    <a class="btn btn-primary" href="{{url('/')}}">Inicio</a>
</form>
@endsection