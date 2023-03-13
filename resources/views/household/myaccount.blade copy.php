@extends('layouts.householdmaster')

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
					<h4 class="page-title">User list</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Contact</li>
								<li class="breadcrumb-item active" aria-current="page">User list</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>  

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-lg-9 col-md-8">
					<div class="box">
					  <div class="media-list media-list-divided media-list-hover">
						<div class="media align-items-center">
						  <span class="badge badge-dot badge-danger"></span>
						  <a class="avatar avatar-lg status-success" href="#">
							<img src="../../../images/avatar/1.jpg" alt="...">
						  </a>

						  <div class="media-body">
							<p>
							  <a href="#"><strong>Aaron</strong></a>
							  <small class="sidetitle">Online</small>
							</p>
							<p>Designer</p>

							<nav class="nav mt-2">
							  <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-github"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
							</nav>
						  </div>

						  <div class="media-right gap-items">
							<a class="media-action lead" href="#" data-bs-toggle="tooltip" title="" data-bs-original-title="Orders" aria-label="Orders"><i class="ti-shopping-cart"></i></a>
							<a class="media-action lead" href="#" data-bs-toggle="tooltip" title="" data-bs-original-title="Receipts" aria-label="Receipts"><i class="ti-receipt"></i></a>

							<div class="btn-group">
							  <a class="media-action lead" href="#" data-bs-toggle="dropdown"><i class="ion-android-more-vertical"></i></a>
							  <div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
								<a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> Remove</a>
							  </div>
							</div>

						  </div>
						</div>

						

					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4">
					<div class="box no-shadow">
						<div class="box-body">
						  <a class="btn btn-outline btn-success mb-5 d-flex justify-content-between" href="javascript:void(0)">Online <span class="pull-right">103</span></a>
						  <a class="btn btn-outline btn-danger mb-5 d-flex justify-content-between" href="javascript:void(0)">Offline <span class="pull-right">19</span></a>
						  <a class="btn btn-outline btn-info mb-5 d-flex justify-content-between" href="javascript:void(0)">Available <span class="pull-right">623</span></a>
						  <a class="btn btn-outline btn-primary mb-5 d-flex justify-content-between" href="javascript:void(0)">Private <span class="pull-right">53</span></a>
						  <a class="btn btn-warning mt-10 d-flex justify-content-between" href="javascript:void(0)">All Contacts <span class="pull-right">123</span></a>
						  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-success mt-10 d-block text-center">+ Add New Contact</a>
					  </div>
					</div>
				</div>				
			</div>


			<div class="row">
				<ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
					<li class="nav-item">
						<a href="#aboutme" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
							About
						</a>
					</li>
					<li class="nav-item">
						<a href="#timelinest" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
							Timeline
						</a>
					</li>
					<li class="nav-item">
						<a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
							Settings
						</a>
					</li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="aboutme">

						<h5 class="text-uppercase"><i class="mdi mdi-briefcase me-1"></i>
							Experience</h5>

						<div class="timeline-alt pb-0">
							<div class="timeline-item">
								<i class="mdi mdi-circle bg-info-light text-info timeline-icon"></i>
								<div class="timeline-item-info">
									<h5 class="fs-14 mt-0 mb-1">Php Developer</h5>
									<p>Dummy.com <span class="ms-2 fs-12">Year: 2015 - 18</span></p>
									<p class="text-muted mt-2 mb-0 pb-3">Everyone realizes why a new common language
										would be desirable: one could refuse to pay expensive translators.
										To achieve this, it would be necessary to have uniform grammar,
										pronunciation and more common words.</p>
								</div>
							</div>

							<div class="timeline-item">
								<i class="mdi mdi-circle bg-primary-light text-primary timeline-icon"></i>
								<div class="timeline-item-info">
									<h5 class="fs-14 mt-0 mb-1">Web Graphic Designer</h5>
									<p>Dummy Inc. <span class="ms-2 fs-12">Year: 2012 - 15</span></p>
									<p class="text-muted mt-2 mb-0 pb-3">If several languages coalesce, the grammar
										of the resulting language is more simple and regular than that of
										the individual languages. The new common language will be more
										simple and regular than the existing European languages.</p>

								</div>
							</div>

							<div class="timeline-item">
								<i class="mdi mdi-circle bg-info-light text-info timeline-icon"></i>
								<div class="timeline-item-info">
									<h5 class="fs-14 mt-0 mb-1">Content create</h5>
									<p>Dummy pllc <span class="ms-2 fs-12">Year: 2010 - 12</span></p>
									<p class="text-muted mt-2 mb-0 pb-2">The European languages are members of
										the same family. Their separate existence is a myth. For science
										music sport etc, Europe uses the same vocabulary. The languages
										only differ in their grammar their pronunciation.</p>
								</div>
							</div>

						</div>
						<!-- end timeline -->        

						<h5 class="mb-3 mt-4 text-uppercase"><i class="mdi mdi-cards-variant me-1"></i>
							Projects</h5>
						<div class="table-responsive">
							<table class="table text-fade table-borderless table-nowrap mb-0">
								<thead class="table-light">
									<tr>
										<th>#</th>
										<th>Clients</th>
										<th>Project Name</th>
										<th>Start Date</th>
										<th>Due Date</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Nil Yeager</td>
										<td>App design</td>
										<td>01/01/2015</td>
										<td>10/15/2018</td>
										<td><span class="badge badge-info-light">Work in Progress</span></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Mical </td>
										<td>Coffee detail page</td>
										<td>21/07/2016</td>
										<td>12/05/2018</td>
										<td><span class="badge badge-danger-light">Pending</span></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Lucy </td>
										<td>Poster design</td>
										<td>18/03/2018</td>
										<td>28/09/2018</td>
										<td><span class="badge badge-success-light">Done</span></td>
									</tr>
									<tr>
										<td>4</td>
										<td>ToodDoe</td>
										<td>bottle graphics</td>
										<td>02/10/2017</td>
										<td>07/05/2018</td>
										<td><span class="badge badge-info-light">Work in Progress</span></td>
									</tr>
									<tr>
										<td>5</td>
										<td>Mical</td>
										<td>Landing page</td>
										<td>17/01/2017</td>
										<td>25/05/2021</td>
										<td><span class="badge badge-warning-light">Coming soon</span></td>
									</tr>

								</tbody>
							</table>
						</div>

					</div> <!-- end tab-pane -->
					<!-- end about me section content -->

					<div class="tab-pane show" id="timelinest">

						<!-- comment box -->
						<div class="border rounded mt-2 mb-3">
							<form action="#" class="comment-area-box">
								<textarea rows="3" class="form-control border-0 resize-none" placeholder="Write something...."></textarea>
								<div class="p-2 bg-gray-100 d-flex justify-content-between align-items-center">
									<div>
										<a href="#" class="btn btn-sm px-2 fs-16 btn-primary-light"><i class="mdi mdi-account-circle"></i></a>
										<a href="#" class="btn btn-sm px-2 fs-16 btn-primary-light"><i class="mdi mdi-map-marker"></i></a>
										<a href="#" class="btn btn-sm px-2 fs-16 btn-primary-light"><i class="mdi mdi-camera"></i></a>
										<a href="#" class="btn btn-sm px-2 fs-16 btn-primary-light"><i class="mdi mdi-emoticon"></i></a>
									</div>
									<button type="submit" class="btn btn-sm btn-primary-light waves-effect">Post</button>
								</div>
							</form>
						</div> <!-- end .border-->
						<!-- end comment box -->

						<!-- Story Box-->
						<div class="border border-light rounded p-2 mb-3">
							<div class="d-flex">
								<img class="me-2 rounded-circle bg-light" src="../../../images/avatar/avatar-1.png" alt="Generic placeholder image" height="32">
								<div>
									<h5 class="fs-15 m-0">Jeremy Tomlinson</h5>
									<p class="text-muted"><small>about 2 minuts ago</small></p>
								</div>
							</div>
							<p class="text-fade">Story based around the idea of time lapse, animation to post soon!</p>

							<img src="../../../images/gallery/thumb-sm/1.jpg" alt="post-img" class="rounded bg-light m-1" height="100">
							<img src="../../../images/gallery/thumb-sm/2.jpg" alt="post-img" class="rounded bg-light m-1" height="100">
							<img src="../../../images/gallery/thumb-sm/3.jpg" alt="post-img" class="rounded bg-light m-1" height="100">

							<div class="mt-2">
								<a href="javascript: void(0);" class="btn btn-sm btn-primary-light"><i class="mdi mdi-reply"></i> Reply</a>
								<a href="javascript: void(0);" class="btn btn-sm btn-primary-light"><i class="mdi mdi-heart-outline"></i> Like</a>
								<a href="javascript: void(0);" class="btn btn-sm btn-primary-light"><i class="mdi mdi-share-variant"></i> Share</a>
							</div>
						</div>

						<!-- Story Box-->
						<div class="border border-light rounded p-2 mb-3">
							<div class="d-flex">
								<img class="me-2 rounded-circle bg-light" src="../../../images/avatar/avatar-1.png" alt="Generic placeholder image" height="32">
								<div>
									<h5 class="m-0 fs-15">Thelma Fridley</h5>
									<p class="text-muted">about 1 hour ago</p>
								</div>
							</div>
							<div class="fs-13 text-center fst-italic text-fade">
								<i class="mdi mdi-format-quote-open fs-13"></i> Cras sit amet nibh libero, in
								gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
								purus odio, vestibulum in vulputate at, tempus viverra turpis. Duis
								sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper
								porta. Mauris massa.
							</div>

							<div class="my-2 p-15 mt-3">
								<div class="d-flex">
									<img class="me-2 rounded-circle bg-light" src="../../../images/avatar/avatar-2.png" alt="Generic placeholder image" height="32">
									<div>
										<h5 class="fs-15 mt-0 mb-0">Jeremy Tomlinson</h5> 
										<p class="text-muted">3 hours ago</p>
										<span class="text-fade">Nice work, makes me think of The Money Pit.</span>

										<br>
										<a href="javascript: void(0);" class="text-muted d-inline-block mt-2"><i class="mdi mdi-reply"></i> Reply</a>

										<div class="d-flex mt-3">
											<a class="pe-2" href="#">
												<img class=" rounded-circle bg-light" src="../../../images/avatar/avatar-3.png" alt="Generic placeholder image" height="32" style="margin-right: 35px;">
											</a>
											<div>
												<h5 class="fs-15 mt-0 mb-0">Thelma Fridley</h5>
												<p class="text-muted">5 hours ago</p>
												<span class="text-fade">i'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.</span>
											</div>
										</div>
									</div>
								</div>

								<div class="d-flex mt-2">
									<a class="pe-2" href="#">
										<img class="me-2 rounded-circle bg-light" src="../../../images/avatar/avatar-1.png" alt="Generic placeholder image" height="32">
									</a>
									<div class="w-100">
										<input type="text" id="simpleinput" class="form-control border-0 form-control-sm" placeholder="Add comment">
									</div>
								</div>
							</div>

							<div class="mt-2">
								<a href="javascript: void(0);" class="btn btn-sm btn-danger-light"><i class="mdi mdi-heart"></i> Like (28)</a>
								<a href="javascript: void(0);" class="btn btn-sm btn-danger-light"><i class="mdi mdi-share-variant"></i> Share</a>
							</div>
						</div>

						<!-- Story Box-->
						<div class="border border-light p-2 mb-3">
							<div class="d-flex">
								<img class="me-2 rounded-circle bg-light" src="../../../images/avatar/avatar-6.png" alt="Generic placeholder image" height="32">
								<div>
									<h5 class="fs-15 m-0">Martin Williamson</h5>
									<p class="text-muted"><small>15 hours ago</small></p>
								</div>
							</div>
							<p class="text-fade">The parallax is a little odd but O.o that house build is awesome!!</p>

							<iframe src="https://player.vimeo.com/video/87993762" height="300" class="w-auto img-fluid border-0"></iframe>
						</div>

						<div class="text-center">
							<a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading me-1"></i> Load more </a>
						</div>

					</div>
					<!-- end timeline content-->

					<div class="tab-pane" id="settings">
						<form>
							<h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label for="firstname" class="form-label">First Name</label>
										<input type="text" class="form-control" id="firstname">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label for="lastname" class="form-label">Last Name</label>
										<input type="text" class="form-control" id="lastname">
									</div>
								</div> <!-- end col -->
							</div> <!-- end row -->

							<div class="row">
								<div class="col-12">
									<div class="mb-3">
										<label for="userbio" class="form-label">Bio</label>
										<textarea class="form-control" id="userbio" rows="4"></textarea>
									</div>
								</div> <!-- end col -->
							</div> <!-- end row -->

							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label for="useremail" class="form-label">Email Address</label>
										<input type="email" class="form-control" id="useremail">
										<span class="form-text text-muted">If you want to change email please <a href="javascript: void(0);">click</a> here.</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label for="userpassword" class="form-label">Password</label>
										<input type="password" class="form-control" id="userpassword">
										<span class="form-text text-muted">If you want to change password please <a href="javascript: void(0);">click</a> here.</span>
									</div>
								</div> <!-- end col -->
							</div> <!-- end row -->

							<h5 class="mt-3 mb-4 text-uppercase"><i class="mdi mdi-office me-1"></i> Company Info</h5>
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label for="companyname" class="form-label">Company Name</label>
										<input type="text" class="form-control" id="companyname">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label for="cwebsite" class="form-label">Website</label>
										<input type="text" class="form-control" id="cwebsite">
									</div>
								</div> <!-- end col -->
							</div> <!-- end row -->

							<h5 class="mt-3 mb-4 text-uppercase"><i class="mdi mdi-earth me-1"></i> Social</h5>
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label for="social-fb" class="form-label">Facebook</label>
										<div class="input-group">
											<span class="input-group-text"><i class="mdi mdi-facebook"></i></span>
											<input type="text" class="form-control" id="social-fb">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label for="social-tw" class="form-label">Twitter</label>
										<div class="input-group">
											<span class="input-group-text"><i class="mdi mdi-twitter"></i></span>
											<input type="text" class="form-control" id="social-tw">
										</div>
									</div>
								</div> <!-- end col -->
							</div> <!-- end row -->

							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label for="social-insta" class="form-label">Instagram</label>
										<div class="input-group">
											<span class="input-group-text"><i class="mdi mdi-instagram"></i></span>
											<input type="text" class="form-control" id="social-insta">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label for="social-lin" class="form-label">Linkedin</label>
										<div class="input-group">
											<span class="input-group-text"><i class="mdi mdi-linkedin"></i></span>
											<input type="text" class="form-control" id="social-lin">
										</div>
									</div>
								</div> <!-- end col -->
							</div> <!-- end row -->

							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label for="social-sky" class="form-label">Skype</label>
										<div class="input-group">
											<span class="input-group-text"><i class="mdi mdi-skype"></i></span>
											<input type="text" class="form-control" id="social-sky">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label for="social-gh" class="form-label">Github</label>
										<div class="input-group">
											<span class="input-group-text"><i class="mdi mdi-github-face"></i></span>
											<input type="text" class="form-control" id="social-gh">
										</div>
									</div>
								</div> <!-- end col -->
							</div> <!-- end row -->

							<div class="text-end">
								<button type="submit" class="btn btn-primary mt-2"><i class="mdi mdi-content-save"></i> Save</button>
							</div>
						</form>
					</div>
					<!-- end settings content-->

				</div>
			</div>



			<div class="row">

				<div class="col-lg-3 col-md-4">
					<div class="box no-shadow">
						<div class="box-body">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a href="#aboutme" data-bs-toggle="tab" aria-expanded="false" class="btn btn-outline btn-success mb-5 d-flex justify-content-between" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
								<a href="#aboutmer" data-bs-toggle="tab" aria-expanded="false" class="btn btn-outline btn-success mb-5 d-flex justify-content-between" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
								{{-- <button class="btn btn-outline btn-success mb-5 d-flex justify-content-between" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
								<button class="btn btn-outline btn-success mb-5 d-flex justify-content-between" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button> --}}
							  </div>
						</div>
					</div>
				</div>	
				
				<div class="col-lg-9 col-md-8">
					<div class="box no-shadow">
						<div class="box-body">
							<div class="tab-content">
								<div class="tab-pane show" id="aboutme">
                                    fjfjf
								</div>

								<div class="tab-pane" id="aboutmer">
                                   about
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




@endsection
  
 
