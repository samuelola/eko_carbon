<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="#">

    <title>Eko Carbon | Trial</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('/htmly/template/vertical-light/src/css/vendors_css.css') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('/htmly/template/vertical-light/src/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('/htmly/template/vertical-light/src/css/skin_color.css') }}">
  <link rel="stylesheet" href="{{ asset('file.css') }}">  
  <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
  <link rel="stylesheet" href="{{ asset('animate.css') }}">
  <link rel="stylesheet" href="{{ asset('thestyle.css') }}">

<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('eko/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('eko/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('eko/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('eko/site.webmanifest') }}">
<link rel="mask-icon" href="{{ asset('eko/safari-pinned-tab.svg') }}" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<style>

	
.tooltip {
  position: relative;
  display: inline-block;
  opacity: 1
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  /* bottom: 150%; */
  top:-90px;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
  font-size: 10px;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}


.box {
    position: relative;
    margin-bottom: 1.5rem;
    width: 100%;
    background-color: #fff;
    border-radius: 5px;
    padding: 0px;
    -webkit-transition: .5s;
    transition: .5s;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-shadow: 0 0 35px 0 rgb(154 161 171 / 15%);
    box-shadow: 0 0 35px 0 rgb(154 161 171 / 15%);
}

input:focus{
  background-color: transparent !important;
  border-color: #c3c9cd !important;
}


#mybutton{

  background-color:#187a56;
  color:#fff;

}

#mybutton:hover{

background-color:#187a56 !important;
color:#fff !important;

}


/* .badge {
    display: inline-block;
    padding: 0.35em 0.65em;
    font-size: 0.75em;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
    background: #e61212;
    text-decoration: none;
} */


</style>

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
                
                
            </ul>
          </div>
        </nav>
      </header>
  
      <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar position-relative"> 
              <div class="multinav">
              <div class="multinav-scroll" style="height: 97%;">	
                  <!-- sidebar menu-->
                  <ul class="sidebar-menu" data-widget="tree">
                      
                    
                    
                    <li>
                        <a class="{{ (request()->routeIs('householddashboard')) ? 'myactive' : '' }}" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                          <span>Dashboard</span>
                        </a>
                    </li>
    
                    <li>
                        <a class="{{ (request()->routeIs('carbonemmission')) ? 'myactive' : '' }}" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                          <span>Carbon Emission</span>
                        </a>
                    </li>
    
                    <li>
                        <a class="{{ (request()->routeIs('marketplace')) ? 'myactive' : '' }}" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                          <span>Market Place</span>
                        </a>
                    </li>
    
                    <li>
                        <a class="{{ (request()->routeIs('householdmyaccount')) ? 'myactive' : '' }}" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                          <span>My Account</span>
                        </a>
                    </li>
    
                    
                  </ul>
                  
                  
              </div>
            </div>
        </section>
      </aside>
  <!-- Content Wrapper. Contains page content -->
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
								
								<option value="household">household</option>
								<option value="vehicle">vehicle</option>
								<option value="flight">flight</option>
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
	   <h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1"> Household</h5>
	   <p><span class="fs-12">Let us know more about your household emmissions </span></p>
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

								    
											<div class="box">
                                               
												<div class="box-body" style="padding-bottom: 20px !important;">
													<div id="myRadioGroup">
														<span>Householder</span><br>
											<span style="font-size:17px;"><b>calculator</b></span><br>
											<span style="color:#5f5d5d;font-size:11px;">Tell us about your household</span>

											<div class="form-group" style="margin-top: 20px;">
												<label for="username">I want to calculate for</label>
												<p style="display: flex;position: relative;
												left: -80px;">
													<input type="radio" name="cars" value="2" checked="checked"/><span style="margin-left: -50px;">Myself</span>
													<input type="radio" name="cars"  value="3"/><span style="margin-left: -50px;">Household</span>

													{{-- <input type="radio" name="cars" checked="checked" value="2"  />
												    <input type="radio" name="cars" value="3" /> --}}
												
												</p>
												
											</div>

											
														<form action="">
															<div id="Cars2" class="desc">
																
																{{-- <div class="form-group">
																	<label for="position">Email</label>
																	<input readonly type="email" name="position" value="xyz@gmail.com" id="calchildren" />
																	
																</div> --}}
																{{-- <div class="form-group">
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
																</div> --}}
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
																<div class="row">
																	<div class="col-md-8"></div>
																	<div class="col-md-4" style="padding-bottom: 12px;">
																	   <input type="submit" style="
																	   margin-left: -20px;"  class="btn btn-sm" value="Submit"/>
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

																{{-- <div class="form-group">
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
																</div> --}}

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

										 </div>		
									
									</div>

							   </div>
 
								<div class="col-md-7">
									<form>
										
										<div class="box">
											<div class="box-body" style="padding-bottom: 20px !important;">
												<span>Vehicle</span><br>
												<span style="font-size:17px;"><b>Cars</b></span><br>
												<span style="color:#ccc6c6;font-size:11px;">Tell us about your cars</span>

												  
							  <div class="form-group">
								<label for="email">How much distance does your vehicle cover?</label>
								<input type="number" name="distancecover" id="distancecover"  required/>
							  </div>
							  <div class="form-group">
								<label for="email">Type of Vehicle</label>

								<select class="form-select" name="" id="vehicleemissionfactor" style="font-size: 12px;" required>
									<option value="">--Select--</option>
									<option value="0.16">Car - Small petrol car: less than 1.4 litre engine</option>
									<option value="0.19">Car - Medium petrol car: from 1.4 - 2.1 litre engine</option>
									<option value="0.22">Car - Large petrol car: above 2.1 litre engine</option>
									<option value="0.16">Car - Small diesel car: less than 2.0 litre engine</option>
									<option value="0.19">Car - Large diesel car: 2.0 litre engine and over</option>
								</select>

								
								
							  </div>

							  
							  
							  
							  
							  {{-- <div class="row">
								<div class="col-md-8"></div>
								<div class="col-md-4" style="padding-bottom: 12px;">
								   <input type="submit" style="
								   margin-left: -20px;margin-top: 18px;"  class="btn btn-sm" value="Submit"/>
								</div>
						   </div> --}}


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
												<span>Travelling</span><br>
								<span style="font-size:17px;"><b>Flights</b></span><br>
								<span style="font-size:11px;">Tell us about your flight schedule</span>
								

							  

							  <div class="form-group">
								<label for="dob">Distance</label>
								<div class="row">
									<div class="col-md-12">
										<input type="number" name="flightdistance" id="flightdistance"  required/>
									</div>
									
								</div>
							  </div>
							  {{-- <div class="form-group">
								<label for="ID">How many short flights do you take?</label>
								<span style="font-size:11px;">Count any flights that are shorter than 3 hours i.e Lagos - Abuja</span>
								<select class="form-select" name="" id="shortflight" style="font-size: 12px;">
									<option value="">--Select--</option>
									<option value="None">None</option>
									<option value="4 Roundtrips">4 Roundtrips</option>
									<option value="12 Roundtrips">12 Roundtrips</option>
									<option value="Custom">Custom</option>
								</select>
							  </div> --}}

							  <div class="form-group">
								
								<label for="email">Trip Type</label>
								<p style="display: flex;">
									<input style="width: 10% !important;" type="radio" name="onewayg" id="oneway" value="1" /><span >One Way</span>
									<input style="width: 10% !important;" type="radio" name="onewayg" id="return" value="2"/><span >Return</span>
									
								
								</p>
							  </div>


							  <div class="form-group">
								<label for="dob">Type of flight</label>
								<div class="row">
									<div class="col-md-12">
										<select class="form-select" name="" id="fromdestination" style="font-size: 12px;">
											<option value="">--Select--</option>
											<option value="0.55">Lagos to London</option>
											<option value="0.5951">Lagos to Abuja</option>
											<option value="0.5016">Lagos to Portharcout</option>
											<option value="0.3784">Lagos to Sokoto</option>
											<option value="0.6204">Lagos to Kaduna</option>
											<option value="0.07">Lagos to Enugu</option>
											
											
										</select>
									</div>
									
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
									
									
									<a class="btn btn-primary" href="{{ route('signin') }}">Generate Report</a>
									
									
									
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
  <!-- /.content-wrapper -->
	
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a href="#"></a>
		  </li>
		</ul>
    </div>
	  &copy; <?php echo Date('Y') ?>. All Rights Reserved.
  </footer>

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
				<img src="/htmly/images/avatar/1.jpg" alt="...">
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
				<img src="/htmly/images/avatar/2.jpg" alt="...">
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
				<img src="/htmly/images/avatar/3.jpg" alt="...">
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
				<img src="/htmly/images/avatar/4.jpg" alt="...">
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
				<img src="/htmly/images/avatar/1.jpg" alt="...">
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
				<img src="/htmly/images/avatar/2.jpg" alt="...">
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
				<img src="/htmly/images/avatar/3.jpg" alt="...">
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
				<img src="/htmly/images/avatar/4.jpg" alt="...">
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
<!-- ./wrapper -->
	
	
		
	
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	


  <!-- Side panel -->   
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="{{ asset('/htmly/template/vertical-light/src/js/vendors.min.js') }}"></script>
	<script src="{{ asset('/htmly/template/vertical-light/src/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('/htmly/assets/icons/feather-icons/feather.min.js') }}"></script>
		
	<script src="{{ asset('/htmly/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
	
	<script src="{{ asset('/htmly/template/vertical-light/src/js/vendors.min.js') }}"></script>
	<script src="{{ asset('/htmly/template/vertical-light/src/js/pages/chat-popup.js') }}"></script>
  <script src="{{ asset('/htmly/assets/icons/feather-icons/feather.min.js') }}"></script>	
  <script src="{{ asset('/htmly/assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('/htmly/assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}"></script>

	<script src="{{ asset('/htmly/template/vertical-light/src/js/demo.js') }}"></script>
	<script src="{{ asset('/htmly/template/vertical-light/src/js/template.js') }}"></script>
	<script src="{{ asset('/htmly/template/vertical-light/src/js/pages/dashboard.js') }}"></script>

  <script src="sweetalert2/dist/sweetalert2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('wow.js') }}"></script>
  <script src="{{ asset('thestyle.js') }}"></script>
  <script>
  new WOW().init();
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

			var result =  distance*vehicleemissionfactor;
            var total = Math.round(result);

			alert("Your carbon emission for travelling is  "+total+ " Tonnes");

			

			location.reload();
           
        })
    });
	
</script>


<script>
	$(document).ready(function () {
        $("#fromdestination").on('change',function(){
          
			var flightdistance = $('#flightdistance').val();

			var flightemissionfactor = $('#fromdestination').val();

			// var oneway = $('#oneway').val();

			var oneway = $('input[name="onewayg"]:checked').val();

			var result =  flightdistance*flightemissionfactor;
            var total = Math.round(result);

			alert("Your carbon emission for Flight is   "+total+ " Tonnes");

			

			location.reload();

           
        });
    });
	
</script>

</body>


</html>





  
 
