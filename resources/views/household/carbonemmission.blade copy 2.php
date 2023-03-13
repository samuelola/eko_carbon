@extends('layouts.householdmaster')

@section('title')
    | Dashboard
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

                    {{-- <div class="col-lg-3 col-12">
						<div class="box" style="background-color: #187a56;
                        color: #fff;">
							<div class="box-body" style="padding-bottom: 20px !important;">
								
								
							</div>
						</div>		
					</div> --}}

					<div class="col-lg-9 col-12">

						
								{{-- <h6 class="box-title">Household calculator</h6> --}}
								
								{{-- <div id="top_x_divv" style="width: 520px; height: 290px;"></div> --}}

								<form action="#" class="form" id="forms" onsubmit="event.preventDefault()">
      
                                    <input type="hidden" value="{{ $user_id }}" id="user_id">
									<!-- <div class="progressbar">
									  <div class="progress" id="progress"></div>
									  
									  <div
										class="progress-step progress-step-active"
										data-title="Account"
									  ></div>
									  
									  <div class="progress-step" data-title="Social"></div>
									  <div class="progress-step" data-title="Personal"></div>
									</div> -->

									<!--end first-->

									
									<div class="step-forms step-forms-active">
										
                                      <!--start row-->
										<div class="row">
											<div class="col-md-5">
												{{-- <div class="box-body p-0"> --}}
													<div class="box" style="background-color: #187a56;
													color: #fff;">
														<div class="box-body" style="padding-bottom: 20px !important;">		
													<div class="timeline-alt pb-0" style="
													padding-left: 10px;
													padding-right: 10px;
												">
														
														
							
														
														 <div class="timeline-item" style="
														 padding-bottom: 30px;
													 ">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-check-circle" viewBox="0 0 16 16">
																<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
																<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
															</svg>
															<div class="timeline-item-info">
																<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1"> Household</h5>
																<p><span class="fs-12">Let us know more about your household emmissions </span></p>
															</div>
														</div>
				
														<div class="timeline-item" style="
														padding-bottom: 30px;
													">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-0-circle-fill" viewBox="0 0 16 16">
																<path d="M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895Z"/>
																<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.012 4.158c1.858 0 2.96-1.582 2.96-3.99V7.84c0-2.426-1.079-3.996-2.936-3.996-1.864 0-2.965 1.588-2.965 3.996v.328c0 2.42 1.09 3.99 2.941 3.99Z"/>
															  </svg>
															<div class="timeline-item-info">
																<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1"> Vehicle</h5>
																<p><span class="fs-12">We will like to know more about how many vehicles you own </span></p>
															</div>
														</div>
				
														<div class="timeline-item" style="
														padding-bottom: 30px;
													">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-circle-fill" viewBox="0 0 16 16">
																<circle cx="8" cy="8" r="8"/>
															  </svg>
															<div class="timeline-item-info">
																<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1"> Travelling</h5>
																<p><span class="fs-12">Let us know more about how you travel </span></p>
															</div>
														</div>
							
													   
							
														
							
														
														
							
														 
															
														
							
													</div>
												{{-- </div> --}}
													</div>
												   </div>	
											</div>
											<div class="col-md-7">
                                             <!--put div here-->
											  <div class="box">
												<div class="box-body" style="padding-bottom: 20px !important;">
												<span>Household</span><br>
								        <span style="font-size:17px;"><b>calculator</b></span><br>
										<span style="color:#5f5d5d;font-size:11px;">Tell us about your household</span>
                                              
												<div class="form-group" style="margin-top: 20px;">
													<label for="username">I want to calculate for</label>
													<p style="display: flex;position: relative;
													left: -80px;">
														<input type="radio" name="username" id="calusername1" value="myself"/><span style="margin-left: -50px;">Myself</span>
														<input type="radio" name="username" id="calusername2" value="household"/><span style="margin-left: -50px;">Household</span>
													
													</p>
													
												  </div>
												
												  
												  <div class="form-group">
													<label for="username">How many Adults?</label>
													<input type="number" name="username1" id="caladult" required/>
													
												  </div>
												  <div class="form-group">
													<label for="position">How many children?</label>
													<input type="number" name="position" id="calchildren" />
													
												  </div>
												  <div class="form-group">
													<label for="email">My living space</label>
													<select class="form-select" name="" id="callivingspace" style="font-size: 12px;">
														<option value="">--Select--</option>
														<option value="Small Apartment(studio/1 bedroom)">Small Apartment(studio/1 bedroom)</option>
														<option value="Average Home(2 bedroom)">Average Home(2 bedroom)</option>
														<option value="Large Home(More than 2 bedroom)">Large Home(More than 2 bedroom)</option>
														<option value="Custom">Custom</option>
													</select>
												  </div>
												  <div class="form-group">
													<label for="email">I want to calculate my carbon footprint from</label>
													<div class="row">
														<div class="col-md-5">
															<input type="date" name="dob" id="calfrom" />
														</div>
			
														<div class="col-md-2">
															<label for="email">to</label>
														</div>
														
														<div class="col-md-5">
															<input type="date" name="dob" id="calto" />
														</div>
													</div>
												  </div>
												
				
											</div>
										 </div>

									  <!--end row-->

									  <!--end first-->
									  <div class="">
										<a href="#" class="btn btn-next width-50 ml-auto">Next</a>
									  </div>

									</div>		
								</div>
									  <!--put end div-->
									</div>
									<div class="step-forms">

										<div class="row">
											<div class="col-md-5">
												{{-- <div class="box-body p-0"> --}}
													<div class="box" style="background-color: #187a56;
													color: #fff;">
														<div class="box-body" style="padding-bottom: 20px !important;">		
													<div class="timeline-alt pb-0" style="
													padding-left: 10px;
													padding-right: 10px;
												">
														
														
							
														
														 <div class="timeline-item" style="
														 padding-bottom: 30px;
													 ">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-check-circle" viewBox="0 0 16 16">
																<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
																<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
															</svg>
															<div class="timeline-item-info">
																<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1"> Household</h5>
																<p><span class="fs-12">Let us know more about your household emmissions </span></p>
															</div>
														</div>
				
														<div class="timeline-item" style="
														padding-bottom: 30px;
													">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-0-circle-fill" viewBox="0 0 16 16">
																<path d="M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895Z"/>
																<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.012 4.158c1.858 0 2.96-1.582 2.96-3.99V7.84c0-2.426-1.079-3.996-2.936-3.996-1.864 0-2.965 1.588-2.965 3.996v.328c0 2.42 1.09 3.99 2.941 3.99Z"/>
															  </svg>
															<div class="timeline-item-info">
																<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1"> Vehicle</h5>
																<p><span class="fs-12">We will like to know more about how many vehicles you own </span></p>
															</div>
														</div>
				
														<div class="timeline-item" style="
														padding-bottom: 30px;
													">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-circle-fill" viewBox="0 0 16 16">
																<circle cx="8" cy="8" r="8"/>
															  </svg>
															<div class="timeline-item-info">
																<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1"> Travelling</h5>
																<p><span class="fs-12">Let us know more about how you travel </span></p>
															</div>
														</div>
							
													   	
							
													</div>
												{{-- </div> --}}
													</div>
												   </div>	
											</div>
											<div class="col-md-7">
												<div class="box">
													<div class="box-body" style="padding-bottom: 20px !important;">
														<span>Household</span><br>
														<span style="font-size:17px;"><b>Cars</b></span><br>
														<span style="color:#ccc6c6;font-size:11px;">Tell us about your cars</span>

														   <div class="form-group">
															<label for="phone">How Many cars does your household own?</label>
															<input type="number" name="phone" id="cars" />
														  </div>

														  <hr>
									  <div class="form-group">
										<span>Car 1</span><br>
										<span>Input details about this car such as mirage,fuel efficiency</span>
										<label for="email">Fuel Efficiency</label>
										<p style="display: flex;">
											<input style="width: 10% !important;" type="radio" name="usernamee" id="carfuel1" value="fuel drinker" /><span >Fuel Drinker</span>
											<input style="width: 10% !important;" type="radio" name="usernamee" id="carfuel2" value="average"/><span >Average</span>
											<input style="width: 10% !important;" type="radio" name="usernamee" id="carfuel3" value="custom"/><span >Custom</span>
										
										</p>
									  </div>
									  <div class="form-group">
										<label for="email">How much distance does this car cover?</label>
										<input type="number" name="email" id="distancecover" />
									  </div>
									  <div class="form-group">
										<label for="email">Distance diven per week?</label>
										<p style="display: flex;">
											<input style="width: 10% !important;" type="radio" name="usernamet" id="cardistancedriven1" value="less than 10 hours" /><span >Less than 10 hours</span>
											<input style="width: 10% !important;" type="radio" name="usernamet" id="cardistancedriven2" value="15 hours"/><span >15 Hours</span>
											<input style="width: 10% !important;" type="radio" name="usernamet" id="cardistancedriven3" value="custom"/><span >Custom</span>
										
										</p>
									  </div>

									  <hr>
									  <div class="form-group">
										<span>Car 2</span><br>
										<span>Input details about this car such as mirage,fuel efficiency</span>
										<label for="email">Fuel Efficiency</label>
										<p style="display: flex;">
											<input style="width: 10% !important;" type="radio" name="usernameq" id="carfuel11" value="fuel drinker" /><span >Fuel Drinker</span>
											<input style="width: 10% !important;" type="radio" name="usernameq" id="carfuel12" value="average"/><span >Average</span>
											<input style="width: 10% !important;" type="radio" name="usernameq" id="carfuel13" value="custom"/><span >Custom</span>
										
										</p>
									  </div>
									  <div class="form-group">
										<label for="email">How much distance does this car cover?</label>
										<input type="number" name="email" id="cover1" />
									  </div>
									  <div class="form-group">
										<label for="email"><b>Distance diven per week?</b></label>
										<p style="display: flex;">
											<input style="width: 10% !important;" type="radio" name="usernamew" id="cardistancedriven21" value="less than 10 hours"/><span >Less than 10 hours</span>
											<input style="width: 10% !important;" type="radio" name="usernamew" id="cardistancedriven22" value="15 hours"/><span >15 Hours</span>
											<input style="width: 10% !important;" type="radio" name="usernamew" id="cardistancedriven23" value="custom"/><span >Custom</span>
										
										</p>
									  </div>
									  <div class="form-group">
										<a href="#" class="btn btn-prev">Previous</a>
										<a style="margin-top:12px" href="#" class="btn btn-next">Next</a>
									  </div>
													 </div>		
												</div>
											</div>
										</div>
										

									  

									  
                                      
									</div>
									<div class="step-forms">

										<div class="row">
											<div class="col-md-5">
												{{-- <div class="box-body p-0"> --}}
													<div class="box" style="background-color: #187a56;
													color: #fff;">
														<div class="box-body" style="padding-bottom: 20px !important;">		
													<div class="timeline-alt pb-0" style="
													padding-left: 10px;
													padding-right: 10px;
												">
														
														
							
														
														 <div class="timeline-item" style="
														 padding-bottom: 30px;
													 ">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-check-circle" viewBox="0 0 16 16">
																<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
																<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
															</svg>
															<div class="timeline-item-info">
																<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1"> Household</h5>
																<p><span class="fs-12">Let us know more about your household emmissions </span></p>
															</div>
														</div>
				
														<div class="timeline-item" style="
														padding-bottom: 30px;
													">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-0-circle-fill" viewBox="0 0 16 16">
																<path d="M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895Z"/>
																<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.012 4.158c1.858 0 2.96-1.582 2.96-3.99V7.84c0-2.426-1.079-3.996-2.936-3.996-1.864 0-2.965 1.588-2.965 3.996v.328c0 2.42 1.09 3.99 2.941 3.99Z"/>
															  </svg>
															<div class="timeline-item-info">
																<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1"> Vehicle</h5>
																<p><span class="fs-12">We will like to know more about how many vehicles you own </span></p>
															</div>
														</div>
				
														<div class="timeline-item" style="
														padding-bottom: 30px;
													">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-circle-fill" viewBox="0 0 16 16">
																<circle cx="8" cy="8" r="8"/>
															  </svg>
															<div class="timeline-item-info">
																<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1"> Travelling</h5>
																<p><span class="fs-12">Let us know more about how you travel </span></p>
															</div>
														</div>
							
													   	
							
													</div>
												{{-- </div> --}}
													</div>
												   </div>	
											</div>
											<div class="col-md-7">
												<div class="box">
													<div class="box-body" style="padding-bottom: 20px !important;">
                                                        <span>Travelling</span><br>
								        <span style="font-size:17px;"><b>Flights</b></span><br>
										<span style="font-size:11px;">Tell us about your flight schedule</span>
										<div class="form-group">
										<label for="dob">Type of flight</label>
										<select class="form-select" name="" id="flight" style="font-size: 12px;">
											<option value="long flights">Long Flights</option>
											<option value="short flights">Short Flights</option>
											
										</select>
									  </div>
									  <div class="form-group">
										<label for="ID">How many short flights do you take?</label>
										<span style="font-size:11px;">Count any flights that are shorter than 3 hours i.e Lagos - Abuja</span>
										<select class="form-select" name="" id="shortflight" style="font-size: 12px;">
											<option value="">--Select--</option>
											<option value="None">None</option>
											<option value="4 Roundtrips">4 Roundtrips</option>
											<option value="12 Roundtrips">12 Roundtrips</option>
											<option value="Custom">Custom</option>
										</select>
									  </div>
									  <div class="btns-group">
										<a href="#" class="btn btn-prev">Previous</a>
										<input type="submit" value="Submit" id="submit-form" class="btn"/>
									  </div>
													</div>
												</div>	
											</div>
										</div>
										
									  
									  
									</div>
								  </form>
							</div>
						

                  

                    <div class="col-lg-3 col-12">
	
						<div class="box">
							<div class="box-body" style="padding-bottom: 40px !important;">
								 <h6 class="box-title">Your Carbon Footprints</h6>
									<div class="d-flex justify-content-start align-items-center mt-md-20 mt-0">
										<div id="donutcharttt" style="width: 1000px; height: 280px;"></div>
									</div>
									<p>Your carbon footprint is 10.5% than the Nigerian average footprint</p>
									{{-- <button class="btn btn-primary">Generate Report</button> --}}
									<a class="btn btn-primary" href="{{ route('generatereport') }}">Generate Report</a>
									
									<a href="{{ route('marketplace') }}" class="btn btn-primary" style="margin-top: 12px;
									background-color: #fff;
									color: #187a56;">Offset Emissions</a>
									
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




