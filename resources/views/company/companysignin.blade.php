
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Eko Carbon Company Sign In</title>
  
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

{{-- <body class="hold-transition theme-primary bg-img" style="background-image: url(/html/images/auth-bg/bg-16.jpg)"> --}}
<body class="hold-transition theme-primary bg-img" style="background-color:#f8f8f8">    
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<img src="logo/eko.png" style="width: 200px;height:50px;margin-left: 320px;position: relative;
				top: -30px;" alt="logo">
				<div class="row justify-content-center g-0">
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
								<form action="{{ route('companylogin') }}" method="post">
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
									{{-- <p class="mt-15 mb-0 text-fade">New to Eko Carbon?<a href="{{ route('companylist') }}" style="color:#187a56" class="ms-5">Create Account</a></p> --}}

									<p class="mt-15 mb-0 text-fade">New to Eko Carbon?<a href="{{ route('companysignup') }}" style="color:#187a56" class="ms-5">Create Account</a></p>
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
