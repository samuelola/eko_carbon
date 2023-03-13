@extends('layouts.householdmaster')

@section('title')
    | Report
@endsection

@section('content')

<div class="content-wrapper">
	<div class="container-full">
	  <!-- Main content -->
	  <section class="content">
		  <div class="row">
            <div class="col-lg-10 col-12">
               
            </div>
            <div class="col-lg-2 col-12">
                <a style="margin-bottom: 12px;" class="btn btn-primary" href="{{ route('marketplace') }}">Offset</a>
            </div>

                {{-- <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Products</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">e-Commerce</li>
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                </div> --}}
           </div>	

          
		  <!--new row-->
           
		  <div class="row">
			<div class="col-xl-12 col-12">

				<div class="row">

					<div class="col-lg-5 col-12">
	
						<div class="box">
							<div class="box-body" style="padding-bottom: 40px !important;">
								 <h3 class="box-title">Project Offsets</h3>
									<div class="d-flex justify-content-start align-items-center mt-md-20 mt-0">
										<canvas style="width:255px !important;height:220px !important;" id="mytopChart"></canvas>
									</div>
									
							</div>
						</div>
	
					</div>

					<div class="col-lg-7 col-12">
						<div class="box">
							<div class="box-body" style="padding-bottom: 20px !important;">
								<h3 class="box-title">Total Offset Bids</h3>
								<canvas  id="myChartspin"></canvas>
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

	$sarunum[] = isset($value->total) ? $value->total : '';
	$sarutype[] = isset($value->type) ? $value->type : '';
	$saratime[] = isset($value->created_at) ? $value->created_at : '';
	
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

	$checkk = App\Models\Householdcal::where('created_at','=',$vall)->get();
	// $theamt[] = $checkk->total;
	$sa[] = date('Y-m-d',strtotime($vall));

}

// foreach($theamt as $v){

// 	$rel[]= $v;

// }






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
      labels: <?php echo json_encode($sa) ?>,
      datasets: [{
        label: 'emissions',
        data: <?php echo json_encode($sarunum) ?>,
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
  
 
