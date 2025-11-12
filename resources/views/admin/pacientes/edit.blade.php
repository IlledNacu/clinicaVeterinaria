@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1>Editar paciente: {{$paciente->nombre}} {{$paciente->apellido}}</h1>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <form action="{{url('/admin/pacientes',$paciente->id)}}" method="POST">
            @csrf <!-- campo token -->
            @method('PUT')
            <div class="mb-3 form-group">
                <label for="nombre" class="form-label">Nombre</label><b> *</b>
                <input type="text" value="{{$paciente->nombre}}" class="form-control" id="nombre" name="nombre" required>
                @error('nombre')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="apellido" class="form-label">Apellido</label><b> *</b>
                <input type="text" value="{{$paciente->apellido}}" class="form-control" id="apellido" name="apellido" required>
                @error('apellido')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="ci" class="form-label">CI</label><b> *</b>
                <input type="text" value="{{$paciente->ci}}" class="form-control" id="ci" name="ci" required>
                @error('ci')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="nro_seguro" class="form-label">Nro. de seguro</label><b> *</b>
                <input type="text" value="{{$paciente->nro_seguro}}" class="form-control" id="nro_seguro" name="nro_seguro" required>
                @error('nro_seguro')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label><b> *</b>
                <input type="date" value="{{$paciente->fecha_nacimiento}}" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                @error('fecha_nacimiento')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="genero" class="form-label">Género</label><b> *</b>
                <select name="genero" id="" class="form-control">
                    @if($paciente->genero == 'M')
                        <option value="M">MASCULINO</option>
                        <option value="F">FEMENINO</option>
                    @else
                        <option value="F">FEMENINO</option>
                        <option value="M">MASCULINO</option>
                    @endif
                </select>
            </div>
            <div class="mb-3 form-group">
                <label for="telefono" class="form-label">Teléfono</label><b> *</b>
                <input type="text" value="{{$paciente->telefono}}" class="form-control" id="telefono" name="telefono" required>
                @error('telefono')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="correo" class="form-label">Email</label><b> *</b>
                <input type="email" value="{{$paciente->correo}}" class="form-control" id="correo" name="correo" required>
                @error('correo')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="direccion" class="form-label">Dirección</label><b> *</b>
                <input type="address" value="{{$paciente->direccion}}" class="form-control" id="direccion" name="direccion" required>
                @error('direccion')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="grupo_sanguineo" class="form-label">Grupo sanguíneo</label><b> *</b>
                <select name="grupo_sanguineo" id="" class="form-control">
                    <option value="A+" @selected($paciente->grupo_sanguineo == 'A+')>A+</option>
                    <option value="A-" @selected($paciente->grupo_sanguineo == 'A-')>A-</option>
                    <option value="B+" @selected($paciente->grupo_sanguineo == 'B+')>B+</option>
                    <option value="B-" @selected($paciente->grupo_sanguineo == 'B-')>B-</option>
                    <option value="0+" @selected($paciente->grupo_sanguineo == '0+')>0+</option>
                    <option value="0-" @selected($paciente->grupo_sanguineo == '0-')>0-</option>
                </select>
            </div>
            <div class="mb-3 form-group">
                <label for="alergias" class="form-label">Alergias</label><b> *</b>
                <input type="text" value="{{$paciente->alergias}}" class="form-control" id="alergias" name="alergias" required>
                @error('alergias')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="contacto_emergencia" class="form-label">Contacto de emergencia</label><b> *</b>
                <input type="text" value="{{$paciente->contacto_emergencia}}" class="form-control" id="contacto_emergencia" name="contacto_emergencia" required>
                @error('contacto_emergencia')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="observaciones" class="form-label">Observaciones</label>
                <input type="text" value="{{$paciente->observaciones}}" class="form-control" id="observaciones" name="observaciones">
                @error('observaciones')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{url('admin/pacientes')}}" class="btn btn-secondary">Cancelar</a>
            </div>
            
        </form>
    </div>
</div>
@endsection