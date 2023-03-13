@extends('layouts.companymaster')

@section('title')
    | Dashboard
@endsection

@section('content')

<div class="content-wrapper">

    <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Account</h4>
					
				</div>
				
			</div>
		</div>  

		<!-- Main content -->
		<section class="content">
			

			<div class="row">

				<div class="col-md-3">

					<div class="box">
						<div class="box-body">

							<ul class="nav nav-pills bg-nav-pills nav-justified mb-3" style="display:block;">
								<li class="nav-item">
									<a href="#account" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
										Account Overview
									</a>
								</li>
								<li class="nav-item">
									<a href="#timelinest" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
										My Emission
									</a>
								</li>
								<li class="nav-item">
									<a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
										Certificate
									</a>
								</li>
							</ul>

						</div>	
						
					</div>		

					

				</div>

				<div class="col-md-9">

					<div class="box">
						<div class="box-body" style="padding-bottom: 20px !important;">

							<div class="tab-content">
								<div class="tab-pane active" id="account">
			
									        
			                        <ul class="nav nav-tabs nav-bordered mb-3" style="margin-top: 30px;">
										<li class="nav-item">
											<a href="#bs-modals-details" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
												Organization Details
											</a>
										</li>
										<li class="nav-item">
											<a href="#bs-modals-password" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
												Password
											</a>
										</li>
										<li class="nav-item">
											<a href="#bs-modals-business" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
												Business Representative
											</a>
										</li>
									</ul>
									
									<div class="tab-content">
										<div class="tab-pane show active" id="bs-modals-details">
											
											   <div class="row">
												
												  <div class="col-md-12" style="margin-left: 16px;">
													 <h4>Profile</h4>

													 <form id="profileform">
														<input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
														<div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
														width: 98%;padding-bottom: 20px;
    padding-top: 6px;margin-top: 12px;">
															
															

																<div class="col-md-4">
																	<label for="inputPassword6" class="col-form-label">Business Name</label>
																  </div>
																  <div class="col-md-6">
																	<input type="text" id="firstname" name="firstname" value="{{ $getUpdateUser->firstname }}" class="form-control" aria-describedby="passwordHelpInline" style="height:30px; ">
																  </div>
																  <div class="col-md-2">
																	  
																	</div>

															
															
														</div>

				


														<div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
														width: 98%;padding-bottom: 20px;
    padding-top: 6px;margin-top: 12px;">
															
															

																<div class="col-md-4">
																	<label for="inputPassword6" class="col-form-label">Busines Email Address</label>
																  </div>
																  <div class="col-md-6">
																	<input type="email" id="email" value="{{ $getUpdateUser->email }}" name="email" class="form-control" aria-describedby="passwordHelpInline" style="height:30px; ">
																  </div>
																  <div class="col-md-2">
																	  
																	</div>

															
															
														</div>

                                                        <div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
														width: 98%;padding-bottom: 20px;
    padding-top: 6px;margin-top: 12px;">
															
															

																<div class="col-md-4">
																	<label for="inputPassword6" class="col-form-label">Business Address</label>
																  </div>
																  <div class="col-md-6">
																	<input type="text" id="address" name="address" value="{{ $getUpdateUser->address }}" class="form-control" aria-describedby="passwordHelpInline" style="height:30px; ">
																  </div>
																  <div class="col-md-2">
																	  
																	</div>

															
															
														</div>


                                                        <div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
														width: 98%;padding-bottom: 20px;
    padding-top: 6px;margin-top: 12px;">
															
															

																<div class="col-md-4">
																	<label for="inputPassword6" class="col-form-label">Website Address</label>
																  </div>
																  <div class="col-md-6">
																	<input type="url" id="rcnumber" name="address" value="{{ $getUpdateUser->website }}" class="form-control" aria-describedby="passwordHelpInline" style="height:30px; ">
																  </div>
																  <div class="col-md-2">
																	  
																	</div>

															
															
														</div>

                                                        <div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
														width: 98%;padding-bottom: 20px;
    padding-top: 6px;margin-top: 12px;">
															
															

																<div class="col-md-4">
																	<label for="inputPassword6" class="col-form-label">Industry</label>
																  </div>
																  <div class="col-md-6">
																	<select name="industry" id="industry" class="form-control form-select">
                                                                       

                                                                        @if ($getUpdateUser->industry == 'Information/Media')
                                                                        <option value="Art/Entertainment">Art/Entertainment</option>
                                                                        <option selected value="{{ $getUpdateUser->industry }}">{{ $getUpdateUser->industry }}</option>
                                                                       <option value="Finance and Insurance" >Finance and Insurance</option>
                                                                       <option value="Water and Hygiene" >Water and Hygiene</option>
                                                                       <option value="Education" >Education</option>
                                                                       <option value="Environment" >Environment</option>
                                                                       <option value="Telecoms" >Telecoms</option>
                                                                       <option value="Security" >Security</option>
                                                                       <option value="Social/Economic Development">Social/Economic Development</option>
                                                                       <option value="Information/Media" >Information/Media</option>
                                                                       <option value="Public Health" >Public Health</option>
                                                                       <option value="Public Administration">Public Administration</option>

                                                                        @elseif($getUpdateUser->industry == 'Art/Entertainment')

                                                                        <option selected value="{{ $getUpdateUser->industry }}">{{ $getUpdateUser->industry }}</option>
                                                                       <option value="Information/Media">Information/Media</option>
                                                                       <option value="Finance and Insurance" >Finance and Insurance</option>
                                                                       <option value="Water and Hygiene" >Water and Hygiene</option>
                                                                       <option value="Education" >Education</option>
                                                                       <option value="Environment" >Environment</option>
                                                                       <option value="Telecoms" >Telecoms</option>
                                                                       <option value="Security" >Security</option>
                                                                       <option value="Social/Economic Development">Social/Economic Development</option>
                                                                       <option value="Information/Media" >Information/Media</option>
                                                                       <option value="Public Health" >Public Health</option>
                                                                       <option value="Public Administration">Public Administration</option>

                                                                        @elseif($getUpdateUser->industry == 'Finance and Insurance')

                                                                        <option value="Art/Entertainment">Art/Entertainment</option>
                                                                       <option value="Information/Media">Information/Media</option>
                                                                       <option selected value="{{ $getUpdateUser->industry }}">{{ $getUpdateUser->industry }}</option>
                                                                       <option value="Water and Hygiene" >Water and Hygiene</option>
                                                                       <option value="Education" >Education</option>
                                                                       <option value="Environment" >Environment</option>
                                                                       <option value="Telecoms" >Telecoms</option>
                                                                       <option value="Security" >Security</option>
                                                                       <option value="Social/Economic Development">Social/Economic Development</option>
                                                                       <option value="Information/Media" >Information/Media</option>
                                                                       <option value="Public Health" >Public Health</option>
                                                                       <option value="Public Administration">Public Administration</option>

                                                                        @elseif($getUpdateUser->industry == 'Water and Hygiene')

                                                                        <option value="Art/Entertainment">Art/Entertainment</option>
                                                                       <option value="Information/Media">Information/Media</option>
                                                                       <option value="Finance and Insurance" >Finance and Insurance</option>
                                                                       <option selected value="{{ $getUpdateUser->industry }}">{{ $getUpdateUser->industry }}</option>
                                                                       <option value="Education" >Education</option>
                                                                       <option value="Environment" >Environment</option>
                                                                       <option value="Telecoms" >Telecoms</option>
                                                                       <option value="Security" >Security</option>
                                                                       <option value="Social/Economic Development">Social/Economic Development</option>
                                                                       <option value="Information/Media" >Information/Media</option>
                                                                       <option value="Public Health" >Public Health</option>
                                                                       <option value="Public Administration">Public Administration</option>


                                                                        @elseif($getUpdateUser->industry == 'Education')

                                                                        <option value="Art/Entertainment">Art/Entertainment</option>
                                                                       <option value="Information/Media">Information/Media</option>
                                                                       <option value="Finance and Insurance" >Finance and Insurance</option>
                                                                       <option value="Water and Hygiene" >Water and Hygiene</option>
                                                                       <option selected value="{{ $getUpdateUser->industry }}">{{ $getUpdateUser->industry }}</option>
                                                                       <option value="Environment" >Environment</option>
                                                                       <option value="Telecoms" >Telecoms</option>
                                                                       <option value="Security" >Security</option>
                                                                       <option value="Social/Economic Development">Social/Economic Development</option>
                                                                       <option value="Information/Media" >Information/Media</option>
                                                                       <option value="Public Health" >Public Health</option>
                                                                       <option value="Public Administration">Public Administration</option>

                                                                        @elseif($getUpdateUser->industry == 'Environment')

                                                                        <option value="Art/Entertainment">Art/Entertainment</option>
                                                                       <option value="Information/Media">Information/Media</option>
                                                                       <option value="Finance and Insurance" >Finance and Insurance</option>
                                                                       <option value="Water and Hygiene" >Water and Hygiene</option>
                                                                       <option value="Education" >Education</option>
                                                                       <option selected value="{{ $getUpdateUser->industry }}">{{ $getUpdateUser->industry }}</option>
                                                                       <option value="Telecoms" >Telecoms</option>
                                                                       <option value="Security" >Security</option>
                                                                       <option value="Social/Economic Development">Social/Economic Development</option>
                                                                       <option value="Information/Media" >Information/Media</option>
                                                                       <option value="Public Health" >Public Health</option>
                                                                       <option value="Public Administration">Public Administration</option>


                                                                        @elseif($getUpdateUser->industry == 'Telecoms')


                                                                        <option value="Art/Entertainment">Art/Entertainment</option>
                                                                       <option value="Information/Media">Information/Media</option>
                                                                       <option value="Finance and Insurance" >Finance and Insurance</option>
                                                                       <option value="Water and Hygiene" >Water and Hygiene</option>
                                                                       <option value="Education" >Education</option>
                                                                       <option value="Environment" >Environment</option>
                                                                       <option selected value="{{ $getUpdateUser->industry }}">{{ $getUpdateUser->industry }}</option>
                                                                       <option value="Security" >Security</option>
                                                                       <option value="Social/Economic Development">Social/Economic Development</option>
                                                                       <option value="Information/Media" >Information/Media</option>
                                                                       <option value="Public Health" >Public Health</option>
                                                                       <option value="Public Administration">Public Administration</option>


                                                                        @elseif($getUpdateUser->industry == 'Security')

                                                                        <option value="Art/Entertainment">Art/Entertainment</option>
                                                                       <option value="Information/Media">Information/Media</option>
                                                                       <option value="Finance and Insurance" >Finance and Insurance</option>
                                                                       <option value="Water and Hygiene" >Water and Hygiene</option>
                                                                       <option value="Education" >Education</option>
                                                                       <option value="Environment" >Environment</option>
                                                                       <option value="Telecoms" >Telecoms</option>
                                                                       <option selected value="{{ $getUpdateUser->industry }}">{{ $getUpdateUser->industry }}</option>
                                                                       <option value="Social/Economic Development">Social/Economic Development</option>
                                                                       <option value="Information/Media" >Information/Media</option>
                                                                       <option value="Public Health" >Public Health</option>
                                                                       <option value="Public Administration">Public Administration</option>


                                                                        @elseif($getUpdateUser->industry == 'Social/Economic Development')

                                                                        <option value="Art/Entertainment">Art/Entertainment</option>
                                                                       <option value="Information/Media">Information/Media</option>
                                                                       <option value="Finance and Insurance" >Finance and Insurance</option>
                                                                       <option value="Water and Hygiene" >Water and Hygiene</option>
                                                                       <option value="Education" >Education</option>
                                                                       <option value="Environment" >Environment</option>
                                                                       <option value="Telecoms" >Telecoms</option>
                                                                       <option value="Security" >Security</option>
                                                                       <option selected value="{{ $getUpdateUser->industry }}">{{ $getUpdateUser->industry }}</option>
                                                                       <option value="Information/Media" >Information/Media</option>
                                                                       <option value="Public Health" >Public Health</option>
                                                                       <option value="Public Administration">Public Administration</option>

                                                                        @elseif($getUpdateUser->industry == 'Information/Media')

                                                                        <option value="Art/Entertainment">Art/Entertainment</option>
                                                                       <option value="Information/Media">Information/Media</option>
                                                                       <option value="Finance and Insurance" >Finance and Insurance</option>
                                                                       <option value="Water and Hygiene" >Water and Hygiene</option>
                                                                       <option value="Education" >Education</option>
                                                                       <option value="Environment" >Environment</option>
                                                                       <option value="Telecoms" >Telecoms</option>
                                                                       <option value="Security" >Security</option>
                                                                       <option value="Social/Economic Development">Social/Economic Development</option>
                                                                       <option selected value="{{ $getUpdateUser->industry }}">{{ $getUpdateUser->industry }}</option>
                                                                       <option value="Public Health" >Public Health</option>
                                                                       <option value="Public Administration">Public Administration</option>

                                                                        @elseif($getUpdateUser->industry == 'Public Health')

                                                                        <option value="Art/Entertainment">Art/Entertainment</option>
                                                                       <option value="Information/Media">Information/Media</option>
                                                                       <option value="Finance and Insurance" >Finance and Insurance</option>
                                                                       <option value="Water and Hygiene" >Water and Hygiene</option>
                                                                       <option value="Education" >Education</option>
                                                                       <option value="Environment" >Environment</option>
                                                                       <option value="Telecoms" >Telecoms</option>
                                                                       <option value="Security" >Security</option>
                                                                       <option value="Social/Economic Development">Social/Economic Development</option>
                                                                       <option value="Information/Media" >Information/Media</option>
                                                                       <option selected value="{{ $getUpdateUser->industry }}">{{ $getUpdateUser->industry }}</option>
                                                                       <option value="Public Administration">Public Administration</option>

                                                                        @else

                                                                        <option value="Art/Entertainment">Art/Entertainment</option>
                                                                       <option value="Information/Media">Information/Media</option>
                                                                       <option value="Finance and Insurance" >Finance and Insurance</option>
                                                                       <option value="Water and Hygiene" >Water and Hygiene</option>
                                                                       <option value="Education" >Education</option>
                                                                       <option value="Environment" >Environment</option>
                                                                       <option value="Telecoms" >Telecoms</option>
                                                                       <option value="Security" >Security</option>
                                                                       <option value="Social/Economic Development">Social/Economic Development</option>
                                                                       <option value="Information/Media" >Information/Media</option>
                                                                       <option value="Public Health" >Public Health</option>
                                                                       <option selected value="{{ $getUpdateUser->industry }}">{{ $getUpdateUser->industry }}</option>
                                                                            
                                                                        @endif
                                                                        
                                                                       
                                                                   </select>
																  </div>
																  <div class="col-md-2">
																	  
																	</div>

															
															
														</div>

                                                        <div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
														width: 98%;padding-bottom: 20px;
    padding-top: 6px;margin-top: 12px;">
															
															

																<div class="col-md-4">
																	<label for="inputPassword6" class="col-form-label">Summary</label>
																  </div>
																  <div class="col-md-6">
																	<textarea class="form-control" name="" id="" cols="30" rows="10" style="height: 66px;"></textarea>
																  </div>
																  <div class="col-md-2">
																	  
																	</div>

															
															
														</div>


                                                        <div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
														width: 98%;padding-bottom: 20px;
    padding-top: 6px;margin-top: 12px;">
															
															

																<div class="col-md-4">
																	<label for="inputPassword6" class="col-form-label">Upload CAC</label>
																  </div>
																  <div class="col-md-6">
																	<input type="file" class="form-control">
																  </div>
																  <div class="col-md-2">
																	  
																	</div>

															
															
														</div>

														<div class="row" style="padding-top: 16px;margin-left: 170px;">
															<div class="col-md-6"></div>
															<div class="col-md-6">
																<button type="button" class="btn btn-primary-light" style="float:left">Cancel</button>
	                                                            <button type="submit" id="updateprofile" class="btn btn-primary" style="float:left;margin-left: 8px;">Update Profile</button>
															</div>
														</div>
													 </form>
													
												  </div>
												
											   </div>
											
											
										</div>		
										<div class="tab-pane " id="bs-modals-password">
											
											<div class="row">
												<div class="col-md-12" style="margin-left: 16px;">
												<h4>Password</h4>
												<p>Please Enter your current password to change your password</p>

												<form id="passwordform" action="">
													<div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
													width: 98%;padding-bottom: 20px;
