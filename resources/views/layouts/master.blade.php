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
  <link rel="stylesheet" href="{{ asset('animate.css') }}">
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
	
  @include('includes.header')
  
  @include('includes.sidebar')

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
		<input type="hidden" id="status" value="1" name="status"/>
		<input type="hidden" id="carbon_credit" value="0" name="carbon_credit"/>
		<input type="hidden" id="theprojectview" value="0" name="theprojectview"/>
		<div class="mb-3">
		  <label for="username" class="form-label">Project Type:</label>
			<select class="form-select" name="project_type" id="project_type" required="">
			  <option selected disabled>Select--</option>

        <?php 



        
        $allproject_typee = App\Models\Project_type::all();

           foreach( $allproject_typee as $value){

               ?> <option value="<?php echo $value->name ?>"><?php echo $value->name ?></option> <?php 
           }
        ?>
			  {{-- @foreach ($allproject_type as $value)

			  <option value="{{ $value->name }}">{{ $value->name }}</option>
				
			  @endforeach --}}
			  {{-- <option value="design">design</option>
			  <option value="development">development</option>
			  <option value="illustration">illustration</option>
			  <option value="branding">branding</option>
			  <option value="video">video</option> --}}
			</select>
		</div>

		<div class="mb-3">
		  <label for="emailaddress" class="form-label">Project Name</label>
		  <input class="form-control" type="text" id="project_name" required="" name="project_name" >
		</div>

		<div class="mb-3">
		  <label for="password" class="form-label">Project Description</label>
		  <textarea style="height: 91px;" class="form-control" name="project_desc" id="project_desc" cols="30" rows="10" required=""></textarea>
		</div>

		<div class="mb-3">
		  <label for="password" class="form-label">Your Tonnes of CO<sub>2</sub>?</label>
			<input class="form-control" type="number" value="0" id="tonnes" readonly name="tonnes" >
		</div>
		
		{{-- <div class="mb-3">
		<label for="addressline12" class="form-label">Pictures?</label>
							  <div class='file file--success'>
								  <label for='input-file'>
								  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
							  <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
							  <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
							</svg> Click to upload
								  </label>
								  <input id='input-file' type='file' name="image[]" multiple accept="image/*" required=""/>
				
								  
					  </div>
		</div> --}}

		<div class="mb-3">
		  <label for="addressline12" class="form-label">Pictures?</label>
				<div class='file file--success'>
				  <label for='input-file'>
				  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
				<path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
				<path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
				</svg> Click to upload
				  </label>
				  <input id='input-file' type='file' name="image" accept="image/*" required=""/>
				  
				  
			</div>
			<span id="mee" style="margin-left: 118px;"><!-- Selected file will get here --></span>
		  </div>
		
		  <div class="mb-3">
			<div class="form-group">
			  <label for="url123" class="form-label">Add  External Link describing this project?</label>
			  <input type="text" class="form-control" id="external_link" name="external_link" required="">
			</div>
		  </div>

		  {{-- <div class="mb-3">
			<div class="form-group">
			  <label for="url123" class="form-label">Add  Tags ?</label>
			 
			  <div class="tags-default">
				<input type="text" value="" id="tags" name="tags[]" data-role="tagsinput" placeholder="add tags" style="display: none;">
			  </div>
			</div>
			
			
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

  <script src="{{ asset('/htmly/assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js') }}"></script>
	
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
  <script>
  new WOW().init();

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
    // location.reload();
    window.location = "/dashboard";   
});
                    
                },
                error: function(data){
                    console.log(data);
                    
                }
            });

    
  });

});


  
</script>


{{-- <script>
$(function()
    {
        $('#input-file').on('change',function ()
        {
            var filePath = $(this).val();

            var new_string = filePath.replace("'C:\fakepath\'", " ");
            console.log(new_string);
        });
    });

</script> --}}


<script>
  $(document).ready(function() {
      $('#input-file').change(function(e) {
          var geekss = e.target.files[0].name;
          $("#mee").text(geekss + ' is the selected file.');
          // $("#mee").text(geekss);

      });
  });
</script>

@yield('script')


</body>


</html>
