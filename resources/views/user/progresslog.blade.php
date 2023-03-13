@extends('layouts.master')

@section('title')
    | Progress Log
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 250.5px;">
    <div class="container-full">
  

      <!-- Main content -->
      <section class="content" style="margin-top: 60px
      ;">
        

         <div class="row">
              <div class="col-12">
                
                  <div class="card">
                      <div class="card-body">
                        <button data-bs-toggle="modal" data-bs-target="#scrollable-modaljt" style="float: right;
                         margin-top: -80px;
    margin-right: -19px;" type="submit"  class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>Update Log</button>
                          <h4 class="header-title">Project Updates</h4>
                          
{{-- <a id="requestt1" href="javascript:void(0)" data-created_at="<?php echo date('M j, Y', strtotime($theregistration->created_at)) ?>" data-id="<?php echo $theregistration->id ?>"  data-project_type="<?php echo ucfirst($theregistration->project_type) ?>" data-project_name="<?php echo ucfirst($theregistration->project_name) ?>" data-project_desc="<?php echo $theregistration->project_desc ?>" data-tonnes="<?php echo $theregistration->tonnes ?>"  data-external_link="<?php echo $theregistration->external_link ?>"  data-idproject="<?php echo $theregistration->idproject ?>" data-carbon_credit="<?php echo $theregistration->carbon_credit ?>" data-status="<?php echo $theregistration->status ?>"  data-created_at="<?php echo $theregistration->created_at ?>" data-doc="/<?php echo $theregistration->image ?>"    class="text-success" data-bs-toggle="modal" data-bs-target="#bs-project-modal-lg" data-bs-original-title="View Details"><i class="ti-eye" aria-hidden="true"></i></a> --}}
                          <p>An update of your project over time</p>

                         {{-- <form action="">
                           <input type="text">
                         </form> --}}
                          
                          <div class="timeline-alt pb-0" style="
                                padding-left: 10px;
                                padding-right: 10px;
                            ">
                                    
                                   
        
                                    @foreach ($theprojectlog as $value)

                                      <div class="timeline-item">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#46bc5c" class="bi bi-check-circle" viewBox="0 0 16 16">
                                              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                              <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                          </svg>
                                          <div class="timeline-item-info">
                                              <h5 style="margin-top: -18px !important;" class="fs-14 mt-0 mb-1">Update Description   <span>{{ $value->updated_at->diffForHumans() }}</span></h5>
                                              <p>
                                                {{ ucfirst($value->project_desc) }}
                                                {{ $value->updated_at }}
                                              </p>
                                          </div>
                                      </div>
                                        
                                    @endforeach
        
                            
    
        
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

<!---where to add log-->

  <!-- Long Content Scroll Modal -->
  <div class="modal fade" id="scrollable-modaljt" tabindex="-1" role="dialog"
  aria-labelledby="scrollableModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="scrollableModalTitle">Add Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form18" class="ps-3 pe-3" action="#"  enctype="multipart/form-data">

          <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
					<input type="hidden" id="user_id" value="{{Auth::user()->id}}" name="user_id"/>
          <input type="hidden" id="status" value="1" name="status"/>
          <input type="hidden" id="carbon_credit" value="0" name="carbon_credit"/>
          <input type="hidden" id="theprojectview" value="0" name="theprojectview"/>
          <div class="mb-3">
            <label for="username" class="form-label">Project Name/Title:</label>
              <select class="form-select" name="project_type" id="project_typee" required="">
                <option selected disabled>Select--</option>
                @foreach ($theprojectlog as $value)

                <option  value="{{ $value->project_name }}">{{ $value->project_name }}</option>
                    
                @endforeach
                
                {{-- <option value="development">development</option>
                <option value="illustration">illustration</option>
                <option value="branding">branding</option>
                <option value="video">video</option> --}}
              </select>
          </div>

          

          <div class="mb-3">
            <label for="password" class="form-label">Project Description</label>
            <textarea style="height: 91px;" class="form-control" name="project_desc" id="project_desce" cols="30" rows="10" required=""></textarea>
          </div>

          

         
          
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
        <button type="submit" id="updatelog"  class="btn btn-primary">Log Update</button>
        {{-- <a href="{{ route('dashboard') }}" class="btn btn-primary">Submit</a> --}}
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 
@endsection

@section('script')

<script>
  $(document).ready(function () {
          $('#project_typee').on('change', function () {
              var projectName = this.value;

      $('#project_desce').val('');

      $.ajax({
                  url: '{{ route('getDesc') }}?project_name='+projectName,
                  type: 'get',
                  success: function (res) {

                    console.log(res);
                      
                    $(".modal-body #project_desce").val(res);
                  }
              });
             
          });
          
      });
</script>

<script>



  $(document).ready(function (e) {
  
    $(document).on('click', '#updatelog', function(event){
  
      event.preventDefault();
  
      var formData = new FormData(document.getElementById("form18"));
  
      $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
  
  
          $.ajax({
                  type: "POST",
                  url: "/updatelog",
          data: formData,
                          contentType: false,
              cache: false,
          processData:false,
                  success: function (data) {
                      
            $('#form18')[0].reset();
            $('#scrollable-modaljt').modal('hide');	
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


@endsection