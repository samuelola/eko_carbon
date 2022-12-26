@extends('layouts.master')

@section('title')
    | Profile
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
                          <h4 class="header-title">Profile</h4>
                          <p>An overview of the project,Industry and outcomes</p>

                          <hr style="margin: 1rem 0;
                          color: #ccd1d6;
                         
                          border: 0;
                          opacity: 0.25;width: 66%;"/>
                          
                          <div class="row">
                             <div class="col-md-8">
                                {{-- <div id="tasks-progress" class="tasks">
                                    <div class="card mb-3 bg-gray-100  border no-shadow">
                                        <div class="card-body p-3">
                                            
                                            <p class="text-success">Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada.</p>
                                           
                                            
                                        </div>
                                    </div>
                                    
                                </div> --}}

                                {{-- <p>About the company</p>
                                <p >Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada.</p>
                               

                                <div class=" p-2 mb-3">
                                    

                                    <img src="/html/images/gallery/thumb-sm/1.jpg" alt="post-img" class="rounded bg-light m-1" height="100">
                                    <img src="/html/images/gallery/thumb-sm/2.jpg" alt="post-img" class="rounded bg-light m-1" height="100">
                                    <img src="/html/images/gallery/thumb-sm/3.jpg" alt="post-img" class="rounded bg-light m-1" height="100">

                                    
                                </div>

                                <p>Target Audience</p>
                                <p >Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo.
                                    Maecenas malesuada.Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada.
                                    Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada.  
                               </p> --}}

                               <div class=" p-2 mb-3">
                                    

                                <img src="/{{ $profile->image }}" alt="post-img" class="rounded bg-light m-1" height="100">
                                {{-- <img src="/html/images/gallery/thumb-sm/2.jpg" alt="post-img" class="rounded bg-light m-1" height="100">
                                <img src="/html/images/gallery/thumb-sm/3.jpg" alt="post-img" class="rounded bg-light m-1" height="100"> --}}

                                
                            </div>

                               <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><b>FullName</b></td>
                                            <td> {{ ucfirst($profile->user->firstname) }} {{ ucfirst($profile->user->lastname) }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Email</b></td>
                                            <td> {{ $profile->user->email }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Identity</b></td>
                                            <td> {{ ucfirst($profile->identity) }} </td>
                                        </tr>
                                        <tr>
                                            <td><b>Business Name</b></td>
                                            <td> {{ ucfirst($profile->business_name) }} </td>
                                        </tr>
                                        <tr>
                                            <td><b>Business Email</b></td>
                                            <td> {{ ucfirst($profile->business_email) }} </td>
                                        </tr>
                                        <tr>
                                            <td><b>Phone Number</b></td>
                                            <td> {{$profile->phone}} </td>
                                        </tr>
                                        <tr>
                                            <td><b>Website</b></td>
                                            <td> {{ ucfirst($profile->website) }} </td>
                                        </tr>
                                        <tr>
                                            <td><b>Industry</b></td>
                                            <td> {{$profile->industry}}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Business Description</b></td>
                                            <td> {{$profile->summary}}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Project Scope</b></td>
                                            <td> {{$profile->project_scope}}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Country</b></td>
                                            <td>

                                                <?php
                                                $thecountry = App\Models\Country::where('id','=',$profile->bus_country)->first();

                                                echo  ucfirst($thecountry->name);
                                                 ?>
                                            

                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>State</b></td>
                                            <td>

                                                <?php
                                                $thestate = App\Models\State::where('country_id','=',$profile->bus_country)->where('id','=',$profile->bus_state)->first();

                                                echo ucfirst($thestate->name);
                                                 ?>
                                            

                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>City</b></td>
                                            <td>

                                                <?php
                                                $thecity = App\Models\City::where('country_id','=',$profile->bus_country)->where('state_id','=',$profile->bus_state)->first();

                                                echo ucfirst($thecity->name);
                                                 ?>
                                            

                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Address</b></td>
                                            <td> {{$profile->address}}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Profile Status</b></td>
                                            @if ($profile->status =='1')
                                            <td> <span class="badge bg-success-light">Completed</span> </td>
                                      
                                            @endif
                                            
                                            
                                           
                                        </tr>



                                      <tr>
                                          <td><b>Date Created</b></td>
                                          <td> {{ Carbon\Carbon::parse($profile->created_at)->format('M j, Y ')}} </td>
                                          
                                         
                                      </tr>

                                    </tbody>
                                </table>
                            </div>


                             </div>
                             <div class="col-md-4">

                                <div id="tasks-progress" class="tasks">
                                    <div class="card mb-3 ">
                                        <div class="card-body p-3">
                                            
                                            <h4 class="header-title">Share this Project</h4>
                                            <p class="">{{$profile->project_scope}}</p>
                                           
                                             <p>Share Link</p>

                                             <form action="">
                                                
                                                <p><input class="form-control" type="text" style="width: 90%;">
                                                 <a id="samt" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16" style="
                                                    float: right;
                                                    font-size: 18p;
                                                    margin-top: -25px;
                                                ">
                                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
                                                </svg></a>   
                                                </p>
                                             </form>
                                        </div>
                                    </div>
                                    
                                </div>

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
@endsection