@extends('layouts.householdmaster')

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
									  <h1 style="font-size: 18px;" class="mb-0 fw-600">{{ number_format($alltheemissions) }}</h1>
								  </div>
							  </div>

							  <div class="col-lg-3 col-12 be-1">
								<div class="d-flex justify-content-between align-items-center">
									<p class="mb-0"></p>
									
									{{-- <p class="mb-0 text-success">6210</p> --}}
								</div>
								<p style="margin-top: 31px;font-size: 12px;" class="mb-0">Household</p>
								<div>
									<h1 style="font-size: 18px;" class="mb-0 fw-600"> {{ isset($houseemissions) ? number_format($houseemissions) : '0' }}</h1>
								</div>
							</div>

							<div class="col-lg-3 col-12 be-1">
								<div class="d-flex justify-content-between align-items-center">
									<p class="mb-0"></p>
									
									{{-- <p class="mb-0 text-success">6210</p> --}}
								</div>
								<p style="margin-top: 31px;font-size: 12px;" class="mb-0">Vehicles</p>
								<div>
									<h1 style="font-size: 18px;" class="mb-0 fw-600">{{ isset($travelemissions) ? number_format($travelemissions) : '0' }}</h1>
								</div>
							</div>

							<div class="col-lg-3 col-12 be-1">
								<div class="d-flex justify-content-between align-items-center">
									<p class="mb-0"></p>
									
									{{-- <p class="mb-0 text-success">6210</p> --}}
								</div>
								<p style="margin-top: 31px;font-size: 12px;" class="mb-0">Flights</p>
								<div>
									<h1 style="font-size: 18px;" class="mb-0 fw-600">{{ isset($flightemissions) ? number_format($flightemissions) : '0' }}</h1>
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
										{{-- <div id="mydonutchartt" style="width: 950px; height: 250px;"></div> --}}
                                        <canvas style="width:255px !important;height:220px !important;" id="mytopChart"></canvas>
										
									</div>
									
							</div>
						</div>
	
					</div>

					<div class="col-lg-7 col-12">
						<div class="box">
							<div class="box-body" style="padding-bottom: 20px !important;">
								<h3 class="box-title">Emission Overtime</h3>
								{{-- <div id="top_x_divv" style="width: 520px; height: 290px;"></div> --}}
								
								<canvas  id="myChartspin"></canvas>
								{{-- {!! $chart1->renderHtml() !!} --}}
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

<?php

  foreach ($topfiveemissions as $value) {

	$sarunum[] = $value->total;
	$sarutype[] = $value->type;
	$saratime[] = $value->created_at;
	
  }

rsort($sarunum);
rsort($sarutype);

$largest = array_slice($sarunum, 0, 5);
// $largestt = array_slice($sarutype, 0, 5);

//get largetest value

foreach ($largest as $val) {

	$check = App\Models\Householdcal::where('total','=',$val)->first();

	$largest_name[] = $check->type;

}


// convert timestamp to date

foreach ($saratime as $vall) {

	$thedate[] = date('F-Y', strtotime($vall));

	// $thedate[] = $vall;
	
	$checkk = App\Models\Householdcal::where('created_at','=',$vall)->sum('total');

	// $checkkr = App\Models\Householdcal::where('created_at','=',$vall)->distinct()->sum('total');

	// $thesa = Illuminate\Support\Facades\DB::table('emissioncal')->select('total')->where(Year(created)) 
     
	
	$rel[] = $checkk;

}






?>

<script>
	function eliminateDuplicates(arr) {
  var i,
      len = arr.length,
      out = [],
      obj = {};

  for (i = 0; i < len; i++) {
    obj[arr[i]] = 0;
  }
  for (i in obj) {
    out.push(i);
  }
  return out;
}

var uf = <?php echo json_encode($thedate)?>;//date
var uff = <?php echo json_encode($rel)?>; // amount

console.log(eliminateDuplicates(uf));
console.log(eliminateDuplicates(uff));


var wof = eliminateDuplicates(uf);

var woff = eliminateDuplicates(uff);
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
	const ctx = document.getElementById('mytopChart');
  
	new Chart(ctx, {
	  type: 'doughnut',
	  data: {
		labels:  <?php  echo  json_encode($largest_name);?>,
		datasets: [{
		  label: 'Emissions',
		  data: <?php  echo  json_encode($largest);?>,
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
  const ctxf = document.getElementById('myChartspin');

  new Chart(ctxf, {
    type: 'line',
    data: {
      labels: wof,
      datasets: [{
        label: 'emissions',
        data: woff,
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
</script>






@endsection

  
 
