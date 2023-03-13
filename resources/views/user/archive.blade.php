@extends('layouts.master')

@section('title')
    | Archive
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
                          <h4 class="header-title">Archives</h4>

                          <a href="#" data-bs-toggle="modal" data-bs-target="#scrollable-modalj" class="btn btn-primary-light btn-sm" style="float: right;
    margin-top: -30px;
"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
  </svg>Add Project</a>

                          <ul class="nav nav-tabs nav-bordered mb-3" style="margin-top: 30px;">
                              <li class="nav-item">
                                  <a href="#bs-modals-completed" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                      Completed
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="#bs-modals-pending" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                      Pending
                                  </a>
                              </li>
                              <li class="nav-item">
                                <a href="#bs-modals-rejected" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Rejected
                                </a>
                              </li>
                              {{-- <li class="nav-item">
                                <a href="#bs-modals-draft" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Drafts
                                </a>
                              </li> --}}
                          </ul> <!-- end nav-->
                          <div class="tab-content">
                              

                                
                                
                                
                                <div class="tab-pane show active" id="bs-modals-completed">
                                    <div class="col-md-12">
                                       <div class="row">
 
                                         @if(count($projects) > 0)
 
                                         @foreach ($projects as $project)
 <!--2 is completed-->
                                         @if ($project->status === 2)
 
                                         <div class="col-md-4">
                                             <div class="blog-post rounded overflow-hidden" style="
                                             border: 1px solid #e6dddd;
                                         ">
                                                 <div class="blog-detail">
                                                     <div class="entry-title mb-10">
                                                         <a style="color:black;" href="#">{{ ucfirst($project->project_name) }}</a>
                                                     </div>					
                                                     
                                                     <div class="entry-content">
                                                                     <p class="text-gray-600">{{ $project->project_desc }}</p>
                                                                 </div>
                                                     <div class="entry-share d-flex justify-content-between align-items-center">
                                                         <div class="entry-button">
                                                             <a href="{{route('previewproject',$project->id) }}" class="btn btn-primary-light btn-sm">View Project</a>
                                                         </div>
                                                         
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
 
                                        
                                         
                                             
                                         @endif
                                             
                                         @endforeach
 
                                         @else
 
                                         {{"No Completed Project"}}
 
                                         @endif
                                         
                                         
                                         
                                       </div>
                                         
                                    </div>
                                 </div>
                                 
                                 
                                 <div class="tab-pane" id="bs-modals-rejected">
                                    <div class="col-md-12">
                                       <div class="row">
 
                                         @if(count($projects) > 0)
 
                                         @foreach ($projects as $project)
 <!--2 is completed-->
                                         @if ($project->status === 3)
 
                                         <div class="col-md-4">
                                             <div class="blog-post rounded overflow-hidden" style="
                                             border: 1px solid #e6dddd;
                                         ">
                                                 <div class="blog-detail">
                                                     <div class="entry-title mb-10">
                                                         <a style="color:black;" href="#">{{ ucfirst($project->project_name) }}</a>
                                                     </div>					
                                                     
                                                     <div class="entry-content">
                                                                     <p class="text-gray-600">{{ $project->project_desc }}</p>
                                                                 </div>
                                                     <div class="entry-share d-flex justify-content-between align-items-center">
                                                         <div class="entry-button">
                                                             <a href="{{route('previewproject',$project->id) }}" class="btn btn-danger-light btn-sm">View Project</a>
                                                         </div>
                                                         
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
 
                                        
                                         
                                             
                                         @endif
                                             
                                         @endforeach
 
                                         @else
 
                                         {{"No Rejected Project"}}
 
                                         @endif
                                         
                                         
                                         
                                       </div>
                                         
                                    </div>
                                 </div>
                                
                                
                                


                              <div class="tab-pane" id="bs-modals-pending">
                                <div class="col-md-12">
                                    <div class="row">

                                        @if(count($projects) > 0)

                                        @foreach ($projects as $project)
<!--2 is completed-->
                                        @if ($project->status === 1)

                                        <div class="col-md-4">
                                            <div class="blog-post rounded overflow-hidden" style="
                                            border: 1px solid #e6dddd;
                                        ">
                                                <div class="blog-detail">
                                                    <div class="entry-title mb-10">
                                                        <a style="color:black;" href="#">{{ ucfirst($project->project_name) }}</a>
                                                    </div>					
                                                    
                                                    <div class="entry-content">
                                                                    <p class="text-gray-600">{{ $project->project_desc }}</p>
                                                                </div>
                                                    <div class="entry-share d-flex justify-content-between align-items-center">
                                                        <div class="entry-button">
                                                            <a href="{{ route('previewproject',$project->id) }}" class="btn btn-warning-light btn-sm">View Project</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                       
                                        
                                            
                                        @endif
                                            
                                        @endforeach

                                        @else

                                        {{"No Pending Project"}}

                                        @endif
                                        
                                        
                                        
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
@endsection