
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Eko Carbon | Trialversion </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('/html/template/vertical-light/src/css/vendors_css.css') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('/html/template/vertical-light/src/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('/html/template/vertical-light/src/css/skin_color.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/fontawesome.min') }}" />
	<link rel="stylesheet" href="{{ asset('fontawesome/css/fontawesome.min') }}" />
	<link rel="stylesheet" href="{{ asset('listing.css') }}" />
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('eko/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('eko/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('eko/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('eko/site.webmanifest') }}">
<link rel="mask-icon" href="{{ asset('eko/safari-pinned-tab.svg') }}" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
</head>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
	{{-- <div id="loader"></div> --}}

  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start" style="background-color:#187a56">	
		<!-- Logo -->
		<a href="#" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-40">
			  {{-- <span class="light-logo"><img src="/html/images/logo-letter.png" alt="logo"></span>
			  <span class="dark-logo"><img src="/html/images/logo-letter-white.png" alt="logo"></span> --}}
		  </div>
		  <div class="logo-lg">
			{{-- <span class="light-logo" style="color:#000">Eko Carbon</span> --}}
			<img src="{{ asset('logo/logo_white.svg') }}" style="width: 200px;height:50px;" alt="logo">
			  {{-- <span class="light-logo"><img src="/html/images/logo-dark-text.png" alt="logo"></span>
			  <span class="dark-logo"><img src="/html/images/logo-light-text.png" alt="logo"></span> --}}
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
			
			
			
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
 
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="overflow:unset">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					{{-- <h4 class="page-title">Blank page</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Sample Page</li>
								<li class="breadcrumb-item active" aria-current="page">Blank page</li>
							</ol>
						</nav>
					</div> --}}
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content" style="margin-left:-250px;">
        

            <div class="row">
                 <div class="col-12">
                   <h4 class="header-title" style="text-align: center;">Pre-Assessment Calculator</h4>
                   <p style="text-align: center;">Get an overview of a pre-assessment calculator</p>
   
                     <div class="row" style="
                     margin-top: 50px;
                 ">
                       <div class="col-md-2"></div>
                       <div class="col-md-8">
                           <div class="card">
                               <div class="card-body">
                                 
                                 <div class="col-md-12">
                                     <div class="row">
         
                                      
         
                                           <div class="mb-3">
                                             <label for="username" class="form-label" style="color:#000">I would like to pre-assess this project</label>
                                               <select class="form-select" style="margin-bottom: 30px;" id="name">
                                                 {{-- <option>--Select-- </option> --}}
                                                 <option value="Recycle">Recycle Materials</option>
                                                 <option value="Photovolatic">Energy Photovolatic / Mini-grid</option>
                                                 <option value="Stove">Energy Efficient Clean Cook Stove</option>
                                               </select>
                                           </div>
   
                                           <div id="Recycle" class="Recycle boxr">
                                               <form id="form11" class="ps-3 pe-3" action="#">
                                                   
                                                   <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}">
                                                   <input type="hidden" value="1" id="user_id" name="user_id">
                                                   <div class="row">
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Books(kg)</label>
                                                               <input type="number" class="form-control" id="books" name="books"> 
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Cardboards(kg)</label>
                                                               <input type="number" class="form-control" id="cardboards" name="cardboards"> 
                                                           </div>
                                                       </div>
                                                   </div>
           
                                                   <div class="row">
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Magazines(kg)</label>
                                                               <input type="number" class="form-control" id="magazines" name="magazines"> 
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Mixed Paper(kg)</label>
                                                               <input type="number" class="form-control" id="mixedpaper" name="mixedpaper"> 
                                                           </div>
                                                       </div>
                                                   </div>
           
                                                   <div class="row">
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Newspapers(kg)</label>
                                                               <input type="number" class="form-control" id="newspapers" name="newspapers"> 
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Plastics Pets(kg)</label>
                                                               <input type="number" class="form-control" id="plasticspets" name="plasticspets"> 
                                                           </div>
                                                       </div>
                                                   </div>
           
                                                   <div class="row">
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Plastics HDPE(kg)</label>
                                                               <input type="number" class="form-control" id="plasticshdpe" name="plasticshdpe"> 
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Plastics LDPE(kg)</label>
                                                               <input type="number" class="form-control" id="plasticsldpe" name="plasticsldpe"> 
                                                           </div>
                                                       </div>
                                                   </div>
           
                                                   <div class="row">
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">LDPE & CLDPE(kg)</label>
                                                               <input type="number" class="form-control" id="ldpecldpe" name="ldpecldpe"> 
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Plastics PVC(kg)</label>
                                                               <input type="number" class="form-control" id="plasticspvc" name="plasticspvc"> 
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Aluminium(kg)</label>
                                                               <input type="number" class="form-control" id="aluminium" name="aluminium"> 
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Brass(kg)</label>
                                                               <input type="number" class="form-control" id="brass" name="brass"> 
                                                           </div>
                                                       </div>
                                                   </div>
           
                                                   <div class="row">
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Copper(kg)</label>
                                                               <input type="number" class="form-control" id="copper" name="copper"> 
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Glass(kg)</label>
                                                               <input type="number" class="form-control" id="glass" name="glass"> 
                                                           </div>
                                                       </div>
                                                   </div>
   
                                                   <div class="row">
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Lead(kg)</label>
                                                               <input type="number" class="form-control" id="lead" name="lead"> 
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Stainless Steel(kg)</label>
                                                               <input type="number" class="form-control" id="stainlesssteel" name="stainlesssteel"> 
                                                           </div>
                                                       </div>
                                                   </div>
   
                                                   <div class="row">
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Steel(kg)</label>
                                                               <input type="number" class="form-control" id="steel" name="steel"> 
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Zinc(kg)</label>
                                                               <input type="number" class="form-control" id="zinc" name="zinc"> 
                                                           </div>
                                                       </div>
                                                   </div>
   
                                                   <div class="row">
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Mixed Metals(kg)</label>
                                                               <input type="number" class="form-control" id="mixedmetals" name="mixedmetals"> 
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Mixed Construction Metals(kg)</label>
                                                               <input type="number" class="form-control" id="mixedconstructionmetals" name="mixedconstructionmetals"> 
                                                           </div>
                                                       </div>
                                                   </div>
           
                                                   {{-- <div class="mb-3" style="padding-bottom: 30px;">
                                                     <label for="emailaddress" class="form-label" style="color:#000">Mixed Recycling</label>
                                                     <input class="form-control" type="number" id="mixedrecycling" name="mixedrecycling">
                                                   </div> --}}
           
                                                   <div class="mb-3" style="float: right">
                                                       <button type="button" onclick="myFunction1()" class="btn btn-secondary-light" style="border: 1px solid #000;">Cancel</button>
                                                       {{-- <button type="submit" id="rrecycle" class="btn btn-primary">submit</button> --}}
                                                       {{-- <button type="button" onclick="makePayment1()" class="btn btn-primary">Pay $50 to Calculate</button> --}}
                                                       {{-- <button type="button" id="offset" class="btn btn-primary">Offset</button> --}}
                                                       <button type="button" id="caloffset" class="btn btn-primary">Offset</button>
                                                     </div>
           
                                                   
           
                                                 </form> 
                                           </div> 
                                           <div id="Photovolatic" class="Photovolatic boxr">
   
                                               
                                               <form id="form22" class="ps-3 pe-3" action="#">
   
                                                   <div class="row" style="border-top: 1px solid #f3eeee;
                                                   padding-top: 25px;
                                                   padding-bottom: 25px;">
                                                   <p style="margin-left: 0px;"><b>Panel</b></p>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Watts</label>
                                                               <input type="text" class="form-control" id="phoneNumber1" placeholder="6437 Watts"> 
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Number</label>
                                                               <input type="number" class="form-control" id="phoneNumber1"> 
                                                           </div>
                                                       </div>
                                                   </div>
           
                                                   <div class="row" style="border-top: 1px solid #f3eeee;
                                                   padding-top: 25px;
                                                   padding-bottom: 25px;">
                                                       <p style="margin-left:0px;"><b>Battery</b></p>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Capacity</label>
                                                               <input type="text" class="form-control" id="phoneNumber1" placeholder="3.5V"> 
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">AH</label>
                                                               <input type="number" class="form-control" id="phoneNumber1"> 
                                                           </div>
                                                       </div>
                                                   </div>
           
                                                   <div class="row" style="border-top: 1px solid #f3eeee;
                                                   padding-top: 25px;
                                                   padding-bottom: 25px;">
                                                       <p style="margin-left: 0px;"><b>Cloud Cover</b></p>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Days</label>
                                                               <input type="number" class="form-control" id="phoneNumber1"> 
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Dropbox</label>
                                                               <input type="number" class="form-control" id="phoneNumber1"> 
                                                           </div>
                                                       </div>
                                                   </div>
           
                                                   <div class="row" style="border-top: 1px solid #f3eeee;
                                                   padding-top: 25px;
                                                   padding-bottom: 25px;">
                                                       <p style="margin-left: 0px;"><b>Inverter</b></p>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">KVA</label>
                                                               <input type="text" class="form-control" id="phoneNumber1" placeholder="4000KVA"> 
                                                           </div>
                                                       </div>
                                                       {{-- <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Plastics LDPE(kg)</label>
                                                               <input type="number" class="form-control" id="phoneNumber1"> 
                                                           </div>
                                                       </div> --}}
                                                   </div>
           
                                                   <div class="row" style="border-top: 1px solid #f3eeee;
                                                   padding-top: 25px;
                                                   padding-bottom: 25px;">
                                                       <p style="margin-left: 0px;"><b>HH Beneficiary</b></p>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Number(rank)</label>
                                                               <input type="number" class="form-control" id="phoneNumber1"> 
                                                           </div>
                                                       </div>
                                                       {{-- <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Plastics PVC(kg)</label>
                                                               <input type="number" class="form-control" id="phoneNumber1"> 
                                                           </div>
                                                       </div> --}}
                                                   </div>
                                                   <div class="row" style="border-top: 1px solid #f3eeee;
                                                   padding-top: 25px;
                                                   padding-bottom: 25px;">
                                                       <p style="margin-left: 0px;"><b>BAU Assessment</b></p>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Source of power</label>
                                                               <input type="number" class="form-control" id="phoneNumber1" placeholder="fossil"> 
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">HH Cover</label>
                                                               <input type="number" class="form-control" id="phoneNumber1" placeholder="Number"> 
                                                           </div>
                                                       </div>
                                                   </div>
           
                                                   <div class="row" style="padding-bottom: 50px;">
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Installation Emission</label>
                                                               <input type="number" class="form-control" id="phoneNumber1" placeholder="Tonnes"> 
                                                           </div>
                                                       </div>
                                                       
                                                   </div>
           
                                                 
           
                                                   <div class="mb-3" style="float: right;">
                                                       <button type="button" onclick="myFunction2()" class="btn btn-secondary-light" style="border: 1px solid #000;">Cancel</button>
                                                       <button type="button" onclick="makePayment()" class="btn btn-primary">Pay $50 to Calculate</button>
                                                       
                                                     </div>
           
                                                   
           
                                                 </form> 
                                           </div>
                                           <div id="Stove" class="Stove boxr">
                                               <form id="form33" class="ps-3 pe-3" action="#">
   
                                                   <div class="row" style="border-top: 1px solid #f3eeee;
                                                   padding-top: 25px;
                                                   padding-bottom: 25px;">
                                                   <p style="margin-left: 0px;"><b>Number of Stove</b></p>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Number</label>
                                                               <input type="text" class="form-control" id="phoneNumber1" placeholder="643"> 
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Briqqutte</label>
                                                               <input type="number" class="form-control" id="phoneNumber1" placeholder="427"> 
                                                           </div>
                                                       </div>
   
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Dunghorse</label>
                                                               <input type="text" class="form-control" id="phoneNumber1" placeholder="643"> 
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Risehusk</label>
                                                               <input type="number" class="form-control" id="phoneNumber1" placeholder="427"> 
                                                           </div>
                                                       </div>
                                                   </div>
           
                                                   <div class="row" style="border-top: 1px solid #f3eeee;
                                                   padding-top: 25px;
                                                   padding-bottom: 25px;">
                                                       <p style="margin-left:0px;"><b>Energy Source</b></p>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Dropbox</label>
                                                               <input type="text" class="form-control" id="phoneNumber1" placeholder="3.5V"> 
                                                           </div>
                                                       </div>
                                                       
                                                   </div>
           
                                                   <div class="row" style="border-top: 1px solid #f3eeee;
                                                   padding-top: 25px;
                                                   padding-bottom: 25px;">
                                                       <p style="margin-left: 0px;"><b>Number of HH</b></p>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Number</label>
                                                               <input type="number" class="form-control" id="phoneNumber1" placeholder="32"> 
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Dropbox</label>
                                                               <input type="number" class="form-control" id="phoneNumber1"> 
                                                           </div>
                                                       </div>
                                                   </div>
           
                                                   <div class="row" style="border-top: 1px solid #f3eeee;
                                                   padding-top: 25px;
                                                   padding-bottom: 25px;">
                                                       <p style="margin-left: 0px;"><b>Business as Usual</b></p>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label for="phoneNumber1" class="form-label" style="color:#000">Source of Energy</label>
                                                               {{-- <input type="text" class="form-control" id="phoneNumber1" placeholder="4000KVA">  --}}
                                                               
                                                               <select class="form-select">
                                                                   <option value="fuel">fuel</option>
                                                                 </select>
                                                           </div>
                                                       </div>
                                                      
                                                   </div>
                 
                                                   <div class="mb-3" style="float: right;">
                                                       <button type="button" onclick="myFunction3()" class="btn btn-secondary-light" style="border: 1px solid #000;">Cancel</button>
                                                       <button type="button" onclick="makePayment()" class="btn btn-primary">Pay $50 to Calculate</button>
                                                       
                                                     </div>
           
                                                   
           
                                                 </form>
                                           </div>   
                                 
   
                                           <script src="https://js.paystack.co/v1/inline.js"></script>                       
   {{-- <script src="https://checkout.flutterwave.com/v3.js"></script> --}}
                                     
                                     </div>
                                     
                                 </div>     
                               </div> <!-- end card-body -->
                           </div> <!-- end card-->
                       </div>
                       <div class="col-md-2"></div>
                     </div>
                     
                 </div> <!-- end col -->
   
                 
             </div>
             <!-- end row -->
   
   
             
             <!-- end row -->
             
         </section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->
 
   <footer class="main-footer">
    {{-- <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="#" target="_blank">Purchase Now</a>
		  </li>
		</ul>
    </div> --}}
	  &copy; <script>document.write(new Date().getFullYear())</script> All Rights Reserved.
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
		
			<div class="dropdown-divider my-30"></div>
			<div>
			  <div class="d-flex align-items-center mb-30">
				  <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
						<span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
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
  <!-- /quick_user_toggle --> 
	
  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger" data-toggle="control-sidebar"><i class="ion ion-close text-white" ></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" ><i class="mdi mdi-message-text"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Users</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="/html/images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="/html/images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="/html/images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="/html/images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>			
			
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="/html/images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="/html/images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="/html/images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="/html/images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>
			  
		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
	
	
</div>

	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
	<script src="{{ asset('/html/template/vertical-light/src/js/vendors.min.js') }}"></script>
	<script src="{{ asset('/html/template/vertical-light/src/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('/html/assets/icons/feather-icons/feather.min.js') }}"></script>	
	
	<!-- InvestX App -->
	<script src="{{ asset('/html/template/vertical-light/src/js/demo.js') }}"></script>
	<script src="{{ asset('/html/template/vertical-light/src/js/template.js') }}"></script>
	
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
    function myFunction1() {
     document.getElementById("form11").reset();
 }
 </script>


<script>
    // jQuery functions to hide and show the div
    $(document).ready(function () {
        $("#caloffset").on('click',function(){
            
            var books = $("#books").val();
            var cardboards = $("#cardboards").val();
            var magazines = $("#magazines").val();
            var mixedpaper = $("#mixedpaper").val();
            var newspapers = $("#newspapers").val();
            var plasticspets = $("#plasticspets").val();
            var plasticshdpe = $("#plasticshdpe").val();
            var plasticsldpe = $("#plasticsldpe").val();
            var ldpecldpe = $("#ldpecldpe").val();
            var plasticspvc = $("#plasticspvc").val();
            var glass = $("#glass").val();
            var aluminium = $("#aluminium").val();
            var brass = $("#brass").val();
            var copper = $("#copper").val();
            var lead = $("#lead").val();
            var stainlesssteel = $("#stainlesssteel").val();
            var steel = $("#steel").val();
            var zinc = $("#zinc").val();
            var mixedmetals = $("#mixedmetals").val();
            var mixedconstructionmetals = $("#mixedconstructionmetals").val();
            var user_id = $("#user_id").val();

            $.ajax({

                    type: "post",
                    url: '/trialpreassessment',
                    data: {
                        _token: $("#csrf").val(),
                        books:books,
                        cardboards:cardboards,
                        magazines:magazines,
                        mixedpaper:mixedpaper,
                        newspapers:newspapers,
                        plasticspets:plasticspets,
                        plasticshdpe:plasticshdpe,
                        plasticsldpe:plasticsldpe,
                        ldpecldpe:ldpecldpe,
                        plasticspvc:plasticspvc,
                        glass:glass,
                        aluminium:aluminium,
                        brass:brass,
                        copper:copper,
                        lead:lead,
                        stainlesssteel:stainlesssteel,
                        steel:steel,
                        zinc:zinc,
                        mixedmetals:mixedmetals,
                        mixedconstructionmetals:mixedconstructionmetals, 
                        user_id:user_id,
                    },

                    success: function(data){
                    console.log(data);

                    alert(data);
                       
                    // location.reload();
                    window.location = "/trialresult";

                    },error: function(data){
                    console.log(data); 
                    }

                    });
            
        })
    });
</script>

   
</body>


</html>
