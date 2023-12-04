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
									  {{-- <h1 style="font-size: 18px;" class="mb-0 fw-600">{{isset($countprojectview) ? $countprojectview : '0' }}<small class="ms-10 me-5 text-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
									  </svg> <span class="text-success">1.42%</span></small></h1> --}}

									  <h1 style="font-size: 18px;" class="mb-0 fw-600">{{isset($countprojectview) ? $countprojectview : '0' }}</h1>
								  </div>
							  </div>

							    <?php 

								
								    foreach ($theprojects as $theproject){

										?>

										<div class="col-lg-3 col-12 be-1">
											<div class="d-flex justify-content-between align-items-center">
												
												
												
											</div>
											<p style="margin-top: 10px;font-size: 12px;" class="mb-0">{{ isset($theproject->project_name) ? $theproject->project_name : '' }} views</p>
											<div>
												<h1 style="font-size: 18px;" class="mb-0 fw-600">{{ isset($theproject->theprojectview) ? $theproject->theprojectview : '' }}<small class="ms-10 me-5 text-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
												<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
												</svg> <span class="text-success">

												 <?php 
													
													$sumprojects = App\Models\Project::sum('theprojectview');

														if($sumprojects > 0){

															$each_views = $theproject->theprojectview;
														$total_views = $sumprojects;

														$percentage_views = ($each_views/$total_views)*100;
														echo round($percentage_views,2)."%";

														}else{
															

														}
												 ?>
												
												
												</span></small></h1>
											</div>
										</div>
										
										<?php

									}
								?>
								
								

							  
							  

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

									@if(!empty($offsetterspayments))
									@foreach ($offsetterspayments as $val)
									<tr>
										<th scope="row">{{ $sn+=1; }}</th>
										<td>{{ ucfirst($val->user->firstname) }} {{ ucfirst($val->user->lastname) }}</td>
									
										<td>{{ number_format($val->amount) }}</td>
										<td>{{ $val->project->project_name }}</td>
										<td>{{ Carbon\Carbon::parse($val->created_at)->format('M j, Y ')}}</td>
									  </tr>
									@endforeach
								  @else

								  @endif
								 
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
							
							@foreach($allprojects as $allproject)

						     @if($allproject->status == 2)

							 <div class="timeline-item">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#46bc5c" class="bi bi-check-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
									<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
								</svg>
								<div class="timeline-item-info">
									<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1">{{ $allproject->project_name }} has been {{ $allproject->status ? 'Approved' : 'Approved' }} for listing</h5>
									<p><span class="ms-2 fs-12">Year: {{ Carbon\Carbon::parse($allproject->created_at)->format('M j, Y ')}}</span></p>
								</div>
							</div>

							 @elseif($allproject->status == 1)

							 <div class="timeline-item">
								{{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffc107" class="bi bi-check-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
									<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
								  </svg> --}}

								  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffc107" class="bi bi-slash-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
									<path d="M11.354 4.646a.5.5 0 0 0-.708 0l-6 6a.5.5 0 0 0 .708.708l6-6a.5.5 0 0 0 0-.708z"/>
								  </svg>
								<div class="timeline-item-info">
									<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1">{{ $allproject->project_name }} has been {{ $allproject->status ? 'Pending' : 'Pending' }} for listing</h5>
									<p><span class="ms-2 fs-12">Year: {{ Carbon\Carbon::parse($allproject->created_at)->format('M j, Y ')}}</span></p>
								</div>
							</div>

							@elseif($allproject->status == 3)
							

							 <div class="timeline-item">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-x-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
									<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
								  </svg>
								<div class="timeline-item-info">
									<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1">{{ $allproject->project_name }} has been {{ $allproject->status ? 'Declined' : 'Declined' }} for listing</h5>
									<p><span class="ms-2 fs-12">Year: {{ Carbon\Carbon::parse($allproject->created_at)->format('M j, Y ')}}</span></p>
								</div>
							</div>
								
							 @endif

							

						  @endforeach

						 

							

							

							

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


<?php

		    
                


					foreach($offsetterspaymentsts as $li){

					// $woo =  $li->offsetters_amount;
					$woo =  $li->offsetters_amount;
					$wooname = $li->project_name;

					// echo "['$wooname'" . "," . " $woo],";


					$sar[] = $wooname;
					$jid[] = $woo;

					}


					foreach($offsetterspaymentsts as $li){

					// $woo =  $li->offsetters_amount;

					$wooa =  $li->carbon_credit;
					$woob =  $li->tonnes;
					$woo =  $wooa-$woob;
					$wooname = $li->project_name;

					


					$sard[] = $wooname;
					$jidd[] = $woo;

					}


				
				


		
			
?>			

<script>
	const ctx = document.getElementById('myChart');
  
	new Chart(ctx, {
	  type: 'bar',
	  data: {
		labels: <?php  echo  json_encode(isset($sar) ? $sar : 0);?>,
		datasets: [{
		  label: 'offsets',
		  data: <?php  echo  json_encode(isset($jid) ? $jid : 0);?>,
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
		labels: <?php  echo  json_encode(isset($sard) ? $sard : 0);?>,
		datasets: [{
		  label: 'offsets',
		  data: <?php  echo  json_encode(isset($jidd) ? $jidd : 0);?>,
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
		// ['Project A',     50],
		// ['Project B',      50],

		<?php

		    if($offsetterspaymentsts->count() > 1){

				foreach($offsetterspaymentsts as $li){

				$woo =  $li->offsetters_amount;
				$wooname = $li->project_name;

				echo "['$wooname'" . "," . " $woo],";
				}


			}
			
			
			else{

				$thelib = ['project1','project2','Project3'];
				$my = [1,1,1];

				for($i=0; $i<count($thelib); $i++){
            
					echo "['$thelib[$i]'" . "," . " $my[$i]],";
					
				}
			}
                
		    
          
            
          
          ?>
		
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
  
 
