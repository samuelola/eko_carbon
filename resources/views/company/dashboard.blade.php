@extends('layouts.companymaster')

@section('title')
    | Dashboard
@endsection

@section('content')

<div class="content-wrapper">
	<div class="container-full">
	  <!-- Main content -->
	  <section class="content">
		<div class="row">
			<div class="col-md-6">
				<p style="font-size: 18px;
				font-weight: 500;">Welcome Back,{{ Auth::user()->firstname }}</p>
				<p>See an overview of your total carbon emission</p>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-2">
				<a id="mybutton"  class="btn btn-success" href="{{ route('marketplace') }}">Offset Footprint</a>
			</div>
		</div>
		  <div class="row">
			  <div class="col-xl-12 col-12">
				  <div class="box">
					  <div class="box-body" style="padding-bottom: 20px !important;">
						  <div class="row">
							  <div class="col-lg-3 col-12 be-1">
								  <div class="d-flex justify-content-between align-items-center">
									  <p class="mb-0">Emissions</p>
									  
									  {{-- <p class="mb-0 text-success">6210</p> --}}
								  </div>
								  <p style="margin-top: 10px;font-size: 12px;" class="mb-0">Total Emmissions</p>
								  <div>
									  <h1 style="font-size: 18px;" class="mb-0 fw-600">0</h1>
								  </div>
							  </div>

							  <div class="col-lg-3 col-12 be-1">
								<div class="d-flex justify-content-between align-items-center">
									<p class="mb-0"></p>
									
									{{-- <p class="mb-0 text-success">6210</p> --}}
								</div>
								<p style="margin-top: 31px;font-size: 12px;" class="mb-0">Company</p>
								<div>
									<h1 style="font-size: 18px;" class="mb-0 fw-600"> 0</h1>
								</div>
							</div>

							<div class="col-lg-3 col-12 be-1">
								<div class="d-flex justify-content-between align-items-center">
									<p class="mb-0"></p>
									
									{{-- <p class="mb-0 text-success">6210</p> --}}
								</div>
								<p style="margin-top: 31px;font-size: 12px;" class="mb-0">Vehicles</p>
								<div>
									<h1 style="font-size: 18px;" class="mb-0 fw-600">0</h1>
								</div>
							</div>

							<div class="col-lg-3 col-12 be-1">
								<div class="d-flex justify-content-between align-items-center">
									<p class="mb-0"></p>
									
									{{-- <p class="mb-0 text-success">6210</p> --}}
								</div>
								<p style="margin-top: 31px;font-size: 12px;" class="mb-0">Flights</p>
								<div>
									<h1 style="font-size: 18px;" class="mb-0 fw-600">0</h1>
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

					<div class="col-lg-5 col-12">
	
						<div class="box">
							<div class="box-body" style="padding-bottom: 40px !important;">
								 <h3 class="box-title">Top Carbon Emission</h3>
									<div class="d-flex justify-content-start align-items-center mt-md-20 mt-0">
										
										<canvas id="mycompanyChart" style="width: 520px; height: 215px;"></canvas>
										
									</div>
									
							</div>
						</div>
	
					</div>

					<div class="col-lg-7 col-12">
						<div class="box">
							<div class="box-body" style="padding-bottom: 20px !important;">
								<h3 class="box-title">Emission Overtime</h3>
								<canvas id="mycomChart"></canvas>
							</div>
						</div>		
					</div>
					
					

				</div>
                				
			   
			</div>
		   
		</div>	

		  <!--end new row-->

		
		  
		  		
	  </section>
	  <!-- /.content -->
	</div>
</div>

@endsection


@section('script')

<script>
	$('#exampler').DataTable( {
		pageLength : 5,

	} );
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
	const ctx = document.getElementById('mycompanyChart');
  
	new Chart(ctx, {
	  type: 'doughnut',
	  data: {
		labels: ['Building', 'Vehicle', 'Flights', 'Shipping', 'Commute'],
		datasets: [{
		  label: 'Carbon Emissions',
		  data: [12, 19, 3, 5, 2],
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
    maintainAspectRatio: false,
		
	  }
	});
  </script>

<script>
	const ctxx = document.getElementById('mycomChart');
  
	new Chart(ctxx, {
	  type: 'bar',
	  data: {
		labels: ['Mon', 'Tue', 'Wed', 'Thur', 'Fri'],
		datasets: [{
		  label: 'Emissions',
		  data: [12, 19, 3, 5, 2],
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
   
		
	  }
	});
  </script>


@endsection

  
 
