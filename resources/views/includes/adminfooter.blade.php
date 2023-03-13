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
            <div>
                <div class="d-flex flex-row">
                    <?php
					$theimagee = App\Models\KYC::where('user_id','=',Auth::user()->id)->first();

				  ?>
				    <div class=""><img src="/ava.png" alt="user" class="rounded bg-primary-light w-150" width="100"></div>
                    <div class="ps-20">
                        <h5 class="mb-0">{{ ucfirst(Auth::user()->firstname) }}&nbsp;{{ ucfirst(Auth::user()->lastname )}}</h5>
                        <p class="my-5 text-fade">{{ ucfirst(Auth::user()->role) }}</p>
                        <a style="
						margin-left: -3px;
					" href="#"><span class="icon-Mail-notification me-5 text-primary" style="
							font-size: 18px;
						"></span> {{Auth::user()->email }}</a>
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
	{{-- <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
		  <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
	</div> --}}
	<div class="d-flex flex-column fw-500">
	  
		{{-- <a href="{{ route('profile') }}" class="text-dark hover-primary mb-1 fs-16">Profile</a> --}}
		{{-- <span class="text-fade">Account settings and more</span> --}}
	</div>
</div>
				  
				 
				 <?php

				}


				?>	
                <div class="d-flex align-items-center mb-30">
                    <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
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
  
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div> 
  
</div>
<!-- ./wrapper -->
	
	
		
	
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	