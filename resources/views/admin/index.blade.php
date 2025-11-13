@extends('layouts.admin')
@section('content')
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <h1>Panel principal</h1>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <hr>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
      <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>{{$total_usuarios}}</h3>
            <p>Usuarios</p>
            </div>
            <div class="icon">
            <i class="ion fas bi bi-file-person"></i>
            </div>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
            <h3>{{$total_secretarias}}</h3>
            <p>Secretarias</p>
            </div>
            <div class="icon">
            <i class="ion ion-stats-bars"></i>
            </div>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
            <h3>{{$total_pacientes}}</h3>
            <p>Pacientes</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
            <h3>65</h3>
            <p>Unique Visitors</p>
            </div>
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
        </div>
        </div>
        <!-- ./col -->
      </div>

      </div><!-- /.container-fluid -->
    </div>
  <!-- /.content -->
@endsection