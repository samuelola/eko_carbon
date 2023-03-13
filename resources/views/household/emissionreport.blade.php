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
										<canvas id="myerChart"></canvas>
									</div>
									
							</div>
						</div>
	
					</div>

					<div class="col-lg-7 col-12">
						<div class="box">
                            
							<div class="box-body" style="padding-bottom: 20px !important;">
								<h3 class="box-title">Total Offset Bids</h3>
								
                                <canvas id="mytChart"></canvas>
                               
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

<?php 
  
  $newTotal = 0;
  foreach ($getemissionreport as $value) {
    
    $sarunum[] = $value->total;
    $newTotal += $value->total;
	$sarutype[] = $value->type;
    
	$saratime[] = date('Y-m-d',strtotime($value->created_at));


  }

  
  echo $newTotal;
  
 

  echo  json_encode($saratime);
//   echo  json_encode($sarunum);
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

var rgt = <?php echo  json_encode($saratime) ?>

var ty = eliminateDuplicates(rgt);

console.log(ty);

</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myerChart');
  
    new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: <?php  echo  json_encode($sarutype);?>,
        datasets: [{
          label: 'Emission Values',
          data: <?php  echo  json_encode($sarunum);?>,
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
    const ctxv = document.getElementById('mytChart');
  
    new Chart(ctxv, {
      type: 'bar',
      data: {
        labels: <?php  echo  json_encode($saratime);?>,
        datasets: [{
          label: 'Emissions',
          data: <?php  echo  json_encode($sarunum);?>,
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
  
 
