

<h1>{{ $modo }} empleado</h1>

<div class="form-group">

    <label for="id">Rut</label>
    <input type="text" class="form-control" name="id" value="{{ isset($empleado->id)?$empleado->id:'' }}" id="id">
    
</div>
<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" id="Nombre">
    
</div>
<div class="form-group">

    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:'' }}" id="ApellidoPaterno">
    
</div>

<div class="form-group">

    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:'' }}" id="ApellidoMaterno">
    
</div>


<div class="form-group">

    <label for="Patente">Patente</label>
    <input type="text" class="form-control" name="Patente" value="{{ isset($empleado->Patente)?$empleado->Patente:'' }}" id="Patente">
    
</div>

<div class="form-group">

    <label for="NumeroLicencia">Numero de Licencia</label>
    <input type="text" class="form-control" name="NumeroLicencia" value="{{ isset($empleado->NumeroLicencia)?$empleado->NumeroLicencia:'' }}" id="NumeroLicencia">
    
</div>
<br>
    <input type="submit" class="btn btn-success" value="{{ $modo }} Datos">

    <a class="btn btn-primary" href="{{ url('empleado/') }}">Regresar</a>