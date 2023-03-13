<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative"> 
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 97%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">
			  	{{-- <li class="treeview">
				  <a href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
					<span>Dashboard</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
						<li>
							<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 1</a></li>
							<li><a href="index2.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 2</a></li>
							<li><a href="index3.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 3</a></li>
							<li><a href="index4.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 4</a></li>
							<li><a href="index5.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 5</a></li>
							<li><a href="index6.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 6</a></li>
							<li><a href="index7.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 7</a></li>
						</li>	
				  </ul>
				</li>
								 --}}

				<li>
				<?php

					$busname = App\Models\KYC::where('user_id','=',Auth::user()->id)->first();

					?> 
					  <?php  

                          if(isset($busname->business_name)){

							?>
							  <a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
							{{-- <span style="white-space: pre-line"> --}}
	
							<span>
							 <?php echo $busname->business_name ?>
							
							</span>
							
							</a>
							
							<?php

						  }else{



						  }

                       ?>
						


						<?php
				
				?>
				
				</li>					 
				<li>
				  <?php

                    $check = App\Models\User::where('id','=',Auth::user()->id)->first();

					if($check->kyc_status == 0){

					}else{

						?> 
						<a class="{{ (request()->routeIs('dashboard')) ? 'myactive' : '' }}" href="{{ route('dashboard') }}">
					     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
					     <span>Dashboard</span>
				        </a>
						<?php

					}
				  
				  ?>
				 
				</li>
				<li>
					<a class="{{ (request()->routeIs('profile')) ? 'myactive' : '' }}" href="{{ route('profile') }}">
					  <i data-feather="user"></i>
					  <span>Profile</span>
					</a>
				</li>
				{{-- <li>
					<a href="{{ route('offsetbids') }}">
					  <i data-feather="user"></i>
					  <span>Offset Bids</span>
					</a>
				</li>  --}}
				<li>
				  <a class="{{ (request()->routeIs('preassessment')) ? 'myactive' : '' }}" href="{{ route('preassessment') }}">
					

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1"  class="bi bi-percent">
                        <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        
                      </svg>
					<span>Pre-Assessment</span>
				  </a>
				</li>

                <li class="treeview">
				  <a href="#">
					
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
					<span>Projects</span>
					<span class="pull-right-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                          </svg>

						  
					</span>
				  </a>
				  <ul class="treeview-menu">
					    {{-- <li>
							<a class="{{ (request()->routeIs('projectoverview')) ? 'myactive' : '' }}" href="{{ route('projectoverview') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Overview</a>
						</li> --}}
						<li>
							<a class="{{ (request()->routeIs('offsetbids')) ? 'myactive' : '' }}" href="{{ route('offsetbids') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Offset Bids</a>
						</li>

						<li>
							<a class="{{ (request()->routeIs('progresslog')) ? 'myactive' : '' }}" href="{{ route('progresslog') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Progress Log</a>
						</li>
						<li>

							<?php
							$allprojects = App\Models\Project::where('user_id','=',Auth::user()->id)->orderBy('id','DESC')->take(3)->get();

							  foreach($allprojects as $value){

								?>
								  <li><a class="{{ (request()->routeIs('previewproject')) ? 'myactive' : '' }}" href="{{route('previewproject',$value->id) }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>{{ ucfirst($value->project_name) }}</a></li>
								<?php

							  }
							?>
							{{-- <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Eko Farma</a></li>
							<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>I-Meet</a></li>
							<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Wellness Plus</a></li> --}}

							<?php

									$check = App\Models\User::where('id','=',Auth::user()->id)->first();

									if($check->kyc_status == 0){

									}else{

										?> 
										<li><a href="#" data-bs-toggle="modal" data-bs-target="#scrollable-modalj"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Project</a></li>
										<?php

									}
								
							?>

							
						</li>	
				  </ul>
				</li>				
				
				<li>

					<?php

                    $check = App\Models\User::where('id','=',Auth::user()->id)->first();

					if($check->kyc_status == 0){

					}else{

						?> 
						<a class="{{ (request()->routeIs('archive')) ? 'myactive' : '' }}" href="{{ route('archive') }}">
							<i data-feather="archive"></i>
							<span>Archive</span>
						  </a>
						<?php

					}
				  
				  ?>
				  
				</li>

                <li>
                    <a href="{{ route('logout') }}">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                          </svg> --}}

                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="0.6"  class="bi bi-box-arrow-right">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                            
                          </svg>
                      <span>Logout</span>
                    </a>
                  </li>
				
			  </ul>
			  
			  
		  </div>
		</div>
    </section>
  </aside>