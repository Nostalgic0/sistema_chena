formulario de creacion de empleados
<form action="{{ url('/empleado') }}" method="post" >
    @csrf

    @include('empleado.form')
    
    <input type="submit" value="Guardar Datos"> 
</form>