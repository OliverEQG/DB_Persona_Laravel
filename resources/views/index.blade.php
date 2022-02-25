@extends('ejemploplantilla')
@section('contenido')
<a class="btn btn-success" href="{{url('/create')}}">Agregar persona</a>
<br/>
<br/>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Sexo</th>
                <th scope="col">Edad</th>
                <th scope="col">Telefono</th>
                <th scope="col">Ocupacion</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td> <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$persona->foto}}" alt="" width="100"></td>
                    <td>{{$persona->nombre}}</td>
                    <td>{{$persona->apellido}}</td>
                    <td>{{$persona->correo}}</td>
                    <td>{{$persona->sexo}}</td>
                    <td>{{$persona->edad}}</td>
                    <td>{{$persona->telefono}}</td>
                    <td>{{$persona->ocupacion}}</td>
                <td> <a class="btn btn-warning" href=" {{  url('/'.$persona->id.'/edit') }} ">Editar</a> 
                    <form method="POST" action=" {{ url('/'.$persona->id) }} " style="display:inline">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger" type="submit" >Borrar</button>
                    </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection