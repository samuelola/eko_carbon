@extends('layouts.householdmaster')

@section('title')
    | Market Place
@endsection

@section('content')

<div class="content-wrapper">
	<div class="container-full">
	  <!-- Main content -->
	  <section class="content">
		  <div class="row">

                {{-- <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Products</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">e-Commerce</li>
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                </div> --}}
           </div>	

          
		  <!--new row-->
           
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-12">
                <div class="box">
                    <div class="box-body">
                        <form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search" id="search">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                  </svg></button>
							  </div>
							</div>
						</form>
                        <form>
                            <div class="form-group mb-30" style="margin-top: 10px;">
                                {{-- <h3 class="fs-15 mt-0 mb-20">All Industry</h3> --}}

                                <div class="mb-2">
                            
                                    <p style="display: inline-flex;"><input type="radio" name="cat" class="allcatt" value="all"></p>
                                    <p style="display: inline;">All </p>
                                    
                                </div>

                                <h3 class="fs-15 mt-0 mb-20">Filter by Industry</h3>
                                <div id="theworld">


                                </div>
                                
                            </div>
                            
                          
                            
                            
                            
                            <div class="form-group mb-30">
                                <h3 class="fs-15 mt-0 mb-20">Filter by Carbon Credit</h3>
                                {{-- <div class="checkbox-list">
                                    <div class="mb-2">
                                        <input type="checkbox" id="md_checkbox_6" class="chk-col-primary">
                                        <label for="md_checkbox_6" class="fs-13 fw-400 d-flex justify-content-between text-fade"> Less than 10%</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="md_checkbox_7" class="chk-col-primary">
                                        <label for="md_checkbox_7" class="fs-13 fw-400 d-flex justify-content-between text-fade"> 10% or more</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="md_checkbox_8" class="chk-col-primary">
                                        <label for="md_checkbox_8" class="fs-13 fw-400 d-flex justify-content-between text-fade"> 20% or more</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="md_checkbox_9" class="chk-col-primary">
                                        <label for="md_checkbox_9" class="fs-13 fw-400 d-flex justify-content-between text-fade"> 30% or more</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="md_checkbox_10" class="chk-col-primary">
                                        <label for="md_checkbox_10" class="fs-13 fw-400 d-flex justify-content-between text-fade">40% or more</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="md_checkbox_11" class="chk-col-primary">
                                        <label for="md_checkbox_11" class="fs-13 fw-400 d-flex justify-content-between text-fade">50% or more</label>
                                    </div>
                                </div> --}}
                                <div class="mb-2">
                            
                                    <p style="display: inline-flex;"><input type="radio" name="filter" class="filter" value="100"></p>
                                    <p style="display: inline;">0-100k</p>
                                    
                                </div>

                                <div class="mb-2">
                            
                                    <p style="display: inline-flex;"><input type="radio" name="filter" class="filter" value="200"></p>
                                    <p style="display: inline;">100k-200k</p>
                                    
                                </div>

                                <div class="mb-2">
                            
                                    <p style="display: inline-flex;"><input type="radio" name="filter" class="filter" value="300"></p>
                                    <p style="display: inline;">200k-300k</p>
                                    
                                </div>
                                <div class="mb-2">
                            
                                    <p style="display: inline-flex;"><input type="radio" name="filter" class="filter" value="400"></p>
                                    <p style="display: inline;">400k-500k</p>
                                    
                                </div>
                                <div class="mb-2">
                            
                                    <p style="display: inline-flex;"><input type="radio" name="filter" class="filter" value="500"></p>
                                    <p style="display: inline;">500k-600k</p>
                                    
                                </div>
                            </div>
                            {{-- <button type="submit" class="btn btn-primary mr-2">Reset</button>
                            <button type="reset" class="btn btn-primary-light">Setup</button> --}}
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-12">
                
                <div class="row" id="myworld1">
            
               

                
                </div>

                {{-- <button class="show-more btn btn-primary" type="button">
                    <span class="load-post" title="Load More">Show More</span>
                </button> --}}
          </div>

		  <!--end new row-->

		
		  
		  		
	  </section>
	  <!-- /.content -->
	</div>
