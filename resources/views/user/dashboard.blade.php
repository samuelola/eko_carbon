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
									  <h1 style="font-size: 18px;" class="mb-0 fw-600">{{ $countprojectview }}<small class="ms-10 me-5 text-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
									  </svg> <span class="text-success">1.42%</span></small></h1>
								  </div>
							  </div>

							 
								
								@foreach ($theprojects as $theproject)

								<div class="col-lg-3 col-12 be-1">
									<div class="d-flex justify-content-between align-items-center">
										
										
										{{-- <p class="mb-0 text-success">6210</p> --}}
									</div>
									<p style="margin-top: 10px;font-size: 12px;" class="mb-0">{{ $theproject->project_name }}</p>
									<div>
										<h1 style="font-size: 18px;" class="mb-0 fw-600">{{ $theproject->theprojectview }}<small class="ms-10 me-5 text-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
										  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
										</svg> <span class="text-success">

									    <!--all views count-->
										
										<?php

                                           $sumprojects = App\Models\Project::sum('theprojectview');

										   $each_views = $theproject->theprojectview;
										   $total_views = $sumprojects;

										   $percentage_views = ($each_views/$total_views)*100;
										   echo round($percentage_views,2)."%";

										?>
											
										 
										
										</span></small></h1>
									</div>
								</div>
									
								@endforeach

							  
							  

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
									<div id="investment-chart"></div>
							</div>
						</div>		
					</div>
					
					<div class="col-lg-5 col-12">
	
						<div class="box">
							<div class="box-body" style="padding-bottom: 40px !important;">
								 <h3 class="box-title">Project Offsets</h3>
									<div class="d-flex justify-content-start align-items-center mt-md-20 mt-0">
										<div id="portfolio-chart"></div>
										<ul class="list-unstyled" style="margin-left: -21px;">
											<li><span class="badge badge-primary badge-dot me-10"></span> Large Cap Funds</li>
											<li><span class="badge badge-info badge-dot me-10"></span> Diversified Funds</li>
											<li><span class="badge badge-success badge-dot me-10"></span> Debt Funds</li>
										</ul>
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
							<h4 class="fw-500">Offseters</h4>
							
						</div>
						<div class="p-0">
							<table class="table table-striped">
								<thead>
								  <tr>
									<th scope="col">ID</th>
									<th scope="col">Name</th>
									<th scope="col">Amount</th>
									<th scope="col">Date Paid</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>11,393,2992</td>
									<td>19-05-2022</td>
								  </tr>
								  <tr>
									<th scope="row">2</th>
									<td>Mark</td>
									<td>11,393,2992</td>
									<td>19-05-2022</td>
								  </tr>
								  <tr>
									<th scope="row">3</th>
									<td>Mark</td>
									<td>11,393,2992</td>
									<td>19-05-2022</td>
								  </tr>
								  <tr>
									<th scope="row">4</th>
									<td>Mark</td>
									<td>11,393,2992</td>
									<td>19-05-2022</td>
								  </tr>
								  <tr>
									<th scope="row">5</th>
									<td>Mark</td>
									<td>11,393,2992</td>
									<td>19-05-2022</td>
								  </tr>
								  <tr>
									<th scope="row">6</th>
									<td>Mark</td>
									<td>11,393,2992</td>
									<td>19-05-2022</td>
								  </tr>
								</tbody>
							  </table>
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
  
 
