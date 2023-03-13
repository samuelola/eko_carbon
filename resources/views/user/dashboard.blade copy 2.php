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
									<p style="margin-top: 10px;font-size: 12px;" class="mb-0">{{ $theproject->project_name }} views</p>
									<div>
										<h1 style="font-size: 18px;" class="mb-0 fw-600">{{ $theproject->theprojectview }}<small class="ms-10 me-5 text-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
										  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
										</svg> <span class="text-success">

									    <!--all views count-->
										
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
								<div id="curve_chart" style="width: 520px; height: 290px"></div>
							</div>
						</div>		
					</div>
					
					<div class="col-lg-5 col-12">
	
						<div class="box">
							<div class="box-body" style="padding-bottom: 40px !important;">
								 <h3 class="box-title">Project Offsets</h3>
									<div class="d-flex justify-content-start align-items-center mt-md-20 mt-0">
										<div id="donutchartt" style="width: 950px; height: 250px;"></div>
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
									@foreach ($offsetterspayments as $val)
									<tr>
										<th scope="row">{{ $sn+=1; }}</th>
										<td>{{ ucfirst($val->user->firstname) }} {{ ucfirst($val->user->lastname) }}</td>
									
										<td>{{ $val->amount }}</td>
										<td>{{ $val->project->project_name }}</td>
										<td>{{ Carbon\Carbon::parse($val->created_at)->format('M j, Y ')}}</td>
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
<div class="modal fade" id="scrollable-modalj" tabindex="-1" role="dialog"
aria-labelledby="scrollableModalTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
  <div class="modal-content">
	<div class="modal-header">
	  <h5 class="modal-title" id="scrollableModalTitle">Add New Project</h5>
	  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	</div>
	<div class="modal-body">
	  <form id="form1" class="ps-3 pe-3" action="#"  enctype="multipart/form-data">

		<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
				  <input type="hidden" id="user_id" value="{{Auth::user()->id}}" name="user_id"/>
		<input type="hidden" id="status" value="1" name="status"/>
		<input type="hidden" id="carbon_credit" value="0" name="carbon_credit"/>
		<input type="hidden" id="theprojectview" value="0" name="theprojectview"/>
		<div class="mb-3">
		  <label for="username" class="form-label">Project Type:</label>
			<select class="form-select" name="project_type" id="project_type" required="">
			  <option selected disabled>Select--</option>
			  @foreach ($allproject_type as $value)

			  <option value="{{ $value->name }}">{{ $value->name }}</option>
				
			  @endforeach
			  {{-- <option value="design">design</option>
			  <option value="development">development</option>
			  <option value="illustration">illustration</option>
			  <option value="branding">branding</option>
			  <option value="video">video</option> --}}
			</select>
		</div>

		<div class="mb-3">
		  <label for="emailaddress" class="form-label">Project Name</label>
		  <input class="form-control" type="text" id="project_name" required="" name="project_name" >
		</div>

		<div class="mb-3">
		  <label for="password" class="form-label">Project Description</label>
		  <textarea style="height: 91px;" class="form-control" name="project_desc" id="project_desc" cols="30" rows="10" required=""></textarea>
		</div>

		<div class="mb-3">
		  <label for="password" class="form-label">Your Tonnes of CO<sub>2</sub>?</label>
			<input class="form-control" type="number" value="0" id="tonnes" readonly name="tonnes" >
		</div>
		
		{{-- <div class="mb-3">
		<label for="addressline12" class="form-label">Pictures?</label>
							  <div class='file file--success'>
								  <label for='input-file'>
								  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
							  <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
							  <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
							</svg> Click to upload
								  </label>
								  <input id='input-file' type='file' name="image[]" multiple accept="image/*" required=""/>
				
								  
					  </div>
		</div> --}}

		<div class="mb-3">
		  <label for="addressline12" class="form-label">Pictures?</label>
				<div class='file file--success'>
				  <label for='input-file'>
				  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
				<path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
				<path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
				</svg> Click to upload
				  </label>
				  <input id='input-file' type='file' name="image" accept="image/*" required=""/>
				  
				  
			</div>
			<span id="mee" style="margin-left: 118px;"><!-- Selected file will get here --></span>
		  </div>
		
		  <div class="mb-3">
			<div class="form-group">
			  <label for="url123" class="form-label">Add  External Link describing this project?</label>
			  <input type="text" class="form-control" id="external_link" name="external_link" required="">
			</div>
		  </div>

		  {{-- <div class="mb-3">
			<div class="form-group">
			  <label for="url123" class="form-label">Add  Tags ?</label>
			 
			  <div class="tags-default">
				<input type="text" value="" id="tags" name="tags[]" data-role="tagsinput" placeholder="add tags" style="display: none;">
			  </div>
			</div>
			
			
		  </div> --}}
	  </form>
	</div>
	<div class="modal-footer">
	  <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
	  <button type="submit" id="myproject" class="btn btn-primary">Submit</button>
	  {{-- <a href="{{ route('dashboard') }}" class="btn btn-primary">Submit</a> --}}
	</div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal --> 

@endsection


@section('script')

<script>
	$('#exampler').DataTable( {
		pageLength : 5,

	} );
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
	google.charts.load('current', {'packages':['bar']});
	google.charts.setOnLoadCallback(drawStuff);




	function drawStuff() {
	  var data = new google.visualization.arrayToDataTable([
		['Offsetters', 'Percentage'],
		// ["King's pawn (e4)", 10],
		// 			["Queen's pawn (d4)", 31],
		//             ["Knight to King 3 (Nf3)", 12],
		// ["King's pawn (e4)", 10],
		// ["Queen's pawn (d4)", 31],
		// ["Knight to King 3 (Nf3)", 12],
		// ["Queen's bishop pawn (c4)", 44],
		// ['Other', 3]

		
        <?php

		    if($offsetterspaymentsts->count() > 1){

				foreach($offsetterspaymentsts as $li){


				$woo =  $li->offsetters_amount;
				$wooname = $li->project_name;
				echo "['$wooname'" . "," . " $woo],";


				}



			}else{

				$thelib = ['project1','project2','Project3'];
				$my = [1,1,1];

				for($i=0; $i<count($thelib); $i++){
            
					echo "['$thelib[$i]'" . "," . " $my[$i]],";
					
				}

				


			}

		    
                
		    
          
          
          ?>
        


	  ]);

	  var options = {
		width: 520,
        height: 290,
		legend: { position: 'none' },
		chart: {
		  },
		axes: {
		  x: {
			0: { side: 'bottom'} // Top x-axis.
		  }
		},
		bar: { groupWidth: "70%" }
	  };

	  var chart = new google.charts.Bar(document.getElementById('curve_chart'));
	  // Convert the Classic options to Material options.
	  chart.draw(data, google.charts.Bar.convertOptions(options));
	};
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
  
 
