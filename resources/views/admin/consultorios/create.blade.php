@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1>Creación de un nuevo consultorio</h1>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <form action="{{url('/admin/consultorios/create')}}" method="POST">
            @csrf <!-- campo token -->
            <div class="mb-3 form-group">
                <label for="nombre" class="form-label">Nombre del consultorio</label><b> *</b>
                <input type="text" value="{{old('nombre')}}" class="form-control" id="nombre" name="nombre" required>
                @error('nombre')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="ubicacion" class="form-label">Ubicación</label><b> *</b>
                <input type="text" value="{{old('ubicacion')}}" class="form-control" id="ubicacion" name="ubicacion" required>
                @error('ubicacion')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="capacidad" class="form-label">Capacidad</label><b> *</b>
                <input type="text" value="{{old('capacidad')}}" class="form-control" id="capacidad" name="capacidad" required>
                @error('capacidad')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" value="{{old('telefono')}}" class="form-control" id="telefono" name="telefono">
            </div>
            <div class="mb-3 form-group">
                <label for="especialidad" class="form-label">Especialidad</label><b> *</b>
                <input type="text" value="{{old('especialidad')}}" class="form-control" id="especialidad" name="especialidad" required>
                @error('especialidad')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="estado" class="form-label">Estado</label><b> *</b>
                <select name="estado" id="" class="form-control">
                    <option value="ACTIVO">Activo</option>
                    <option value="INACTIVO">Inactivo</option>
                </select>
            </div>
            <div class="mb-3 form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{url('admin/consultorios')}}" class="btn btn-secondary">Cancelar</a>
            </div>
            
        </form>
    </div>
</div>
@endsection