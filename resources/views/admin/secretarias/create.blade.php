@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1>Creación de un/a nuevo/a secretario/a </h1>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <form action="{{url('/admin/secretarias/create')}}" method="POST">
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
                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label><b> *</b>
                <input type="date" value="{{old('fecha_nacimiento')}}" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                @error('fecha_nacimiento')
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
                <a href="{{url('admin/secretarias')}}" class="btn btn-secondary">Cancelar</a>
            </div>
            
        </form>
    </div>
</div>
@endsection