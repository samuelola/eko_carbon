@extends('layouts.adminmaster')

@section('title')
    | Total Bids
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

                        
                          <h4 class="header-title">Total Bids<span class="text-success" style="font-size: 11px;
                            margin-left: 8px;background-color:#f8fffb">{{ $userscount->count() }}</span></h4>
                          

                          <div class="col-md-12">
                            <div class="row">
                              {{-- <div class="dropdown" style="margin-left: 790px;
                              margin-bottom: 40px;">
                                  <a class="btn btn-secondary dropdown-toggle"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown link
                                  </a>
                                
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" id="helloadmin" href="#">Delete</a></li>
                                    
                                  </ul>
                                </div> --}}
                              <table id="exampleadmin" class="table table-hover display nowrap "style="width:100%">
                                   
                                  <thead>
                                      <tr>
                                          <th></th>
                                          {{-- <th scope="col">Sn</th> --}}
                                          <th scope="col">ID</th>
                                          <th scope="col">Project Name</th>
                                          <th scope="col">Carbon Balance</th>
                                          <th scope="col">Lister</th>
                                          <th scope="col">Bid</th>
                                          {{-- <th scope="col">Action</th> --}}
                                        </tr>
                                    </thead>

                                    <tbody>
                                      @php
                                      $sn = 0;
                                      @endphp
                                       @foreach ($userscount as $theregistration)
                                       <tr>
                                           <td>{{ $theregistration->id }}</td>
                                           {{-- <td>{{ $sn+=1; }}</td> --}}
                                           <td>{{$theregistration->project->idproject}}</td>
                                           <td>{{ ucfirst($theregistration->project->project_name) }}</td>
                                           <td>{{ $theregistration->project->tonnes }}/{{ $theregistration->project->carbon_credit}}</td>
                                           <td>{{ ucfirst($theregistration->user->firstname) }} {{ ucfirst($theregistration->user->lastname) }}</td>
                                           <td>${{ isset($theregistration->project->projectcost) ? $theregistration->project->projectcost : '0' }}</td>
                                           
                                           {{-- <td>
                                            <a id="request1" data-bidcost="{{ $theregistration->project->projectcost }}" data-prroject_name="{{ $theregistration->project->project_name }}" href="javascript:void(0)" class="text-success" data-bs-toggle="modal" data-bs-target="#bs-bids-modal-lg" data-bs-original-title="View Details">View Details</a> 
                                           </td> --}}
                                         </tr>
                                       @endforeach
                                    </tbody>

                              </table>    
                              
                              
                              
                            </div>
                              
                         </div>
                          
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


<div class="modal fade" id="bs-bids-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Issue Carbon Credit</h4>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Sell </p>
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Bid</label>
                            <input type="text" class="form-control">
                        </div>
                       
                        <div class="form-group">
                            <label for="">Credit to be sold</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                   
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                
            </div>
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
  pageLength : 8,


} );
} );
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
    $('#helloadmin').on('click',function(){

        var selected_rows = table.column(0).checkboxes.selected();

        var rowIds = [];

        $.each(selected_rows, function(key,student_Id){
            
            rowIds.push(student_Id);
            
        });

        console.log(rowIds);



        //send using Ajax

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });



        $.ajax({
            type: "POST",
            url: "/deletelister",
            data:{id:rowIds},
            success: function (data) {

            alert(data);
            location.reload();
            
            },

            error: function (data) {
            
            alert(data);

            }

        });

    });
</script>


<script>
    $('#hellolisters').on('click',function(){

        var selected_rows = tablee.column(0).checkboxes.selected();

        var rowIds = [];

        $.each(selected_rows, function(key,student_Id){
            
            rowIds.push(student_Id);
            
        });

        console.log(rowIds);



        //send using Ajax

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });



        $.ajax({
            type: "POST",
            url: "/deletelister",
            data:{id:rowIds},
            success: function (data) {

            alert(data);
            location.reload();
            
            },

            error: function (data) {
            
            alert(data);

            }

        });

    });
</script>


@endsection