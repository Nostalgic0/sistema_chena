

<h1>{{ $modo }} empleado</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach( $errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif    
<div class="form-group">

    <label for="id">Rut</label>
    <input type="text" class="form-control" name="id" value="{{ isset($empleado->id)?$empleado->id:old('id') }}" id="id">
    
</div>
<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" id="Nombre">
    
</div>
<div class="form-group">

    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno">
    
</div>

<div class="form-group">

    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno">
    
</div>


<div class="form-group">

    <label for="Patente">Patente</label>
    <input type="text" class="form-control" name="Patente" value="{{ isset($empleado->Patente)?$empleado->Patente:old('Patente') }}" id="Patente">
    
</div>

<div class="form-group">

    <label for="NumeroLicencia">Numero de Licencia</label>
    <input type="text" class="form-control" name="NumeroLicencia" value="{{ isset($empleado->NumeroLicencia)?$empleado->NumeroLicencia:old('NumeroLicencia') }}" id="NumeroLicencia">
    
</div>
<br>
    <input type="submit" class="btn btn-success" value="{{ $modo }} Datos">

    <a class="btn btn-primary" href="{{ url('empleado/') }}">Regresar</a>