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
            <a href="#" class="logo">
              <!-- logo-->
              <div class="logo-mini w-40">
                  {{-- <span class="light-logo"><img src="/html/images/logo-letter.png" alt="logo"></span>
                  <span class="dark-logo"><img src="/html/images/logo-letter-white.png" alt="logo"></span> --}}
              </div>
              <div class="logo-lg">
                  {{-- <span class="light-logo"><img src="/html/images/logo-dark-text.png" alt="logo"></span>
                  <span class="dark-logo"><img src="/html/images/logo-light-text.png" alt="logo"></span> --}}
				  {{-- <span class="light-logo" style="color:#000">Eko Carbon</span> --}}
				  <img src="{{ asset('logo/logo.png') }}" style="width: 200px;height:50px;" alt="logo">
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
                              {{-- <label class="switch">
                                  <span class="waves-effect skin-toggle waves-light">
                                        <input type="checkbox" data-mainsidebarskin="toggle" id="toggle_left_sidebar_skin">
                                        <span class="switch-on"><i data-feather="moon"></i></span>
                                        <span class="switch-off"><i data-feather="sun"></i></span>
                                    </span>
                                </label> --}}
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
                        <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="#" alt=""> English</a>
                        <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="#" alt=""> Spanish</a>
                        <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="#" alt=""> German</a>
                        <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="#" alt=""> Japanese</a>
                        <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="#" alt=""> French</a>
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
                
                <h3 id="bravo">Bravo on creating your account</h3>
               <p id="bravo1">We need these information to successfully profile your account</p>
                
            </div>
            
        </div>
		 <!-- Step wizard -->

         
         
		  <div class="box" id="theboxx">
			<div class="box-header with-border">
			  
			  {{-- <h6 class="box-subtitle">You can find the <a href="http://www.jquery-steps.com/" class="text-primary" target="_blank">offical website </a></h6>		 --}}
			</div>
			<!-- /.box-header -->
			<div class="box-body wizard-content">
				<form action="#" method="post" class="validation-wizard wizard-circle" enctype="multipart/form-data">

					<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

					<input type="hidden" value="{{ $user->id }}" id="user_id" name="user_id">
					<input type="hidden" value="1" id="status" name="status">
					<!-- Step 1 -->
					<h6>Bank Information</h6>

					<section>
                        <p style="font-style: italic;
                        text-align: center;
                        margin-top: 30px;margin-bottom:20px;"><b>Please provide your account information</b></p>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstName5" class="form-label">Country :</label>
									<select class="form-select  required" id="countryy" name="country" >
										<option value="">Select--</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antartica">Antarctica</option>
										<option value="Antigua and Barbuda">Antigua and Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
										<option value="Botswana">Botswana</option>
										<option value="Bouvet Island">Bouvet Island</option>
										<option value="Brazil">Brazil</option>
										<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
										<option value="Brunei Darussalam">Brunei Darussalam</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African Republic</option>
										<option value="Chad">Chad</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos Islands">Cocos (Keeling) Islands</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Congo">Congo, the Democratic Republic of the</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cota D'Ivoire">Cote d'Ivoire</option>
										<option value="Croatia">Croatia (Hrvatska)</option>
										<option value="Cuba">Cuba</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="East Timor">East Timor</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="France Metropolitan">France, Metropolitan</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="French Southern Territories">French Southern Territories</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guadeloupe">Guadeloupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea</option>
										<option value="Guinea-Bissau">Guinea-Bissau</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
										<option value="Holy See">Holy See (Vatican City State)</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Indonesia">Indonesia</option>
										<option value="Iran">Iran (Islamic Republic of)</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
										<option value="Korea">Korea, Republic of</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Lao">Lao People's Democratic Republic</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macau">Macau</option>
										<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malawi">Malawi</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Martinique">Martinique</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Micronesia">Micronesia, Federated States of</option>
										<option value="Moldova">Moldova, Republic of</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Myanmar">Myanmar</option>
										<option value="Namibia">Namibia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherlands">Netherlands</option>
										<option value="Netherlands Antilles">Netherlands Antilles</option>
										<option value="New Caledonia">New Caledonia</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Niue">Niue</option>
										<option value="Norfolk Island">Norfolk Island</option>
										<option value="Northern Mariana Islands">Northern Mariana Islands</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau">Palau</option>
										<option value="Panama">Panama</option>
										<option value="Papua New Guinea">Papua New Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Philippines">Philippines</option>
										<option value="Pitcairn">Pitcairn</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Reunion">Reunion</option>
										<option value="Romania">Romania</option>
										<option value="Russia">Russian Federation</option>
										<option value="Rwanda">Rwanda</option>
										<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
										<option value="Saint LUCIA">Saint LUCIA</option>
										<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
										<option value="Samoa">Samoa</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia">Slovakia (Slovak Republic)</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
										<option value="Span">Spain</option>
										<option value="SriLanka">Sri Lanka</option>
										<option value="St. Helena">St. Helena</option>
										<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syria">Syrian Arab Republic</option>
										<option value="Taiwan">Taiwan, Province of China</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania, United Republic of</option>
										<option value="Thailand">Thailand</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad and Tobago">Trinidad and Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks and Caicos">Turks and Caicos Islands</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Emirates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States">United States</option>
										<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
										<option value="Uruguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnam">Viet Nam</option>
										<option value="Virgin Islands (British)">Virgin Islands (British)</option>
										<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
										<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
										<option value="Western Sahara">Western Sahara</option>
										<option value="Yemen">Yemen</option>
										<option value="Serbia">Serbia</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select>
								</div>

								<div class="form-group">
									<label for="emailAddress1" class="form-label">Account Type :</label>
									<select class="form-select" id="account_type" name="account_type" required>
										<option value="">Select---</option>
										@foreach ($accounts as $acct)
										  <option value="{{ $acct->name }}">{{ $acct->name }}</option>
										@endforeach
									</select>
								</div>

								<div class="form-group">
									<label for="phoneNumber1" class="form-label">Account Number :</label>
									<input  id="mybank" type="number" class="form-control"  name="account_number" required> 
								</div>

								<div class="form-group">
									<label for="lastName1" class="form-label">Bank Name :</label>
									<select class="form-select" id="samt" name="bank_name" required>
										<option value="">Select---</option>
										@foreach ($banks as $bank)
										  <option  value="{{ $bank->code }}">{{ $bank->name }}</option>
										@endforeach
									</select>
								</div>
								
								
								
								
								<div class="form-group">
									<label for="addressline1" class="form-label">Account Name :</label>
									<input id="myacctname" type="text" class="form-control" name="account_name" readonly> 
									<span id="myloader" style="color: #187a56;
									display: flex;
									margin-top: -25px;float: right;
    margin-right: 12px;"><i class="fa fa-circle-o-notch fa-spin"></i></span>
								</div>
								
								
							</div>
							<div class="col-md-3"></div>
						</div>
						
						
					</section>
					<!-- Step 2 -->
					<h6>Business Information</h6>
					<section>
                        <p style="font-style: italic;
                        text-align: center;
                        margin-top: 30px;margin-bottom:20px;"><b>A few details about your company</b></p>
						<div class="row">
							<div class="col-md-3"></div>
                            <div class="col-md-6">
								<div class="form-group">
									<label for="url123" class="form-label">Business Name :</label>
									<input type="text" class="form-control" id="business_name"  name="business_name" required>
								</div>

								<div class="form-group">
									<label for="username123" class="form-label">Business Email :</label>
									<input type="email" class="form-control" id="business_email" name="business_email" required>
								</div>

								<div class="form-group">
									<label for="username123" class="form-label">Business Address :</label>
									<input type="text" class="form-control" id="business_address" name="business_address" required>
								</div>

								<div class="form-group">
									<label for="password123" class="form-label">Website :</label>
									<input type="text" class="form-control" id="website" placeholder="http://" name="website" required>
								</div>

								<div class="form-group">
									<label class="form-label">Industry :</label>
									<select class="form-select" id="industry" name="industry" required>
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
									<label class="form-label">Project Summary :</label>
									<div class="c-inputs-stacked">
										
										<textarea style="height: 91px;" class="form-control" name="summary" id="summary" cols="30" rows="10" required></textarea>
									</div>
								</div>
							</div>
							<div class="col-md-3"></div>
							

                            
							

                            
							
							
						</div>
					</section>
					<!-- Step 3 -->
					<h6>Business Representative Documentation</h6>
                    
					<section>
                        <p style="font-style: italic;
                        text-align: center;
                        margin-top: 30px;margin-bottom:20px;"><b>Onboard a management from your team</b></p>
                        <p style="text-align: center;margin-bottom:40px;">To Ensure we keep with regulatory
                           requirements,this stall needs to be 
                           activated by someone with significant 
                           management responsibility or control.
                        </p>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="int123" class="form-label">Project Scope :</label>
									<select class="form-select" id="project_scope" name="project_scope" required>
										<option value="">Select---</option>
										<option value="Municipal solid Waste">Municipal solid Waste</option>
										<option value="Agricultural Project">Agricultural Project</option>
										<option value="Afforestation & Reforestation">Afforestation & Reforestation</option>
                                        <option value="Water,Sanitation & Hygiene Project">Water,Sanitation & Hygiene Project</option>
                                        <option value="Construction Projects (CDMW)">Construction Projects (CDMW)</option>
                                        <option value="Renewable">Renewable</option>
									</select>
								</div>
								<div class="form-group">
									<label for="int234" class="form-label">Are you a business owner? :</label>
									<select class="form-select" id="business_owner" name="business_owner" required>
										<option value="">Select---</option>
										<option value="Yes">Yes</option>
										<option value="No">No</option>
										
									</select>
								</div>

								<div class="form-group">
									<label for="addressline12" class="form-label">Do you own more than 25%:</label>
									<select class="form-select" id="more" name="more" required>
										<option value="">Select---</option>
										<option value="Yes">Yes</option>
										<option value="No">No</option>
										
									</select>
								</div>

								<div class="form-group">
									<label for="addressline13" class="form-label">Full Name :</label>
									<input type="text" class="form-control" id="bus_fullname" name="bus_fullname" required>
								</div>

								<div class="form-group">
									<label for="addressline12" class="form-label">Email Address:</label>
									<input type="text" id="bus_email" class="form-control" name="bus_email" required>
								</div>

								<div class="form-group">
									<label for="addressline13" class="form-label">Phone Number :</label><br/>
									{{-- <input type="text" class="form-control" id="addressline13"> --}}
									<input id="phone"  class="form-control" type="tel" name="phone" required/>
								</div>

								<div class="form-group">
									<label for="addressline12" class="form-label">Country:</label>
									 <select class="form-control" name="bus_country" id="bus_country" required>
										<option selected disabled>Select Country</option>
                                        @foreach ($allcountry as $thecountry)
										<option value="{{ $thecountry->id }}">{{ $thecountry->name }}</option>
										@endforeach
									 </select>
								</div>

								<div class="form-group">
									<label for="addressline12" class="form-label">State:</label>
									 <select class="form-control" name="bus_state" id="bus_state" required>
										
									 </select>
								</div>

								<div class="form-group">
									<label for="addressline12" class="form-label">City:</label>
									 <select class="form-control" name="bus_city" id="bus_city" required>
										
									 </select>
								</div>

								{{-- <div class="form-group">
									<label for="addressline12" class="form-label">City:</label>
									<input type="text" class="form-control" id="addressline13">
								</div> --}}

								<div class="form-group">
									<label for="addressline13" class="form-label">Address :</label>
									<input type="text" class="form-control" id="address" name="address" required>
								</div>

								{{-- <div class="form-group">
									<label for="addressline12" class="form-label">Select ID Type:</label>
									<select class="form-select" id="identityy" name="identity">
										<option value="">Select---</option>
										<option value="Voters Card">Voters Card</option>
										<option value="NIN">NIN</option>
										<option value="No">No</option>
										
									</select>
								</div> --}}

								<div class="form-group">
									<label for="addressline12r" class="form-label">Select ID Type:</label>
									<select class="form-select" id="moreid" name="identity" required>
										<option value="">Select---</option>
										<option value="Voters Card">Voters Card</option>
										<option value="NIN">NIN</option>
										<option value="No">No</option>
										
									</select>
								</div>

								<label for="addressline12" class="form-label">Upload:</label>
								<div class='file file--success'>
									<label for='input-file'>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
								<path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
							  </svg> &nbsp; <span>Click to upload</span>
									</label>
									<input id='input-file' type='file' name="image" required/>

									<span id="mech" style="margin-left: 118px;"><!-- Selected file will get here --></span>
								  </div>

								  {{-- <div class="form-group">
									<label for="addressline12" class="form-label">Password:</label>
									<input type="password" class="form-control" id="addressline13">
								</div>

								<div class="form-group">
									<label for="addressline13" class="form-label">Confirm Password :</label>
									<input type="password" class="form-control" id="addressline13">
								</div> --}}
							</div>
							
							<div class="col-md-3"></div>
                           

                            
                           
						</div>
					</section>
					<!-- Step 4 -->
					{{-- <h6>Confirmation</h6>
					<section>
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="decisions1" class="form-label">Comments</label>
									<textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<div class="c-inputs-stacked">
										<input type="checkbox" id="checkbox_1">
										<label for="checkbox_1" class="d-block">Click here to indicate that you have read and agree to the terms presented in the Terms and Conditions agreement</label>
									</div>
								</div>
							</div>
						</div>
					</section> --}}
				</form>
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		  

		  <!-- vertical wizard -->
		  
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
				<?php 

				$thestatus = App\Models\User::where('id','=',Auth::user()->id)->first();

				if($thestatus->kyc_status == 0){

				}else{

				  ?>

<div class="d-flex align-items-center mb-30">
	<div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
		  <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
	</div>
	<div class="d-flex flex-column fw-500">
	  
		<a href="{{ route('profile') }}" class="text-dark hover-primary mb-1 fs-16">My Profile</a>
		{{-- <span class="text-fade">Account settings and more</span> --}}
	</div>
</div>
				  
				 
				 <?php

				}


				?>	
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
			  {{-- <div class="d-flex align-items-center mb-30">
				  <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
					  <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
				  </div>
				  <div class="d-flex flex-column fw-500">
					  <a href="setting.html" class="text-dark hover-primary mb-1 fs-16">Settings</a>
					  <span class="text-fade">Accout Settings</span>
				  </div>
			  </div> --}}
			  {{-- <div class="d-flex align-items-center mb-30">
				  <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
					  <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
				  </div>
				  <div class="d-flex flex-column fw-500">
					  <a href="extra_taskboard.html" class="text-dark hover-primary mb-1 fs-16">Project</a>
					  <span class="text-fade">latest tasks and projects</span>
				  </div>
			  </div> --}}
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
				<img src="../../../images/avatar/1.jpg" alt="...">
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
				<img src="../../../images/avatar/2.jpg" alt="...">
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
				<img src="../../../images/avatar/3.jpg" alt="...">
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
				<img src="../../../images/avatar/4.jpg" alt="...">
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
				<img src="../../../images/avatar/1.jpg" alt="...">
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
				<img src="../../../images/avatar/2.jpg" alt="...">
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
				<img src="../../../images/avatar/3.jpg" alt="...">
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
				<img src="../../../images/avatar/4.jpg" alt="...">
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
	<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
	
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
	$(document).ready(function (e) {

$( "#myloader" ).hide();

$('#samt').on('change', function () {
                var bank_code  = this.value;

				var samacct = $('#mybank').val();


// var url = "https://maylancer.org/api/nuban/api.php?account_number="+samacct+"&bank_code="+bank_code
// $.ajax({
// 	url: url,
// 	type: "GET",
	
// 	dataType: "json",
// 	success: function (res) {
	    

// 		var myacctname = res.account_name

// 		$('#myacctname').val(myacctname);

// 	}
// });

          $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

$.ajax({
	type: "post",
	url: '/verifybank',
	dataType: 'json',
	contentType: 'application/x-www-form-urlencoded',
	data: {
		_token : $("#csrf").val(),
		samacct:samacct,
		bank_code:bank_code
		
	},
	success: function (res) {
		var myacctname = res.data.account_name
		$('#myacctname').val(myacctname);

	}
});


$( "#myloader" ).show();
setTimeout(removeLoader, 2700);     
            });



   });



