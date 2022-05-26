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
    <div class="container-fluid" style="padding: 10px;">
      <h2 class="text-center display-4">Search all Reports</h2>
    </div>

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <form action="enhanced-results.html">
              <div class="row">
                  <div class="col-md-10 offset-md-1">
                      <div class="row">
                          <div class="col-3">
                            <div class="form-group">
                                <label>User Name:</label>
                                <select class="select2" style="width: 100%;" id="name" name="name">
                                    <option value="">Select Employee Name</option>
                                    @foreach ($user as $use)
                                        <option value="">{{ $use->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>

                          <div class="col-3">
                              <div class="form-group">
                                  <label>Designation:</label>
                                  <select class="select2" style="width: 100%;">
                                      <option value="">Select Designation Name</option>
                                      @foreach ($user as $use)
                                          <option value="">{{ $use->designation }}</option>
                                      @endforeach
                                  </select>
                              </div>
                          </div>
                          <div class="col-3">
                              <div class="form-group">
                                  <label>Districts:</label>
                                  <select class="select2" style="width: 100%;" id="district" name="district_id">
                                      <option value="">Select District Name</option>
                                      @foreach ($districts as $district)
                                        <option value="{{ $district->id }}">{{ $district->districtName }}</option>
                                      @endforeach
                                  </select>
                              </div>
                          </div>

                          <div class="col-3">
                            <div class="form-group">
                                <label>Circles:</label>
                                <select class="select2" style="width: 100%;" id="circle" name="circle_id">
                                    <option value="">Select Circle</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-3">
                          <div class="form-group">
                              <label>Division</label>
                              <select class="select2" style="width: 100%;" id="division" name="division_id">
                                  <option value="">Select Crcle Name</option>
                              </select>
                          </div>
                      </div>

                      <div class="col-3">
                        <div class="form-group">
                            <label>Range</label>
                            <select class="select2" style="width: 100%;" id="range" name=>
                                <option value="">search by District</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-3">
                        <div class="form-group">
                            <label>Start Date</label>
                            <input type="date" class="form-input" style="width: 100%;"/>
                        </div>
                    </div>

                    <div class="col-3">
                      <div class="form-group">
                        <label>End Date</label>
                        <input type="date" class="form-input" style="width: 100%;"/>
                    </div>
                  </div>
                    </div>
                     
                  </div>
              </div>
          </form>
          <div class="row mt-3">
              <div class="col-md-10 offset-md-1">
                  <div class="list-group">
                      <div class="list-group-item">
                          <div class="row">
                              <div class="col px-4">
                                  <div>
                                      <div class="float-right"></div>
                                        <h5>Total Number Holiday</h5> 
                                        <h5>Total Number of Acitity</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                        <div class="list-group-item">
                         
                      
                            <div class="list-group-item">
                                <div class="row">
                                  
                                        <div>
                                            <div class="card-body">
                                                <canvas class="chart has-fixed-height" id="reports"></canvas>
                                            </div>
                                            
                                        </div>
                               
                                </div>
                            </div>
                        </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection
<script src="{{(asset('/asset/ajax/ajax.js'))}}"></script>
<script src="{{ asset('/asset/admin/plugins/chart.js/Chart.min.js')}}"></script>
<script>
    
    let labels=[];
    let data=[];

    
    let districts = '<?php echo json_encode($districts)?>';
    let jsonDist =JSON.parse(districts);

    for(var i=0;i<jsonDist.length;i++){
        labels.push(jsonDist[i].districtName);
        data.push(jsonDist[i].userCount);
    }




    const ctx = document.getElementById('reports');
    const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels:labels,
        datasets: [{
            label: 'Total Number of Employees Registered Per District',
            data: data,
            
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var getData = function() {
    var e = document.getElementById("name");
    var strUser = e.value;
      $.ajax({
        url:"{{ route('ajax-circle') }}",
        success: function(data) {

          myChart.data.labels.push("Label");
          myChart.data.datasets[0].data.push('set point');
          
          myChart.update();
        }
      });
};
</script>

