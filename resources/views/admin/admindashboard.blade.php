@extends('layouts.adminmaster')

@section('title')
    | Admin Dashboard
@endsection

@section('content')

<div class="content-wrapper">
	<div class="container-full">
	  <!-- Main content -->
	  <section class="content">
		  <div class="row">
			  <div class="col-xl-12 col-12">
				  <div class="box">
					  <div class="box-body" style="padding-bottom: 20px !important;">
						  <div class="row">
							  <div class="col-lg-3 col-12 be-1">
								  <div class="d-flex justify-content-between align-items-center">
									  <p class="mb-0">Admin Data</p>
									  
									  {{-- <p class="mb-0 text-success">6210</p> --}}
								  </div>
								  <p style="margin-top: 10px;font-size: 12px;" class="mb-0">Total Registrations</p>
								  <div>
									  <h1 style="font-size: 18px;" class="mb-0 fw-600">{{ $allregistrations->count() }}<small class="ms-10 me-5 text-success"></small></h1>
								  </div>
							  </div>

							  <div class="col-lg-3 col-12 be-1">
								
								<p style="margin-top: 30px;font-size: 12px;" class="mb-0">Users</p>
								  <div>
									  <h1 style="font-size: 18px;" class="mb-0 fw-600">{{ $allusers->count() }}<small class="ms-10 me-5 text-success"></small></h1>
								  </div>
							  </div>
								
							  <div class="col-lg-3 col-12 be-1">
								
								<p style="margin-top: 30px;font-size: 12px;" class="mb-0">Listers</p>
								  <div>
									  <h1 style="font-size: 18px;" class="mb-0 fw-600">{{ $listers->count() }}<small class="ms-10 me-5 text-success"></small></h1>
								  </div>
							  </div>	
                              
							  <div class="col-lg-3 col-12 be-1">
								
								<p style="margin-top: 30px;font-size: 12px;" class="mb-0">Offseters</p>
								  <div>
									  <h1 style="font-size: 18px;" class="mb-0 fw-600">0<small class="ms-10 me-5 text-success"></small></h1>
								  </div>
							  </div>
							  
							
						  </div>
						  
					  </div>
				  </div>
				 
				 				
				  				
				 
			  </div>
			 
		  </div>	

          
		  <!--new row-->
           
		  <div class="row">
			<div class="col-xl-12 col-12">

				<div class="row">

					<div class="col-lg-7 col-12">
						<div class="box">
							<div class="box-body" style="padding-bottom: 20px !important;">
								<h5 class="box-title">Registrations</h5>
								<div id="columnchart_values" style="width: 520px; height: 290px;"></div>
							</div>
						</div>		
					</div>
					
					<div class="col-lg-5 col-12">
	
						<div class="box">
							<div class="box-body" style="padding-bottom: 40px !important;">
								 <h3 class="box-title">Project Offsets</h3>
									<div class="d-flex justify-content-start align-items-center mt-md-20 mt-0">
										<div id="donutchart" style="width: 900px; height: 250px;"></div>
										
									</div>
							</div>
						</div>
	
					</div>

				</div>
                				
			   
			</div>
		   
		</div>	

		  <!--end new row-->

		  <div class="row">
			
			

			
			<div class="col-xl-8 col-lg-8">
				
				<div class="card chart_card2">
					<div class="card-body">
						<div class="mt-0">
							<h4 class="fw-500">Users</h4>
							
						</div>
						<div class="p-0">

							  <div class="table-responsive">
								<table id="exampler" class="table table-hover display nowrap "style="width:100%">
								  <thead>
									<tr>
										<th scope="col">Sn</th>
										<th scope="col">First Name</th>
										<th scope="col">Last Name</th>
										<th scope="col">Email</th>
										<th scope="col">Created_at</th>
									  </tr>
								  </thead>
								  <tbody>
									@php
                                    $sn = 0;
									@endphp
									@foreach ($allregistrations as $theregistration)
									<tr>
										<th scope="row">{{ $sn+=1; }}</th>
										<td>{{ ucfirst($theregistration->firstname) }}</td>
										<td>{{ ucfirst($theregistration->lastname) }}</td>
										<td>{{ $theregistration->email }}</td>
										<td>{{ Carbon\Carbon::parse($theregistration->created_at)->format('M j, Y ')}}</td>
									  </tr>
									@endforeach
								  
								 
								</tbody>	
							  </table>
							  </div>              
						

							  
						</div>
						
						
					</div> <!-- end card body-->
				</div> <!-- end card -->
			</div>

			<div class="col-xl-4 col-lg-4">
				
				<div class="box">
					<div class="box-header with-border">
						<h4 class="text-success ml-5 mb-1">Recent Activity</h4>
						
					</div>
					<div class="box-body p-0">
						<div class="timeline-alt pb-0" style="
						padding-left: 10px;
						padding-right: 10px;
					">
							<div class="timeline-item">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#46bc5c" class="bi bi-check-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
									<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
								  </svg>
								<div class="timeline-item-info">
									<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1">Project 3 has been approved for listing</h5>
									<p><span class="ms-2 fs-12">Year: 2015 - 18</span></p>
								</div>
							</div>

							<div class="timeline-item">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#46bc5c" class="bi bi-check-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
									<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
								  </svg>
								<div class="timeline-item-info">
									<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1">Project 3 has been approved for listing</h5>
									<p><span class="ms-2 fs-12">Year: 2015 - 18</span></p>
								</div>
							</div>

							<div class="timeline-item">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-x-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
									<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
								  </svg>
								<div class="timeline-item-info">
									<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1">Project 3 has been declined for listing</h5>
									<p><span class="ms-2 fs-12">Year: 2015 - 18</span></p>
									{{-- <p class="text-muted mt-2 mb-0 pb-3">Project 3 has been approved for listing</p> --}}
								</div>
							</div>

							<div class="timeline-item">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#46bc5c" class="bi bi-check-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
									<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
								  </svg>
								<div class="timeline-item-info">
									<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1">Project 3 has been approved for listing</h5>
									<p><span class="ms-2 fs-12">Year: 2015 - 18</span></p>
									{{-- <p class="text-muted mt-2 mb-0 pb-3">Project 3 has been approved for listing</p> --}}
								</div>
							</div>

							<div class="timeline-item">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#46bc5c" class="bi bi-check-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
									<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
								  </svg>
								<div class="timeline-item-info">
									<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1">Project 3 has been approved for listing</h5>
									<p><span class="ms-2 fs-12">Year: 2015 - 18</span></p>
									{{-- <p class="text-muted mt-2 mb-0 pb-3">Project 3 has been approved for listing</p> --}}
								</div>
							</div>

						</div>
					</div>
				</div>
				
			</div>

			

		
	</div>
		  
		  		
	  </section>
	  <!-- /.content -->
	</div>
</div>

@endsection

@section('script')

<script>
	$('#exampler').DataTable( {} );
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Copper", 8.94, "#4285f4"],
        ["Silver", 10.49, "#4285f4"],
        ["Gold", 19.30, "#4285f4"],
        ["Platinum", 21.45, "color: #4285f4"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 520,
        height: 290,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

<script type="text/javascript">
	google.charts.load("current", {packages:["corechart"]});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
	  var data = google.visualization.arrayToDataTable([
		['Task', 'Hours per Day'],
		['Work',     11],
		['Eat',      2],
		['Commute',  2],
		['Watch TV', 2],
		['Sleep',    7]
	  ]);

	  var options = {
		title: 'My Daily Activities',
		pieHole: 0.4,
	  };

	  var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
	  chart.draw(data, options);
	}
  </script>


@endsection
  
 
