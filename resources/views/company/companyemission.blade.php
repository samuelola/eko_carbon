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

					<div class="row" style="position: relative;
					top: -10px;">
						<div class="col-md-10"></div>
						<div class="col-md-2">
							<select class="form-select" id="name">
								
								<option value="household">Calculator</option>
								<option value="vehicle">Energy Consumption</option>
								<option value="vehiclee">Vehicle</option>
								<option value="airtravel">Air Travel</option>
								<option value="flight">Shipping</option>
							  </select>
						</div>
					</div>

					<div class="col-lg-9 col-12">
						
                        <div id="household" class="row household boxr">

                           <div class="row">
							   <div class="col-md-5">
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
   {{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-check-circle" viewBox="0 0 16 16">
	   <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
	   <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
   </svg> --}}
   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-0-circle-fill" viewBox="0 0 16 16">
	<path d="M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895Z"/>
	<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.012 4.158c1.858 0 2.96-1.582 2.96-3.99V7.84c0-2.426-1.079-3.996-2.936-3.996-1.864 0-2.965 1.588-2.965 3.996v.328c0 2.42 1.09 3.99 2.941 3.99Z"/>
	</svg>
   <div class="timeline-item-info">
	   <h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1"> Company</h5>
	   <p><span class="fs-12">Let us know more about your company emissions </span></p>
   </div>
