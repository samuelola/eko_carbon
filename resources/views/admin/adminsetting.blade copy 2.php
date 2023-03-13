@extends('layouts.adminmaster')

@section('title')
    | Roles
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 250.5px;">
    <div class="container-full">
  

      <!-- Main content -->
      <section class="content">
        

         <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="header-title">Roles<span class="text-success" style="font-size: 11px;
                            margin-left: 8px;background-color:#f8fffb">{{ $roles->count() }}</span></h4>

                          <a href="#" data-bs-toggle="modal" data-bs-target="#bs-addrole-modal-lg" class="btn btn-primary-light btn-sm" style="float: right;
    margin-top: -30px;
">Add Role</a>

                          <ul class="nav nav-tabs nav-bordered mb-3" style="margin-top: 30px;">
                              <li class="nav-item">
                                  <a href="#bs-modals-listers" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                      
                                      Roles 
                                  </a>
                              </li>
                             
                              
                          </ul> <!-- end nav-->
                          <div class="tab-content">
                              

                            <div class="tab-pane show active" id="bs-modals-listers">
                                   <div class="col-md-12">
                                      <div class="row">

                                        <table id="exampleadminrole" class="table table-hover display nowrap "style="width:100%">
                                            <thead>
                                              <tr>
                                                  <th></th>
                                                  <th scope="col">Name</th>
                                                  <th scope="col">Members</th>
                                                  <th scope="col">Date Added</th>
                                                  <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @php
                                              $sn = 0;
                                              @endphp
                                              @foreach ($roles as $theregistration)
                                              <tr>
                                                  
                                                  <td>{{ $theregistration->id }}</td>
                                                  <td>{{ ucfirst($theregistration->name) }}</td>
                                                  <td>
                                                      <?php  
                                                          if($theregistration->name =='superadmin'){

                                                            $check = App\Models\Role::where('name','=','superadmin')->get();

                                                            echo $check->count();

                                                          }elseif($theregistration->name =='admin'){
                                                                
                                                            $check = App\Models\Role::where('name','=','admin')->get();

                                                            echo $check->count();
                                                          }
                                                          elseif($theregistration->name =='lister'){
                                                            $check = App\Models\Role::where('name','=','lister')->get();

                                                            echo $check->count();
                                                          }
                                                          else{
                                                            $check = App\Models\Role::where('name','=','company')->get();

                                                            echo $check->count();
                                                          }
                                                      ?>
                                                  </td>
                                                  <td>{{ Carbon\Carbon::parse($theregistration->created_at)->format('M j, Y ')}}</td>
                                                  
                                                  <td>
                                                    <a id="request1" href="javascript:void(0)" data-created_at="<?php echo date('M j, Y', strtotime($theregistration->created_at)) ?>" data-id="<?php echo $theregistration->id ?>" data-fname="<?php echo ucfirst($theregistration->firstname) ?>" data-lname="<?php echo ucfirst($theregistration->lastname) ?>" data-email="<?php echo $theregistration->email ?>" data-kyc="<?php echo $theregistration->kyc_status ?>" class="text-success" data-bs-toggle="modal" data-bs-target="#bs-listers-modal-lg" data-bs-original-title="View Details"><i class="ti-eye" aria-hidden="true"></i></a> &nbsp;|
                                                    <a id="samm" href="javascript:void(0)" class="text-info" data-bs-toggle="modal" data-bs-target="#bs-editlisterss-modal-lg" data-bs-original-title="Edit" data-id="<?php echo $theregistration->id ?>" data-fname="<?php echo ucfirst($theregistration->firstname) ?>" data-lname="<?php echo ucfirst($theregistration->lastname) ?>" data-email="<?php echo $theregistration->email ?>" data-role="<?php echo $theregistration->role ?>"><i class="ti-pencil" aria-hidden="true"></i></a> |
                                                    {{-- <a href="javascript:void(0)" class="text-info" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a> &nbsp;| --}}

                                                    {{-- <a onClick="javascript: return confirm('Are you sure you want to delete');" href="{{ route('deleteuser',$theregistration->id) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a> --}}

                                                    <form action="{{ route('deleteuser',$theregistration->id) }}" method="POST" class="del3">
                                                        
                                                                
                                                    
                                                                    @csrf
                                                                    @method('DELETE')
                                                    
                                                     <button style="border: none;
                                                     background-color: transparent;
                                                     padding: 0px;
                                                     float: right;
                                                     margin-top: -20px;
                                                     margin-right: 45px;" type="submit" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete" onclick="return confirm('Are you sure you want to delete?')"><i class="ti-trash" aria-hidden="true"></i></button>
                                                     </form>


                                                    
                                                           
                                                  </td>
                                                </tr>
                                              @endforeach
                                            
                                           
                                          </tbody>	
                                        </table>
                                        
                                        
                                        
                                      </div>
                                        
                                   </div>
                                </div>
                                
                                
                                  
                                
                                
                          </div> <!-- end tab-content-->
                      </div> <!-- end card-body -->
                  </div> <!-- end card-->
              </div> <!-- end col -->

              
          </div>
          <!-- end row -->


          
          <!-- end row -->
          
      </section>
      <!-- /.content -->
    </div>
</div>

<div class="modal fade" id="bs-addrole-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Add Role</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="">
                    <div class="row">

                        
                        <div class="col-md-6">
                            <label for="">Role Name:</label>
                            <input type="text" name="" class="form-control">
                            
                        </div>
                        <div class="col-md-6">

                            
                            <label for="">Role Description:</label>
                           <textarea style="height: 83px;" name="" id="" cols="30" rows="10" class="form-control"></textarea>
                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                       
                        <div class="col-md-12">
                            <label for="">Permissions:</label>
                            <p><br></p>
                            <p><a href="#" class="btn btn-success btn-sm">Admin</a></p>
                        
                            <hr>
                            <div class="row">
                               <div class="col-md-3">
                                <p>Add Admin
                                    <button type="button"  class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button" aria-pressed="true">
                                        <span class="handle"></span>
                                    </button>
                                    </p>
                               </div>
                               <div class="col-md-3">
                                <p>Assign Roles
                                    <button type="button" class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button" aria-pressed="true">
                                        <span class="handle"></span>
                                    </button>
                                    </p>
                               </div>
                               <div class="col-md-3">
                                <p>View Projects
                                    <button type="button" class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button" aria-pressed="true">
                                        <span class="handle"></span>
                                    </button>
                                    </p>
                               </div>
                               <div class="col-md-3">

                                <p>Assign Carbon Credit
                                    <button type="button" class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button" aria-pressed="true">
                                        <span class="handle"></span>
                                    </button>
                                    </p>

                               </div>
                            </div>


                            <div class="row">
                                <div class="col-md-3">
                                 <p>List
                                     <button type="button"  class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button" aria-pressed="true">
                                         <span class="handle"></span>
                                     </button>
                                     </p>
                                </div>
                                <div class="col-md-3">
                                 <p>View Market Place
                                    {{-- <input type='checkbox' name='opt1' id='opt1' value='1' class='toggleswitch' checked='checked' /> --}}
                                     {{-- <button type="button" id="market" class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button" aria-pressed="true">
                                         <span class="handle"></span>
                                     </button> --}}

                                     <button type="button" id="market" class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button" aria-pressed="true">
                                         <span class="handle"></span>
                                     </button>

                                     <input type="checkbox" id="toggle" data-off="Off" data-on="On" checked data-toggle="toggle">
                                     </p>
                                </div>
                                
                             </div>
                            
                        </div>
                    </div>

                    

                </form>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<div class="modal fade" id="bs-listers-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Lister</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <p>First Name:&nbsp;<span id="thefname"></span></p>
                        <p>Last Name:&nbsp;<span id="thelname"></span></p>
                        <p>Email:&nbsp;<span id="theemail"></span></p>
                        
                    </div>
                    <div class="col-md-6">
                        {{-- <span class="badge badge-primary" id="thekyc"></span> --}}
                        <span>Kyc Status:&nbsp;<p style="display: inline" id="thekyc"></p></span>
                        <p style="margin-top: 10px;">Date:&nbsp;<span id="thedate"></span></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>



<div class="modal fade" id="bs-editlisterss-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Edit Lister</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form id="form2" action="#">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <input type="hidden" id="myid" name="id"/>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">First Name :</label>
                                    <input  type="text" class="form-control" id="myfname"  name="firstname" required> 
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">Last Name :</label>
                                    <input  type="text" class="form-control" id="mylname"  name="lastname" required> 
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">Email :</label>
                                    <input  type="email" class="form-control" id="myemail"  name="email" required> 
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">Role :</label>
                                    
                                    <select name="role" id="myrole" class="form-select">
                                         
                                        <option value="user">User</option> 
                                        <option value="admin">Admin</option> 
                                    </select> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phoneNumber1" class="form-label">Email :</label>
                                        <input  type="email" class="form-control" id="myemail"  name="email" required> 
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phoneNumber1" class="form-label">Role :</label>
                                        
                                        <select name="role" id="myrole" class="form-select">
                                             
                                            <option value="user">User</option> 
                                            <option value="admin">Admin</option> 
                                        </select> 
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary-light">Update</button>
                            </div>
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                
            </div> --}}
        </div><!-- /.modal-content -->
    </div>
