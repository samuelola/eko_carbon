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
			<li class="dropdown user user-menu">
				<a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow" title="User" data-bs-toggle="modal" data-bs-target="#quick_user_toggle">
					<?php
					$theimage = App\Models\KYC::where('user_id','=',Auth::user()->id)->first();

					 ?>

                     <img src="/ava.png" class="avatar rounded bg-primary-light" alt="avatar" />
					 
					
				</a>
			</li>
			
        </ul>
      </div>
    </nav>
  </header>