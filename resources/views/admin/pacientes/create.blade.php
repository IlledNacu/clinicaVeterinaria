@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1>Creación de un nuevo paciente</h1>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <form action="{{url('/admin/pacientes/create')}}" method="POST">
            @csrf <!-- campo token -->
            <div class="mb-3 form-group">
                <label for="nombre" class="form-label">Nombre</label><b> *</b>
                <input type="text" value="{{old('nombre')}}" class="form-control" id="nombre" name="nombre" required>
                @error('nombre')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="apellido" class="form-label">Apellido</label><b> *</b>
                <input type="text" value="{{old('apellido')}}" class="form-control" id="apellido" name="apellido" required>
                @error('apellido')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="ci" class="form-label">CI</label><b> *</b>
                <input type="text" value="{{old('ci')}}" class="form-control" id="ci" name="ci" required>
                @error('ci')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="nro_seguro" class="form-label">Nro. de seguro</label><b> *</b>
                <input type="text" value="{{old('nro_seguro')}}" class="form-control" id="nro_seguro" name="nro_seguro" required>
                @error('nro_seguro')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label><b> *</b>
                <input type="date" value="{{old('fecha_nacimiento')}}" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                @error('fecha_nacimiento')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="genero" class="form-label">Género</label><b> *</b>
                <select name="genero" id="" class="form-control">
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select>
            </div>
            <div class="mb-3 form-group">
                <label for="telefono" class="form-label">Teléfono</label><b> *</b>
                <input type="text" value="{{old('telefono')}}" class="form-control" id="telefono" name="telefono" required>
                @error('telefono')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="correo" class="form-label">Email</label><b> *</b>
                <input type="email" value="{{old('correo')}}" class="form-control" id="correo" name="correo" required>
                @error('correo')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="direccion" class="form-label">Dirección</label><b> *</b>
                <input type="address" value="{{old('direccion')}}" class="form-control" id="direccion" name="direccion" required>
                @error('direccion')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="grupo_sanguineo" class="form-label">Grupo sanguíneo</label><b> *</b>
                <select name="grupo_sanguineo" id="" class="form-control">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="0+">0+</option>
                    <option value="0-">0-</option>
                </select>
            </div>
            <div class="mb-3 form-group">
                <label for="alergias" class="form-label">Alergias</label><b> *</b>
                <input type="text" value="{{old('alergias')}}" class="form-control" id="alergias" name="alergias" required>
                @error('alergias')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="contacto_emergencia" class="form-label">Contacto de emergencia</label><b> *</b>
                <input type="text" value="{{old('contacto_emergencia')}}" class="form-control" id="contacto_emergencia" name="contacto_emergencia" required>
                @error('contacto_emergencia')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="observaciones" class="form-label">Observaciones</label>
                <input type="text" value="{{old('observaciones')}}" class="form-control" id="observaciones" name="observaciones">
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