</div>


<?php

// $useremail = $userinfo;

// echo $useremail->user_id;
// $userfirstname = $theuser->firstname;
// $userlastname = $theuser->lastname;

?>

<div class="modal fade" id="bs-market-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom-color:transparent">
                <h4 class="modal-title" id="myLargeModalLabel myproject_name"></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="">
                    {{-- <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}">
                    <input type="hidden" id="ownerproject_id" value="">
                    <input type="hidden" id="user_email" value="{{ Auth::user()->email }}">
                    <input type="hidden" id="user_firstname" value="{{ Auth::user()->firstname }}">
                    <input type="hidden" id="user_lastname" value="{{ Auth::user()->lastname }}">
                    <input type="hidden" id="user_id" value="{{ Auth::user()->id }}"> --}}
                    <h4 style="text-transform:capitalize;" class="modal-title" id="myproject_name"></h4>
                    <p id="myproject_desc" style="margin-bottom: 30px;margin-top: 12px;"></p>
                    <img style="width:650px;height:300px;" class="img-fluid theimagee"  alt="theimagee">
                    <p style="margin-top: 25px;"><a href="#">Project Overview</a>&nbsp;&nbsp;&nbsp;&nbsp;<a id="show"  href="#">Update Logs</a></p> 
                    <div class="menuu" style="display: none;" >
                        <input type="hidden" id="myid" value="">
                        <div class="timeline-alt pb-0" style="
                        padding-left: 10px;
                        padding-right: 10px;
                        margin-bottom: 28px;
                    ">
                            
                           

                              <div class="timeline-item" >
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#46bc5c" class="bi bi-check-circle" viewBox="0 0 16 16">
                                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                  </svg>
                                  <div class="timeline-item-info">
                                      <h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1" id="mylogdesc">  </h5>
                                      <p>
                                        <span id="mylogdate"></span>
                                      </p>
                                  </div>
                              </div>
                                
                           

                    


                        </div>
                     </div>
                     <div id="carb">
                        <p style="margin-top: 25px;">Carbon credit</p>
                        <p style="color:#187a56;margin-bottom:12px;"><span id="myproject_credit"></span>&nbsp;Tons</p>
                     </div>
                    
 
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#bs-market2-modal-lg" class="btn btn-sm btn-primary me-2">Offset on this project</a>  
                            {{-- <a href="#" id="offsetme" class="btn btn-primary">Offset on this project</a> --}}
                        </div>
                    </div>
                    
                </form>
                
            </div>
           
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>



<div class="modal fade" id="bs-market2-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
       
        <div class="modal-content">
            <div class="modal-header" style="border-bottom-color:transparent">
                {{-- <h4 class="modal-title" id="myLargeModalLabel myproject_name"></h4> --}}
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- <p><a href="#">Project Overview</a></p> --}}
                <h4 class="modal-title" id="myproject_nameee" style="margin-bottom: 12px;"></h4>
                <p>$<span id="myprice"></span>&nbsp;per Unit</p>
                <form action="">
                    <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}">
                    <input type="hidden" id="ownerproject_id" value="">
                    <input type="hidden" id="user_email" value="{{ Auth::user()->email }}">
                    <input type="hidden" id="user_firstname" value="{{ Auth::user()->firstname }}">
                    <input type="hidden" id="user_lastname" value="{{ Auth::user()->lastname }}">
                    <input type="hidden" id="user_id" value="{{ Auth::user()->id }}">
                    {{-- <h4 style="text-transform:capitalize;" class="modal-title" id="myproject_name"></h4> --}}
                    {{-- <p id="myproject_desc" style="margin-bottom: 30px;margin-top: 12px;"></p> --}}
                    
                    <div class="row">

                        <input type="hidden" id="theprojectcostt" value="">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phoneNumber1" class="form-label">Unit :</label>
                                <input  type="number" class="form-control" id="unit"  name="unit" required> 
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phoneNumber1" class="form-label">Total Amount($) :</label>
                                <input  type="number" class="form-control" id="totalamount" value=""  name="totalamount" required> 
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="row">
                        <p style="margin-bottom: 20px;">Total : $<span id="mytotalamount"></span></p>
                    </div>
                   
                     
                    
 
                    <div class="row">
                        <div class="col-md-4">

                            
                            <a href="#" id="offsetme" class="btn btn-primary">Pay</a>
                        </div>
                    </div>
                    
                </form>
                <script src="https://js.paystack.co/v1/inline.js"></script>
            </div>
           
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

