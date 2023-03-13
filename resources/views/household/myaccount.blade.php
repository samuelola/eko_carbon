@extends('layouts.householdmaster')

@section('title')
    | Account
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
									<a href="#certificate" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
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
												My Details
											</a>
										</li>
										<li class="nav-item">
											<a href="#bs-modals-password" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
												Password
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
																	<label for="inputPassword6" class="col-form-label">First Name</label>
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
																	<label for="inputPassword6" class="col-form-label">Last Name</label>
																  </div>
																  <div class="col-md-6">
																	<input type="text" id="lastname" name="lastname" value="{{ $getUpdateUser->lastname }}" class="form-control" aria-describedby="passwordHelpInline" style="height:30px; ">
																  </div>
																  <div class="col-md-2">
																	  
																	</div>

															
															
														</div>


														<div class="row g-3 align-items-center" style="border-top: 1px solid rgba(152, 166, 173, 0.2);
														width: 98%;border-bottom: 1px solid rgba(152, 166, 173, 0.2);padding-bottom: 20px;
    padding-top: 6px;margin-top: 12px;">
															
															

																<div class="col-md-4">
																	<label for="inputPassword6" class="col-form-label">Email Address</label>
																  </div>
																  <div class="col-md-6">
																	<input type="email" id="email" value="{{ $getUpdateUser->email }}" name="email" class="form-control" aria-describedby="passwordHelpInline" style="height:30px; ">
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
										

									</div>
			
								</div> <!-- end tab-pane -->
								<!-- end about me section content -->
			
								<div class="tab-pane show" id="timelinest">
			
									<div class="row">

									 @foreach ($alemit as $val)

									 <div class="col-md-4">
										<div class="blog-post rounded overflow-hidden" style="
										border: 1px solid #e6dddd;
									">
											<div class="blog-detail">
												<div class="entry-title mb-10">
													<a style="color:black;" href="#">{{ $val }}&nbsp;Emission</a>
												</div>					
												
												<div class="entry-content">
																<p class="text-gray-600">A report of all the emission your building</p>
															</div>
												<div class="entry-share d-flex justify-content-between align-items-center">
													<div class="entry-button">
														<a href="{{route('emissionreport',$val)}}" class="btn btn-primary-light btn-sm">View Report</a>
													</div>
													
												</div>
											</div>
										</div>
									</div>
										
									 @endforeach
									 {{-- @foreach ($alemit as $emitvalue)

									 <div class="col-md-4">
										<div class="blog-post rounded overflow-hidden" style="
										border: 1px solid #e6dddd;
									">
											<div class="blog-detail">
												<div class="entry-title mb-10">
													<a style="color:black;" href="#">{{ $emitvalue->type }}&nbsp;Emission</a>
												</div>					
												
												<div class="entry-content">
																<p class="text-gray-600">A report of all the emission your building</p>
															</div>
												<div class="entry-share d-flex justify-content-between align-items-center">
													<div class="entry-button">
														<a href="{{route('emissionreport',$emitvalue->id)}}" class="btn btn-primary-light btn-sm">View Report</a>
													</div>
													
												</div>
											</div>
										</div>
									</div>
										
									 @endforeach --}}
                                        
										

									</div>
			
			
								</div>
								<!-- end timeline content-->
			
								<div class="tab-pane" id="certificate">

									<div class="row">


										@foreach ($getAlluserEmissionTransactions as $val)

									<div class="col-md-4">
										<div class="blog-post rounded overflow-hidden pull-up" style="
										border: 1px solid #e6dddd;
									">
											<div class="blog-detail" style="background: #fafffa;">
												<div class="entry-title mb-10">
													<a id="thecert" style="color:black;" href="#" data-bs-toggle="modal" data-bs-target="#bs-certificate-modal-lg" data-unit="<?php echo $val->unit ?>" data-cert_id="<?php echo $val->cert_id ?>" data-created_at="<?php echo date('M j, Y', strtotime($val->created_at)) ?>" data-firstname="<?php echo ucfirst($val->user->firstname) ?>" data-lastname="<?php echo ucfirst($val->user->lastname) ?>">
														  
														<div class="row">
                                                              <div class="col-md-4">
																
																<img style="max-width: 40px;;margin-top: 190%;
																" src="logo/eko.png" alt="">
															  </div>
															  <div class="col-md-8">
																<span style="font-size:7px;text-align: center;margin-left: 6px;font-weight: 700;">Carbon Credit Cerificate<span>
																<p style="font-size:5px;text-align: center;margin-left: -5px;">This Certificate Confirms that </p>
																<p style="font-size:5px;text-align: center;margin-left: -5px;margin-top: -10px;">{{ $val->unit }} Carbon Credit </p>
																<p style="font-size:5px;text-align: center;margin-left: -5px;margin-top: -10px;">Equivalent to 10 metric tons of Co<sub>2<sub></p>
																<p style="font-size:5px;text-align: center;margin-left: -5px;margin-top: -10px;">have been purchased and are been retired to support the</p>
																<p style="font-size:7px;text-align: center;margin-left: -5px;margin-top: -10px;">Eko Biodiversity Growth</p>
																<p style="font-size:5px;text-align: center;margin-left: -5px;margin-top: -10px;">On behalf of</p>
																<p style="font-size:7px;text-align: center;margin-left: -5px;">{{ $val->user->firstname }}&nbsp;{{ $val->user->lastname }}
																   <hr style="margin-top: -10px;">
																</p>
																<p style="font-size:5px;text-align: center;margin-left: -5px;margin-top: -10px;">{{ date('M j, Y', strtotime($val->created_at)) }}</p>	

																<p style="font-size:5px;text-align: center;margin-left: -5px;">Serial number Purchased</p>

																<p style="font-size:5px;text-align: center;margin-left: -5px;margin-top: -10px;">{{ $val->cert_id }}</p>
															  </div>

														</div>


														</a>
												</div>					
												
												{{-- <div class="entry-content">
																<p class="text-gray-600">Bio Diversity</p>
																<p class="text-gray-600">100 Credits</p>
												</div> --}}
												<div class="entry-share d-flex justify-content-between align-items-center">
													
													
												</div>
											</div>
										</div>
									</div>
										
									@endforeach

									{{-- {{ $getAlluserEmissionTransactions->links() }} --}}
									</div>

									

									
									
								</div>
								<!-- end settings content-->
			
							</div>

						</div>
						
					</div>		

					

				</div>
				

				
			</div>



			<div class="modal fade" id="bs-certificate-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg  modal-dialog-scrollable">
					<div class="modal-content" style="
					background: #fafffa;
				">
						<div class="modal-header" style="border-bottom-color:transparent">
							<h4 class="modal-title" id="myLargeModalLabel myproject_name"></h4>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
			
							<div class="row">
								 <div class="col-md-4">
                                    <p style="margin-top: 45%;margin-left: 50px;">Purchased On</p>
									<img style="max-width: 80%;
									;
																" src="logo/eko.png" alt="">

								 </div>

								 <div class="col-md-8">
									<span style="font-size:19px;margin-left: 86px;font-weight: 700;">Carbon Credit Cerificate<span>
									<p style="font-size:10px;text-align: center;margin-left: -105px;margin-top: 9px;font-weight: 400;">This Certificate Confirms that </p>
									<p style="font-size:15px;text-align: center;margin-left: -105px;font-weight: 400;"><span id="myunit"></span> Carbon Credit </p>
									<p style="font-size:10px;text-align: center;margin-left: -105px;font-weight: 400;">Equivalent to 10 metric tons of Co<sub>2<sub></p>
									<p style="font-size:10px;text-align: center;margin-left: -105px;font-weight: 400;">have been purchased and are been retired to support the</p>
									<p style="font-size:15px;text-align: center;margin-left: -105px;font-weight: 600;">Eko Biodiversity Growth</p>
									<p style="font-size:10px;text-align: center;margin-left: -105px;font-weight: 400;">On behalf of</p>
									<p style="font-size:28px;text-align: center;margin-left: -105px;" id="fullname">
										<hr style="margin-top: -10px;width: 77%;height: 0px;
										border: none;
										border-top: 1px solid black;">
									</p>
									<p style="font-size:10px;text-align: center;margin-left: -105px;margin-top: 10px;" id="mycreated"></p>	

									<p style="font-size:10px;text-align: center;margin-left: -105px;margin-top: 10px;">Serial number Purchased</p>

									<p style="font-size:10px;text-align: center;margin-left: -105px;margin-top: -10px;font-weight: 500;" id="mycert"></p>
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


@section('script')

<script>
    $(document).on('click', '#thecert', function(event){
	
    event.preventDefault();
    
    var theunit = $(this).data('unit');
    var thecert_id = $(this).data('cert_id');
    var thecreated_at = $(this).data('created_at');
    var thefirstname = $(this).data('firstname');
    var thelastname = $(this).data('lastname');


	console.log(theunit);

	document.getElementById("myunit").innerHTML = theunit;
            document.getElementById("mycert").innerHTML = thecert_id;
            document.getElementById("mycreated").innerHTML = thecreated_at;
			document.getElementById("fullname").innerHTML = thefirstname + ' ' +  thelastname;


    
    });
</script>


@endsection
  
 
