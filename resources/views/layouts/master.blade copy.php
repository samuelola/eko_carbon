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

    <title>Eko Carbon @yield('title')</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('/htmly/template/vertical-light/src/css/vendors_css.css') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('/htmly/template/vertical-light/src/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('/htmly/template/vertical-light/src/css/skin_color.css') }}">
  <link rel="stylesheet" href="{{ asset('file.css') }}">  
  <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
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
	<div id="loader"></div>
	
  @include('includes.header')
  
  @include('includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
	
  @include('includes.footer')


  <!-- Side panel -->   
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="{{ asset('/htmly/template/vertical-light/src/js/vendors.min.js') }}"></script>
	<script src="{{ asset('/htmly/template/vertical-light/src/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('/htmly/assets/icons/feather-icons/feather.min.js') }}"></script>
		
	<script src="{{ asset('/htmly/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
	
	
	<script src="{{ asset('/htmly/template/vertical-light/src/js/demo.js') }}"></script>
	<script src="{{ asset('/htmly/template/vertical-light/src/js/template.js') }}"></script>
	<script src="{{ asset('/htmly/template/vertical-light/src/js/pages/dashboard.js') }}"></script>

  <script src="sweetalert2/dist/sweetalert2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	

  <!-- Long Content Scroll Modal -->
  <div class="modal fade" id="scrollable-modalj" tabindex="-1" role="dialog"
  aria-labelledby="scrollableModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="scrollableModalTitle">Add New Project</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form1" class="ps-3 pe-3" action="#"  enctype="multipart/form-data">

          <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
					<input type="hidden" id="user_id" value="{{Auth::user()->id}}" name="user_id"/>

          <div class="mb-3">
            <label for="username" class="form-label">Project Type:</label>
              <select class="form-select" name="project_type" id="project_type" required="">
                <option selected disabled>Select--</option>
                <option value="design">design</option>
                <option value="development">development</option>
                <option value="illustration">illustration</option>
                <option value="branding">branding</option>
                <option value="video">video</option>
              </select>
          </div>

          <div class="mb-3">
            <label for="emailaddress" class="form-label">Project Name</label>
            <input class="form-control" type="text" id="project_name" required="" name="project_name">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Project Description</label>
            <textarea style="height: 91px;" class="form-control" name="project_desc" id="project_desc" cols="30" rows="10"></textarea>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Your Tonnes of CO<sub>2</sub>?</label>
              <input class="form-control" type="number" id="tonnes" required="" name="tonnes" >
          </div>
          
          <div class="mb-3">
          <label for="addressline12" class="form-label">Pictures?</label>
								<div class='file file--success'>
									<label for='input-file'>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
								<path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
							  </svg> Click to upload
									</label>
									<input id='input-file' type='file' name="image" accept="image/*"/>
                  
									
						</div>
          </div>
          
            <div class="mb-3">
              <div class="form-group">
                <label for="url123" class="form-label">Add  External Link describing this project?</label>
                <input type="text" class="form-control" id="external_link" name="external_link">
              </div>
            </div>

            {{-- <div class="mb-3">
              <div class="form-group">
                <label for="url123" class="form-label">Add  Tags ?</label>
                <input type="text" class="form-control" id="tag" name="tag">
              </div>
              <span class="badge bg-success-light">Conservation</span>
              <span class="badge bg-danger-light">Wildlife</span>
              
            </div> --}}
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
        <button type="submit" id="myproject" class="btn btn-primary">Submit</button>
        {{-- <a href="{{ route('dashboard') }}" class="btn btn-primary">Submit</a> --}}
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  

<script>

function makePayment() {
  FlutterwaveCheckout({
    public_key: "FLWPUBK_TEST-SANDBOXDEMOKEY-X",
    tx_ref: "titanic-48981487343MDI0NzMx",
    amount: 50,
    currency: "USD",
    payment_options: "card, mobilemoneyghana, ussd",
    // redirect_url: "https://glaciers.titanic.com/handle-flutterwave-payment",
    meta: {
      consumer_id: 23,
      consumer_mac: "92a3-912ba-1192a",
    },
    customer: {
      email: "test@gmail.com",
      phone_number: "08102909304",
      name: "Rose DeWitt Bukater",
    },
    customizations: {
      title: "Eko Carbon",
      description: "Payment for an awesome cruise",
      logo: "",
    },
  });
}


</script>


<script>



$(document).ready(function (e) {

  $(document).on('click', '#myproject', function(event){

    event.preventDefault();

    var formData = new FormData(document.getElementById("form1"));

    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $.ajax({
                type: "POST",
                url: "/createproject",
				data: formData,
                        contentType: false,
						cache: false,
				processData:false,
                success: function (data) {
                    
					$('#form1')[0].reset();
					$('#scrollable-modalj').modal('hide');	
					console.log(data);

					Swal.fire(data, data.message, 'success').then(() => {
    location.reload();
});
                    
                },
                error: function(data){
                    console.log(data);
                    
                }
            });

    
  });

});


  
</script>


</body>


</html>
