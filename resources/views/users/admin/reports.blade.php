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

    <div class="card card-primary" style="display: flex; ">
      <div class="card-header">
        <h3 class="card-title">Date picker</h3>
      </div>
      <div class="advance-search">
        <span class="desc">ADVANCED SEARCH</span>
        <div class="row">
          <div class="input-field">
            <div class="input-select">
              <select data-trigger="" name="choices-single-defaul">
                <option placeholder="" value="">Accessories</option>
                <option>Subject b</option>
                <option>Subject c</option>
              </select>
            </div>
          </div>
          <div class="input-field">
            <div class="input-select">
              <select data-trigger="" name="choices-single-defaul">
                <option placeholder="" value="">Color</option>
                <option>Subject b</option>
                <option>Subject c</option>
              </select>
            </div>
          </div>
          <div class="input-field">
            <div class="input-select">
              <select data-trigger="" name="choices-single-defaul">
                <option placeholder="" value="">Size</option>
                <option>Subject b</option>
                <option>Subject c</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row second">
          <div class="input-field">
            <div class="input-select">
              <select data-trigger="" name="choices-single-defaul">
                <option placeholder="" value="">Sale</option>
                <option>Subject b</option>
                <option>Subject c</option>
              </select>
            </div>
          </div>
          <div class="input-field">
            <div class="input-select">
              <select data-trigger="" name="choices-single-defaul">
                <option placeholder="" value="">Time</option>
                <option>Last time</option>
                <option>Today</option>
                <option>This week</option>
                <option>This month</option>
                <option>This year</option>
              </select>
            </div>
          </div>
          <div class="input-field">
            <div class="input-select">
              <select data-trigger="" name="choices-single-defaul">
                <option placeholder="" value="">Type</option>
                <option>Subject b</option>
                <option>Subject c</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row third">
          <div class="input-field">
            <div class="result-count">
              <span>108 </span>results</div>
            <div class="group-btn">
              <button class="btn-delete" id="delete">RESET</button>
              <button class="btn-search">SEARCH</button>
            </div>
          </div>
        </div>
      </div>

    </div>

@endsection