</div>




<div class="modal fade" id="bs-editlisters-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Edit Lister</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form id="form2" action="#">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <input type="hidden" id="myid" name="id"/>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">First Name :</label>
                                    <input  type="text" class="form-control" id="myfname"  name="firstname" required> 
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">Last Name :</label>
                                    <input  type="text" class="form-control" id="mylname"  name="lastname" required> 
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">Email :</label>
                                    <input  type="email" class="form-control" id="myemail"  name="email" required> 
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">Role :</label>
                                    
                                    <select name="role" id="myrole" class="form-select">
                                         
                                        <option value="user">User</option> 
                                        <option value="admin">Admin</option> 
                                    </select> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phoneNumber1" class="form-label">Email :</label>
                                        <input  type="email" class="form-control" id="myemail"  name="email" required> 
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phoneNumber1" class="form-label">Role :</label>
                                        
                                        <select name="role" id="myrole" class="form-select">
                                             
                                            <option value="user">User</option> 
                                            <option value="admin">Admin</option> 
                                        </select> 
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary-light">Update</button>
                    </form>
                </div>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                
            </div> --}}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@endsection

@section('script')

<script>
    var tablet;

    $(document).ready(function() {
tablet = $('#exampleadminrole').DataTable( {
    // dom: 'Bfrtip',
    responsive: true,
    // buttons: [
    //     'csv', 'excel', 'pdf', 'print'
    // ],

    'columnDefs': [
     {
        'targets': 0,
        'checkboxes': {
           'selectRow': true
        },
        className: 'select-checkbox',
     }
  ],

  'select': {
     'style': 'multi'
  },
  'order': [[1, 'asc']],
  pageLength : 5,


} );
} );
</script>