<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
	google.charts.load("current", {packages:["corechart"]});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
	  var data = google.visualization.arrayToDataTable([
		['Task', 'Hours per Day'],
		['tons',     76.3],
		['Annual Emmissions',      23.7],
		
	  ]);

	  var options = {
		// title: 'Subscribers',
		pieHole: 0.4,
		'width':200,
               'height':200,
			   legend: {
                    position: 'bottom'
          }		   
	  };

	  var chart = new google.visualization.PieChart(document.getElementById('donutcharttt'));
	  chart.draw(data, options);
	}
  </script>

  <script>

	
	const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".step-forms");
const progressSteps = document.querySelectorAll(".progress-step");


let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
   
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
    
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("step-forms-active") &&
      formStep.classList.remove("step-forms-active");
  });

  formSteps[formStepsNum].classList.add("step-forms-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
      
    } else {
      progressStep.classList.remove("progress-step-active");
   
    }
  });

  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum) {
      
      progressStep.classList.add("progress-step-check");
    } else {
   
      progressStep.classList.remove("progress-step-check");
    }
  });
 
  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}


document.getElementById("submit-form").addEventListener("click", function () {

    progressSteps.forEach((progressStep, idx) => {
    if (idx <= formStepsNum) {
      
      progressStep.classList.add("progress-step-check");
    } else {
   
      progressStep.classList.remove("progress-step-check");
    }
  });

 
  
   var forms = document.getElementById("forms");
//    forms.classList.remove("form");



            
            var user_id = $('#user_id').val();
            var calusername1= $('#calusername1').val();
			var calusername2= $('#calusername2').val();
			var caladult=$('#caladult').val();
			var calchildren=$('#calchildren').val();
			var callivingspace=$('#callivingspace').val();
			var calfrom=$('#calfrom').val();
			var calto=$('#calto').val();
			var cars=$('#cars').val();
			var carfuel1=$('#carfuel1').val();
			var carfuel2=$('#carfuel2').val();
			var carfuel3=$('#carfuel3').val();
			var cardistances=$('#distancecover').val();
			var carfuel11=$('#carfuel11').val();
			var carfuel12=$('#carfuel12').val();
			var carfuel13=$('#carfuel13').val();
			var cardistancedriven21=$('#cardistancedriven21').val();
			var cardistancedriven22=$('#cardistancedriven22').val();
			var cardistancedriven23=$('#cardistancedriven23').val();
			var flight=$('#flight').val();
			var shortflight=$('#shortflight').val();

			
      
       // put ajax here

					$.ajax({

							type: "post",
							url: '/householdcal',
							data: {
								_token: $('meta[name="csrf-token"]').attr('content'),
							
								id:user_id,
								calusername1:calusername1,
								calusername2:calusername2,
								caladult:caladult,
                                calchildren:calchildren,
                                callivingspace:callivingspace,
                                calfrom:calfrom,
								calto:calto,
                                cars:cars,
								carfuel1:carfuel1,
                                carfuel2:carfuel2,
                                carfuel3:carfuel3,
                                cardistance:cardistances,
                                carfuel11:carfuel11,
                                carfuel12:carfuel12,
                                carfuel13:carfuel13,
                                cardistancedriven21:cardistancedriven21,
                                cardistancedriven22:cardistancedriven22,
                                cardistancedriven23:cardistancedriven23,
                                flight:flight,
                                shortflight:shortflight,
                                


							},

							success: function(data){
							console.log(data);

							alert(data);
							window.location = "/marketplace";

							},error: function(data){
							console.log(data); 
							}

				});
});


  </script>




@endsection
  
 
