
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Eko Carbon | KYC </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('/html/template/vertical-light/src/css/vendors_css.css') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('/html/template/vertical-light/src/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('/html/template/vertical-light/src/css/skin_color.css') }}">
    <link rel="stylesheet" href="{{ asset('file.css') }}">
	<link rel="stylesheet" href="{{ asset('kyc.css') }}" />
    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('eko/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('eko/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('eko/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('eko/site.webmanifest') }}">
<link rel="mask-icon" href="{{ asset('eko/safari-pinned-tab.svg') }}" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

</head>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
	{{-- <div id="loader"></div> --}}

    <header class="main-header">
        <div class="d-flex align-items-center logo-box justify-content-start" style="background-color:#187a56">	
            <!-- Logo -->
            <a href="index.html" class="logo">
              <!-- logo-->
              <div class="logo-mini w-40">
                  {{-- <span class="light-logo"><img src="/html/images/logo-letter.png" alt="logo"></span>
                  <span class="dark-logo"><img src="/html/images/logo-letter-white.png" alt="logo"></span> --}}
              </div>
              <div class="logo-lg">
                  {{-- <span class="light-logo"><img src="/html/images/logo-dark-text.png" alt="logo"></span>
                  <span class="dark-logo"><img src="/html/images/logo-light-text.png" alt="logo"></span> --}}
				  {{-- <span class="light-logo" style="color:#000">Eko Carbon</span> --}}
				  <img src="{{ asset('logo/logo_white.svg') }}" style="width: 200px;height:50px;" alt="logo">
              </div>
            </a>	
        </div>   
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <div class="app-menu">
            <ul class="header-megamenu nav">
                <li class="btn-group nav-item" style="display: none;">
                    <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
                        <i data-feather="menu"></i>
                    </a>
                </li>
                
            </ul> 
          </div>
            
          <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">
                <li class="btn-group d-md-inline-flex d-none">
                              <label class="switch">
                                  <span class="waves-effect skin-toggle waves-light">
                                        <input type="checkbox" data-mainsidebarskin="toggle" id="toggle_left_sidebar_skin">
                                        <span class="switch-on"><i data-feather="moon"></i></span>
                                        <span class="switch-off"><i data-feather="sun"></i></span>
                                    </span>
                                </label>
                </li>
               
                
                
                
                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow" title="User" data-bs-toggle="modal" data-bs-target="#quick_user_toggle">
						<?php
						$theimage = App\Models\KYC::where('user_id','=',$user->id)->first();
	
						 ?>
	
	                         <img src="/ava.png" class="avatar rounded bg-primary-light" alt="avatar" />
						 
						
					</a>
                </li>

				
                
            </ul>
          </div>
        </nav>
      </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="overflow:unset">
	  <div class="container">
		<!-- Content Header (Page header) -->
			  

		<!-- Main content -->
		<section class="content">
		
          
        <div class="row">
            
            <div class="col-lg-12">
                
                <h3 id="bravov">Congratulations</h3>
               {{-- <p id="bravo1">We need these information to successfully profile your account</p> --}}
                
            </div>
            
        </div>
		 <!-- Step wizard -->

        
		 <div class="html-content">
         
		  <div class="box" style="width: 800px;">
			<div class="box-header with-border">
			  <div class="container">
				 <div class="row">
					<p><img style="width:200px;height:50px" src="{{ asset('logo/eko.png') }}" alt=""></p>
					<p style="direction: rtl;margin-top: -50px;font-weight: 500;">{{ $transaction->cert_id }}</p>
				 </div>

				 <div class="row">
					<p style="text-align: center;
					font-size: 15px;
					margin-top: 12px;">PRE-ASSESSMENT ANALYSIS INVOICE</p>
					 <span style="background-color: #187a56;
					 height: 2px;
					 width: 90px;
					 margin-left: 335px;margin-bottom: 60px;"></span>
				 </div>

				 <div class="row">
					<div class="col-md-12">
						<div class="card">
							
							<div class="card-body">
								<table class="table table-striped table-sm">
									{{-- <thead>
										<tr>
											<th>Total Emission</th>
											<th>{{ $total_mass_emission_avoidance->allemission_result }}</th>
											
											
										</tr>
									</thead> --}}
									<tbody>

										<tr>
											<td><b>Total Emission</b></td>
											<td><b>{{ $total_mass_emission_avoidance->allemission_result }}<b></td>
										</tr>
										
										
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				 </div>

				 <div class="row">

					<p style="text-align: center;margin-top: 20px;">This is to cerify that <b>{{ ucfirst($user->firstname) }}</b>&nbsp; <b>{{ ucfirst($user->lastname) }}</b> has offsetted a total of <b>{{ $total_mass_emission_avoidance->allemission_result }}</b> unit emissions
						on this day <b><?php echo date( "d F Y", strtotime($transaction->created_at)); ?></b>
					</p>
					
				 </div>

				 <div class="row">
					<p><img style="    height: 150px;
						float: right;
						margin-top: 20px;
						margin-bottom: 20px;" src="{{ asset('logo/Approved_stamp.png') }}" alt=""></p>
					
				 </div>

				 
			  </div>
			  {{-- <h6 class="box-subtitle">You can find the <a href="http://www.jquery-steps.com/" class="text-primary" target="_blank">offical website </a></h6>		 --}}
			</div>
			
			<!-- /.box-body -->
		  </div>

		</div>  
		<div class="row">
			<div class="col-md-4">

				
				<a id="rapdownn" href="{{ route('preassessment') }}" class="btn btn-primary">Back</a>
				
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4">
			
				{{-- <a id="rapdown" href="#" class="btn btn-primary">Download</a> --}}
				<button id="rapdown" class="btn btn-primary" onclick="CreatePDFfromHTML()">Download</button>
			</div>
			
			
		 </div>

		  <!-- /.box -->

		  
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  
   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        {{-- <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="#" target="_blank">Purchase Now</a>
		  </li>
		</ul> --}}
    </div>
	  &copy; <script>document.write(new Date().getFullYear())</script>  All Rights Reserved.
  </footer>
  <!-- Side panel --> 
  <!-- quick_user_toggle -->
  <div class="modal modal-right fade" id="quick_user_toggle" tabindex="-1">
	<div class="modal-dialog">
	  <div class="modal-content slim-scroll3">
		<div class="modal-body p-30 bg-white">
		  <div class="d-flex align-items-center justify-content-between pb-30">
			  <h4 class="m-0">Profile
			  {{-- <small class="text-fade fs-12 ms-5">12 messages</small> --}}
		  
			   </h4>
			  <a href="#" class="btn btn-icon btn-primary-light btn-sm no-shadow" data-bs-dismiss="modal">
				  {{-- <span class="fa fa-close"></span> --}}
				  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
					  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
					</svg>
			  </a>
		  </div>
		  <div>
			  <div class="d-flex flex-row">
				<?php
				$theimagee = App\Models\KYC::where('user_id','=',$user->id)->first();

			  ?>
				@if(empty($theimagee->image))
				<div class=""><img src="/ava.png" alt="user" class="rounded bg-primary-light w-150" width="100"></div>
				
				@else
				<div class=""><img src="/{{ $theimagee->image }}" alt="user" class="rounded bg-primary-light w-150" width="100"></div>
				
				@endif
				  <div class="ps-20">
					  <h5 class="mb-0">{{ ucfirst($user->firstname) }}&nbsp;{{ ucfirst($user->lastname) }}</h5>
					  <p class="my-5 text-fade">{{ ucfirst($user->role) }}</p>
					  <a style="
					  margin-left: -3px;
				  " href="#"><span class="icon-Mail-notification me-5 text-primary"style="
						font-size: 18px;
					"></span>{{ $user->email }}</a>
					  {{-- <button class="btn btn-primary-light btn-sm mt-5"><i class="ti-plus"></i> Follow</button> --}}
				  </div>
			  </div>
		  </div>
			<div class="dropdown-divider my-30"></div>
			<div>
			  <div class="d-flex align-items-center mb-30">
				  <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
						<span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
				  </div>
				  <div class="d-flex flex-column fw-500">
					  <a href="{{ route('profile') }}" class="text-dark hover-primary mb-1 fs-16">My Profile</a>
					  {{-- <span class="text-fade">Account settings and more</span> --}}
				  </div>
			  </div>
			  <div class="d-flex align-items-center mb-30">
				  <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
					  {{-- <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span> --}}
					  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
						<path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
					  </svg>
				  </div>
				  <div class="d-flex flex-column fw-500">
					  <a href="{{ route('logout') }}" class="text-dark hover-primary mb-1 fs-16">Logout</a>
					  
				  </div>
			  </div>
			  
			</div>
			<div class="dropdown-divider my-30"></div>
			<div>
			  
		  </div>
		</div>
	  </div>
	</div>
</div>
  
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
	
	
</div>
<!-- ./wrapper -->
	
	
	
	
	
	<!-- Page Content overlay -->
	<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>	
	<!-- Vendor JS -->
	<script src="{{ asset('/html/template/vertical-light/src/js/vendors.min.js') }}"></script>
	<script src="{{ asset('/html/template/vertical-light/src/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('/html/assets/icons/feather-icons/feather.min.js') }}"></script>	
    <script src="{{ asset('/html/assets/vendor_components/jquery-steps-master/build/jquery.steps.js') }}"></script>
    <script src="{{ asset('/html/assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/html/assets/vendor_components/sweetalert/sweetalert.min.js') }}"></script>
	
	<!-- InvestX App -->
	<script src="{{ asset('/html/template/vertical-light/src/js/demo.js') }}"></script>
	<script src="{{ asset('/html/template/vertical-light/src/js/template.js') }}"></script>
	
    {{-- <script src="{{ asset('/html/template/vertical-light/src/js/pages/steps.js') }}"></script> --}}
	<script src="sweetalert2/dist/sweetalert2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
	


	<script>
        
        //Create PDf from HTML...
function CreatePDFfromHTML() {
    
	var HTML_Width = $(".html-content").width();
    var HTML_Height = $(".html-content").height();
    var top_left_margin = 15;
    var PDF_Width = HTML_Width ;
    var PDF_Height = (PDF_Width * 1.2) ;
    var canvas_image_width = HTML_Width;
    var canvas_image_height = HTML_Height;

    var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

    html2canvas($(".html-content")[0]).then(function (canvas) {
        var imgData = canvas.toDataURL("image/jpeg", 1.0);
        var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
        pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
        for (var i = 1; i <= totalPDFPages; i++) { 
            pdf.addPage(PDF_Width, PDF_Height);
            pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
        }
        pdf.save("Preasssement_certificate.pdf");
        // $(".html-content").hide();
    });
	
}
          
      </script>


</body>


</html>
