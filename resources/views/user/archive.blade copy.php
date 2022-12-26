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
                              <li class="nav-item">
                                <a href="#bs-modals-draft" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Drafts
                                </a>
                              </li>
                          </ul> <!-- end nav-->
                          <div class="tab-content">
                              

                                <div class="tab-pane show active" id="bs-modals-completed">
                                   <div class="col-md-12">
                                      <div class="row">
                                        <div class="col-md-4">
                                            <div class="blog-post rounded overflow-hidden" style="
                                            border: 1px solid #e6dddd;
                                        ">
                                                <div class="blog-detail">
                                                    <div class="entry-title mb-10">
                                                        <a style="#0E0E23;" href="#">Project 1</a>
                                                    </div>					
                                                    {{-- <div class="entry-meta mb-10">
                                                        <ul class="list-unstyled">
                                                            <li><a href="#" class="text-mute hover-primary"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                                            <li><a href="#" class="text-mute hover-primary"><i class="fa fa-comment-o"></i> 5</a></li>
                                                            <li><a href="#" class="text-mute hover-primary"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                                        </ul>
                                                    </div> --}}
                                                    <div class="entry-content">
                                                                    <p class="text-gray-600">A report of all the emissions your building has emitted over time</p>
                                                                </div>
                                                    <div class="entry-share d-flex justify-content-between align-items-center">
                                                        <div class="entry-button">
                                                            <a href="{{ route('dashboard') }}" class="btn btn-primary-light btn-sm">View Project</a>
                                                        </div>
                                                        {{-- <div class="social">
                                                            <strong>Share : </strong>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="#" class="text-mute hover-primary"> <i class="fa fa-facebook"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="text-mute hover-primary"> <i class="fa fa-twitter"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="text-mute hover-primary"> <i class="fa fa-pinterest-p"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="text-mute hover-primary"> <i class="fa fa-dribbble"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="blog-post rounded overflow-hidden" style="
                                            border: 1px solid #e6dddd;
                                        ">
                                               <div class="blog-detail">
                                                <div class="entry-title mb-10">
                                                    <a style="#0E0E23;" href="#">Project 2</a>
                                                </div>					
                                                {{-- <div class="entry-meta mb-10">
                                                    <ul class="list-unstyled">
                                                        <li><a href="#" class="text-mute hover-primary"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                                        <li><a href="#" class="text-mute hover-primary"><i class="fa fa-comment-o"></i> 5</a></li>
                                                        <li><a href="#" class="text-mute hover-primary"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                                    </ul>
                                                </div> --}}
                                                <div class="entry-content">
                                                                <p class="text-gray-600">A report of all the emissions your building has emitted over time</p>
                                                            </div>
                                                <div class="entry-share d-flex justify-content-between align-items-center">
                                                    <div class="entry-button">
                                                        <a href="{{ route('dashboard') }}" class="btn btn-primary-light btn-sm">View Project</a>
                                                    </div>
                                                    {{-- <div class="social">
                                                        <strong>Share : </strong>
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="#" class="text-mute hover-primary"> <i class="fa fa-facebook"></i> </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="text-mute hover-primary"> <i class="fa fa-twitter"></i> </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="text-mute hover-primary"> <i class="fa fa-pinterest-p"></i> </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="text-mute hover-primary"> <i class="fa fa-dribbble"></i> </a>
                                                            </li>
                                                        </ul>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <div class="blog-post rounded overflow-hidden" style="
                                            border: 1px solid #e6dddd;
                                        ">
                                                <div class="blog-detail">
                                                    <div class="entry-title mb-10">
                                                        <a style="#0E0E23;" href="#">Project 3</a>
                                                    </div>					
                                                    {{-- <div class="entry-meta mb-10">
                                                        <ul class="list-unstyled">
                                                            <li><a href="#" class="text-mute hover-primary"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                                            <li><a href="#" class="text-mute hover-primary"><i class="fa fa-comment-o"></i> 5</a></li>
                                                            <li><a href="#" class="text-mute hover-primary"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                                        </ul>
                                                    </div> --}}
                                                    <div class="entry-content">
                                                                    <p class="text-gray-600">A report of all the emissions your building has emitted over time</p>
                                                                </div>
                                                    <div class="entry-share d-flex justify-content-between align-items-center">
                                                        <div class="entry-button">
                                                            <a href="{{ route('dashboard') }}" class="btn btn-primary-light btn-sm">View Project</a>
                                                        </div>
                                                        {{-- <div class="social">
                                                            <strong>Share : </strong>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="#" class="text-mute hover-primary"> <i class="fa fa-facebook"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="text-mute hover-primary"> <i class="fa fa-twitter"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="text-mute hover-primary"> <i class="fa fa-pinterest-p"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="text-mute hover-primary"> <i class="fa fa-dribbble"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                      </div>
                                        
                                   </div>
                                </div>
                                
                                
                                <div class="tab-pane" id="bs-modals-rejected">
                                    <div class="col-md-12">
                                        <div class="row">
                                          <div class="col-md-4">
                                              <div class="blog-post rounded overflow-hidden" style="
                                              border: 1px solid #e6dddd;
                                          ">
                                                  <div class="blog-detail">
                                                      <div class="entry-title mb-10">
                                                          <a style="#0E0E23;" href="#">Project 1</a>
                                                      </div>					
                                                      {{-- <div class="entry-meta mb-10">
                                                          <ul class="list-unstyled">
                                                              <li><a href="#" class="text-mute hover-primary"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                                              <li><a href="#" class="text-mute hover-primary"><i class="fa fa-comment-o"></i> 5</a></li>
                                                              <li><a href="#" class="text-mute hover-primary"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                                          </ul>
                                                      </div> --}}
                                                      <div class="entry-content">
                                                                      <p class="text-gray-600">A report of all the emissions your building has emitted over time</p>
                                                                  </div>
                                                      <div class="entry-share d-flex justify-content-between align-items-center">
                                                          <div class="entry-button">
                                                              <a href="#" class="btn btn-danger-light btn-sm">Rejected Project</a>
                                                          </div>
                                                          {{-- <div class="social">
                                                              <strong>Share : </strong>
                                                              <ul class="list-unstyled">
                                                                  <li>
                                                                      <a href="#" class="text-mute hover-primary"> <i class="fa fa-facebook"></i> </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="#" class="text-mute hover-primary"> <i class="fa fa-twitter"></i> </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="#" class="text-mute hover-primary"> <i class="fa fa-pinterest-p"></i> </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="#" class="text-mute hover-primary"> <i class="fa fa-dribbble"></i> </a>
                                                                  </li>
                                                              </ul>
                                                          </div> --}}
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="blog-post rounded overflow-hidden" style="
                                              border: 1px solid #e6dddd;
                                          ">
                                                 <div class="blog-detail">
                                                  <div class="entry-title mb-10">
                                                      <a style="#0E0E23;" href="#">Project 2</a>
                                                  </div>					
                                                  {{-- <div class="entry-meta mb-10">
                                                      <ul class="list-unstyled">
                                                          <li><a href="#" class="text-mute hover-primary"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                                          <li><a href="#" class="text-mute hover-primary"><i class="fa fa-comment-o"></i> 5</a></li>
                                                          <li><a href="#" class="text-mute hover-primary"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                                      </ul>
                                                  </div> --}}
                                                  <div class="entry-content">
                                                                  <p class="text-gray-600">A report of all the emissions your building has emitted over time</p>
                                                              </div>
                                                  <div class="entry-share d-flex justify-content-between align-items-center">
                                                      <div class="entry-button">
                                                        <a href="#" class="btn btn-danger-light btn-sm">Rejected Project</a>
                                                      </div>
                                                      {{-- <div class="social">
                                                          <strong>Share : </strong>
                                                          <ul class="list-unstyled">
                                                              <li>
                                                                  <a href="#" class="text-mute hover-primary"> <i class="fa fa-facebook"></i> </a>
                                                              </li>
                                                              <li>
                                                                  <a href="#" class="text-mute hover-primary"> <i class="fa fa-twitter"></i> </a>
                                                              </li>
                                                              <li>
                                                                  <a href="#" class="text-mute hover-primary"> <i class="fa fa-pinterest-p"></i> </a>
                                                              </li>
                                                              <li>
                                                                  <a href="#" class="text-mute hover-primary"> <i class="fa fa-dribbble"></i> </a>
                                                              </li>
                                                          </ul>
                                                      </div> --}}
                                                  </div>
                                              </div>
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-4">
                                              <div class="blog-post rounded overflow-hidden" style="
                                              border: 1px solid #e6dddd;
                                          ">
                                                  <div class="blog-detail">
                                                      <div class="entry-title mb-10">
                                                          <a style="#0E0E23;" href="#">Project 3</a>
                                                      </div>					
                                                      {{-- <div class="entry-meta mb-10">
                                                          <ul class="list-unstyled">
                                                              <li><a href="#" class="text-mute hover-primary"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                                              <li><a href="#" class="text-mute hover-primary"><i class="fa fa-comment-o"></i> 5</a></li>
                                                              <li><a href="#" class="text-mute hover-primary"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                                          </ul>
                                                      </div> --}}
                                                      <div class="entry-content">
                                                                      <p class="text-gray-600">A report of all the emissions your building has emitted over time</p>
                                                                  </div>
                                                      <div class="entry-share d-flex justify-content-between align-items-center">
                                                          <div class="entry-button">
                                                            <a href="#" class="btn btn-danger-light btn-sm">Rejected Project</a>
                                                          </div>
                                                          {{-- <div class="social">
                                                              <strong>Share : </strong>
                                                              <ul class="list-unstyled">
                                                                  <li>
                                                                      <a href="#" class="text-mute hover-primary"> <i class="fa fa-facebook"></i> </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="#" class="text-mute hover-primary"> <i class="fa fa-twitter"></i> </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="#" class="text-mute hover-primary"> <i class="fa fa-pinterest-p"></i> </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="#" class="text-mute hover-primary"> <i class="fa fa-dribbble"></i> </a>
                                                                  </li>
                                                              </ul>
                                                          </div> --}}
                                                      </div>
                                                  </div>
                                              </div>
                                              
                                          </div>
                                        </div>
                                          
                                     </div>



                                </div>    
                                
                                
                                <div class="tab-pane" id="bs-modals-draft">
                                    <div class="col-md-12">
                                        <div class="row">
                                          <div class="col-md-4">
                                              <div class="blog-post rounded overflow-hidden" style="
                                              border: 1px solid #e6dddd;
                                          ">
                                                  <div class="blog-detail">
                                                      <div class="entry-title mb-10">
                                                          <a style="#0E0E23;" href="#">Project 1</a>
                                                      </div>					
                                                      {{-- <div class="entry-meta mb-10">
                                                          <ul class="list-unstyled">
                                                              <li><a href="#" class="text-mute hover-primary"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                                              <li><a href="#" class="text-mute hover-primary"><i class="fa fa-comment-o"></i> 5</a></li>
                                                              <li><a href="#" class="text-mute hover-primary"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                                          </ul>
                                                      </div> --}}
                                                      <div class="entry-content">
                                                                      <p class="text-gray-600">A report of all the emissions your building has emitted over time</p>
                                                                  </div>
                                                      <div class="entry-share d-flex justify-content-between align-items-center">
                                                          <div class="entry-button">
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#scrollable-modalj" class="btn btn-info-light btn-sm">Complete Project</a>
                                                          </div>
                                                          {{-- <div class="social">
                                                              <strong>Share : </strong>
                                                              <ul class="list-unstyled">
                                                                  <li>
                                                                      <a href="#" class="text-mute hover-primary"> <i class="fa fa-facebook"></i> </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="#" class="text-mute hover-primary"> <i class="fa fa-twitter"></i> </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="#" class="text-mute hover-primary"> <i class="fa fa-pinterest-p"></i> </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="#" class="text-mute hover-primary"> <i class="fa fa-dribbble"></i> </a>
                                                                  </li>
                                                              </ul>
                                                          </div> --}}
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="blog-post rounded overflow-hidden" style="
                                              border: 1px solid #e6dddd;
                                          ">
                                                 <div class="blog-detail">
                                                  <div class="entry-title mb-10">
                                                      <a style="#0E0E23;" href="#">Project 2</a>
                                                  </div>					
                                                  {{-- <div class="entry-meta mb-10">
                                                      <ul class="list-unstyled">
                                                          <li><a href="#" class="text-mute hover-primary"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                                          <li><a href="#" class="text-mute hover-primary"><i class="fa fa-comment-o"></i> 5</a></li>
                                                          <li><a href="#" class="text-mute hover-primary"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                                      </ul>
                                                  </div> --}}
                                                  <div class="entry-content">
                                                                  <p class="text-gray-600">A report of all the emissions your building has emitted over time</p>
                                                              </div>
                                                  <div class="entry-share d-flex justify-content-between align-items-center">
                                                      <div class="entry-button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#scrollable-modalj" class="btn btn-info-light btn-sm">Complete Project</a>
                                                      </div>
                                                      {{-- <div class="social">
                                                          <strong>Share : </strong>
                                                          <ul class="list-unstyled">
                                                              <li>
                                                                  <a href="#" class="text-mute hover-primary"> <i class="fa fa-facebook"></i> </a>
                                                              </li>
                                                              <li>
                                                                  <a href="#" class="text-mute hover-primary"> <i class="fa fa-twitter"></i> </a>
                                                              </li>
                                                              <li>
                                                                  <a href="#" class="text-mute hover-primary"> <i class="fa fa-pinterest-p"></i> </a>
                                                              </li>
                                                              <li>
                                                                  <a href="#" class="text-mute hover-primary"> <i class="fa fa-dribbble"></i> </a>
                                                              </li>
                                                          </ul>
                                                      </div> --}}
                                                  </div>
                                              </div>
                                              </div>
                                              
                                          </div>
                                          <div class="col-md-4">
                                              <div class="blog-post rounded overflow-hidden" style="
                                              border: 1px solid #e6dddd;
                                          ">
                                                  <div class="blog-detail">
                                                      <div class="entry-title mb-10">
                                                          <a style="#0E0E23;" href="#">Project 3</a>
                                                      </div>					
                                                      {{-- <div class="entry-meta mb-10">
                                                          <ul class="list-unstyled">
                                                              <li><a href="#" class="text-mute hover-primary"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                                              <li><a href="#" class="text-mute hover-primary"><i class="fa fa-comment-o"></i> 5</a></li>
                                                              <li><a href="#" class="text-mute hover-primary"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                                          </ul>
                                                      </div> --}}
                                                      <div class="entry-content">
                                                                      <p class="text-gray-600">A report of all the emissions your building has emitted over time</p>
                                                                  </div>
                                                      <div class="entry-share d-flex justify-content-between align-items-center">
                                                          <div class="entry-button">
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#scrollable-modalj" class="btn btn-info-light btn-sm">Complete Project</a>
                                                          </div>
                                                          {{-- <div class="social">
                                                              <strong>Share : </strong>
                                                              <ul class="list-unstyled">
                                                                  <li>
                                                                      <a href="#" class="text-mute hover-primary"> <i class="fa fa-facebook"></i> </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="#" class="text-mute hover-primary"> <i class="fa fa-twitter"></i> </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="#" class="text-mute hover-primary"> <i class="fa fa-pinterest-p"></i> </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="#" class="text-mute hover-primary"> <i class="fa fa-dribbble"></i> </a>
                                                                  </li>
                                                              </ul>
                                                          </div> --}}
                                                      </div>
                                                  </div>
                                              </div>
                                              
                                          </div>
                                        </div>
                                          
                                     </div>
                                </div>


                              <div class="tab-pane" id="bs-modals-pending">
                                <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-4">
                                          <div class="blog-post rounded overflow-hidden" style="
                                          border: 1px solid #e6dddd;
                                      ">
                                              <div class="blog-detail">
                                                  <div class="entry-title mb-10">
                                                      <a style="#0E0E23;" href="#">Project 1</a>
                                                  </div>					
                                                  {{-- <div class="entry-meta mb-10">
                                                      <ul class="list-unstyled">
                                                          <li><a href="#" class="text-mute hover-primary"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                                          <li><a href="#" class="text-mute hover-primary"><i class="fa fa-comment-o"></i> 5</a></li>
                                                          <li><a href="#" class="text-mute hover-primary"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                                      </ul>
                                                  </div> --}}
                                                  <div class="entry-content">
                                                                  <p class="text-gray-600">A report of all the emissions your building has emitted over time</p>
                                                              </div>
                                                  <div class="entry-share d-flex justify-content-between align-items-center">
                                                      <div class="entry-button">
                                                          <a href="#" class="btn btn-warning-light btn-sm">Project Pending</a>
                                                      </div>
                                                      {{-- <div class="social">
                                                          <strong>Share : </strong>
                                                          <ul class="list-unstyled">
                                                              <li>
                                                                  <a href="#" class="text-mute hover-primary"> <i class="fa fa-facebook"></i> </a>
                                                              </li>
                                                              <li>
                                                                  <a href="#" class="text-mute hover-primary"> <i class="fa fa-twitter"></i> </a>
                                                              </li>
                                                              <li>
                                                                  <a href="#" class="text-mute hover-primary"> <i class="fa fa-pinterest-p"></i> </a>
                                                              </li>
                                                              <li>
                                                                  <a href="#" class="text-mute hover-primary"> <i class="fa fa-dribbble"></i> </a>
                                                              </li>
                                                          </ul>
                                                      </div> --}}
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="blog-post rounded overflow-hidden" style="
                                          border: 1px solid #e6dddd;
                                      ">
                                             <div class="blog-detail">
                                              <div class="entry-title mb-10">
                                                  <a style="#0E0E23;" href="#">Project 2</a>
                                              </div>					
                                              {{-- <div class="entry-meta mb-10">
                                                  <ul class="list-unstyled">
                                                      <li><a href="#" class="text-mute hover-primary"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                                      <li><a href="#" class="text-mute hover-primary"><i class="fa fa-comment-o"></i> 5</a></li>
                                                      <li><a href="#" class="text-mute hover-primary"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                                  </ul>
                                              </div> --}}
                                              <div class="entry-content">
                                                              <p class="text-gray-600">A report of all the emissions your building has emitted over time</p>
                                                          </div>
                                              <div class="entry-share d-flex justify-content-between align-items-center">
                                                  <div class="entry-button">
                                                    <a href="#" class="btn btn-warning-light btn-sm">Project Pending</a>
                                                  </div>
                                                  {{-- <div class="social">
                                                      <strong>Share : </strong>
                                                      <ul class="list-unstyled">
                                                          <li>
                                                              <a href="#" class="text-mute hover-primary"> <i class="fa fa-facebook"></i> </a>
                                                          </li>
                                                          <li>
                                                              <a href="#" class="text-mute hover-primary"> <i class="fa fa-twitter"></i> </a>
                                                          </li>
                                                          <li>
                                                              <a href="#" class="text-mute hover-primary"> <i class="fa fa-pinterest-p"></i> </a>
                                                          </li>
                                                          <li>
                                                              <a href="#" class="text-mute hover-primary"> <i class="fa fa-dribbble"></i> </a>
                                                          </li>
                                                      </ul>
                                                  </div> --}}
                                              </div>
                                          </div>
                                          </div>
                                          
                                      </div>
                                      <div class="col-md-4">
                                          <div class="blog-post rounded overflow-hidden" style="
                                          border: 1px solid #e6dddd;
                                      ">
                                              <div class="blog-detail">
                                                  <div class="entry-title mb-10">
                                                      <a style="#0E0E23;" href="#">Project 3</a>
                                                  </div>					
                                                  {{-- <div class="entry-meta mb-10">
                                                      <ul class="list-unstyled">
                                                          <li><a href="#" class="text-mute hover-primary"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                                          <li><a href="#" class="text-mute hover-primary"><i class="fa fa-comment-o"></i> 5</a></li>
                                                          <li><a href="#" class="text-mute hover-primary"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                                      </ul>
                                                  </div> --}}
                                                  <div class="entry-content">
                                                                  <p class="text-gray-600">A report of all the emissions your building has emitted over time</p>
                                                              </div>
                                                  <div class="entry-share d-flex justify-content-between align-items-center">
                                                      <div class="entry-button">
                                                        <a href="#" class="btn btn-warning-light btn-sm">Project Pending</a>
                                                      </div>
                                                      {{-- <div class="social">
                                                          <strong>Share : </strong>
                                                          <ul class="list-unstyled">
                                                              <li>
                                                                  <a href="#" class="text-mute hover-primary"> <i class="fa fa-facebook"></i> </a>
                                                              </li>
                                                              <li>
                                                                  <a href="#" class="text-mute hover-primary"> <i class="fa fa-twitter"></i> </a>
                                                              </li>
                                                              <li>
                                                                  <a href="#" class="text-mute hover-primary"> <i class="fa fa-pinterest-p"></i> </a>
                                                              </li>
                                                              <li>
                                                                  <a href="#" class="text-mute hover-primary"> <i class="fa fa-dribbble"></i> </a>
                                                              </li>
                                                          </ul>
                                                      </div> --}}
                                                  </div>
                                              </div>
                                          </div>
                                          
                                      </div>
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