@endsection


@section('script')

<script>

       


    
</script>

<script>
    $(document).on('click', '#marketplace', function(event){
	
    event.preventDefault();
    
    var theidm = $(this).data('id');
    var theproject_descm = $(this).data('desc');
    var thecarbon_creditm = $(this).data('credit');
    var thecreated_atm = $(this).data('created_at');
    var theproject_namem = $(this).data('project_name');
    var theproject_tonnes = $(this).data('tonnes');
    var theproject_image = $(this).data('myimage');
    var theuserid = $(this).data('user_id');
    var theprotype = $(this).data('pro_type');
    var theprojectcost = $(this).data('projectcost');

    // console.log(theprojectcost);

    
    
    $(".modal-body #myid").val(theidm);
    $(".modal-body #ownerproject_id").val(theuserid);
    
    $("#theprojectcostt").val(theprojectcost);

    

    
    
    document.getElementById("myproject_name").innerHTML = theproject_namem;
    document.getElementById("myproject_desc").innerHTML = theproject_descm;
    document.getElementById("myproject_credit").innerHTML = theproject_tonnes;

    console.log(theproject_namem);

    document.getElementById("myproject_nameee").innerHTML = theproject_namem;

    var price = $('#theprojectcostt').val();

    document.getElementById("myprice").innerHTML = price;

    console.log(price);

    
$('#unit').keyup(function(){

 $('#totalamount').val($(this).val()*price);

var total = $('#totalamount').val();

var unit = $('#unit').val();

 document.getElementById("mytotalamount").innerHTML = total;
 
console.log(total);

console.log(unit);
});
    

    var theuserid = $('#ownerproject_id').val();
    // document.getElementById("myproject_tonnes").innerHTML = theproject_tonnes;

    // console.log(theprotype);

    $('.theimagee').attr('src',theproject_image);

    //update projectviews
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    var projectId = $('#myid').val();

    $.ajax({
                  url: '/procount',
                  type: 'POST',
                  data:{projectId:projectId},
                  success: function (res) {
                  
                    console.log(res);
                    

                  }
              });


              //update projectviews


    $.ajax({
                  url: '{{ route('getSmallUser') }}?user_id='+theuserid,
                  type: 'get',
                  success: function (res) {

                    var user_email = res.email;
                    var user_firstname = res.firstname;
                    var user_lastname = res.lastname;

                    $(".modal-body #ownerproject_email").val(user_email); 
                    $(".modal-body #ownerproject_firstname").val(user_firstname); 
                    $(".modal-body #ownerproject_lastname").val(user_lastname); 
  


                    console.log(user_email);



                  }
              });

   

              var projectId = $('#myid').val();
              $('#mylogdesc').val('');

              $.ajax({
                  url: '{{ route('getLog') }}?log_id='+projectId,
                  type: 'get',
                  success: function (res) {

                    var descrip = res.pro_desc;
                    var datee = res.pro_date;
                    var dateme = datee.replace( /[-]/g, '/' );
                    date = Date.parse( dateme );
                    var jsDate = new Date( date );
                    var ds = jsDate.toDateString()
                    console.log(jsDate.toDateString());
                      
                    document.getElementById("mylogdesc").innerHTML = descrip;
                    document.getElementById("mylogdate").innerHTML = ds;
                   

                  }
              });
    
    });
</script>