</script>


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



<script>
	var form = $(".validation-wizard").show();

$(".validation-wizard").steps({
    headerTag: "h6"
    , bodyTag: "section"
    , transitionEffect: "none"
    , titleTemplate: '<span class="step">#index#</span> #title#'
    , labels: {
        finish: "Submit"
    }
    , onStepChanging: function (event, currentIndex, newIndex) {
        return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
    }
    , onFinishing: function (event, currentIndex) {
        return form.validate().settings.ignore = ":disabled", form.valid()
    }
    , onFinished: function (event, currentIndex) {
       
		
		var country = $('#countryy').val();
		var token = $('#token').val();
		var user_id = $('#user_id').val();
		var status = $('#status').val();
		var account_type = $('#account_type').val();
		var mybank = $('#mybank').val();
		var samt = $('#samt').val();
		var myacctname = $('#myacctname').val();
		var business_name = $('#business_name').val();
		var business_email = $('#business_email').val();
		var business_address = $('#business_address').val();
		var website = $('#website').val();
		var industry = $('#industry').val();
		var summary = $('#summary').val();
		var project_scope = $('#project_scope').val();
		var business_owner = $('#business_owner').val();
		var more = $('#more').val();
		var bus_fullname = $('#bus_fullname').val();
		var bus_email = $('#bus_email').val();
		var phone = $('#phone').val();
		var bus_country = $('#bus_country').val();
		var bus_state = $('#bus_state').val();
		var bus_city = $('#bus_city').val();
		var address = $('#address').val();
		var identityy = $('#moreid').val();
		var input_file = $('#input-file').val();
		
       

		var formData = new FormData(this);
		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

			$.ajax({
                type: "POST",
                url: "/savekyc",
				data: formData,
                        contentType: false,
						cache: false,
				processData:false,
                success: function (data) {
                    
					
					console.log(data);

	                Swal.fire(data, data.message, 'success').then(() => {
    // location.reload();
	window.location.href = "/dashboard";

});
                    
                },
                error: function(data){
                    console.log(data);
                    
                }
            });		


    }
}), $(".validation-wizard").validate({
    ignore: "input[type=hidden]"
    , errorClass: "text-danger"
    , successClass: "text-success"
    , highlight: function (element, errorClass) {
        $(element).removeClass(errorClass)
    }
    , unhighlight: function (element, errorClass) {
        $(element).removeClass(errorClass)
    }
    , errorPlacement: function (error, element) {
        error.insertAfter(element)
    }
    , rules: {
        email: {
            email: !0
        }
    }
})
</script>


<script>
	const phoneInputField = document.querySelector("#phone");
	const phoneInput = window.intlTelInput(phoneInputField, {
	  utilsScript:
		"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
	});
  </script>


<script>

function removeLoader(){
    $( "#myloader" ).fadeOut(500, function() {
      // fadeOut complete. Remove the loading div
      $( "#myloader" ).remove(); //makes page more lightweight 
  });  
}
</script>

<script>
	$(document).ready(function() {
		$('#input-file').change(function(e) {
			var geekss = e.target.files[0].name;
			$("#mech").text(geekss + ' is the selected file.');
			// $("#mee").text(geekss);
  
		});
	});
  </script


</body>


</html>
