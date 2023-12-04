@extends('layouts.master')

@section('title')
    | Dashboard
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
									  <p class="mb-0">Project Views</p>
									  
									  {{-- <p class="mb-0 text-success">6210</p> --}}
								  </div>
								  <p style="margin-top: 10px;font-size: 12px;" class="mb-0">Total Views</p>
								  <div>
									 

									  <h1 style="font-size: 18px;" class="mb-0 fw-600">0</h1>
								  </div>
							  </div>

							  <div class="col-lg-3 col-12 be-1">
								<div class="d-flex justify-content-between align-items-center">
									
									
									
								</div>
								<p style="margin-top: 10px;font-size: 12px;" class="mb-0">Project Views</p>
								<div>
									<h1 style="font-size: 18px;" class="mb-0 fw-600">0<small class="ms-10 me-5 text-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
									</svg> <span class="text-success">

									
									
									</span></small></h1>
								</div>
							</div>
								
								

							  
							  

							{{-- <div class="col-lg-3 col-12 be-1">
								<div class="d-flex justify-content-between align-items-center">
									
									
									
								</div>
								<p style="margin-top: 10px;font-size: 12px;" class="mb-0 text-fade">Project2</p>
								<div>
									<h1 style="font-size: 18px;" class="mb-0 fw-600">26,501<small class="ms-10 me-5 text-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
									  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
									</svg> <span class="text-success">1.42%</span></small></h1>
								</div>
							</div> --}}

							{{-- <div class="col-lg-3 col-12 be-1">
								<div class="d-flex justify-content-between align-items-center">
									
									
									
								</div>
								<p style="margin-top: 10px;font-size: 12px;" class="mb-0 text-fade">Project3</p>
								<div>
									<h1 style="font-size: 18px;" class="mb-0 fw-600">26,501<small class="ms-10 me-5 text-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
									  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
									</svg> <span class="text-success">1.42%</span></small></h1>
								</div>
							</div> --}}
							  
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
								
								<h3 class="box-title">Total Offset Bids</h3>
								{{-- <div id="curve_chart" style="width: 520px; height: 290px"></div> --}}
								{{-- <canvas  id="chartjs_bar" style="width: 520px; height: 290px"></canvas>  --}}
								
								<canvas id="myChart"></canvas>
							</div>
						</div>		
					</div>
					
					<div class="col-lg-5 col-12">
	
						<div class="box">
							<div class="box-body" style="padding-bottom: 40px !important;">
								 <h3 class="box-title">Project Offsets</h3>
									<div class="d-flex justify-content-start align-items-center mt-md-20 mt-0">
										{{-- <div id="donutchartt" style="width: 950px; height: 250px;"></div> --}}
										<canvas style="width: 520px; height: 220px;" id="doughnut-chartcanvas-2"></canvas>
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
							<h4 class="fw-500">Offsetters</h4>
							
						</div>
						<div class="p-0">
							<div class="table-responsive">
								<table id="exampler" class="table table-hover display nowrap "style="width:100%">
								  <thead>
									<tr>
										<th scope="col">Sn</th>
										<th scope="col">Name</th>
										<th scope="col">Amount (&#36)</th>
										<th scope="col">Project Name</th>
										<th scope="col">Date Paid</th>
									  </tr>
								  </thead>
								  <tbody>
									@php
                                    $sn = 0;
									@endphp

									
								 
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
							
							

						 

							

							

							

						</div>
					</div>
				</div>
				
			</div>

			

		
	</div>
		  
		  		
	  </section>
	  <!-- /.content -->
	</div>
</div>

<!-- Long Content Scroll Modal -->


@endsection


@section('script')

<script>
	$('#exampler').DataTable( {
		pageLength : 5,

	} );
</script>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


			

<script>
	const ctx = document.getElementById('myChart');
  
	new Chart(ctx, {
	  type: 'bar',
	  data: {
		labels: '',
		datasets: [{
		  label: 'offsets',
		  data: '0',
		  borderWidth: 1,
		  
		}]
	  },
	  options: {
		plugins: {
            legend: {
              position: "bottom",
              
          }
        },
		scales: {
		  y: {
			beginAtZero: true
		  }
		}
	  }
	});

	
  </script>

<script>
  

  var ctx1 = document.getElementById('doughnut-chartcanvas-2');

  new Chart(ctx1, {
	  type: 'doughnut',
	  data: {
		labels: '',
		datasets: [{
		  label: 'offsets',
		  data: 0,
		  borderWidth: 1,
		  
		}]
	  },
	  options: {
		plugins: {
            legend: {
              position: "right",
              
          }
        },
		responsive: true,
    maintainAspectRatio: false,
		
	  }
	});

  


</script>





<script type="text/javascript">
	google.charts.load("current", {packages:["corechart"]});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
	  var data = google.visualization.arrayToDataTable([
		['Task', 'Hours per Day'],
		['Project A',     0],
		['Project B',      0],

		
		
	  ]);

	  var options = {
		// title: 'Subscribers',
		pieHole: 0.4,
	  };

	  var chart = new google.visualization.PieChart(document.getElementById('donutchartt'));
	  chart.draw(data, options);
	}
  </script>


@endsection
  
 