<script>
    $(document).ready(function(){
        $('#show').click(function(e) {
            e.preventDefault();  
          $('.menuu').toggle("slide");
          
          $('#carb').toggle("slide");

          var projectId = $('#myid').val();

          $('#mylogdesc').val('');
          

        //   $.ajax({
        //           url: '{{ route('getLog') }}?log_id='+projectId,
        //           type: 'get',
        //           success: function (res) {

                    

        //             var descrip = res.pro_desc;
        //             var datee = res.pro_date;
        //             var dateme = datee.replace( /[-]/g, '/' );
        //             date = Date.parse( dateme );
        //             var jsDate = new Date( date );
        //             var ds = jsDate.toDateString()
        //             console.log(jsDate.toDateString());
                      
        //             document.getElementById("mylogdesc").innerHTML = descrip;
        //             document.getElementById("mylogdate").innerHTML = ds;
                   

        //           }
        //       });

        //   console.log(projectId);

          
        });
    });
    </script>

<script>
	$('#exampler').DataTable( {
		pageLength : 5,

	} );
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
	google.charts.load("current", {packages:["corechart"]});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
	  var data = google.visualization.arrayToDataTable([
		['Task', 'Hours per Day'],
		['Building',     30],
		['Vehicle',      20],
		['Flights',  2],
		['Shipping', 2],
		['Commute',    7],
		['Others',    7]
	  ]);

	  var options = {
		// title: 'Subscribers',
		pieHole: 0.4,
	  };

	  var chart = new google.visualization.PieChart(document.getElementById('mydonutchartt'));
	  chart.draw(data, options);
	}
  </script>

<script type="text/javascript">
	google.charts.load('current', {'packages':['bar']});
	google.charts.setOnLoadCallback(drawStuff);

	function drawStuff() {
	  var data = new google.visualization.arrayToDataTable([
		['Data', 'Percentage'],
		["Mon", 10],
		["Tue", 31],
		["Wed", 12],
		["Thur", 44],
		['Fri', 3],
        ['Sat', 3],
    
	  ]);

	  var options = {
		width: 520,
        height: 290,
		legend: { position: 'none' },
		chart: {
		  },
		axes: {
		  x: {
			0: { side: 'bottom'} // Top x-axis.
		  }
		},
		bar: { groupWidth: "70%" }
	  };

	  var chart = new google.charts.Bar(document.getElementById('top_x_divv'));
	  // Convert the Classic options to Material options.
	  chart.draw(data, google.charts.Bar.convertOptions(options));
	};
  </script>

  <script>
     $("document").ready(function(){
        $("#offsetme").click(function(){

            var total = $('#totalamount').val();
            var unit = $('#unit').val();

            var amt1 = total*100 ;
            
            var id = $("#user_id").val();
            var projectid = $('#myid').val();
            // var owner_id = $("#ownerproject_id").val();
            var user_email = $("#user_email").val();
            var user_firstname = $("#user_firstname").val();
            var user_lastname = $("#user_lastname").val();

            

            var handler = PaystackPop.setup({
          
          key: 'pk_test_b8df42429edbc40a8fd89918e2d1cc35f84dc171',
          
          email: user_email,
         
          amount: amt1,
          currency: "NGN",
          ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
          
          firstname: user_firstname,
          lastname: user_lastname,

          metadata: {
             custom_fields: [
                {
                    display_name: "Mobile Number",
                    variable_name: "mobile_number",
                    value: "+2348012345678"
                }
             ]
          },
          callback: function(response){
              
             var status = response.status;
             var approved = response.message;
             
             var cash =  total;
             var projectid = $('#myid').val();

            if(status == 'success'){

                $.ajax({

                    type: "post",
                    url: '/addoffsetters',
                    data: {
                        amount:cash,
                        _token: $("#csrf").val(),
                       
                        id:id,
                        // owner_id:owner_id,
                        projectid:projectid,
                        unit:unit

                    },

                    success: function(data){
                    console.log(data);

                    alert(data);

                    $('#bs-market-modal-lg').modal('hide');
                    $('#bs-market2-modal-lg').modal('hide');
                    // bs-market2-modal-lg
                    location.reload();

                   

                    // window.location = "/certificate";
                    
                    },error: function(data){
                    console.log(data); 
                    }

                    });
                }
             
              
          },


          onClose: function(){
              alert('window closed');
          }
        });


            handler.openIframe();

        });


     });
      
  </script>

