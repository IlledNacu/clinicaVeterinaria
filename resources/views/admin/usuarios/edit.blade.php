@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1>Modificar un usuario</h1>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <form action="{{url('admin/usuarios',$usuario->id)}}" method="POST">
            @csrf <!-- campo token -->
            @method('PUT')
            <div class="mb-3 form-group">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" value="{{$usuario->name}}" class="form-control" id="name" name="name" required>
                @error('name')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{$usuario->email}}" class="form-control" id="email" name="email" required>
                @error('email')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="password" class="form-label">Contraseña nueva</label>
                <input type="password" class="form-control" id="password" name="password">
                @error('password')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="password_verify" class="form-label">Repetir contraseña nueva</label>
                <input type="password" class="form-control" id="password_verify" name="password_confirmation">
                @error('password_confirmation')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{url('admin/usuarios')}}" class="btn btn-secondary">Cancelar</a>
            </div>
            
        </form>
    </div>
</div>
@endsection