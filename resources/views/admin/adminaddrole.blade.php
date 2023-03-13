

{{-- <link rel="stylesheet" href="/htmly/template/vertical-light/src/css/vendors_css.css"> 
<link rel="stylesheet" href="/htmly/template/vertical-light/src/css/style.css">
<link rel="stylesheet" href="/htmly/template/vertical-light/src/css/skin_color.css"> --}}


@extends('layouts.adminmaster')

@section('title')
    | Roles
@endsection
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Account Setting</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Account Setting</li>
							</ol>
						</nav>
					</div>
				</div>				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">				
				<div class="col-12">
					<h4 class="text-dark">Security Settings</h4>
					<hr>
					<div class="box">
						<div class="box-body">
							<div class="d-md-flex justify-content-between align-items-center">
								<div>
									<h5 class="text-primary fw-500">Activity Logs</h5>
									<p class="mb-0">You can save your all activity logs including unusual activity detected.</p>
								</div>
								<button type="button" class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button" >
									<span class="handle"></span>
							    </button>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="box-body">
							<div class="d-md-flex justify-content-between align-items-center">
								<div>
									<h5 class="text-primary fw-500">Change Password</h5>
									<p class="mb-0">Set a unique password to protect your account.</p>
								</div>
								<a href="#" class="btn btn-info">Change Password</a>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="box-body">
							<div class="d-md-flex justify-content-between align-items-center">
								<div>
									<h5 class="text-primary fw-500">2 Step Verification</h5>
									<p class="mb-0 me-25">Secure your account with 2 Step security. When it is activated you will need to enter not only your password, but also a special code using app. You can receive this code by in mobile app.</p>
								</div>
								<a href="#" class="btn btn-danger">Enabled</a>
							</div>
						</div>
					</div>
				</div>			
				<div class="col-12">
					<h4 class="text-dark">Activity Log</h4>
					<hr>
					<div class="box">
						<div class="box-body p-0">
							<div class="table-responsive">
							  <table class="table mb-0">
								  <thead>
									<tr>
									  <th scope="col">Browser</th>
									  <th scope="col">IP Address</th>
									  <th scope="col">Date/Time</th>
									  <th scope="col">Action</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <th scope="row">Chrome on Window</th>
									  <td>192.168.111.111</td>
									  <td>1/04/2020 : 10:10am</td>
									  <td><a href="#" class="text-danger"><i class="fa fa-trash"></i></a></td>
									</tr>
									<tr>
									  <th scope="row">Mozila on Window</th>
									  <td>192.168.154.111</td>
									  <td>1/03/2020 : 10:10am</td>
									  <td><a href="#" class="text-danger"><i class="fa fa-trash"></i></a></td>
									</tr>
									<tr>
									  <th scope="row">Safari on Mac</th>
									  <td>192.168.895.111</td>
									  <td>1/05/2020 : 10:10am</td>
									  <td><a href="#" class="text-danger"><i class="fa fa-trash"></i></a></td>
									</tr>
								  </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
 
@endsection

{{-- <script src="/htmly/template/vertical-light/src/js/vendors.min.js"></script>
	<script src="/htmly/template/vertical-light/src/js/pages/chat-popup.js"></script>
    <script src="/htmly/assets/icons/feather-icons/feather.min.js"></script>
	
	<script src="/htmly/template/vertical-light/src/js/demo.js"></script>
	<script src="/htmly/template/vertical-light/src/js/template.js"></script> --}}
	