<script>
    $('#search').on('keyup', function(){
        search();
    });
    search();
    function search(){
         var keyword = $('#search').val();
         $.post('{{ route("searchProject") }}',
          {
             _token: $('meta[name="csrf-token"]').attr('content'),
             keyword:keyword
           },
           function(data){
            table_post_row(data);
              console.log(data);
           });
    }
    // table row with ajax
    function table_post_row(res){
    let htmlView = '';
    if(res.thesearch.length <= 0){
        htmlView+= 
                            
            `<div class="mb-2">
                        <p style="display: inline-flex;">No data</p>
                        
                        
            </div>`
    }
    for(let i = 0; i < res.thesearch.length; i++){
        htmlView += `

                        <div class="mb-2">
                            
                            <p style="display: inline-flex;"><input type="radio" name="cat[]" class="mia" value="`+res.thesearch[i].name+`"></p>
                            <p style="display: inline;">`+res.thesearch[i].name+`</p>
                            
                        </div> 
                    `;
    }
        $('#theworld').html(htmlView);
    }

    

   
    </script>



    <script>
        $(document).on('click', '.mia', function(){

            
            searchcat();

        });

            searchcat();
            function searchcat(){
                categories = []; // reset 

                $('input[name="cat[]"]:checked').each(function()
                {
                    categories.push($(this).val());
                });

                $.post('{{ route("searchCat") }}',
                {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    categories:categories
                },
                function(data){
                    table_post_roww(data);
                    // console.log(data);
                });
            }

            //get all cat
            allcat();
            function allcat(){
                 
                $.post('{{ route("allCat") }}',
                {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    
                },
                function(data){
                    table_post_roww(data);
                    // // console.log(data);

                    console.log(data);
                });
            }

            function table_post_roww(rest){


                let samView = '';

                $.each(rest, function (key, value) {

                    if(value.length <= 0){

                        samView += `<div>
                            
                                     <p>No Data</p>
                            </div>`
                       
                    }

                    for(let i = 0; i < value.length; i++){

                        
                        samView += 
                        
                        `
                        
                          <div class="col-xl-4 col-md-6 col-12">
                                <div class="box">
                                    <div class="box-body">
                                        
                                        <div class="overlay position-relative">
                                            <div class="position-absolute r-0">
                                                
                                            </div>
                                            <img src="/`+value[i].image+`" alt="" class="img-fluid">
                                            <div class="overlay-layer">

                                                <a id="marketplace" href="#" data-bs-toggle="modal" data-bs-target="#bs-market-modal-lg" class="btn btn-sm btn-primary me-2" data-projectcost="`+value[i].projectcost+`" data-id="`+value[i].id+`" data-credit="`+value[i].carbon_credit+`" data-desc="`+value[i].project_desc+`" data-myimage="/`+value[i].image+`" data-project_name="`+value[i].project_name+`" data-tonnes="`+value[i].tonnes+`">View</a>  
                                                
                                            </div>
                                        </div>
                                        <div class="mt-30 pro-dec">
                                            <p style="color: #841dac" class="fw-500">`+value[i].project_type+`</p>
                                            <h5 class="fw-500">`+value[i].project_name+`</h5>
                                            
                                            
                                            
                                        
                                        </div>
                                        
                                    </div>
                                </div>					
                            </div>`
                        
                         
                        
                        ;
                        

                        // var ok = value[i].tags;

                        // console.log(ok);

                        

                    }

                    $('#myworld1').html(samView);

                   
                });
                
                
    

                
            }
    </script>

    <script>
        $(document).on('click', '.allcatt', function(){

            location.reload();
        });

    </script>



