<div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control col-md-6" name="nombre" id="nombre" value=" {{isset($persona->nombre)?$persona->nombre:''}} " required>
    </div>
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" class="form-control col-md-6" name="apellido" id="apellido" value="{{isset($persona->apellido)?$persona->apellido:''}}" required>
    </div>
    <div class="form-group">
        <label>Correo Electronico</label>
        <input type="email" class="form-control" name="correo" id="correo" value="{{isset($persona->correo)?$persona->correo:''}}" required>
    </div>
    <div class="form-group">
        <label>Sexo</label>
        <input type="text" class="form-control col-md-3" name="sexo" id="sexo" value="{{isset($persona->sexo)?$persona->sexo:''}}" required>
    </div>
    <div class="form-group">
        <label>Edad</label>
        <input type="number" class="form-control col-md-3" name="edad" id="edad" value="{{isset($persona->edad)?$persona->edad:''}}" required>
    </div>
    <div class="form-group">
        <label>Telefono</label>
        <input type="text" class="form-control col-md-6" name="telefono" id="telefono" value="{{isset($persona->telefono)?$persona->telefono:''}}" maxlength="8" required>
    </div>
    <div class="form-group">
        <label>Ocupacion</label>
        <input type="text" class="form-control col-md-6" name="ocupacion" id="ocupacion" value="{{isset($persona->ocupacion)?$persona->ocupacion:''}}"  required>
    </div>
    <div class="form-group">
        <label>Foto</label>
        @if (isset($persona->foto))
        <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$persona->foto}}" alt="" width="100">
        @endif
        <input type="file" class="form-control" name="foto" id="foto" required>
    </div>