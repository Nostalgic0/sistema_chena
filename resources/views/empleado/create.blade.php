formulario de creacion de empleados
<form action="{{ url('/empleado') }}" method="post" >
    @csrf

    @include('empleado.form',['modo'=>'Crear'])
    
     
</form>