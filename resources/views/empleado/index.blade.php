@extends('layouts.app')

@section('content')
<div class="container">


    @if(Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('mensaje') }}
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"> 
                <span aria-hidden="true">&times;</span>
            </button>
        </div>    
    @endif

    





<a href="{{ url('empleado/create') }}" class="btn btn-success">Registrar nuevo empleado</a>
<br>
<br>
<table class="table table-dark">

    <thead class="thead-light">
        <tr>
            <th>Rut</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Patente</th>
            <th>Numero de Licencia</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->ApellidoPaterno }}</td>
            <td>{{ $empleado->ApellidoMaterno }}</td>
            <td>{{ $empleado->Patente }}</td>
            <td>{{ $empleado->NumeroLicencia }}</td>
            <td>
                
            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">
                Editar
            </a>

            | 

            <form action="{{ url('/empleado/'.$empleado->id ) }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
          
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
