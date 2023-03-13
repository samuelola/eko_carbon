
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Household Sign In</title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('/html/template/vertical-light/src/css/vendors_css.css') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('/html/template/vertical-light/src/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('/html/template/vertical-light/src/css/skin_color.css') }}">	
    <style>
        .input-group > .form-control, .input-group > .form-select {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    min-width: 0;
    height: 45px;
}

.form-control, .form-select {
    box-shadow: none;
   
    border-color: #bdbab8;
    height: auto;
}

.input-group .input-group-text {
    border-radius: 5px;
    border-color: #bdbab8;
    border-right-color: transparent;
}
    </style>

<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('eko/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('eko/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('eko/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('eko/site.webmanifest') }}">
<link rel="mask-icon" href="{{ asset('eko/safari-pinned-tab.svg') }}" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
</head>


<header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start" style="background-color:#187a56">	
		<!-- Logo -->
		<a href="#" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-40">
			{{-- <span class="light-logo">Eko Carbon</span> --}}
            {{-- <span class="light-logo"><img src="/htmly/images/logo-letter.png" alt="logo"></span>
            <span class="dark-logo"><img src="/htmly/images/logo-letter-white.png" alt="logo"></span> --}}
        </div>
        <div class="logo-lg">
			
			{{-- <img src="{{ asset('logo/logo_white.svg') }}" style="width: 200px;height:50px;" alt="logo"> --}}
			<img src="{{ asset('logo/logo.png') }}" style="width: 200px;height:50px;" alt="logo">
           
        </div>
		</a>	
	</div>   
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			{{-- <li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
					<i data-feather="menu"></i>
			    </a>
			</li> --}}
			{{-- <li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li> --}}
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
		
        <ul class="nav navbar-nav">
						<li class="btn-group d-md-inline-flex d-none">
						  <label class="switch">
                            <a href="{{ route('householdtrial') }}" class="btn btn-success" style="background-color: #3e9164;
                            border-color: #3e9164;
                            color: #ffffff;">Try our Calculator</a>
							{{-- <span class="badge text-bg-warning">Warning</span> --}}
							{{-- <marquee width="100%" direction="left" scrollamount="2" style="margin-left: -80px;">Click Complete your KYC </marquee> --}}

							
							  {{-- <span class="waves-effect skin-toggle waves-light">
									<input type="checkbox" data-mainsidebarskin="toggle" id="toggle_left_sidebar_skin">
									<span class="switch-on"><i data-feather="moon"></i></span>
									<span class="switch-off"><i data-feather="sun"></i></span>
								</span> --}}
							</label>
            </li>
			<!--<li class="dropdown notifications-menu btn-group ">
				<a href="#" class="waves-effect waves-light btn-primary-light svg-bt-icon" data-bs-toggle="dropdown" title="Notifications">
					<i data-feather="bell"></i>
					<div class="pulse-wave"></div>
			    </a>
				<ul class="dropdown-menu animated bounceIn">
				  <li class="header">
					<div class="p-20">
						<div class="flexbox">
							<div>
								<h4 class="mb-0 mt-0">Notifications</h4>
							</div>
							<div>
								<a href="#" class="text-danger">Clear All</a>
							</div>
						</div>
					</div>
				  </li>
				  <li>
					<!- - inner menu: contains the actual data -- >
					<ul class="menu sm-scrol">
					  <li>
						<a href="#">
						  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
						</a>
					  </li>
					</ul>
				  </li>
				  <li class="footer">
					  <a href="component_notification.html">View all</a>
				  </li>
				</ul>
			</li>
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" id="live-chat">
					<i data-feather="message-circle"></i>
			    </a>
			</li>-->
			
			{{-- <li class="btn-group d-xl-inline-flex d-none">
			    <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon dropdown-toggle" data-bs-toggle="dropdown">
					<img class="rounded" src="#" alt="">
				</a>
			    <div class="dropdown-menu">
					
			    </div>
			</li> --}}
			
			{{-- <li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="Full Screen">
					<i data-feather="maximize"></i>
			    </a>
			</li>					   --}}
          <!-- Control Sidebar Toggle Button -->
          {{-- <li class="btn-group nav-item d-xl-inline-flex d-none">
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon">
			  	<i data-feather="sliders"></i>
			  </a>
          </li> --}}
			
			<!-- User Account-->
			{{-- <li class="dropdown user user-menu">
				<a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow" title="User" data-bs-toggle="modal" data-bs-target="#quick_user_toggle">
					<?php
					$theimage = App\Models\KYC::where('user_id','=',Auth::user()->id)->first();

					 ?>

                     <img src="/ava.png" class="avatar rounded bg-primary-light" alt="avatar" />
					 
					
				</a>
			</li> --}}
			
        </ul>
      </div>
    </nav>
  </header>

{{-- <body class="hold-transition theme-primary bg-img" style="background-image: url(/html/images/auth-bg/bg-16.jpg)"> --}}
<body class="hold-transition theme-primary bg-img" style="background-color:#f8f8f8">    
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				{{-- <img src="logo/eko.png" style="width: 200px;height:50px;margin-left: 320px;position: relative;
				top: -30px;" alt="logo"> --}}
				<div class="row justify-content-center g-0" style="
                margin-top: -80px;
            ">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="fw-600">Sign In</h2>
								<p class="mb-0 text-fade">Sigin with your Email</p>							
							</div>

                            {{-- <div class="text-center">
                                
                                <div style="padding-top:40px;padding-left:40px;padding-right:40px;">
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-default w-p100">Sign Up with Google</button>
                                        <span ><img style="width: 20px;
                                            position: relative;
                                            top: -30px;
                                            left: -100px;" src="/html/images/downloadd.png" alt=""></span>
                                    </div>	
                                </div>
                                <p class="text-fade">- or -</p>
                              </div> --}}
							<div style="padding-top:40px;padding-bottom:40px;padding-left:40px;padding-right:40px;">
								<form action="{{ route('householdlogin') }}" method="post">
									@csrf
									{{-- <div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="text-fade ti-user"></i></span>
											<input type="text" class="form-control ps-15 bg-transparent" placeholder="Full Name">
										</div>
									</div> --}}
									<div class="form-group">
										<div class="input-group mb-3">
											{{-- <span class="input-group-text bg-transparent"><i class="text-fade ti-email"></i></span> --}}
											<input type="email" name="email" class="form-control ps-15 bg-transparent @error('email') is-invalid @enderror" value="{{ old('email') }} " placeholder="Email">
										</div>
										<strong style="color: #000">{{ $errors->first('email') }}</strong>
									</div>
									{{-- <div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="text-fade ti-lock"></i></span>
											<input type="password" class="form-control ps-15 bg-transparent" placeholder="Password">
										</div>
									</div> --}}
									<div class="form-group">
										<div class="input-group mb-3">
											{{-- <span class="input-group-text bg-transparent"><i class="text-fade ti-lock"></i></span> --}}
											<input type="password" name="password" class="form-control ps-15 bg-transparent @error('password') is-invalid @enderror" placeholder="Password">
										</div>
										<strong style="color: #000">{{ $errors->first('password') }}</strong>
									</div>
									  <div class="row">
										
										
										<div class="col-12 text-center">
											<button style="background-color: #187a56;color:#fff" type="submit" class="btn  w-p100">Sign In</button>
											{{-- <a  class="btn btn-primary w-p100" href="{{ route('dashboard') }}">Sign In</a> --}}
										</div>
										
									  </div>
								</form>				
								<div class="text-center">
									<p class="mt-15 mb-0 text-fade">New to Eko Carbon? <a href="{{ route('householdlist') }}" style="color:#187a56;font-weight: 500;" class="ms-5">Create an account</a></p>
								</div>
								
								
							</div>
						</div>	
					</div>
				</div>
			</div>			
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="../src/js/vendors.min.js"></script>
	<script src="../src/js/pages/chat-popup.js"></script>
    <script src="../../../assets/icons/feather-icons/feather.min.js"></script>	
	
	
</body>


</html>
