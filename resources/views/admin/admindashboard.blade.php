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
									
									  <h1 style="font-size: 18px;" class="mb-0 fw-600">{{ $offsetters->count() }}<small class="ms-10 me-5 text-success"></small></h1>
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
								<div class="row" style="
								margin-top: -42px;
							">
							        
									<div class="col-md-5"></div>
									<div class="col-md-7">

										<div class="form-group">
											<div class="row">
												<div class="col-md-2">
													
												</div>
												
												<div class="col-md-5">
													<span>From</span>
													<input type="date" onchange="startDateFilter(this)" value="01-01-2023" min="01-01-2023" max="01-01-2023"/>
												</div>
	                                            
												<div class="col-md-5">
													<span>To</span>
													<input type="date" onchange="endDateFilter(this)" value="31-01-2023" min="01-01-2023" max="31-01-2023"/>
												</div>
											</div>
										</div>
                                        

									</div>
								</div>
								{{-- <div id="columnchart_values" style="width: 520px; height: 290px;"></div> --}}
								{{-- <div id="top_x_div" style="width: 520px; height: 290px;"></div> --}}
								<canvas id="myChart"></canvas>
							</div>
						</div>		
					</div>
					
					<div class="col-lg-5 col-12">
	
						<div class="box">
							<div class="box-body" style="padding-bottom: 40px !important;">
								 {{-- <h3 class="box-title">Subscribers</h3> --}}
									<div class="d-flex justify-content-start align-items-center mt-md-20 mt-0">
										<canvas id="myChartt" style="width: 520px; height: 215px;"></canvas>
										
									</div>
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
          
            $my = [$allusers->count(),$listers->count(),$offsetters->count()];
			$myy = [$allusers->count(),$listers->count()];
     
			$thelib = ['Users','Listers','Offsetters'];


			foreach ($allregistrations as $value) {


$saratime[] = $value->created_at;

}
			
		

foreach ($saratime as $vall) {

$checkk = App\Models\User::where('created_at','=',$vall)->orderBy('id','DESC')->get();
// $theamt[] = $checkk->total;
$sa[] = date('Y-m-d',strtotime($vall));

}

          
       ?>





	   

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>

<script>
    var dateArrayJs = <?php echo json_encode($sa) ?>;

	// console.log(dateArrayJs);
	var dateChartJs = dateArrayJs.map((day,index)=>{

		let dayjs = new Date(day);

		return dayjs.setHours(0,0,0,0);

	});

	console.log(dateChartJs);






</script>

<script>
  const ctx = document.getElementById('myChart');

  var Config = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: dateChartJs,
      datasets: [{
        label: 'Registrations',
        data: <?php echo  json_encode($myy) ?>,
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
			x:{
	      min:'01-01-2023',	
		  max:'31-01-2023',	
          type: 'time',
		  time: {
			unit:'day'
		  }
		},
		  y: {
			beginAtZero: true
		  }
		}
	  }
  });
</script>

<script>
  const ctxu = document.getElementById('myChartt');

  new Chart(ctxu, {
    type: 'doughnut',
    data: {
      labels: <?php echo  json_encode($thelib) ?>,
      datasets: [{
        label: 'Registrations',
        data: <?php echo  json_encode($my) ?>,
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

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<script type="text/javascript">
	google.charts.load('current', {'packages':['bar']});
	google.charts.setOnLoadCallback(drawStuff);

	function drawStuff() {
	  var data = new google.visualization.arrayToDataTable([
		['Registered-Users', 'Percentage'],
		// ["King's pawn (e4)", 10],
		// ["Queen's pawn (d4)", 31],
		// ["Knight to King 3 (Nf3)", 12],
		// ["Queen's bishop pawn (c4)", 44],
		// ['Other', 3]

        <?php
          
            $my = [$allusers->count(),$listers->count(),$offsetters->count()];
     
			$thelib = ['Users','Listers','Offsetters'];
			
				for($i=0; $i<3; $i++){
					
					echo "['$thelib[$i]'" . "," . " $my[$i]],";
					
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

	  var chart = new google.charts.Bar(document.getElementById('top_x_div'));
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
		['Freemium-Users',     50],
		['Premium-Users',      50],
		// ['Commute',  2],
		// ['Watch TV', 2],
		// ['Sleep',    7]
	  ]);

	  var options = {
		// title: 'Subscribers',
		pieHole: 0.4,
	  };

	  var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
	  chart.draw(data, options);
	}
  </script>




  <script>

function startDateFilter(date){

const startDate = new Date(date.value);

console.log(startDate.setHours(0,0,0,0));

Config.options.scales.x.min = startDate.setHours(0,0,0,0);

Config.update();

}

function endDateFilter(date){

const endDate = new Date(date.value);

console.log(endDate.setHours(0,0,0,0));

Config.options.scales.x.max = endDate.setHours(0,0,0,0);

Config.update();

}
	
</script>


@endsection
  
 