<!--filter-->
<script>
    $(document).on('click', '.filter', function(){

        searchfilter();

    });

        searchfilter();
        function searchfilter(){
            // filter = []; // reset 

            // $('input[name="filter"]:checked').each(function()
            // {
            //     filter.push($(this).val());
            // });

            filter = $('input[name="filter"]:checked').val();

            // console.log(filter);

            $.post('{{ route("searchFilter") }}',
            {
                _token: $('meta[name="csrf-token"]').attr('content'),
                filter:filter
            },
            function(data){
                table_post_rowy(data);
                console.log(data);
            });
        }

        

        function table_post_rowy(restt){


            let samView = '';

            $.each(restt, function (key, value) {

                if(value.length <= 0){

                    samView += `<div>
                        
                                 <p>No Data</p>
                        </div>`
                   
                }

                for(let i = 0; i < value.length; i++){

                    
                    samView += 
                    
                    `
                    
                      <div class="col-xl-4 col-md-6 col-12">
                            <div class="box">
                                <div class="box-body">
                                    
                                    <div class="overlay position-relative">
                                        <div class="position-absolute r-0">
                                            
                                        </div>
                                        <img src="/`+value[i].image+`" alt="" class="img-fluid">
                                        <div class="overlay-layer">

                                            <a id="marketplace" href="#" data-bs-toggle="modal" data-bs-target="#bs-market-modal-lg" class="btn btn-sm btn-primary me-2" data-id="`+value[i].id+`" data-credit="`+value[i].carbon_credit+`" data-desc="`+value[i].project_desc+`" data-myimage="/`+value[i].image+`" data-project_name="`+value[i].project_name+`" data-tonnes="`+value[i].tonnes+`">View</a>  
                                            
                                        </div>
                                    </div>
                                    <div class="mt-30 pro-dec">
                                        <p style="color: #841dac" class="fw-500">`+value[i].project_type+`</p>
                                        <h5 class="fw-500">`+value[i].project_name+`</h5>
                                        
                                        
                                        
                                    
                                    </div>
                                </div>
                            </div>					
                        </div>`
                    
                     
                    
                    ;
                    

                    // var ok = value[i].project_name;

                    // console.log(ok);

                    

                }

                $('#myworld1').html(samView);

               
            });
            
            


            
        }
</script>

<script>

var showPostFrom=0;
var showPostCount = 6;     
$(document).on('click', '.show-more', function(){

    showPostFrom+= showPostCount; 
    
    $('.load-post').html('<i class="fa fa-circle-o-notch fa fa-span fa fw"></i>Loading...');


            $.ajax({

                    type: "post",
                    url: '/showmore',
                    data: {
                        _token: $("#csrf").val(),
                    
                        showPostFrom:showPostFrom,
                        
                        showPostCount:showPostCount

                    },

                    success: function(data){
                    console.log(data);

                      if(data != ''){

                        $('.load-post').html('.Show More');
                        $('.post-data-list').append(data);

                      }else{
                         $('.show-more').hide();
                      }

                    },error: function(data){
                    console.log(data); 
                    }

        });

    
});
</script>

<script>
    apikey = '567ff21a30042f30b342aca35572acbc';
    url = 'https://gnews.io/api/v4/search?q=example&lang=en&country=us&max=10&apikey=' + apikey;

    fetch(url)
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        articles = data.articles;

        console.log(articles);

        let viewArticles = '';

        for (let i = 0; i < articles.length; i++) {

          var gg = articles[i]['description'];

          String.prototype.trunc= function (length) {
          return this.length>length ? this.substring(0, length) + '...' : this;
          };

          console.log(gg.trunc(10));
          
          //viewArticles += articles[i]['title'] + "<br>";

          viewArticles+=`
            
            <div class="col digitalBtn">
              <div class="card shadow-sm">
                <img src="`+articles[i]['image']+`" alt="image"  class="bd-placeholder-img card-img-top" style="height: 240px;">
    
                <div class="card-body py-4" style="height:250px">
                    <h3 class="fw-bolder" style="font-size: larger;">`+articles[i]['title']+`</h3>
                  <p class="card-text lh-lg ">`+gg.trunc(80)+`</p>
                  
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <img src="Images/arrowvector.svg" alt="">
                      <a href="`+articles[i]['url']+`" target="_blank" class="text-danger text-decoration-none ">Read more</a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>

          `;
          
        }

        document.getElementById("demo").innerHTML = viewArticles;

  
  });
</script>


@endsection
  
 
