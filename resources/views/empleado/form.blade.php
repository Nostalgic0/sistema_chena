

<h1>{{ $modo }} empleado</h1>

<label for="id">Rut</label>
    <input type="text" name="id" value="{{ isset($empleado->id)?$empleado->id:'' }}" id="id">
    <br>

    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" id="Nombre">
    <br>

    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:'' }}" id="ApellidoPaterno">
    <br>

    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:'' }}" id="ApellidoMaterno">
    <br>

    <label for="Patente">Patente</label>
    <input type="text" name="Patente" value="{{ isset($empleado->Patente)?$empleado->Patente:'' }}" id="Patente">
    <br>

    <label for="NumeroLicencia">Numero de Licencia</label>
    <input type="text" name="NumeroLicencia" value="{{ isset($empleado->NumeroLicencia)?$empleado->NumeroLicencia:'' }}" id="NumeroLicencia">
    <br>

    <input type="submit" value="{{ $modo }} Datos">

    <a href="{{ url('empleado/') }}">Regresar</a>