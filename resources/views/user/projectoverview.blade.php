@extends('layouts.master')

@section('title')
    | Overview
@endsection

@section('content')

<div class="content-wrapper">
	<div class="container-full">
	  <!-- Main content -->
	  <section class="content">
		  	

          
		  <!--new row-->
           
		  <div class="row">
			<div class="col-xl-12 col-12">

				<div class="row">

                    <div class="col-lg-5 col-12">
	
						<div class="box">
							<div class="box-body" style="padding-bottom: 40px !important;">
								 <h3 class="box-title">Carbon Reduction</h3>
                                 <p>This shows the reduction impact of the offset</p>
									<div class="d-flex justify-content-start align-items-center mt-md-20 mt-0">
										
                                        <canvas id="myChartpie" style="width: 305px;height:305px"></canvas>
									</div>
							</div>
						</div>
	
					</div>

					<div class="col-lg-7 col-12">
						<div class="box">
							<div class="box-body" style="padding-bottom: 20px !important;">
								<h3 class="box-title">Total Offset Bids</h3>
								<canvas id="myChart"></canvas>
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
										<th scope="col">Date Paid</th>
									  </tr>
								  </thead>
								  <tbody>
									{{-- @php
                                    $sn = 0;
									@endphp
									@foreach ($offsetterspayments as $val)
									<tr>
										<th scope="row">{{ $sn+=1; }}</th>
										<td>{{ ucfirst($val->user->firstname) }} {{ ucfirst($val->user->lastname) }}</td>
									
										<td>{{ $val->amount }}</td>
										<td>{{ Carbon\Carbon::parse($val->created_at)->format('M j, Y ')}}</td>
									  </tr>
									@endforeach --}}
								  
								 
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

@endsection


@section('script')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
	const ctx = document.getElementById('myChart');
  
	new Chart(ctx, {
	  type: 'bar',
	  data: {
		labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
		datasets: [{
		  label: '# of Votes',
		  data: [12, 19, 3, 5, 2, 3],
		  borderWidth: 1
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
	const ctxx = document.getElementById('myChartpie');
  
	new Chart(ctxx, {
	  type: 'doughnut',
	  data: {
		labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
		datasets: [{
		  label: '# of Votes',
		  data: [12, 19, 3, 5, 2, 3],
		  borderWidth: 1
		}]
	  },
	  options: {
		plugins: {
            legend: {
              position: "right",
              
          }
        },
		responsive: true,
	scales: {
	//   y: {
	// 	beginAtZero: true
	//   }
	}
	  }
	});
  </script>


@endsection
  
 