</div>

													<div class="timeline-item" style="
													padding-bottom: 30px;
													">
													{{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-0-circle-fill" viewBox="0 0 16 16">
														<path d="M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895Z"/>
														<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.012 4.158c1.858 0 2.96-1.582 2.96-3.99V7.84c0-2.426-1.079-3.996-2.936-3.996-1.864 0-2.965 1.588-2.965 3.996v.328c0 2.42 1.09 3.99 2.941 3.99Z"/>
														</svg> --}}
														<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-circle-fill" viewBox="0 0 16 16">
															<circle cx="8" cy="8" r="8"/>
															</svg>
													<div class="timeline-item-info">
														<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1"> Vehicle</h5>
														<p><span class="fs-12">We will like to know more about how many vehicles your organization own </span></p>
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
														<p><span class="fs-12">Let us know more about your company Emissions</span></p>
													</div>
													</div>


											</div>

										 </div>		
									
									</div>

							   </div>

							   <div class="col-md-7">

								    
											<div class="box">
                                               
												<div class="box-body" style="padding-bottom: 20px !important;">
													<div id="myRadioGroup">
														<span>Business</span><br>
											<span style="font-size:17px;"><b>calculator</b></span><br>
											<span style="color:#5f5d5d;font-size:11px;">Tell us about your company</span>

											

											
														<form action="">
															<div id="Cars2" class="desc">
																{{-- <div class="form-group">
																	<label for="email">My living space</label>
																	<select class="form-select" name="" id="callivingspace" style="font-size: 12px;">
																		<option value="">--Select--</option>
																		<option value="Small Apartment(studio/1 bedroom)">Small Apartment(studio/1 bedroom)</option>
																		<option value="Average Home(2 bedroom)">Average Home(2 bedroom)</option>
																		<option value="Large Home(More than 2 bedroom)">Large Home(More than 2 bedroom)</option>
																		<option value="Custom">Custom</option>
																	</select>
																</div> --}}
                                                                <div class="form-group">
																	<label for="position">Offset Target</label>
																	<input type="text" name="position"  id="calchildren" />
																	
																</div>
																<div class="form-group">
																	<label for="position">Company Name</label>
																	<input type="text" name="position" id="calchildren" />
																	
																</div>
																<div class="form-group">
																	<label for="position">Email</label>
																	<input type="email" name="position" value="{{ Auth::user()->email }}" id="calchildren" />
																	
																</div>

                                                                <div class="form-group">
																	<label for="position">Phone Number</label>
																	<input type="phone" name="position"  id="calchildren" />
																	
																</div>
                                                                <div class="form-group">
																	<label for="email">Industry</label>
																	<select class="form-select" name="" id="callivingspace" style="font-size: 12px;">
																		<option value="">Select Your company industry</option>
																		<option value="">Select---</option>
                                                                        <option value="Manufacturing">Manufacturing</option>
                                                                        <option value="Art/Entertainment">Art/Entertainment</option>
                                                                        <option value="Information/Media">Information/Media</option>
                                                                        <option value="Finance and Insurance">Finance and Insurance</option>
                                                                        <option value="Water and Hygiene">Water and Hygiene</option>
                                                                        <option value="Education">Education</option>
                                                                        <option value="Environment">Environment</option>
                                                                        <option value="Telecoms">Telecoms</option>
                                                                        <option value="Security">Security</option>
                                                                        <option value="Public Health">Public Health</option>
                                                                        <option value="Public Administration">Public Administration</option>
																	</select>
																</div>

                                                                <div class="form-group">
																	<label for="position">Number of Employees</label>
																	<input type="number" name="position"  id="calchildren" />
																	
																</div>
                                                                <div class="form-group">
																	<label for="position">Company Location</label>
																	<input type="text" name="position"  id="calchildren" />
																	
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
																
																<div class="row">
																	<div class="col-md-8"></div>
																	<div class="col-md-4" style="padding-bottom: 12px;">
																	   <input type="submit" style="
																	   margin-left: -20px;"  class="btn btn-sm" value="Proceed"/>
																	</div>
															   </div>
															</div>
															
														</form>
														<form action="">

                                                            <div id="Cars3" class="desc" style="display: none;">
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

																<div class="row">
																	<div class="col-md-8"></div>
																	<div class="col-md-4" style="padding-bottom: 12px;">
																	   <input type="submit" style="
																	   margin-left: -20px;"  class="btn btn-sm" value="Submit"/>
																	</div>
															   </div>
															</div>
														</form>
														
													</div>
												
												</div>
													
							

											</div>
									 
							   </div>
						   </div>
							
						</div>

						<div id="vehicle" class="row vehicle boxr">

							<div class="row">
								<div class="col-md-5">
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
	   <h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1">Company</h5>
	   <p><span class="fs-12">Let us know more about your Company emissions </span></p>
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

										 </div>		
									
									</div>

							   </div>
 
								<div class="col-md-7">
									<form>
										
										<div class="box">
											<div class="box-body" style="padding-bottom: 20px !important;">
												<span>Energy Consumption</span><br>
												<span style="font-size:17px;"><b>Cars</b></span><br>
												<span style="color:#ccc6c6;font-size:11px;">Provide your business energy usage</span>

												  
							  <div class="form-group">
								<label for="email">Electricity</label>
								<input type="number" name="distancecover" id="distancecover" placeholder="Input your electricity usage"  required/>
							  </div>
			
                              <div class="form-group">
								<label for="email">Natural Gas/Kg</label>
								<input type="number" name="distancecover" id="distancecover" placeholder="Input your gas usage"  required/>
							  </div>
							  
							  <div class="form-group">
								<label for="email">Refrigirant/liter</label>
								<input type="number" name="distancecover" id="distancecover" placeholder="Input your Refrigirant usage"  required/>
							  </div>

							  <div class="form-group">
								<label for="email">Diesel/liter</label>
								<input type="number" name="distancecover" id="distancecover" placeholder="Input your Diesel usage"  required/>
							  </div>

							  <div class="form-group">
								<label for="email">Petrol/liter</label>
								<input type="number" name="distancecover" id="distancecover" placeholder="Input your Petrol usage"  required/>
							  </div>
							  
							  
							  <div class="row">
								<div class="col-md-8"></div>
								<div class="col-md-4" style="padding-bottom: 12px;">
								   <input type="submit" style="
								   margin-left: -20px;margin-top: 18px;"  class="btn btn-sm" value="Proceed"/>
								</div>
						   </div>


											 </div>		
										</div>
									</form>
								 
								</div>
							</div>
							
						</div>

						<div id="vehiclee" class="row vehiclee boxr">

							<div class="row">
								<div class="col-md-5">
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
	   <h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1">Company</h5>
	   <p><span class="fs-12">Let us know more about your Company emissions </span></p>
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

										 </div>		
									
									</div>

							   </div>
 
								<div class="col-md-7">
									<form>
										
										<div class="box">
											<div class="box-body" style="padding-bottom: 20px !important;">
												<span>Business</span><br>
												<span style="font-size:17px;"><b>Commute</b></span><br>
												<span style="color:#ccc6c6;font-size:11px;">Tell us about your employers daily commute toget to work</span>
                              

							  <div class="row" style="margin-top: 12px;">

								<div class="col-md-2">
									<div class="form-group">
										<label for="email" style="margin-top: 32px;">Car </label>
										
									  </div>

								</div>

								<div class="col-md-5">
									<div class="form-group">
										<label for="email">Number of Employees </label>
										<input type="number" name="distancecover" id="distancecover"  required/>
									  </div>
								</div>

								<div class="col-md-5">
                                    <div class="form-group">
										<label for="email">Km/hr </label>
										<input type="number" name="distancecover" id="distancecover"   required/>
									  </div>
								</div>
								
							  </div>					
			
                              
							  
							  <div class="row" style="margin-top: 12px;">

								<div class="col-md-2">
									<div class="form-group">
										<label for="email" style="margin-top: 32px;">Train </label>
										
									  </div>

								</div>

								<div class="col-md-5">
									<div class="form-group">
										<label for="email">Number of Employees </label>
										<input type="number" name="distancecover" id="distancecover"  required/>
									  </div>
								</div>

								<div class="col-md-5">
                                    <div class="form-group">
										<label for="email">Km/hr </label>
										<input type="number" name="distancecover" id="distancecover"   required/>
									  </div>
								</div>
								
							  </div>
							  
							  
							  <div class="row" style="margin-top: 12px;">

								<div class="col-md-2">
									<div class="form-group">
										<label for="email" style="margin-top: 32px;">Bus </label>
										
									  </div>

								</div>

								<div class="col-md-5">
									<div class="form-group">
										<label for="email">Number of Employees </label>
										<input type="number" name="distancecover" id="distancecover"  required/>
									  </div>
								</div>

								<div class="col-md-5">
                                    <div class="form-group">
										<label for="email">Km/hr </label>
										<input type="number" name="distancecover" id="distancecover"   required/>
									  </div>
								</div>
								
							  </div>	


							  <div class="row" style="margin-top: 12px;">

								<div class="col-md-2">
									<div class="form-group">
										<label for="email" style="margin-top: 32px;">Ferry </label>
										
									  </div>

								</div>

								<div class="col-md-5">
									<div class="form-group">
										<label for="email">Number of Employees </label>
										<input type="number" name="distancecover" id="distancecover"  required/>
									  </div>
								</div>

								<div class="col-md-5">
                                    <div class="form-group">
										<label for="email">Km/hr </label>
										<input type="number" name="distancecover" id="distancecover"   required/>
									  </div>
								</div>
								
							  </div>	

					
							  
							  
							  <div class="row">
								<div class="col-md-8"></div>
								<div class="col-md-4" style="padding-bottom: 12px;">
								   <input type="submit" style="
								   margin-left: -20px;margin-top: 18px;"  class="btn btn-sm" value="Proceed" placeholder="How much fuel do you consume"/>
								</div>
						   </div>


											 </div>		
										</div>
									</form>
								 
								</div>
							</div>
							
						</div>

						<div id="flight" class="row flight boxr">

							<div class="row">
								<div class="col-md-5">
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
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-check-circle" viewBox="0 0 16 16">
														<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
														<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
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

										 </div>		
									
									</div>

							   </div>
 
								<div class="col-md-7">
									<form>
										<div class="box">
											<div class="box-body" style="padding-bottom: 20px !important;">
												<span>Business</span><br>
								<span style="font-size:17px;"><b>Shipping</b></span><br>
								<span style="font-size:11px;">Tell us about the kind of shipping your business does</span>
								

								<div class="row" style="margin-top: 12px;">

									<div class="col-md-3">
										<div class="form-group">
											<label for="email" style="margin-top: 32px;">Number of shippments </label>
											
										  </div>
	
									</div>
	
									<div class="col-md-3">
										<div class="form-group">
											<label for="email">trunks </label>
											<input type="number" name="distancecover" id="distancecover"  required/>
										  </div>
									</div>
	
									<div class="col-md-3">
										<div class="form-group">
											<label for="email">Sea </label>
											<input type="number" name="distancecover" id="distancecover"   required/>
										  </div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											<label for="email">Air </label>
											<input type="number" name="distancecover" id="distancecover"   required/>
										  </div>
									</div>
									
								  </div>



								  <div class="row" style="margin-top: 12px;">

									<div class="col-md-3">
										<div class="form-group">
											<label for="email">Average shipping distance(miles) </label>
											
										  </div>
	
									</div>
	
									<div class="col-md-3">
										<div class="form-group">
											
											<input type="number" name="distancecover" id="distancecover"  required/>
										  </div>
									</div>
	
									<div class="col-md-3">
										<div class="form-group">
											
											<input type="number" name="distancecover" id="distancecover"   required/>
										  </div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											
											<input type="number" name="distancecover" id="distancecover"   required/>
										  </div>
									</div>
									
								  </div>

							      <div class="row" style="margin-top: 12px;">

									<div class="col-md-3">
										<div class="form-group">
											<label for="email">Average shipping weight(kg) </label>
											
										  </div>
	
									</div>
	
									<div class="col-md-3">
										<div class="form-group">
											
											<input type="number" name="distancecover" id="distancecover"  required/>
										  </div>
									</div>
	
									<div class="col-md-3">
										<div class="form-group">
											
											<input type="number" name="distancecover" id="distancecover"   required/>
										  </div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											
											<input type="number" name="distancecover" id="distancecover"   required/>
										  </div>
									</div>
									
								  </div>
							  
								  <div class="row">
									<div class="col-md-8"></div>
									<div class="col-md-4" style="padding-bottom: 12px;">
									   <input type="submit" style="
									   margin-left: -20px;margin-top: 18px;"  class="btn btn-sm" value="Proceed"/>
									</div>
							   </div>
											</div>
										</div>
									</form>
								 
								</div>
							</div>
							
						</div>


						<div id="airtravel" class="row airtravel boxr">

							<div class="row">
								<div class="col-md-5">
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
	   <h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1">Company</h5>
	   <p><span class="fs-12">Let us know more about your company emissions </span></p>
   </div>
