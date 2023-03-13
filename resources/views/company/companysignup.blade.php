
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Company Sign Up</title>
    
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

.form-control, .form-select {
    box-shadow: none;
   
    border-color: #bdbab8;
    height: auto;
}

.form-control, {
    box-shadow: none;
   
    border-color: #bdbab8;
    height: auto;
}

.input-group .input-group-text {
    border-radius: 5px;
    border-color: #bdbab8;
    border-right-color: transparent;
}


.separator.separator-content {
    display: flex;
    align-items: center;
    border-bottom: 0;
    text-align: center;
}

.seperator{
	height: 0;
}

.my-14 {
    margin-top: 20px !important;
    margin-bottom: 30px !important;

	/* margin-top: 3.5rem !important;
    margin-bottom: 3.5rem !important; */
}


.separator.separator-content::before, .separator.separator-content::after {
    

	/* content: " ";
    width: 33%;
    border-bottom: 1px solid green;
    margin-left: 43px; */

	content: " ";
    width: 50%;
    border-bottom: 1px solid grey;
	margin-left: 40px;
	margin-right: 40px;
}

.separator.separator-content::before {
    /* margin-right: 1.25rem; */
}

.text-gray-500 {
    color: var(--kt-text-gray-500) !important;
}

.fw-semibold {
    font-weight: 500 !important;
}


.w-125px {
    /* width: 30px !important; */
	width: 20px !important;
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
			{{-- <span class="light-logo" style="color:#000">Eko Carbon</span> --}}
			<img src="{{ asset('logo/logo_white.svg') }}" style="width: 200px;height:50px;" alt="logo">
            {{-- <span class="light-logo"><img src="/htmly/images/logo-dark-text.png" alt="logo"></span>
            <span class="dark-logo"><img src="/htmly/images/logo-light-text.png" alt="logo"></span> --}}
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
						
			<!-- User Account-->
			
			
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
				top: 40px;" alt="logo"> --}}
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg" style="
						margin-top: 50px;margin-bottom:30px;
					">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="fw-600">Sign Up</h2>
								<p class="mb-0 text-fade">Create your own secure account</p>							
							</div>

                            <div class="text-center">
                                
                                <div style="padding-top:40px;padding-left:40px;padding-right:40px;">
                                    <div class="col-12 text-center">
                                        {{-- <button type="submit" class="btn btn-default w-p100">Sign Up with Google</button> --}}

										<a href="{{ url('auth/google') }}" class="btn btn-default w-p100">Sign Up with Google</a>

                                        <span ><img style="width: 20px;
                                            position: relative;
                                            top: -30px;
                                            left: -100px;" src="/html/images/downloadd.png" alt=""></span>
                                    </div>	
                                </div>
                                {{-- <p class="text-fade">- or -</p> --}}
								<div class="separator separator-content my-14">
									<span class="w-125px text-gray-500 fw-semibold fs-7">Or</span>
								</div>
                              </div>
							<div style="padding-bottom:40px;padding-left:40px;padding-right:40px;">
								<form action="{{ route('companycreate') }}" method="post"  enctype="multipart/form-data">

									@csrf
									<input type="hidden" value="0" name="kyc_status">
									<input type="hidden" value="company" name="role">
									<input type="hidden" value="1" name="is_active">
									{{-- <div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="text-fade ti-user"></i></span>
											<input type="text" class="form-control ps-15 bg-transparent" placeholder="Full Name">
										</div>
									</div> --}}
									<div class="form-group">
										<div class="input-group mb-3">
											{{-- <span class="input-group-text bg-transparent"><i class="text-fade ti-user"></i></span> --}}
											<input type="text" name="firstname" class="form-control ps-15 bg-transparent @error('firstname') is-invalid @enderror" required placeholder="Business name" value="{{ old('firstname') }}">
											
										</div>
										<strong style="color: #000">{{ $errors->first('firstname') }}</strong>
									</div>
									{{-- <div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="text-fade ti-user"></i></span>
											<input name="lastname" type="text" class="form-control ps-15 bg-transparent @error('lastname') is-invalid @enderror" required placeholder="Lastname" value="{{ old('lastname') }}">
											
										</div>
										<strong style="color: #000">{{ $errors->first('lastname') }}</strong>
									</div> --}}

									<div class="form-group">
										<div class="input-group mb-3">
											
											<input name="email" type="email" class="form-control ps-15 bg-transparent  @error('email') is-invalid @enderror" required placeholder="Business Email Address" value="{{ old('email') }} ">
											
										</div>
										<strong style="color: #000">{{ $errors->first('email') }}</strong>
									</div>

                                    <div class="form-group">
										<div class="input-group mb-3">
											
											{{-- <input name="address" type="text" class="form-control ps-15 bg-transparent  @error('address') is-invalid @enderror" required placeholder="Business Address" value="{{ old('address') }} "> --}}
											<input type="text" placeholder="Business Address" class="form-control" name="address">
										</div>
										<strong style="color: #000">{{ $errors->first('address') }}</strong>
									</div>

                                    <div class="form-group">
										<div class="input-group mb-3">
											{{-- <span class="input-group-text bg-transparent"><i class="text-fade ti-email"></i></span> --}}
											{{-- <input name="rcnumber" type="text" class="form-control ps-15 bg-transparent  @error('rcnumber') is-invalid @enderror" required placeholder="RC Number" value="{{ old('rcnumber') }} "> --}}
                                            <input type="text" placeholder="RC Number" class="form-control @error('rcnumber') is-invalid @enderror" name="rcnumber" required >
											
										</div>
										<strong style="color: #000">{{ $errors->first('rcnumber') }}</strong>
									</div>


                                    <div class="form-group">
										<div class="input-group mb-3">
											{{-- <span class="input-group-text bg-transparent"><i class="text-fade ti-email"></i></span> --}}
											{{-- <input name="rcnumber" type="text" class="form-control ps-15 bg-transparent  @error('rcnumber') is-invalid @enderror" required placeholder="RC Number" value="{{ old('rcnumber') }} "> --}}
                                            <select name="industry" id="" class="form-control form-select">
                                                 <option value="">--Select Industry--</option>
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
                                                <option value="Public Administration">Public Administration</option>
                                            </select>
											
										</div>
										
									</div>

                                    

									<div class="form-group">
										<div class="input-group mb-3">
											{{-- <span class="input-group-text bg-transparent"><i class="text-fade ti-lock"></i></span> --}}
											<input name="password" type="password" class="form-control ps-15 bg-transparent @error('password') is-invalid @enderror" placeholder="Password" required>
											
										</div>
										<strong style="color: #000">{{ $errors->first('password') }}</strong>
									</div>

									<div class="form-group">
										<div class="input-group mb-3">
											{{-- <span class="input-group-text bg-transparent"><i class="text-fade ti-lock"></i></span> --}}
											<input type="password" class="form-control ps-15 bg-transparent @error('password') is-invalid @enderror" placeholder="Confirm Password" name="password_confirmation" required>
										</div>
										<strong style="color: #000">{{ $errors->first('password') }}</strong>
									</div>
									
									  <div class="row">
										
										
										<div class="col-12 text-center">
											<button style="background-color: #187a56;color:#fff;" type="submit" class="btn  w-p100">Sign Up</button>
                                            {{-- <a class="btn btn-primary w-p100" href="{{ route('listing') }}">Sign Up</a> --}}
										</div>
										
									  </div>
								</form>				
								<div class="text-center">
									<p class="mt-15 mb-0 text-fade">Already have an account?<a href="{{ route('companysignin') }}" style="color:#187a56" class="ms-5">Sign In</a></p>
									
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
