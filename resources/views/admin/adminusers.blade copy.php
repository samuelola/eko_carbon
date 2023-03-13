@extends('layouts.adminmaster')

@section('title')
    | Users Directory
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
                       
                          <h4 class="header-title">User Directory<span class="text-success" style="font-size: 11px;
                            margin-left: 8px;background-color:#f8fffb">{{ $userscount->count() }}</span></h4>
                           
                           

                          <ul class="nav nav-tabs nav-bordered mb-3" style="margin-top: 30px;">
                              <li class="nav-item">
                                  <a href="#bs-modals-listers" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                      
                                      Listers <span style="font-size: 11px;">({{ $adminlisters->count() ? $adminlisters->count() : 0 }})</span>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="#bs-modals-admin" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Admin <span style="font-size: 11px;">({{ $adminusers->count() ? $adminusers->count() : 0 }})</span> 
                                  </a>
                              </li>
                              <li class="nav-item">
                                <a href="#bs-modals-offseters" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Offseters <span style="font-size: 11px;">(0)</span> 
                                </a>
                              </li>
                              
                          </ul> <!-- end nav-->
                          <div class="tab-content">
                              

                                <div class="tab-pane " id="bs-modals-admin">
                                   <div class="col-md-12">
                                      <div class="row">

                                        <table id="exampleadmin" class="table table-hover display nowrap "style="width:100%">
                                            <thead>
                                              <tr>
                                                  {{-- <th></th>
                                                  <th scope="col">Sn</th> --}}
                                                  <th scope="col">First Name</th>
                                                  <th scope="col">Last Name</th>
                                                  <th scope="col">Email</th>
                                                  <th scope="col">Role</th>
                                                  <th scope="col">Created_at</th>
                                                  <th scope="col">Updated_at</th>
                                                  <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @php
                                              $sn = 0;
                                              @endphp
                                              @foreach ($adminusers as $theregistration)
                                              <tr>
                                                  {{-- <td>{{ $theregistration->id }}</td>
                                                  <td>{{ $sn+=1; }}</td> --}}
                                                  <td>{{ ucfirst($theregistration->firstname) }}</td>
                                                  <td>{{ ucfirst($theregistration->lastname) }}</td>
                                                  <td>{{ $theregistration->email }}</td>
                                                  <td>{{ $theregistration->role }}</td>
                                                  <td>{{ Carbon\Carbon::parse($theregistration->created_at)->format('M j, Y ')}}</td>
                                                  <td>{{ Carbon\Carbon::parse($theregistration->updated_at)->format('M j, Y ')}}</td>
                                                  <td>
                                                    <a id="request1" href="javascript:void(0)" data-created_at="<?php echo date('M j, Y', strtotime($theregistration->created_at)) ?>" data-id="<?php echo $theregistration->id ?>" data-fname="<?php echo ucfirst($theregistration->firstname) ?>" data-lname="<?php echo ucfirst($theregistration->lastname) ?>" data-email="<?php echo $theregistration->email ?>" data-kyc="<?php echo $theregistration->kyc_status ?>" class="text-success" data-bs-toggle="modal" data-bs-target="#bs-listers-modal-lg" data-bs-original-title="View Details"><i class="ti-eye" aria-hidden="true"></i></a> &nbsp;|
                                                    <a id="samm" href="javascript:void(0)" class="text-info" data-bs-toggle="modal" data-bs-target="#bs-editlisterss-modal-lg" data-bs-original-title="Edit" data-id="<?php echo $theregistration->id ?>" data-fname="<?php echo ucfirst($theregistration->firstname) ?>" data-lname="<?php echo ucfirst($theregistration->lastname) ?>" data-email="<?php echo $theregistration->email ?>" data-role="<?php echo $theregistration->role ?>"><i class="ti-pencil" aria-hidden="true"></i></a> |
                                                    {{-- <a href="javascript:void(0)" class="text-info" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a> &nbsp;| --}}

                                                    {{-- <a onClick="javascript: return confirm('Are you sure you want to delete');" href="{{ route('deleteuser',$theregistration->id) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a> --}}

                                                    <form action="{{ route('deleteuser',$theregistration->id) }}" method="POST" class="del">
                                                        
                                                                
                                                    
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
                                
                                
                                <div class="tab-pane show active" id="bs-modals-listers">
                                    <div class="col-md-12">
                                        <div class="row">
                                         
                                            <table id="examplelisters" class="table table-hover display nowrap"style="width:100%">
                                                <thead>
                                                  <tr>
                                                    <th></th>
                                                      {{-- <th scope="col">Sn</th> --}}
                                                      <th scope="col">First Name</th>
                                                      <th scope="col">Last Name</th>
                                                      <th scope="col">Email</th>
                                                      <th scope="col">Role</th>
                                                      <th scope="col">Created_at</th>
                                                      <th scope="col">Updated_at</th>
                                                      <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  @php
                                                  $sn = 0;
                                                  @endphp
                                                  @foreach ($adminlisters as $theregistration)
                                                  <tr>
                                                      <td>{{ $theregistration->id }}</td>
                                                      {{-- <td>{{ $sn+=1; }}</td> --}}
                                                      <td>{{ ucfirst($theregistration->firstname) }}</td>
                                                      <td>{{ ucfirst($theregistration->lastname) }}</td>
                                                      <td>{{ $theregistration->email }}</td>
                                                      <td>{{ $theregistration->role }}</td>
                                                      <td>{{ Carbon\Carbon::parse($theregistration->created_at)->format('M j, Y ')}}</td>
                                                      <td>{{ Carbon\Carbon::parse($theregistration->updated_at)->format('M j, Y ')}}</td>
                                                      <td>
                                                        <a id="request1" href="javascript:void(0)" data-created_at="<?php echo date('M j, Y', strtotime($theregistration->created_at)) ?>" data-id="<?php echo $theregistration->id ?>" data-fname="<?php echo ucfirst($theregistration->firstname) ?>" data-lname="<?php echo ucfirst($theregistration->lastname) ?>" data-email="<?php echo $theregistration->email ?>" data-kyc="<?php echo $theregistration->kyc_status ?>" class="text-success" data-bs-toggle="modal" data-bs-target="#bs-listers-modal-lg" data-bs-original-title="View Details"><i class="ti-eye" aria-hidden="true"></i></a> &nbsp;|
                                                        <a id="samm" href="javascript:void(0)" class="text-info" data-bs-toggle="modal" data-bs-target="#bs-editlisterss-modal-lg" data-bs-original-title="Edit" data-id="<?php echo $theregistration->id ?>" data-fname="<?php echo ucfirst($theregistration->firstname) ?>" data-lname="<?php echo ucfirst($theregistration->lastname) ?>" data-email="<?php echo $theregistration->email ?>" data-role="<?php echo $theregistration->role ?>"><i class="ti-pencil" aria-hidden="true"></i></a> |
                                                        {{-- <a href="javascript:void(0)" class="text-info" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a> &nbsp;| --}}

                                                        {{-- <a onClick="javascript: return confirm('Are you sure you want to delete');" href="{{ route('deleteuser',$theregistration->id) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a> --}}

                                                        <form action="{{ route('deleteuser',$theregistration->id) }}" method="POST" class="del">
                                                            
                                                                    
                                                        
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
                                
                                
                                <div class="tab-pane" id="bs-modals-offseters">
                                    <div class="col-md-12">
                                        <div class="row">
                                            {{-- <span id="tableRowNumber"></span> --}}
                                            <table id="examplelisters" class="table table-hover display nowrap "style="width:100%">
                                                <thead>
                                                  <tr>
                                                      <th></th>
                                                      <th scope="col">Sn</th>
                                                      <th scope="col">Company Name</th>
                                                      <th scope="col">Industry</th>
                                                      <th scope="col">Subscription</th>
                                                      <th scope="col">Emission</th>
                                                      <th scope="col">Offset Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                </tbody>	
                                            </table>
                                         
                                        </div>
                                          
                                     </div>
                                </div>


                              <div class="tab-pane" id="bs-modals-offseters">
                                <div class="col-md-12">
                                    <div class="row">

                                       
                                        
                                        
                                        
                                      </div>
                                      
                                 </div>

                                  
                              </div> <!-- end preview code-->
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
    var table;

    $(document).ready(function() {
table = $('#exampleadmin').DataTable( {
    dom: 'Bfrtip',
    responsive: true,
    buttons: [
        'csv', 'excel', 'pdf', 'print'
    ],

//     'columnDefs': [
//      {
//         'targets': 0,
//         'checkboxes': {
//            'selectRow': true
//         },
//         className: 'select-checkbox',
//      }
//   ],

//   'select': {
//      'style': 'multi'
//   },
  'order': [[1, 'asc']],
  pageLength : 5,


} );


// $('#example tbody').on( 'click', 'tr', function () {
//      $("#tableRowNumber").text($(this).index()+1);
//     } );


} );
</script>

<script>
     $(document).ready(function() {
table = $('#examplelisters').DataTable( {
    dom: 'Bfrtip',
    responsive: true,
    buttons: [
        'csv', 'excel', 'pdf', 'print'
    ],

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


$('#examplelisters tbody').on( 'click', 'tr', function () {
     $("#tableRowNumber").text($(this).index()+1);
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


@endsection