<script>
    $("#menu").hover(function() {
            $("#sub_menu").show();
        }, function() {
            $("#sub_menu").hide();
        });
</script>

<script>
    $(document).on("click", "#request1", function () {
        
            var fname = $(this).data('fname');
            var lname = $(this).data('lname');
            var email = $(this).data('email');
            var kyc = $(this).data('kyc');
            var idlisters = $(this).data('id');
            var created_at = $(this).data('created_at');



            document.getElementById("thefname").innerHTML = fname;
            document.getElementById("thelname").innerHTML = lname;
            document.getElementById("theemail").innerHTML = email;
            
            
            if(kyc == "1"){
                document.getElementById("thekyc").innerHTML = "<span class='badge badge-primary'>Completed</span>";
            }
            
            else{
                // document.getElementById("thekyc").innerHTML = "Not Completed";
                document.getElementById("thekyc").innerHTML = "<span class='badge badge-warning'>Not Completed</span>";
            }
            
            
            document.getElementById("thedate").innerHTML = created_at;
           


    });    
</script>


<script>
    $(document).on('click', '#samm', function(event){
	
    event.preventDefault();
    
    var theid = $(this).data('id');
    var thefname = $(this).data('fname');
    var thelname = $(this).data('lname');
    var theemail = $(this).data('email');
    var therole = $(this).data('role');

    $(".modal-body #myid").val(theid);
    $(".modal-body #myfname").val(thefname);
    $(".modal-body #mylname").val(thelname);
    $(".modal-body #myemail").val(theemail);
    $(".modal-body #myrole").val(therole);
    
    });
</script>

<script>
    $("#form2").submit(function (event) {
            event.preventDefault();
			var formData = new FormData(this);

			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "/updatelister",
				data: formData,
                        contentType: false,
						cache: false,
				processData:false,
                success: function (data) {
                    
					$('form')[0].reset();
					$('#bs-editlisters-modal-lg').modal('hide');	
					console.log(data);

// 					Swal.fire(data, data.message, 'success').then(() => {
//     location.reload();
// });

alert(data);
location.reload();

                },
                error: function(data){
                    console.log(data);
                    
                }
            });
        });
</script>

<script>
    
    // $("#market").click(function () {
    //     var $this = $(this);
    //     if ($this.hasClass('active')) {
    //     $this.removeClass('active');
    //     }
    //     else if ($this.hasClass('')) {
    //     $this.addClass('active');
    //     }
        
    //     console.log("hello");
    // })
    
    $(document).on('click', '#market', function(){
            // var id = $(this).attr("id");
            var $this = $(this);
        if ($this.hasClass('active')) {
        $this.removeClass('active');
        }else if($this.hasClass('')){
            $this.addClass('active');
        }

            console.log("hello");
            
        });
</script>

<script>
    // $("#market").click(function () {
    //     // toggleClass
    //     $("#market").toggleClass("active");
    //     // $("#market").removeClass("active");
    //     console.log("hello");
    // })

    
    
</script>

{{-- <script>
    $(document).ready(function () {
    $("button").click(function () {
        $("#fold_p").fadeOut(function () {                  
            $("#fold_p").text(($("#fold_p").text() == 'Hide') ? 'Show' : 'Hide').fadeIn();
        })
    })
});
</script> --}}

<script>
    $('#toggle').change(function(){
      var mode= $(this).prop('checked');

      console.log(mode);
      // // submit the form 
      // $(#myForm).ajaxSubmit(); 
      // // return false to prevent normal browser submit and page navigation 
      // return false; 
    //   $.ajax({
    //     type:'POST',
    //     dataType:'JSON',
    //     url:'audio_alarm.php',
    //     data:'mode='+mode,
    //     success:function(data)
    //     {
    //       var data=eval(data);
    //       message=data.message;
    //       success=data.success;
    //       $("#heading").html(success);
    //       $("#body").html(message);
    //     }
    //   });
    });
  </script>


@endsection