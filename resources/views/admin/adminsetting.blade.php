@extends('layouts.adminmaster')

@section('title')
    | Settings
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
 
<?php

$mypermissionr = App\Models\Rolepermission::where('role',Auth::user()->role)->first();


 if($mypermissionr->addrole == 'true'){
    ?>
       <a id="sammadminaddrow" href="#" data-bs-toggle="modal" data-bs-target="#bs-addrole-modal-lg" class="btn btn-primary-light btn-sm" style="float: right;
       margin-top: -30px;
   ">Add Role</a>
    <?php
 }else{

    

 }


?>
 
                          

                          <ul class="nav nav-tabs nav-bordered mb-3" style="margin-top: 30px;">
                              <li class="nav-item">
                                  <a href="#bs-modals-listers" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                      
                                      Roles 
                                  </a>
                              </li>

                              <li class="nav-item">
                                <a href="#bs-modals-adminss" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    
                                    Admins
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="#bs-modals-admincertificates" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    
                                    Certificates
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#bs-modals-adminemissionfactor" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    
                                    Annual Emission Factor
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

                                              @foreach ($roles as $role)
                                              <tr>
                                                  
                                                <td>{{ $role->id }}</td>
                                                <td>{{ ucfirst($role->name) }}</td>
                                                <td>
                                                    <?php  
                                                          if($role->name =='superadmin'){

                                                            $check1 = App\Models\User::where('role','=','superadmin')->get();

                                                            echo $check1->count();

                                                          }elseif($role->name =='admin'){
                                                                
                                                            $check2 = App\Models\User::where('role','=','admin')->get();

                                                            echo $check2->count();
                                                          }
                                                          elseif($role->name =='lister'){
                                                            $check3 = App\Models\User::where('role','=','lister')->get();

                                                            echo $check3->count();
                                                          }
                                                          else{
                                                            $check4 = App\Models\User::where('role','=','company')->get();

                                                            echo $check4->count();
                                                          }
                                                      ?>
                                                </td>
                                                <td>{{ Carbon\Carbon::parse($role->created_at)->format('M j, Y ')}}</td>
                                                
                                                <td>
                                                  <?php
                                                    
                                                     $mypermission = App\Models\Rolepermission::where('role_id',$role->id)->first();

                                                    //  echo $mypermission;
                                                    
                                                  ?>
                                                  <a id="sammadmineditrow" href="javascript:void(0)" class="text-info" data-bs-toggle="modal" data-bs-target="#bs-editperrole-modal-lg" data-bs-original-title="Edit"  data-percredit="<?php echo isset  ($mypermission->credit) ? $mypermission->credit : "" ?>" data-perproject="<?php echo isset  ($mypermission->project) ? $mypermission->project : "" ?>" data-perlisting="<?php echo isset  ($mypermission->listing) ? $mypermission->listing : "" ?>" data-permarket="<?php echo isset  ($mypermission->market) ? $mypermission->market : "" ?>" data-perusers="<?php echo isset  ($mypermission->users) ? $mypermission->users : "" ?>" data-peraddrole="<?php echo isset  ($mypermission->addrole) ? $mypermission->addrole : "" ?>" data-id="<?php echo isset($role->id) ? $role->id : '' ?>"  data-name="<?php echo ucfirst($role->name) ?>" data-desc="<?php echo ucfirst($role->role_desc) ?>"><i class="ti-pencil" aria-hidden="true"></i></a>
                                                  


                                                  
                                                         
                                                </td>
                                              </tr>
                                              @endforeach
                                              
                                              
                                             
                                            
                                           
                                          </tbody>	
                                        </table>
                                        
                                        
                                        
                                      </div>
                                        
                                   </div>
                                </div>
                                
                                
                                <div class="tab-pane" id="bs-modals-adminss">
                                    <div class="col-md-12">
                                       <div class="row">
 
                                         <table id="exampleadminroler" class="table table-hover display nowrap "style="width:100%">
                                             <thead>
                                               <tr>
                                                   <th></th>
                                                   <th scope="col">Name</th>
                                                   <th scope="col">Email Address</th>
                                                   <th scope="col">Date Added</th>
                                                   <th scope="col">Action</th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                               @php
                                               $sn = 0;
                                               @endphp
 
                                               @foreach ($adminuserss as $role)
                                               <tr>
                                                   
                                                 <td>{{ $role->id }}</td>
                                                 <td>{{ ucfirst($role->firstname) }} {{ ucfirst($role->lastname) }}</td>
                                                 <td>
                                                    {{ ucfirst($role->email) }} 
                                                 </td>
                                                 
                                                 <td>{{ Carbon\Carbon::parse($role->created_at)->format('M j, Y ')}}</td>
                                                 
                                                 <td>
                                                   
                                                   <a id="editsammadmin" href="javascript:void(0)" class="text-info" data-bs-toggle="modal" data-bs-target="#bs-editroleadmin-modal-lg" data-bs-original-title="Edit Admin" data-href="{{ url('editrolename/'.$role->id) }}" data-id="<?php echo $role->id ?>" data-role="<?php echo $role->role ?>" data-firstname="<?php echo ucfirst($role->firstname) ?>" data-lastname="<?php echo ucfirst($role->lastname) ?>"  data-email="<?php echo ucfirst($role->email) ?>"><i class="ti-pencil" aria-hidden="true"></i></a>
                                                   {{-- <a href="javascript:void(0)" class="text-info" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a> &nbsp;| --}}
 
                                                   {{-- <a onClick="javascript: return confirm('Are you sure you want to delete');" href="{{ route('deleteuser',$role->id) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a> --}}
 
                                                   {{-- <form action="{{ route('deleteuser',$role->id) }}" method="POST" class="del3">
                                                       
                                                               
                                                   
                                                                   @csrf
                                                                   @method('DELETE')
                                                   
                                                    <button style="border: none;
                                                    background-color: transparent;
                                                    padding: 0px;
                                                    float: right;
                                                    margin-top: -20px;
                                                    margin-right: 45px;" type="submit" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete" onclick="return confirm('Are you sure you want to delete?')"><i class="ti-trash" aria-hidden="true"></i></button>
                                                    </form> --}}
 
 
                                                   
                                                          
                                                 </td>
                                               </tr>
                                               @endforeach
                                               
                                               
                                              
                                             
                                            
                                           </tbody>	
                                         </table>
                                         
                                         
                                         
                                       </div>
                                         
                                    </div>
                                 </div> 
                                 

                                 <div class="tab-pane" id="bs-modals-admincertificates">
                                    <div class="col-md-12">
                                       <div class="row">
 
                                         <table id="exampleadmincert" class="table table-hover display nowrap "style="width:100%">
                                             <thead>
                                               <tr>
                                                {{-- <td>{{ $role->id }}</td> --}}
                                                   <th scope="col">Certificate</th>
                                                   <th scope="col">Carbon Credit($)</th>
                                                   <th scope="col">Project Name</th>
                                                   <th scope="col">Offsetter</th>
                                                   <th scope="col">Action</th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                               @php
                                               $sn = 0;
                                               @endphp
 
                                               @foreach ($offtrans as $role)
                                               <tr>
                                                   
                                                 {{-- <td>{{ $role->id }}</td> --}}
                                                 <td>
                                                    <img style="max-width: 20%;" src="logo/certificate.png" alt="">
                                                 </td>
                                                 <td>
                                                   {{ isset($role->project->tonnes) ? $role->project->tonnes : '' }}
                                                 </td>

                                                 <td>
                                                    {{ isset($role->project->project_name) ? $role->project->project_name : '' }}
                                                  </td>

                                                  <td>
                                                    {{ isset($role->user->firstname) ? $role->user->firstname : '' }}&nbsp;{{ isset($role->user->lastname) ?  $role->user->lastname : '' }}
                                                  </td>
                                                 
                                                 {{-- <td>{{ Carbon\Carbon::parse($role->created_at)->format('M j, Y ')}}</td> --}}
                                                 
                                                 <td>
                                                   
                                                   <a id="editsammadmincert" href="javascript:void(0)" class="text-info" data-bs-toggle="modal" data-bs-target="#bs-editcertadmin-modal-lg" data-bs-original-title="View Cert" data-cert_id="<?php echo isset($role->cert_id) ? $role->cert_id : '' ?>"  data-id="<?php echo $role->id ?>" data-created_at="<?php echo Carbon\Carbon::parse($role->created_at)->format('M j, Y ') ?>"  data-projectcost="<?php echo isset($role->project->projectcost) ? $role->project->projectcost : ''  ?>" data-prounit="<?php echo $role->unit ?>" data-protonnes="<?php echo isset($role->project->tonnes) ? $role->project->tonnes : '' ?>" data-profirstname="<?php echo ucfirst($role->user->firstname) ?>" data-prolastname="<?php echo ucfirst($role->user->firstname) ?>"><i class="ti-pencil" aria-hidden="true"></i></a>
                                                   {{-- <a href="javascript:void(0)" class="text-info" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a> &nbsp;| --}}
 
                                                   {{-- <a onClick="javascript: return confirm('Are you sure you want to delete');" href="{{ route('deleteuser',$role->id) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a> --}}
 
                                                   {{-- <form action="{{ route('deleteuser',$role->id) }}" method="POST" class="del3">
                                                       
                                                               
                                                   
                                                                   @csrf
                                                                   @method('DELETE')
                                                   
                                                    <button style="border: none;
                                                    background-color: transparent;
                                                    padding: 0px;
                                                    float: right;
                                                    margin-top: -20px;
                                                    margin-right: 45px;" type="submit" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete" onclick="return confirm('Are you sure you want to delete?')"><i class="ti-trash" aria-hidden="true"></i></button>
                                                    </form> --}}
 
 
                                                   
                                                          
                                                 </td>
                                               </tr>
                                               @endforeach
                                               
                                               
                                              
                                             
                                            
                                           </tbody>	
                                         </table>
                                         
                                         
                                         
                                       </div>
                                         
                                    </div>
                                 </div>
                                 
                                 
                                 <div class="tab-pane" id="bs-modals-adminemissionfactor">

                                    <div class="col-md-12">
                                        
                                       <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="">Add Annual Emission Factor:</label>
    
                                                    <input type="number" class="form-control" id="factor">
                                                </div>
                                                <a id="annualfactor" href="#"  class="btn btn-primary-light btn-sm">Save</a>
                                            </form>
                                        </div>

                                        
                                        <div class="col-md-3">
                                            <a id="emissionadminfactor" href="#" data-bs-toggle="modal" data-bs-target="#bs-emissionfactor-modal-lg" data-factor="{{ $factor->factor }}" class="btn btn-primary-light btn-sm" style="float: right;
                                        margin-top: 0px;
                                    ">Edit Emission Factor</a>
                                        </div>
                                        
                                         
                                         
                                         
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

{{-- <div class="modal fade" id="bs-addrole-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
</div> --}}



<div class="modal fade" id="bs-emissionfactor-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                {{-- <h4 class="modal-title" id="myLargeModalLabel">Add Role</h4> --}}
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="">
                    <div class="row">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <input type="hidden" name="" id="id" class="form-control">
                        <div class="col-md-3"> 
                        </div>
                        <div class="col-md-6">
                            <label for="">Annual Emission Factor::</label>
                            <input type="number" name="" class="form-control" value="" id="wfactor">
                            
                                
                                
                            <button style="margin-top: 10px;" type="submit" id="updatefactor" class="btn btn-primary">Update</button> 
                            
                        </div>
                        <div class="col-md-3"> 
                        </div>
                    </div>
                    

                    

                </form>
                
            </div>
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
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
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <input type="hidden" name="" id="id" class="form-control">
                        
                        <div class="col-md-6">
                            <label for="">Role Name:</label>
                            <input type="text" name="" class="form-control" id="name">
                            
                        </div>
                        <div class="col-md-6">

                            
                            <label for="">Role Description:</label>
                            <input type="text" name="" class="form-control" id="desc">
                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                       
                        <div class="col-md-12">
                            <label for="">Permissions:</label>
                            <p><br></p>
                            {{-- <p><a href="#" class="btn btn-success btn-sm">Admin</a></p> --}}
                        
                            <hr>
                            <div class="row">
                               {{-- <div class="col-md-3">
                                <p style="margin-bottom: 12px;">
                                     <input type="checkbox">
                                     Add Admin
                                    </p>
                               </div> --}}
                               <div class="col-md-3">
                                <p style="margin-bottom:12px ">
                                    <input type="checkbox" class="assignrole" value="false" data-off="false" data-on="true" >
                                    Assign Roles
                                    </p>
                               </div>
                               <div class="col-md-3">
                                <p>
                                    <input type="checkbox" class="viewproject" value="false" data-off="Off" data-on="On" >
                                    View Projects
                                    </p>
                               </div>
                               <div class="col-md-3">

                                <p>
                                    <input type="checkbox" class="assigncarbon" id="assigncarbon" value="false" data-off="Off" data-on="On" >
                                    Assign Carbon Credit
                                    </p>

                               </div>
                            </div>


                            <div class="row">
                                <div class="col-md-3">
                                 <p>
                                    <input type="checkbox" class="listing" value="false"  data-off="Off" data-on="On" >
                                    List
                                     </p>
                                </div>
                                <div class="col-md-3">
                                 <p>
                                    <input type="checkbox" class="market" value="false" data-off="Off" data-on="On" >
                                    View Market Place
                                    
                                     </p>
                                </div>

                                <div class="col-md-3">
                                    <p>
                                       <input type="checkbox" class="users" value="false" data-off="Off" data-on="On" >
                                       View Users
                                       
                                        </p>
                                   </div>
                                
                             </div>
                            
                        </div>
                    </div>

                    

                </form>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="addpermissionrole" class="btn btn-primary">Update</button>
                
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



<div class="modal fade" id="bs-editperrole-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Edit Role</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="formme" action="">
                    <div class="row">
                        <input type="hidden" name="" id="id" class="form-control">
                        
                        <div class="col-md-6">
                            <label for="">Role Name:</label>
                            <input type="text" name="" id="name" class="form-control">
                            
                        </div>
                        <div class="col-md-6">

                            
                            <label for="">Role Description:</label>
                            <input type="text" name="" id="desc" class="form-control">
                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                       
                        <div class="col-md-12">
                            <label for="">Permissions:</label>
                            <p><br></p>
                            {{-- <p><a href="#" class="btn btn-success btn-sm">Admin</a></p> --}}
                        
                            <hr>
                            <div class="row">
                               {{-- <div class="col-md-3">
                                <p style="margin-bottom: 12px;">
                                     <input type="checkbox">
                                     Add Admin
                                    </p>
                               </div> --}}
                               <div class="col-md-3">
                                <p style="margin-bottom:12px ">
                                    <input type="checkbox" value="" data-off="off" data-on="on" name="addrole" id="theaddrole">
                                    Add Role
                                    {{-- <input type="checkbox" class="toggle" data-off="Off" data-on="On" checked data-toggle="toggle"> --}}
                                    </p>
                               </div>
                               <div class="col-md-3">
                                <p style="margin-bottom:12px ">
                                    <input type="checkbox" value="" data-off="off" data-on="on" name="user" id="theusers">
                                    View Users
                                    {{-- <input type="checkbox" class="toggle" data-off="Off" data-on="On" checked data-toggle="toggle"> --}}
                                    </p>
                               </div>
                               <div class="col-md-3">
                                <p>
                                    <input type="checkbox" value="" data-off="off" data-on="on" name="pro" id="theprot">
                                    View Projects
                                    </p>
                               </div>
                               <div class="col-md-3">

                                <p>
                                    <input type="checkbox" name="credit" value="" data-off="off" data-on="on" id="thecredit">
                                    Assign Carbon Credit
                                    </p>

                               </div>
                            </div>


                            <div class="row">
                                <div class="col-md-3">
                                 <p>
                                    <input type="checkbox" name="list" value="" data-off="off" data-on="on" id="thelist">
                                    List
                                     </p>
                                </div>
                                <div class="col-md-3">
                                 <p>
                                    <input type="checkbox" name="market" value="" data-off="off" data-on="on" id="themarket">
                                    View Market Place
                                     </p>
                                </div>
                                
                             </div>
                            
                        </div>
                    </div>

                    

                </form>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="updateroleper" class="btn btn-primary">Update</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>


<div class="modal fade" id="bs-editroleadmin-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Edit Admin</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                
                <div class="row">
                    <form id="form231" action="#">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <input type="hidden" id="myid" name="id"/>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">First Name :</label>
                                    <input  type="text" class="form-control" id="myfirstname"  name="name" required> 
                                </div>
                                
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">Last Name :</label>
                                    <input  type="text" class="form-control" id="mylastname"  name="name" required> 
                                </div>
                                
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">Email :</label>
                                    <input  type="text" class="form-control" id="myemail"  name="name" required> 
                                </div>
                                
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phoneNumber1" class="form-label">Role Name :</label>
                                    <select name="role" id="myrolee" class="form-select">

                                        <?php
                                            $allroless = App\Models\Role::all();

                                            foreach($allroless as $allroles){

                                                ?><option value="<?php echo $allroles->name; ?>"><?php echo $allroles->name; ?></option><?php 
                                            }
                                            
                                            
                                         ?>
                                        
                                        
                                    </select> 
                                </div>
                                
                            </div>
                            
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="updateadminrole" class="btn btn-primary">Save Changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>


<div class="modal fade" id="bs-editcertadmin-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:#ebf1e6">
            <div class="modal-header" style="border-bottom-color: transparent;">
                {{-- <h4 class="modal-title" id="myLargeModalLabel">Edit Admin</h4> --}}
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-4">
                       <p style="margin-top: 45%;margin-left: 50px;">Purchased On</p>
                       <img style="max-width: 80%;
                       ;
                                                   " src="logo/eko.png" alt="">

                    </div>

                    <div class="col-md-8">
                       <span style="font-size:19px;margin-left: 86px;font-weight: 700;">Carbon Credit Cerificate<span>
                       <p style="font-size:10px;text-align: center;margin-left: -105px;margin-top: 9px;font-weight: 400;">This Certificate Confirms that </p>
                       <p style="font-size:15px;text-align: center;margin-left: -105px;font-weight: 400;"><span id="myprounitt"></span> Carbon Credit </p>
                       <p style="font-size:10px;text-align: center;margin-left: -105px;font-weight: 400;">Equivalent to <span id="myprounit"></span> metric tons of Co<sub>2<sub></p>
                       <p style="font-size:10px;text-align: center;margin-left: -105px;font-weight: 400;">have been purchased and are been retired to support the</p>
                       <p style="font-size:15px;text-align: center;margin-left: -105px;font-weight: 600;"></p>
                       <p style="font-size:10px;text-align: center;margin-left: -105px;font-weight: 400;">On behalf of</p>
                       <p style="font-size:28px;text-align: center;margin-left: -105px;" ><span id="fullnamee"></span>
                           <hr style="margin-top: -10px;width: 77%;height: 0px;
                           border: none;
                           border-top: 1px solid black;">
                       </p>
                       <p style="font-size:10px;text-align: center;margin-left: -105px;margin-top: 10px;" id="mycreated"></p>	

                       <p style="font-size:10px;text-align: center;margin-left: -105px;margin-top: 10px;">Serial number Purchased</p>

                       <p style="font-size:10px;text-align: center;margin-left: -105px;margin-top: -10px;font-weight: 500;" id="cert_id"></p>
                     </div>
               </div>
               
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-primary-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="updateadminrole" class="btn btn-primary">Save Changes</button>
            </div> --}}
        </div><!-- /.modal-content -->
    </div>
</div>



<div class="modal modal-right fade" id="quick_user_toggle" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content slim-scroll3">
        <div class="modal-body p-30 bg-white">
          <div class="d-flex align-items-center justify-content-between pb-30">
              <h4 class="m-0">Profile
              {{-- <small class="text-fade fs-12 ms-5">12 messages</small> --}}
          
               </h4>
              <a href="#" class="btn btn-icon btn-primary-light btn-sm no-shadow" data-bs-dismiss="modal">
                  {{-- <span class="fa fa-close"></span> --}}
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                      <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                    </svg>
              </a>
          </div>
          <div>
              <div class="d-flex flex-row">
                  <?php
                  $theimagee = App\Models\KYC::where('user_id','=',Auth::user()->id)->first();

                ?>
                  <div class=""><img src="/ava.png" alt="user" class="rounded bg-primary-light w-150" width="100"></div>
                  <div class="ps-20">
                      <h5 class="mb-0">{{ ucfirst(Auth::user()->firstname) }}&nbsp;{{ ucfirst(Auth::user()->lastname )}}</h5>
                      <p class="my-5 text-fade">{{ ucfirst(Auth::user()->role) }}</p>
                      <a style="
                      margin-left: -3px;
                  " href="#"><span class="icon-Mail-notification me-5 text-primary" style="
                          font-size: 18px;
                      "></span> {{Auth::user()->email }}</a>
                      {{-- <button class="btn btn-primary-light btn-sm mt-5"><i class="ti-plus"></i> Follow</button> --}}
                  </div>
              </div>
          </div>
            <div class="dropdown-divider my-30"></div>
            <div>
              <?php 

              $thestatus = App\Models\User::where('id','=',Auth::user()->id)->first();

              if($thestatus->kyc_status == 0){

              }else{

                ?>

<div class="d-flex align-items-center mb-30">
  {{-- <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
        <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
  </div> --}}
  <div class="d-flex flex-column fw-500">
    
      {{-- <a href="{{ route('profile') }}" class="text-dark hover-primary mb-1 fs-16">Profile</a> --}}
      {{-- <span class="text-fade">Account settings and more</span> --}}
  </div>
</div>
                
               
               <?php

              }


              ?>	
              <div class="d-flex align-items-center mb-30">
                  <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                          <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                  </div>
                  <div class="d-flex flex-column fw-500">
                      <a href="{{ route('logout') }}" class="text-dark hover-primary mb-1 fs-16">Logout</a>
                      
                  </div>
              </div>
              {{-- <div class="d-flex align-items-center mb-30">
                  <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                      <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                  </div>
                  <div class="d-flex flex-column fw-500">
                      <a href="setting.html" class="text-dark hover-primary mb-1 fs-16">Settings</a>
                      <span class="text-fade">Accout Settings</span>
                  </div>
              </div> --}}
              {{-- <div class="d-flex align-items-center mb-30">
                  <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                      <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                  </div>
                  <div class="d-flex flex-column fw-500">
                      <a href="extra_taskboard.html" class="text-dark hover-primary mb-1 fs-16">Project</a>
                      <span class="text-fade">latest tasks and projects</span>
                  </div>
              </div> --}}
            </div>
            <div class="dropdown-divider my-30"></div>
            <div>
              
          </div>
        </div>
      </div>
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
    var tabletr;

    $(document).ready(function() {
tabletr = $('#exampleadminroler').DataTable( {
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
    var tabletrr;

    $(document).ready(function() {
tabletrr = $('#exampleadmincert').DataTable( {
    // dom: 'Bfrtip',
    responsive: true,
    // buttons: [
    //     'csv', 'excel', 'pdf', 'print'
    // ],

//     'columnDefs': [
//      {
//         'targets': 0,
//         'checkboxes': {
//            'selectRow': true
//         },
//         className: 'select-checkbox',
//      }
//   ],

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

$(document).on("click", "#updaterole", function (event) {

    myid = $("#myid").val();
    myfname = $("#myfname").val();
    mydesc = $("#mydesc").val();

    event.preventDefault();
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({

        type: "POST", 
        url: "/updatetherole",
        data:{id:myid,name:myfname,role_desc: mydesc},
        success: function (data) {

            $('#form23')[0].reset();
            $('#bs-editrole-modal-lg').modal('hide');

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

    $(document).on("click", "#updateadminrole", function (event) {
    
        myid = $("#myid").val();
        myfname = $("#myfirstname").val();
        mylname = $("#mylastname").val();
        myrrole = $("#myrolee").val();
    
        event.preventDefault();
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
    
            type: "POST", 
            url: "/updateadminrole",
            data:{id:myid,myfname:myfname,mylname:mylname,myrrole:myrrole},
            success: function (data) {
    
                $('#form231')[0].reset();
                $('#bs-editroleadmin-modal-lg').modal('hide');
    
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


<script>
    $(document).on('click', '#sammadmin', function(event){
	
    event.preventDefault();
    
    var theid = $(this).data('id');
    var thefname = $(this).data('name');
    var thedesc = $(this).data('desc');

    $(".modal-body #myid").val(theid);
    $(".modal-body #myfname").val(thefname);
    $(".modal-body #mydesc").val(thedesc);

    var url = $(this).attr('data-href');
    console.log(url);

    $.ajax({
        
        url:url,
        method:"GET",
        success:function(res){

            console.log(res);

            $.each(res, function (key, value) {
                // $('#myrole').html('<option value="">Select State</option>');
                        $('#myrole').append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
            
        }

    });
    
    });
</script>




<script>
    $(document).on('click', '#sammadmineditrow', function(event){
	
    event.preventDefault();
    
    var id = $(this).data('id');
    var name = $(this).data('name');
    var desc = $(this).data('desc');
    var perlisting = $(this).data('perlisting');
    var permarket = $(this).data('permarket');
    var perusers = $(this).data('perusers');
    var perproject = $(this).data('perproject');
    var percredit = $(this).data('percredit');
    var peraddrole = $(this).data('peraddrole');

    var url = $(this).attr('data-href');
   

    var therole = $(this).data('role');


    $(".modal-body #id").val(id);

    $(".modal-body #name").val(name);
    $(".modal-body #desc").val(desc);
    $(".modal-body #theprot").val(perproject);
    $(".modal-body #thelist").val(perlisting);
    $(".modal-body #themarket").val(permarket);
    $(".modal-body #theusers").val(perusers);
    $(".modal-body #thecredit").val(percredit);
    $(".modal-body #theaddrole").val(peraddrole);


    // $('#theprot').attr('checked', 'checked');
    var id = $('#id').val();
    var name = $('#name').val();
   var descc = $('#desc').val();
   var dd = $('#theprot').val();
   var ddlist = $('#thelist').val();
   var ddmarket = $('#themarket').val();
   var ddusers = $('#theusers').val();
   var ddcredit = $('#thecredit').val();
   var ddaddrole = $("#theaddrole").val();

   if(dd == 'true'){
       $('#theprot').prop("checked", true);
      console.log('true');
   }else{
    $('#theprot').prop("checked", false);
       console.log('false');
   }


   if(ddlist == 'true'){
       $('#thelist').prop("checked", true);
      console.log('true');
   }else{
    $('#thelist').prop("checked", false);
       console.log('false');
   }

   if(ddmarket == 'true'){
       $('#themarket').prop("checked", true);
      console.log('true');
   }else{
    $('#themarket').prop("checked", false);
       console.log('false');
   }

   if(ddusers == 'true'){
       $('#theusers').prop("checked", true);
      console.log('true');
   }else{
    $('#theusers').prop("checked", false);
       console.log('false');
   }

   if(ddcredit == 'true'){
       $('#thecredit').prop("checked", true);
      console.log('true');
   }else{
    $('#thecredit').prop("checked", false);
       console.log('false');
   }


   if(ddaddrole == 'true'){
       $('#theaddrole').prop("checked", true);
      console.log('true');
   }else{
    $('#theaddrole').prop("checked", false);
       console.log('false');
   }


   

   var url = $(this).attr('data-href');

   console.log(url);

             
    
    });
</script>

<script>
    $(document).on('click', '#updateroleper', function(event){
            event.preventDefault();

            var id = $('#id').val();
    var name = $('#name').val();
   var descc = $('#desc').val();
   var dd = $('#theprot').val();
   var ddlist = $('#thelist').val();
   var ddmarket = $('#themarket').val();
   var ddusers = $('#theusers').val();
   var ddcredit = $('#thecredit').val();
   var ddaddrole = $("#theaddrole").val();
			
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "/updaterolepermission",
                type: "POST",
				data: {
                    id:id,
                    name:name,
                    desc:descc,
                    project:dd,
                    list:ddlist,
                    market:ddmarket,
                    users:ddusers,
                    credit:ddcredit,
                    addrole:ddaddrole

                },
                success: function (data) {
                    
					
					$('#bs-editperrole-modal-lg').modal('hide');	
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
    $(document).on('click', '#editsammadmin', function(event){
	
    event.preventDefault();
    
    var theid = $(this).data('id');
    var thefirstname = $(this).data('firstname');
    var thelastname = $(this).data('lastname');
    var theemail = $(this).data('email');

    $(".modal-body #myid").val(theid);
    $(".modal-body #myfirstname").val(thefirstname);
    $(".modal-body #mylastname").val(thelastname);
    $(".modal-body #myemail").val(theemail);

    var url = $(this).attr('data-href');
   

    var therole = $(this).data('role');

    $("#myrolee option[value="+therole+"]").attr('selected', 'selected');
    

    
    
    });
</script>

<script>
    $(document).on('click', '#editsammadmincert', function(event){
	
    event.preventDefault();
    
    var theid = $(this).data('id');
    var theprofirstname = $(this).data('profirstname');
    var theprolastname = $(this).data('prolastname');
    var theprotonnes = $(this).data('protonnes');
    var theprounit = $(this).data('prounit');
    var created_at = $(this).data('created_at');
    var cert_id = $(this).data('cert_id');
    
    
console.log(created_at);
    

    document.getElementById("myprounit").innerHTML = theprounit;
    document.getElementById("myprounitt").innerHTML = theprounit;

    document.getElementById("cert_id").innerHTML = cert_id;
           
            document.getElementById("mycreated").innerHTML = created_at;
			document.getElementById("fullnamee").innerHTML = theprofirstname + ' ' +  theprolastname;

    
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
    $('.toggle').change(function(){
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

  <script>
     $("#theusers").on('change',function(){
        
        // var id = $(this).data('id');
        var mode= $(this).prop('checked');
          
        $('#theusers').val(mode);
       
        console.log(mode);


     });
  </script>

<script>
    $("#thecredit").on('change',function(){
       
       // var id = $(this).data('id');
       var mode= $(this).prop('checked');
         
       $('#thecredit').val(mode);
      
       console.log(mode);


    });
 </script>

<script>
    $("#themarket").on('change',function(){
       
       // var id = $(this).data('id');
       var mode= $(this).prop('checked');
         
       $('#themarket').val(mode);
      
       console.log(mode);


    });
 </script>

<script>
    $("#theprot").on('change',function(){
       
       // var id = $(this).data('id');
       var mode= $(this).prop('checked');
         
       $('#theprot').val(mode);
      
       console.log(mode);


    });
 </script>

<script>
    $("#thelist").on('change',function(){
       
       // var id = $(this).data('id');
       var mode= $(this).prop('checked');
         
       $('#thelist').val(mode);
      
       console.log(mode);


    });
 </script>

<script>
    $("#thelist").on('change',function(){
       
       // var id = $(this).data('id');
       var mode= $(this).prop('checked');
         
       $('#thelist').val(mode);
      
       console.log(mode);


    });
 </script>



<script>
    $('.assignrole').change(function(){
      var moder= $(this).prop('checked');

      $('.assignrole').val(moder);
       
      console.log(moder);
     
    });
  </script>

<script>
    $('.viewproject').change(function(){
      var moder= $(this).prop('checked');

      $('.viewproject').val(moder);

      console.log(moder);
     
    });
  </script>

<script>
    $('.assigncarbon').change(function(){
      var moder= $(this).prop('checked');

      $('.assigncarbon').val(moder);

      console.log(moder);
     
    });
  </script>

<script>
    $('.listing').change(function(){
      var moder= $(this).prop('checked');

      $('.listing').val(moder);

      console.log(moder);
     
    });
  </script>

<script>
    $('.market').change(function(){
      var moder= $(this).prop('checked');

      $('.market').val(moder);

      console.log(moder);
     
    });
  </script>

<script>
    $('.users').change(function(){
      var moder= $(this).prop('checked');

      $('.users').val(moder);

      console.log(moder);
     
    });
  </script>


<script>
    $(document).on('click', '#addpermissionrole', function(event){
            event.preventDefault();

            // var id = $('#id').val();
    var name = $('#name').val();
   var descc = $('#desc').val();
   var assignrole = $('.assignrole').val();
   var viewproject = $('.viewproject').val();
   var assigncarbon = $('#assigncarbon').val();
   var listing = $('.listing').val();
   var market = $('.market').val();
   var users = $('.users').val();

			
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "/rolepermission",
                type: "POST",
				data: {
                    
                    name:name,
                    desc:descc,
                    viewproject:viewproject,
                    listing:listing,
                    markett:market,
                    users:users,
                    assigncarbon:assigncarbon,
                    assignrole:assignrole

                },
                success: function (data) {
                    
					
					$('#bs-addrole-modal-lg').modal('hide');	
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
    $(document).on('click', '#annualfactor', function(event){
            event.preventDefault();

            // var id = $('#id').val();
    var factor = $('#factor').val();
   

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "/factor",
                type: "POST",
				data: {
                    
                    factor:factor,
                   
                },
                success: function (data) {
                    
					
						
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
    $(document).on('click', '#emissionadminfactor', function(event){
        event.preventDefault();
        var thefactor = $(this).data('factor');
        $(".modal-body #wfactor").val(thefactor);
    });
    
</script>

<script>
    $(document).on('click', '#updatefactor', function(event){
        event.preventDefault();

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        
        var factor = $("#wfactor").val();


        $.ajax({
                url: "/updatefactor",
                type: "POST",
				data: {
                    
                    factor:factor,
                   
                },
                success: function (data) {
                    
					$('#bs-emissionfactor-modal-lg').modal('hide');
						
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




@endsection