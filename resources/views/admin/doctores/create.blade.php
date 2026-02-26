@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1>Creación de un/a nuevo/a doctor/a</h1>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <form action="{{url('/admin/doctores/create')}}" method="POST">
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
                <label for="telefono" class="form-label">Teléfono</label><b> *</b>
                <input type="text" value="{{old('telefono')}}" class="form-control" id="telefono" name="telefono" required>
                @error('telefono')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="licencia_medica" class="form-label">Licencia médica</label><b> *</b>
                <input type="text" value="{{old('licencia_medica')}}" class="form-control" id="licencia_medica" name="licencia_medica" required>
                @error('licencia_medica')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="especialidad" class="form-label">Especialidad</label><b> *</b>
                <input type="text" value="{{old('especialidad')}}" class="form-control" id="especialidad" name="especialidad" required>
                @error('especialidad')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="email" class="form-label">Email</label><b> *</b>
                <input type="email" value="{{old('email')}}" class="form-control" id="email" name="email" required>
                @error('email')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="password" class="form-label">Contraseña</label><b> *</b>
                <input type="password" class="form-control" id="password" name="password" required>
                @error('password')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="password_verify" class="form-label">Repetir contraseña</label><b> *</b>
                <input type="password" class="form-control" id="password_verify" name="password_confirmation" required>
                @error('password_confirmation')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{url('admin/doctores')}}" class="btn btn-secondary">Cancelar</a>
            </div>
            
        </form>
    </div>
</div>
@endsection