padding-top: 6px;margin-top: 12px;">
														
														

															<div class="col-md-4">
																<label for="inputPassword6" class="col-form-label">Current Password </label>
															  </div>
															  <div class="col-md-6">
																<input type="password" id="inputPassword6" name="current_password" class="form-control @error('current_password') is-invalid @enderror" aria-describedby="passwordHelpInline" style="height:30px; ">
															  </div>
															  <div class="col-md-2">
																  
																</div>

														
														
													</div>

													<div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
													width: 98%;padding-bottom: 20px;
padding-top: 6px;margin-top: 12px;">
														
														

															<div class="col-md-4">
																<label for="inputPassword6" class="col-form-label">New Password</label>
															  </div>
															  <div class="col-md-6">
																<input type="password" name="new_password" id="inputPassword6" class="form-control @error('new_password') is-invalid @enderror" aria-describedby="passwordHelpInline" style="height:30px; ">
															  </div>
															  <div class="col-md-2">
																  
																</div>

														
														
													</div>


													<div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
													width: 98%;border-bottom: 1px solid rgba(152, 166, 173, 0.2);padding-bottom: 20px;
padding-top: 6px;margin-top: 12px;">
														
														

															<div class="col-md-4">
																<label for="inputPassword6" class="col-form-label">Confirm New Password</label>
															  </div>
															  <div class="col-md-6">
																<input type="password" name="new_confirm_password" id="inputPassword6" class="form-control @error('new_confirm_password') is-invalid @enderror" aria-describedby="passwordHelpInline" style="height:30px; ">
															  </div>
															  <div class="col-md-2">
																  
																</div>

														
														
													</div>

													<div class="row" style="padding-top: 16px;margin-left: 170px;">
														<div class="col-md-6"></div>
														<div class="col-md-6">
															<button type="button" class="btn btn-primary-light" style="float:left">Cancel</button>
															<button type="submit" id="updatepassword" class="btn btn-primary" style="float:left;margin-left: 8px;">Update Password</button>
														</div>
													</div>
												 </form>
											   </div>
											</div>
											
										</div>


                                        <div class="tab-pane " id="bs-modals-business">
											
                                            <div class="row">
                                             
                                               <div class="col-md-12" style="margin-left: 16px;">
                                                  <h4>Business Representative</h4>
                                                <p>To ensure we keep up with regulatory requirements, this stall needs to be activated by someone with significant management responsibility or control</p>
                                                  <form id="businessform">
                                                     <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                                     <div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
                                                     width: 98%;padding-bottom: 20px;
 padding-top: 6px;margin-top: 12px;">
                                                         
                                                         

                                                             <div class="col-md-4">
                                                                 <label for="inputPassword6" class="col-form-label">Are you the business owner of the company</label>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <select name="" id="" class="form-control form-select">
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                 </select>
                                                               </div>
                                                               <div class="col-md-2">
                                                                   
                                                                 </div>

                                                         
                                                         
                                                     </div>

             


                                                     <div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
                                                     width: 98%;padding-bottom: 20px;
 padding-top: 6px;margin-top: 12px;">
                                                         
                                                         

                                                             <div class="col-md-4">
                                                                 <label for="inputPassword6" class="col-form-label">First Name</label>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <input type="email" id="email" value="{{ $getUpdateUser->firstname }}" name="email" class="form-control" aria-describedby="passwordHelpInline" style="height:30px; ">
                                                               </div>
                                                               <div class="col-md-2">
                                                                   
                                                                 </div>

                                                         
                                                         
                                                     </div>

                                                     <div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
                                                     width: 98%;padding-bottom: 20px;
 padding-top: 6px;margin-top: 12px;">
                                                         
                                                         

                                                             <div class="col-md-4">
                                                                 <label for="inputPassword6" class="col-form-label">Last Name</label>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <input type="email" id="email" value="{{ $getUpdateUser->lastname }}" name="email" class="form-control" aria-describedby="passwordHelpInline" style="height:30px; ">
                                                               </div>
                                                               <div class="col-md-2">
                                                                   
                                                                 </div>

                                                         
                                                         
                                                     </div>

                                                     <div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
                                                     width: 98%;padding-bottom: 20px;
 padding-top: 6px;margin-top: 12px;">
                                                         
                                                         

                                                             <div class="col-md-4">
                                                                 <label for="inputPassword6" class="col-form-label">Email Address</label>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <input type="text" id="address" name="address" value="{{ $getUpdateUser->address }}" class="form-control" aria-describedby="passwordHelpInline" style="height:30px; ">
                                                               </div>
                                                               <div class="col-md-2">
                                                                   
                                                                 </div>

                                                         
                                                         
                                                     </div>

                                                     <div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
                                                     width: 98%;padding-bottom: 20px;
 padding-top: 6px;margin-top: 12px;">
                                                         
                                                         

                                                             <div class="col-md-4">
                                                                 <label for="inputPassword6" class="col-form-label">Phone Number</label>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <input type="text" id="address" name="address" value="{{ $getUpdateUser->address }}" class="form-control" aria-describedby="passwordHelpInline" style="height:30px; ">
                                                               </div>
                                                               <div class="col-md-2">
                                                                   
                                                                 </div>

                                                         
                                                         
                                                     </div>


                                                     <div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
                                                     width: 98%;padding-bottom: 20px;
 padding-top: 6px;margin-top: 12px;">
                                                         
                                                         

                                                             <div class="col-md-4">
                                                                 <label for="inputPassword6" class="col-form-label">Country</label>
                                                               </div>
                                                               <div class="col-md-6">
                                                                <select class="form-control form-select" name="bus_country" id="bus_country" required>
                                                                  <option selected disabled>Select Country</option>
                                                                                      @foreach ($allcountry as $thecountry)
                                                                  <option value="{{ $thecountry->id }}">{{ $thecountry->name }}</option>
                                                                  @endforeach
                                                                 </select>
                                                               </div>
                                                               <div class="col-md-2">
                                                                   
                                                                 </div>

                                                         
                                                         
                                                     </div>


                                                     <div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
                                                     width: 98%;padding-bottom: 20px;
 padding-top: 6px;margin-top: 12px;">
                                                         
                                                         

                                                             <div class="col-md-4">
                                                                 <label for="inputPassword6" class="col-form-label">State</label>
                                                               </div>
                                                               <div class="col-md-6">
                                                                <select class="form-control" name="bus_state" id="bus_state" required>
										
                                                                </select>
                                                               </div>
                                                               <div class="col-md-2">
                                                                   
                                                                 </div>

                                                         
                                                         
                                                     </div>


                                                     <div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
                                                     width: 98%;padding-bottom: 20px;
 padding-top: 6px;margin-top: 12px;">
                                                         
                                                         

                                                             <div class="col-md-4">
                                                                 <label for="inputPassword6" class="col-form-label">City</label>
                                                               </div>
                                                               <div class="col-md-6">
                                                                <select class="form-control" name="bus_city" id="bus_city" required>
										
                                                                </select>
                                                               </div>
                                                               <div class="col-md-2">
                                                                   
                                                                 </div>

                                                         
                                                         
                                                     </div>


                                                     <div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
                                                     width: 98%;padding-bottom: 20px;
 padding-top: 6px;margin-top: 12px;">
                                                         
                                                         

                                                             <div class="col-md-4">
                                                                 <label for="inputPassword6" class="col-form-label">Street Address</label>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <input type="url" id="rcnumber" name="address" value="{{ $getUpdateUser->website }}" class="form-control" aria-describedby="passwordHelpInline" style="height:30px; ">
                                                               </div>
                                                               <div class="col-md-2">
                                                                   
                                                                 </div>

                                                         
                                                         
                                                     </div>


                                                     <div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
                                                     width: 98%;padding-bottom: 20px;
 padding-top: 6px;margin-top: 12px;">
                                                         
                                                         

                                                             <div class="col-md-4">
                                                                 <label for="inputPassword6" class="col-form-label">Select ID to Upload</label>
                                                               </div>
                                                               <div class="col-md-6">
                                                                <select class="form-select" id="moreid" name="identity" required>
                                                                    <option value="">Select---</option>
                                                                    <option value="Voters Card">Voters Card</option>
                                                                    <option value="NIN">NIN</option>
                                                                    <option value="No">No</option>
                                                                    
                                                                </select>
                                                               </div>
                                                               <div class="col-md-2">
                                                                   
                                                                 </div>

                                                         
                                                         
                                                     </div>


                                                     <div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
                                                     width: 98%;padding-bottom: 20px;
 padding-top: 6px;margin-top: 12px;">
                                                         
                                                         

                                                             <div class="col-md-4">
                                                                 <label for="inputPassword6" class="col-form-label">Upload Document</label>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <input type="file" id="rcnumber" name="address"  class="form-control" aria-describedby="passwordHelpInline" style="height:30px; ">
                                                               </div>
                                                               <div class="col-md-2">
                                                                   
                                                                 </div>

                                                         
                                                         
                                                     </div>

                                

                                                    


                                                     

                                                     <div class="row" style="padding-top: 16px;margin-left: 170px;">
                                                         <div class="col-md-6"></div>
                                                         <div class="col-md-6">
                                                             <button type="button" class="btn btn-primary-light" style="float:left">Cancel</button>
                                                             <button type="submit" id="updateprofile" class="btn btn-primary" style="float:left;margin-left: 8px;">Update Profile</button>
                                                         </div>
                                                     </div>
                                                  </form>
                                                 
                                               </div>
                                             
                                            </div>
                                         
                                         
                                     </div>
										

									</div>
			
								</div> <!-- end tab-pane -->
								<!-- end about me section content -->
			
								<div class="tab-pane show" id="timelinest">
			
									<div class="row">
                                        
										<div class="col-md-4">
											<div class="blog-post rounded overflow-hidden" style="
											border: 1px solid #e6dddd;
										">
												<div class="blog-detail">
													<div class="entry-title mb-10">
														<a style="color:black;" href="#">Emission 1</a>
													</div>					
													
													<div class="entry-content">
																	<p class="text-gray-600">A report of all the emission your building</p>
																</div>
													<div class="entry-share d-flex justify-content-between align-items-center">
														<div class="entry-button">
															<a href="{{route('generatereport')}}" class="btn btn-primary-light btn-sm">View Report</a>
														</div>
														
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-4">
											<div class="blog-post rounded overflow-hidden" style="
											border: 1px solid #e6dddd;
										">
												<div class="blog-detail">
													<div class="entry-title mb-10">
														<a style="color:black;" href="#">Emission 2</a>
													</div>					
													
													<div class="entry-content">
																	<p class="text-gray-600">A report of all the emission your building</p>
																</div>
													<div class="entry-share d-flex justify-content-between align-items-center">
														<div class="entry-button">
															<a href="#" class="btn btn-primary-light btn-sm">View Report</a>
														</div>
														
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-4">
											<div class="blog-post rounded overflow-hidden" style="
											border: 1px solid #e6dddd;
										">
												<div class="blog-detail">
													<div class="entry-title mb-10">
														<a style="color:black;" href="#">Emission 3</a>
													</div>					
													
													<div class="entry-content">
																	<p class="text-gray-600">A report of all the emission your building</p>
																</div>
													<div class="entry-share d-flex justify-content-between align-items-center">
														<div class="entry-button">
															<a href="#" class="btn btn-primary-light btn-sm">View Report</a>
														</div>
														
													</div>
												</div>
											</div>
										</div>

									</div>
			
			
								</div>
								<!-- end timeline content-->
			
								<div class="tab-pane" id="settings">
									
								</div>
								<!-- end settings content-->
			
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

<script>
  $(document).ready(function () {
          $('#bus_country').on('change', function () {
              var countryId = this.value;

      $('#bus_state').html('');

      $.ajax({
                  url: '{{ route('getState') }}?country_id='+countryId,
                  type: 'get',
                  success: function (res) {
                      $('#bus_state').html('<option value="">Select State</option>');
                      $.each(res, function (key, value) {
                          $('#bus_state').append('<option value="' + value
                              .id + '">' + value.name + '</option>');
                      });
                      $('#bus_city').html('<option value="">Select City</option>');
                  }
              });
             
          });


    $('#bus_state').on('change', function () {
              var stateId = this.value;

      $('#bus_city').html('');

      $.ajax({
                  url: '{{ route('getCity') }}?state_id='+stateId,
                  type: 'get',
                  success: function (res) {
                      $('#bus_city').html('<option value="">Select City</option>');
                      $.each(res, function (key, value) {
                          $('#bus_city').append('<option value="' + value
                              .id + '">' + value.name + '</option>');
                      });
                      
                  }
              });
             
          });

          
      });
</script>


@endsection
  
 
