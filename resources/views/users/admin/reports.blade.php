@extends('layout.app')

@section('breadcrumbs')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">All Users</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
@endsection

@section('content')
<div class="col-md-8" style="margin:20px;">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Date picker</h3>
      </div>
      <div class="card-body">
        <!-- Date -->
        <div class="col-md-6" style="display: flex; flex-direction:column">
          <label>Start Date:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        <!-- Date and time -->
        <div class="col-md-6"  >
          <label>End time:</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                <input type="date" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        <div class="card-body">
          
          <canvas class="chart has-fixed-height" id="pie-chart"></canvas>
      </div>

      </div>

    </div>

  </div>
@endsection