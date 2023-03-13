@extends('layouts.adminmaster')

@section('title')
    | Project Directory
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
                        
                          <h4 class="header-title">Project Directory<span class="text-success" style="font-size: 11px;
                            margin-left: 8px;background-color:#f8fffb">{{$adminprojects ? $adminprojects->count() : '0'}}</span></h4>
{{-- 
                          <a href="#" data-bs-toggle="modal" data-bs-target="#scrollable-modalj" class="btn btn-primary-light btn-sm" style="float: right;
    margin-top: -30px;
"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
  </svg>Add Project</a> --}}

                          <ul class="nav nav-tabs nav-bordered mb-3" style="margin-top: 30px;">
                              <li class="nav-item">
                                  <a href="#bs-modals-all" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                      
                                      All <span style="font-size: 11px;">({{ $adminprojects->count() ? $adminprojects->count() : 0 }})</span>

                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="#bs-modals-pendingproject" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Pending <span style="font-size: 11px;">({{ $adminprojectpending->count() ? $adminprojectpending->count() : 0 }})</span> 
                                  </a>
                              </li>
                              <li class="nav-item">
                                <a href="#bs-modals-approvedproject" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Approved <span style="font-size: 11px;">({{ $adminprojectapproved->count() ? $adminprojectapproved->count() : 0 }})</span> 
                                </a>
                              </li>

                              <li class="nav-item">
                                <a href="#bs-modals-declineproject" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Declined <span style="font-size: 11px;">({{ $adminprojectdeclined->count() ? $adminprojectdeclined->count() : 0 }})</span> 
                                </a>
                              </li>
                              
                          </ul> <!-- end nav-->
                          <div class="tab-content">


                            <div class="tab-pane show active" id="bs-modals-all">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="dropdown" style="margin-left: 790px;
                                        margin-bottom: 40px;">
                                            <a class="btn btn-secondary dropdown-toggle"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              More Actions
                                            </a>
                                          
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item approve" id="approveall" href="#">Approve</a></li>
                                              <li><a class="dropdown-item" id="disapproveall" href="#">Disapprove</a></li>
                                              <li><a class="dropdown-item" id="pendingall" href="#">Pending</a></li>                                                                                                     
                                              
                                            </ul>
                                          </div>
                                     
                                        <table id="exampleprojects" class="table table-hover display nowrap"style="width:100%">
                                            <thead>
                                              <tr>
                                                  <th></th>
                                                  {{-- <th scope="col">Sn</th> --}}
                                                  <th scope="col">ID</th>
                                                  <th scope="col">Project Name</th>
                                                  <th scope="col">Carbon Balance</th>
                                                  <th scope="col">Carbon Credit</th>
                                                  <th scope="col">Owner Name</th>
                                                  <th scope="col">Status</th>
                                                  {{-- <th scope="col">Created_at</th>
                                                  <th scope="col">Updated_at</th> --}}
                                                  <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @php
                                              $sn = 0;
                                              @endphp
                                              @foreach ($adminprojects as $theregistration)
                                              <tr>
                                                  <td>{{ $theregistration->id }}</td>
                                                  {{-- <td>{{ $sn+=1; }}</td> --}}
                                                  <td>{{ $theregistration->idproject }}</td>
                                                  <td>{{ ucfirst($theregistration->project_name) }}</td>
                                                  <td>{{$theregistration->tonnes }}</td>
                                                  <td>{{$theregistration->carbon_credit }}</td>
                                                  <td>{{ ucfirst($theregistration->user->firstname) }} {{ ucfirst($theregistration->user->lastname) }}</td>
                                                  <td>
                                                      @if ($theregistration->status =='1')

                                                      <span class="text-warning" style="font-size: 11px;
                        margin-left: 8px;">Pending</span>

                                                      @elseif($theregistration->status =='2')

                                                      <span class="text-success" style="font-size: 11px;
                                                      margin-left: 8px;">Approved</span>

                                                      @else

                                                      <span class="text-danger" style="font-size: 11px;
                                                      margin-left: 8px;">Declined</span>
                                                          
                                                      @endif
                                                  </td>
                                                  {{-- <td>{{ Carbon\Carbon::parse($theregistration->created_at)->format('M j, Y ')}}</td>
                                                  <td>{{ Carbon\Carbon::parse($theregistration->updated_at)->format('M j, Y ')}}</td> --}}
                                                  <td>
                                                    <a id="requestt1" href="javascript:void(0)" data-created_at="<?php echo date('M j, Y', strtotime($theregistration->created_at)) ?>" data-id="<?php echo $theregistration->id ?>"  data-project_type="<?php echo ucfirst($theregistration->project_type) ?>" data-project_name="<?php echo ucfirst($theregistration->project_name) ?>" data-project_desc="<?php echo $theregistration->project_desc ?>" data-tonnes="<?php echo $theregistration->tonnes ?>"  data-external_link="<?php echo $theregistration->external_link ?>"  data-idproject="<?php echo $theregistration->idproject ?>" data-carbon_credit="<?php echo $theregistration->carbon_credit ?>" data-status="<?php echo $theregistration->status ?>"  data-created_at="<?php echo $theregistration->created_at ?>" data-doc="/<?php echo $theregistration->image ?>"    class="text-success" data-bs-toggle="modal" data-bs-target="#bs-project-modal-lg" data-bs-original-title="View Details"><i class="ti-eye" aria-hidden="true"></i></a> &nbsp;|
                                                    <a id="sammproject" href="javascript:void(0)" class="text-info" data-bs-toggle="modal" data-bs-target="#bs-editproject-modal-lg" data-bs-original-title="Edit" data-id="<?php echo $theregistration->id ?>" data-project_type="<?php echo ucfirst($theregistration->project_type) ?>" data-projectcost="<?php echo ucfirst($theregistration->projectcost) ?>" data-project_name="<?php echo ucfirst($theregistration->project_name) ?>" data-project_desc="<?php echo $theregistration->project_desc ?>" data-tonnes="<?php echo $theregistration->tonnes ?>"  data-external_link="<?php echo $theregistration->external_link ?>"  data-idproject="<?php echo $theregistration->idproject ?>" data-status="<?php echo $theregistration->status ?>" data-carbon_credit="<?php echo $theregistration->carbon_credit ?>" data-created_at="<?php echo $theregistration->created_at ?>" data-myimages="/<?php echo $theregistration->image ?>"><i class="ti-pencil" aria-hidden="true"></i></a> |
                                                    {{-- <a href="javascript:void(0)" class="text-info" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a> &nbsp;| --}}

                                                    {{-- <a onClick="javascript: return confirm('Are you sure you want to delete');" href="{{ route('deleteuser',$theregistration->id) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a> --}}

                                                    <form action="{{ route('deleteproject',$theregistration->id) }}" method="POST" class="del1">
                                                        
                                                                
                                                    
                                                                    @csrf
                                                                    @method('DELETE')
                                                    
                                                     <button style="border: none;
                                                     background-color: transparent;
                                                     padding: 0px;
                                                     float: right;
                                                     margin-top: -20px;
                                                     margin-right: 40px;" type="submit" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete" onclick="return confirm('Are you sure you want to delete?')"><i class="ti-trash" aria-hidden="true"></i></button>
                                                     </form>


                                                    
                                                           
                                                  </td>
                                                </tr>
                                              @endforeach
                                            
                                           
                                          </tbody>	
                                        </table>
                                      
                                    </div>
                                      
                                 </div>



                            </div> 




                            <div class="tab-pane " id="bs-modals-pendingproject">
                                <div class="col-md-12">
                                   <div class="row">
                                    <div class="dropdown" style="margin-left: 790px;
                                    margin-bottom: 40px;">
                                        <a class="btn btn-secondary dropdown-toggle"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          More Actions
                                        </a>
                                      
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item approve" id="approvepending" href="#">Approve</a></li>
                                          <li><a class="dropdown-item" id="disapprovepending" href="#">Disapprove</a></li>                                                                                                     
                                          
                                        </ul>
                                      </div>
                                     <table id="exampleadminn" class="table table-hover display nowrap "style="width:100%">
                                         <thead>
                                           <tr>
                                               <th></th>
                                               {{-- <th scope="col">Sn</th> --}}
                                               <th scope="col">ID</th>
                                               <th scope="col">Project Name</th>
                                               <th scope="col">Carbon Balance</th>
                                               <th scope="col">Carbon Credit</th>
                                               <th scope="col">Owner Name</th>
                                               <th scope="col">Status</th>
                                               {{-- <th scope="col">Created_at</th>
                                               <th scope="col">Updated_at</th> --}}
                                               <th scope="col">Action</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             @php
                                             $sn = 0;
                                             @endphp
                                             @foreach ($adminprojectpending as $theregistration)
                                             <tr>
                                                 <td>{{ $theregistration->id }}</td>
                                                 {{-- <td>{{ $sn+=1; }}</td> --}}
                                                 <td>{{ $theregistration->idproject }}</td>
                                                 <td>{{ ucfirst($theregistration->project_name) }}</td>
                                                 <td>{{$theregistration->tonnes }}</td>
                                                 <td>{{$theregistration->carbon_credit }}</td>
                                                 <td>{{ ucfirst($theregistration->user->firstname) }} {{ ucfirst($theregistration->user->lastname) }}</td>
                                                 <td>
                                                     @if ($theregistration->status =='1')

                                                     <span class="text-warning" style="font-size: 11px;
                       margin-left: 8px;">Pending</span>

                                                     @elseif($theregistration->status =='2')

                                                     <span class="text-success" style="font-size: 11px;
                                                     margin-left: 8px;">Approved</span>

                                                     @else

                                                     <span class="text-danger" style="font-size: 11px;
                                                     margin-left: 8px;">Declined</span>
                                                         
                                                     @endif
                                                 </td>
                                                 {{-- <td>{{ Carbon\Carbon::parse($theregistration->created_at)->format('M j, Y ')}}</td>
                                                 <td>{{ Carbon\Carbon::parse($theregistration->updated_at)->format('M j, Y ')}}</td> --}}
                                                 <td>
                                                   <a id="requestt1" href="javascript:void(0)" data-created_at="<?php echo date('M j, Y', strtotime($theregistration->created_at)) ?>" data-id="<?php echo $theregistration->id ?>"  data-project_type="<?php echo ucfirst($theregistration->project_type) ?>" data-project_name="<?php echo ucfirst($theregistration->project_name) ?>" data-project_desc="<?php echo $theregistration->project_desc ?>" data-tonnes="<?php echo $theregistration->tonnes ?>"  data-external_link="<?php echo $theregistration->external_link ?>"  data-idproject="<?php echo $theregistration->idproject ?>" data-carbon_credit="<?php echo $theregistration->carbon_credit ?>" data-status="<?php echo $theregistration->status ?>"  data-created_at="<?php echo $theregistration->created_at ?>" data-doc="/<?php echo $theregistration->image ?>"    class="text-success" data-bs-toggle="modal" data-bs-target="#bs-project-modal-lg" data-bs-original-title="View Details"><i class="ti-eye" aria-hidden="true"></i></a> &nbsp;|
                                                   <a id="sammproject" href="javascript:void(0)" class="text-info" data-bs-toggle="modal" data-bs-target="#bs-editproject-modal-lg" data-bs-original-title="Edit" data-id="<?php echo $theregistration->id ?>" data-project_type="<?php echo ucfirst($theregistration->project_type) ?>" data-projectcost="<?php echo ucfirst($theregistration->projectcost) ?>" data-project_name="<?php echo ucfirst($theregistration->project_name) ?>" data-project_desc="<?php echo $theregistration->project_desc ?>" data-tonnes="<?php echo $theregistration->tonnes ?>"  data-external_link="<?php echo $theregistration->external_link ?>"  data-idproject="<?php echo $theregistration->idproject ?>" data-status="<?php echo $theregistration->status ?>" data-carbon_credit="<?php echo $theregistration->carbon_credit ?>" data-created_at="<?php echo $theregistration->created_at ?>" data-myimages="/<?php echo $theregistration->image ?>"><i class="ti-pencil" aria-hidden="true"></i></a> |
                                                   {{-- <a href="javascript:void(0)" class="text-info" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a> &nbsp;| --}}

                                                   {{-- <a onClick="javascript: return confirm('Are you sure you want to delete');" href="{{ route('deleteuser',$theregistration->id) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a> --}}

                                                   <form action="{{ route('deleteproject',$theregistration->id) }}" method="POST" class="del1">
                                                       
                                                               
                                                   
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




                             <div class="tab-pane " id="bs-modals-declineproject">
                                <div class="col-md-12">
                                   <div class="row">
                                    <div class="dropdown" style="margin-left: 790px;
                                    margin-bottom: 40px;">
                                        <a class="btn btn-secondary dropdown-toggle"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          More Actions
                                        </a>
                                      
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item approve" id="approvedecline" href="#">Approve</a></li>
                                          <li><a class="dropdown-item" id="disapprovedecline" href="#">Disapprove</a></li>                                                                                                     
                                          
                                        </ul>
                                      </div>
                                     <table id="exampleadminnn" class="table table-hover display nowrap "style="width:100%">
                                         <thead>
                                           <tr>
                                               <th></th>
                                               {{-- <th scope="col">Sn</th> --}}
                                               <th scope="col">ID</th>
                                               <th scope="col">Project Name</th>
                                               <th scope="col">Carbon Balance</th>
                                               <th scope="col">Carbon Credit</th>
                                               <th scope="col">Owner Name</th>
                                               <th scope="col">Status</th>
                                               {{-- <th scope="col">Created_at</th>
                                               <th scope="col">Updated_at</th> --}}
                                               <th scope="col">Action</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             @php
                                             $sn = 0;
                                             @endphp
                                             @foreach ($adminprojectdeclined as $theregistration)
                                             <tr>
                                                 <td>{{ $theregistration->id }}</td>
                                                 {{-- <td>{{ $sn+=1; }}</td> --}}
                                                 <td>{{ $theregistration->idproject }}</td>
                                                 <td>{{ ucfirst($theregistration->project_name) }}</td>
                                                 <td>{{$theregistration->tonnes }}</td>
                                                 <td>{{$theregistration->carbon_credit }}</td>
                                                 <td>{{ ucfirst($theregistration->user->firstname) }} {{ ucfirst($theregistration->user->lastname) }}</td>
                                                 <td>
                                                     @if ($theregistration->status =='1')

                                                     <span class="text-warning" style="font-size: 11px;
                       margin-left: 8px;">Pending</span>

                                                     @elseif($theregistration->status =='2')

                                                     <span class="text-success" style="font-size: 11px;
                                                     margin-left: 8px;">Approved</span>

                                                     @else

                                                     <span class="text-danger" style="font-size: 11px;
                                                     margin-left: 8px;">Declined</span>
                                                         
                                                     @endif
                                                 </td>
                                                 {{-- <td>{{ Carbon\Carbon::parse($theregistration->created_at)->format('M j, Y ')}}</td>
                                                 <td>{{ Carbon\Carbon::parse($theregistration->updated_at)->format('M j, Y ')}}</td> --}}
                                                 <td>
                                                   <a id="requestt1" href="javascript:void(0)" data-created_at="<?php echo date('M j, Y', strtotime($theregistration->created_at)) ?>" data-id="<?php echo $theregistration->id ?>"  data-project_type="<?php echo ucfirst($theregistration->project_type) ?>" data-project_name="<?php echo ucfirst($theregistration->project_name) ?>" data-project_desc="<?php echo $theregistration->project_desc ?>" data-tonnes="<?php echo $theregistration->tonnes ?>"  data-external_link="<?php echo $theregistration->external_link ?>"  data-idproject="<?php echo $theregistration->idproject ?>" data-carbon_credit="<?php echo $theregistration->carbon_credit ?>" data-status="<?php echo $theregistration->status ?>"  data-created_at="<?php echo $theregistration->created_at ?>" data-doc="/<?php echo $theregistration->image ?>"    class="text-success" data-bs-toggle="modal" data-bs-target="#bs-project-modal-lg" data-bs-original-title="View Details"><i class="ti-eye" aria-hidden="true"></i></a> &nbsp;|
                                                   <a id="sammproject" href="javascript:void(0)" class="text-info" data-bs-toggle="modal" data-bs-target="#bs-editproject-modal-lg" data-bs-original-title="Edit" data-id="<?php echo $theregistration->id ?>" data-project_type="<?php echo ucfirst($theregistration->project_type) ?>" data-projectcost="<?php echo ucfirst($theregistration->projectcost) ?>"  data-project_name="<?php echo ucfirst($theregistration->project_name) ?>" data-project_desc="<?php echo $theregistration->project_desc ?>" data-tonnes="<?php echo $theregistration->tonnes ?>"  data-external_link="<?php echo $theregistration->external_link ?>"  data-idproject="<?php echo $theregistration->idproject ?>" data-status="<?php echo $theregistration->status ?>" data-carbon_credit="<?php echo $theregistration->carbon_credit ?>" data-created_at="<?php echo $theregistration->created_at ?>" data-myimages="/<?php echo $theregistration->image ?>"><i class="ti-pencil" aria-hidden="true"></i></a> |
                                                   {{-- <a href="javascript:void(0)" class="text-info" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a> &nbsp;| --}}

                                                   {{-- <a onClick="javascript: return confirm('Are you sure you want to delete');" href="{{ route('deleteuser',$theregistration->id) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a> --}}

                                                   <form action="{{ route('deleteproject',$theregistration->id) }}" method="POST" class="del1">
                                                       
                                                               
                                                   
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


                            
                              

                                <div class="tab-pane " id="bs-modals-approvedproject">
                                   <div class="col-md-12">
                                      <div class="row">
                                        <div class="dropdown" style="margin-left: 790px;
                                        margin-bottom: 40px;">
                                            <a class="btn btn-secondary dropdown-toggle"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              More Actions
                                            </a>
                                          
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item approve" id="approve" href="#">Approve</a></li>
                                              <li><a class="dropdown-item" id="disapprove" href="#">Disapprove</a></li>                                                                                                     
                                              
                                            </ul>
                                          </div>
                                        <table id="exampleadmin" class="table table-hover display nowrap "style="width:100%">
                                            <thead>
                                              <tr>
                                                  <th></th>
                                                  {{-- <th scope="col">Sn</th> --}}
                                                  <th scope="col">ID</th>
                                                  <th scope="col">Project Name</th>
                                                  <th scope="col">Carbon Balance</th>
                                                  <th scope="col">Carbon Credit</th>
                                                  <th scope="col">Owner Name</th>
                                                  <th scope="col">Status</th>
                                                  {{-- <th scope="col">Created_at</th>
                                                  <th scope="col">Updated_at</th> --}}
                                                  <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $sn = 0;
                                                @endphp
                                                @foreach ($adminprojectapproved as $theregistration)
                                                <tr>
                                                    <td>{{ $theregistration->id }}</td>
                                                    {{-- <td>{{ $sn+=1; }}</td> --}}
                                                    <td>{{ $theregistration->idproject }}</td>
                                                    <td>{{ ucfirst($theregistration->project_name) }}</td>
                                                    <td>{{$theregistration->tonnes }}</td>
                                                    <td>{{$theregistration->carbon_credit }}</td>
                                                    <td>{{ ucfirst($theregistration->user->firstname) }} {{ ucfirst($theregistration->user->lastname) }}</td>
                                                    <td>
                                                        @if ($theregistration->status =='1')
  
                                                        <span class="text-warning" style="font-size: 11px;
                          margin-left: 8px;">Pending</span>
  
                                                        @elseif($theregistration->status =='2')
  
                                                        <span class="text-success" style="font-size: 11px;
                                                        margin-left: 8px;">Approved</span>
  
                                                        @else
  
                                                        <span class="text-danger" style="font-size: 11px;
                                                        margin-left: 8px;">Declined</span>
                                                            
                                                        @endif
                                                    </td>
                                                    {{-- <td>{{ Carbon\Carbon::parse($theregistration->created_at)->format('M j, Y ')}}</td>
                                                    <td>{{ Carbon\Carbon::parse($theregistration->updated_at)->format('M j, Y ')}}</td> --}}
                                                    <td>
                                                      <a id="requestt1" href="javascript:void(0)" data-created_at="<?php echo date('M j, Y', strtotime($theregistration->created_at)) ?>" data-id="<?php echo $theregistration->id ?>"  data-project_type="<?php echo ucfirst($theregistration->project_type) ?>" data-project_name="<?php echo ucfirst($theregistration->project_name) ?>" data-project_desc="<?php echo $theregistration->project_desc ?>" data-tonnes="<?php echo $theregistration->tonnes ?>"  data-external_link="<?php echo $theregistration->external_link ?>"  data-idproject="<?php echo $theregistration->idproject ?>" data-carbon_credit="<?php echo $theregistration->carbon_credit ?>" data-status="<?php echo $theregistration->status ?>"  data-created_at="<?php echo $theregistration->created_at ?>" data-doc="/<?php echo $theregistration->image ?>"    class="text-success" data-bs-toggle="modal" data-bs-target="#bs-project-modal-lg" data-bs-original-title="View Details"><i class="ti-eye" aria-hidden="true"></i></a> &nbsp;|
                                                      <a id="sammproject" href="javascript:void(0)" class="text-info" data-bs-toggle="modal" data-bs-target="#bs-editproject-modal-lg" data-bs-original-title="Edit" data-id="<?php echo $theregistration->id ?>" data-project_type="<?php echo ucfirst($theregistration->project_type) ?>" data-project_name="<?php echo ucfirst($theregistration->project_name) ?>" data-projectcost="<?php echo ucfirst($theregistration->projectcost) ?>" data-project_desc="<?php echo $theregistration->project_desc ?>" data-tonnes="<?php echo $theregistration->tonnes ?>"  data-external_link="<?php echo $theregistration->external_link ?>"  data-idproject="<?php echo $theregistration->idproject ?>" data-status="<?php echo $theregistration->status ?>" data-carbon_credit="<?php echo $theregistration->carbon_credit ?>" data-created_at="<?php echo $theregistration->created_at ?>" data-myimages="/<?php echo $theregistration->image ?>"><i class="ti-pencil" aria-hidden="true"></i></a> |
                                                      {{-- <a href="javascript:void(0)" class="text-info" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a> &nbsp;| --}}
  
                                                      {{-- <a onClick="javascript: return confirm('Are you sure you want to delete');" href="{{ route('deleteuser',$theregistration->id) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a> --}}
  
                                                      <form action="{{ route('deleteproject',$theregistration->id) }}" method="POST" class="del1">
                                                          
                                                                  
                                                      
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
                                    
                                    <select name="role" id="myrole" class="form-control">
                                         
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


<div class="modal fade" id="bs-project-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Project</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><b>Project ID:</b>&nbsp;<span id="theidproject"></span></p>
                        <p><b>Project Type:</b>&nbsp;<span id="thefnamee"></span></p>
                        <p><b>Product Name:</b>&nbsp;<span id="thelnamee"></span></p>
                        <p><b>Product Description:</b>&nbsp;<span id="theemaile"></span></p>
                        
                    </div>
                    <div class="col-md-6">
                        {{-- <span class="badge badge-primary" id="thekyc"></span> --}}
                        <?php
                         $mypermissionr = App\Models\Rolepermission::where('role',Auth::user()->role)->first();
                         if($mypermissionr->credit == 'true'){

                            ?>
                               <span><b>Carbon Credit:</b>&nbsp;<p style="display: inline" id="thetonnes"></p></span>
                            
                            <?php


                         }else{


                         }
                        
                        ?>
                        
                        <p style="margin-top: 10px;"><b>Carbon Balance:</b>&nbsp;<span id="thecarbon_credit"></span></p>
                        <p><b>External Link:</b>&nbsp;<span id="theexternal_link"></span></p>
                        <p style="margin-top: 10px;"><b>Date:</b>&nbsp;<span id="thecreated_at"></span></p>
                        <span><b>Status:</b>&nbsp;<p style="display: inline" id="thestat"></p></span>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-md-6">
                       
                        <img style="width:200px;height:200px;" class="img-fluid theimagee"  alt="theimagee">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>



<div class="modal fade" id="bs-editproject-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Edit Project</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form id="form12" action="#"  enctype="multipart/form-data">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <input type="hidden" id="myidd" name="id"/>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">Project Name :</label>
                                    <input  type="text" class="form-control" id="myproject_name"  name="project_name" required> 
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">Project Type :</label>
                                    <input  type="text" class="form-control" id="myproject_type"  name="project_type" required> 
                                </div>
                                
                            </div>
                            
                        </div>

                        <div class="row">

                            <?php
                         $mypermissionr = App\Models\Rolepermission::where('role',Auth::user()->role)->first();

                         if($mypermissionr->credit == 'true'){
                            ?>
                               <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">Carbon Credit :</label>
                                    <input  type="number" class="form-control" id="mycarbon_credit"  name="carbon_credit" required> 
                                </div>
                                
                            </div>
                            <?php
                         }

                         else{


                            }

                         ?>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">Carbon Balance :</label>
                                    <input  type="text" class="form-control" id="mytonnes"  name="tonnes" readonly> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">$ per Tonne :</label>
                                    <input  type="number" class="form-control" id="myyprojectcost"  name="projectcost"> 
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">Project Description :</label>
                                    {{-- <input  type="text" class="form-control" id="mytonnes"  name="tonnes" readonly>  --}}
                                    <textarea name="project_desc" id="myproject_desc" cols="30" rows="10" class="form-control" style="height: 113px;"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">External Link :</label>
                                    <input  type="url" class="form-control" id="myexternal_link"  name="external_link" required> 
                                </div>
                                
                            </div>
                            
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">Project Image :</label>
                                   
                                    <input type="file" class="form-control" name="image" id="mymyimages" accept="image/*"> 
                                    <img style="width:100px;height:80px;" class="img-fluid theimagee"  alt="theimagee">
                                </div>
                                
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">Project Status :</label>
                                    <select name="status" id="mythestatus" class="form-select">
                                         
                                        <option value="2">Active</option> 
                                        <option value="1">Pending</option> 
                                        <option value="3">Decline</option>
                                    </select> 
                                </div>
                                
                            </div>

                            
                            
                        </div>

                        
                        <button type="submit" class="btn btn-primary-light">Update</button>
                    </form>
                </div>
            </div>
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@endsection

@section('script')

<script>
    var table;

    $(document).ready(function() {
tableprojects = $('#exampleprojects').DataTable( {
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
} );
</script>


<script>
    var table;

    $(document).ready(function() {
table = $('#exampleprojectss').DataTable( {
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
} );
</script>

<script>
    var table;

    $(document).ready(function() {
tableadmin = $('#exampleadmin').DataTable( {
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
} );
</script>


<script>
    var table;

    $(document).ready(function() {
tableadminn = $('#exampleadminn').DataTable( {
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
} );
</script>


<script>
    var table;

    $(document).ready(function() {
tableadminnn = $('#exampleadminnn').DataTable( {
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
            
            document.getElementById("thefnamee").innerHTML = fname;
            document.getElementById("thelnamee").innerHTML = lname;
            document.getElementById("theemaile").innerHTML = email;
            
            
            if(kyc == "1"){
                document.getElementById("thekyc").innerHTML = "<span class='badge badge-primary'>Completed</span>";
            }else{
                // document.getElementById("thekyc").innerHTML = "Not Completed";
                document.getElementById("thekyc").innerHTML = "<span class='badge badge-warning'>Not Completed</span>";
            }
            
            
            document.getElementById("thedate").innerHTML = created_at;
           


    });    
</script>


<script>
    $(document).on("click", "#requestt1", function () {
        
            var project_type = $(this).data('project_type');
            var project_name = $(this).data('project_name');
            var project_desc = $(this).data('project_desc');
            var tonnes = $(this).data('tonnes');
            var carbon_credit = $(this).data('carbon_credit');
            var external_link = $(this).data('external_link');
            
            var idproject = $(this).data('idproject');
            var created_at = $(this).data('created_at');
            var doce = $(this).data('doc');
            var docee = $(this).data('doc');
            var status = $(this).data('status');
            

            $('.theimagee').attr('src',doce);
            $('.theimageet').attr('href',docee);


            document.getElementById("thefnamee").innerHTML = project_name;
            document.getElementById("thelnamee").innerHTML = project_type;
            document.getElementById("theemaile").innerHTML = project_desc;
            document.getElementById("thetonnes").innerHTML = tonnes;
            document.getElementById("thecarbon_credit").innerHTML = carbon_credit;
            document.getElementById("theidproject").innerHTML = idproject;
            document.getElementById("theexternal_link").innerHTML = external_link;
            document.getElementById("thecreated_at").innerHTML = created_at;

            if(status == "1"){
                document.getElementById("thestat").innerHTML = "<span class='badge badge-warning'>Pending</span>";
            }
            else if(status == "2"){
                document.getElementById("thestat").innerHTML = "<span class='badge badge-success'>Active</span>";
            }
            else{
                // document.getElementById("thekyc").innerHTML = "Not Completed";
                document.getElementById("thestat").innerHTML = "<span class='badge badge-danger'>Declined</span>";
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
    $(document).on('click', '#sammproject', function(event){
	
    event.preventDefault();
    
    var theidd = $(this).data('id');
    var theproject_type = $(this).data('project_type');
    var theproject_name = $(this).data('project_name');
    var theproject_desc = $(this).data('project_desc');
    var thetonnes = $(this).data('tonnes');

    var theexternal_link = $(this).data('external_link');
    var theidproject = $(this).data('idproject');
    var thecarbon_credit = $(this).data('carbon_credit');
    var thecreated_at = $(this).data('created_at');
    var themyimages = $(this).data('myimages');
    var themyimagess = $(this).data('myimages');
    var themystatus = $(this).data('status');

    var themyprojectcost = $(this).data('projectcost');

    

    $('.theimagee').attr('src',themyimages);
    $('.theimageet').attr('href',themyimagess);

    $(".modal-body #myidd").val(theidd);
    $(".modal-body #myproject_type").val(theproject_type);
    $(".modal-body #myproject_name").val(theproject_name);
    $(".modal-body #myproject_desc").val(theproject_desc);
    $(".modal-body #mytonnes").val(thetonnes);
    $(".modal-body #myexternal_link").val(theexternal_link);
    $(".modal-body #mythestatus").val(themystatus);

    $(".modal-body #myyprojectcost").val(themyprojectcost);

    $(".modal-body #myidproject").val(theidproject);
    $(".modal-body #mycarbon_credit").val(thecarbon_credit);
    $(".modal-body #mycreated_at").val(thecreated_at);
    $(".modal-body #mymyimages").val(themyimages);

    


    
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
    $("#form12").submit(function (event) {
            event.preventDefault();
			var formData = new FormData(this);

			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "/updatetheproject",
				data: formData,
                        contentType: false,
						cache: false,
				processData:false,
                success: function (data) {
                    
					$('form')[0].reset();
					$('#bs-editproject-modal-lg').modal('hide');	
					console.log(data);


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
    $('#mycarbon_credit').keyup(function(){
     $('#mytonnes').val($(this).val());
    });
</script>


<!--approve table-->
<script>
    $('#approve').on('click',function(){

        var selected_rows = tableadmin.column(0).checkboxes.selected();

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
            url: "/approve",
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
    $('#disapprove').on('click',function(){

        var selected_rows = tableadmin.column(0).checkboxes.selected();

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
            url: "",
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

<!--end approve table-->

<!--second all table-->

<script>
    $('#approveall').on('click',function(){

        var selected_rows = tableprojects.column(0).checkboxes.selected();

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
            url: "/approve",
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
    $('#disapproveall').on('click',function(){

        var selected_rows = tableprojects.column(0).checkboxes.selected();

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
            url: "/disapprove",
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


$('#pendingall').on('click',function(){

var selected_rows = tableprojects.column(0).checkboxes.selected();

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
    url: "/pending",
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

<!--end all table-->


<!--pending table-->

<script>
    $('#approvepending').on('click',function(){

        var selected_rows = tableadminn.column(0).checkboxes.selected();

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
            url: "/approve",
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
    $('#disapprovepending').on('click',function(){

        var selected_rows = tableadminn.column(0).checkboxes.selected();

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
            url: "/disapprove",
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

<!--end pending table-->





<!--decline table-->

<script>
    $('#approvedecline').on('click',function(){

        var selected_rows = tableadminnn.column(0).checkboxes.selected();

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
            url: "/approve",
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
    $('#disapprovedecline').on('click',function(){

        var selected_rows = tableadminnn.column(0).checkboxes.selected();

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
            url: "/disapprove",
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

<!--end decline table-->



@endsection