</div>

													<div class="timeline-item" style="
													padding-bottom: 30px;
													">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-check-circle" viewBox="0 0 16 16">
														<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
														<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
													</svg>
													<div class="timeline-item-info">
														<h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1"> Vehicle</h5>
														<p><span class="fs-12">We will like to know more about how many vehicles your organization own </span></p>
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
														<p><span class="fs-12">Let us know more about your company emissions </span></p>
													</div>
													</div>


											</div>

										 </div>		
									
									</div>

							   </div>
 
								<div class="col-md-7">
									<form>
										<div class="box">
											<div class="box-body" style="padding-bottom: 20px !important;">
												<span>Business</span><br>
								<span style="font-size:17px;"><b>Air Travel</b></span><br>
								<span style="font-size:11px;">Tell us about your flight schedule</span>
								

							  

							  {{-- <div class="form-group">
								<label for="dob">Distance</label>
								<div class="row">
									<div class="col-md-12">
										<input type="number" name="flightdistance" id="flightdistance"  required/>
									</div>
									
								</div>
							  </div> --}}
							  <div class="form-group">
								<label for="ID">How many employees travel annually</label>
								
								<select class="form-select" name="" id="shortflight" style="font-size: 12px;">
									<option value="">--Select--</option>
									<option value="None">None</option>
									<option value="4">4</option>
									<option value="12">12</option>
									<option value="16">16</option>
								</select>
							  </div>

							  
                              <div class="form-group">
								<label for="ID">How many employees travel annually</label>
								
								<select class="form-select" name="" id="shortflight" style="font-size: 12px;">
									<option value="">--Select--</option>
									<option value="None">None</option>
									<option value="4">4</option>
									<option value="12">12</option>
									<option value="16">16</option>
								</select>
							  </div>

							  <div class="form-group">
								<label for="dob">Average number of flights per employee</label>
								<div class="row">
									<div class="col-md-12">
										<select class="form-select" name="" id="fromdestination" style="font-size: 12px;">
											<option value="">--Select--</option>
											<option value="None">None</option>
									<option value="4">4</option>
									<option value="12">12</option>
									<option value="16">16</option>
											
											
										</select>
									</div>
									
								</div>
							  </div>

							  <div class="form-group">
								<label for="dob">Hours of flight per employee</label>
								<div class="row">
									<div class="col-md-12">
										<input type="number" name="distancecover" id="distancecover"   required/>
									</div>
									
								</div>
							  </div>

							  <div class="row">
								<div class="col-md-8"></div>
								<div class="col-md-4" style="padding-bottom: 12px;">
								   <input type="submit" style="
								   margin-left: -20px;margin-top: 18px;"  class="btn btn-sm" value="Proceed"/>
								</div>
						   </div>
							 
											</div>
										</div>
									</form>
								 
								</div>
							</div>
							
						</div>
						
								
					</div>
						

                  

                    <div class="col-lg-3 col-12">
	
						<div class="box">
							<div class="box-body" style="padding-bottom: 40px !important;">
								 <h6 class="box-title">Your Carbon Footprints</h6>
									<div class="d-flex justify-content-start align-items-center mt-md-20 mt-0">
										{{-- <div id="donutcharttt" style="width: 1000px; height: 280px;"></div> --}}
										<canvas style="width:255px !important;height:220px !important;" id="emissionChart"></canvas>
									</div>
									<p>Your carbon footprint is 10.5% than the Nigerian average footprint</p>
									
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



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<?php  
    $valm = 100;
	$total_emit= 0;
	
	foreach ($alltotalemissions as $value) {
		
		$total_emit +=  $value->total;

		
	}

	

	echo $total_emittt =  ($total_emit/365);

	 $total_emitt = round($total_emittt,1);

