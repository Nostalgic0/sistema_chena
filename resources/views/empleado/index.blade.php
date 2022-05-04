mostrar la lista de empleados

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif


<a href="{{ url('empleado/create') }}">Registrar nuevo empleado</a>
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
                
            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}">
                Editar
            </a>

            | 

            <form action="{{ url('/empleado/'.$empleado->id ) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
          
            <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>