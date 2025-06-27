@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <h1>Usuarios</h1>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <table>
          <tr>
            <td>Nombre</td>
            <td>Email</td>
          </tr>
        @foreach($usuarios as $usuario)
          <tr>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
          </tr>
        @endforeach()
        </table>
      </div><!-- /.container-fluid -->
    </div>
  <!-- /.content -->
@endsection