?>

<script>
	const ctx = document.getElementById('emissionChart');

	
  
	new Chart(ctx, {
	  type: 'doughnut',
	  data: {
		labels: ['Your Annual emission', 'Annual emission'],
		datasets: [{
		  label: 'Emission',
		  data: [<?php echo $total_emitt ?>, <?php echo $valm-$total_emitt ?>],
		//   data:[$a,100-$a],
		  borderWidth: 1
		}]
	  },
	  options: {
		plugins: {
            legend: {
              position: "bottom",
              
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


<script>
    // jQuery functions to hide and show the div
    $(document).ready(function () {
        $("#name").on('change',function(){

            $(".boxr").hide();
            $("#" + $(this).val()).show();
        }).change();
    });
</script>

<script>
	$(document).ready(function () {
        $("#vehicleemissionfactor").on('change',function(){
          
			var distance = $('#distancecover').val();

			var vehicleemissionfactor = $('#vehicleemissionfactor').val();

			$.ajax({

				type: "POST",
                url: "/emittcarboncar",
				
				data:{
					_token: $('meta[name="csrf-token"]').attr('content'),
					distance:distance,
					emissionfactor:vehicleemissionfactor
				},
				success: function (data) {
                    
					console.log(data);

					alert(data);
                    location.reload();
 
                },
                error: function(data){
                    console.log(data);
                    
                }
			});

			
           
        }).change();
    });
	
</script>


<script>
	$(document).ready(function () {
        $("#fromdestination").on('change',function(){
          
			var flightdistance = $('#flightdistance').val();

			var flightemissionfactor = $('#fromdestination').val();

			// var oneway = $('#oneway').val();

			var oneway = $('input[name="onewayg"]:checked').val();

			// var returnflight = $('#return').val();

			


			$.ajax({

				type: "POST",
                url: "/emittcarbonflight",
				
				data:{
					_token: $('meta[name="csrf-token"]').attr('content'),
					flightdistance:flightdistance,
					flightemissionfactor:flightemissionfactor,
					oneway:oneway,
					// returnflight:returnflight
				},
				success: function (data) {
                    
					console.log(data);

					alert(data);
                    location.reload();
 
                },
                error: function(data){
                    console.log(data);
                    
                }
			});

			
           
        }).change();
    });
	
</script>






<script>


$(document).ready(function() {
    $("input[name$='cars']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#Cars" + test).show();
    });
});
</script>

@endsection
  
 
