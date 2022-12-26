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
          <div class="col-lg-12">
              <div class="box">
                  <div class="box-body">
                      <div class="row">
                         
                          <div class="col-lg-12 col-md-12 col-sm-12">
                              <h4 class="box-title mt-40">Project Details</h4>
                              <div class="table-responsive">
                                  <table class="table">
                                      <tbody>
                                          <tr>
                                              <td style="width: 390px;">Project Name</td>
                                              <td> {{ ucfirst($preview->project_name) }} </td>
                                          </tr>
                                          <tr>
                                              <td>Project Type</td>
                                              <td> {{ ucfirst($preview->project_type) }} </td>
                                          </tr>
                                          <tr>
                                              <td>Project Description</td>
                                              <td> {{ ucfirst($preview->project_desc) }} </td>
                                          </tr>
                                          <tr>
                                              <td>Your Tonnes of CO2?</td>
                                              <td> {{$preview->tonnes}} Tonnes</td>
                                          </tr>
                                          <tr>
                                              <td>Status</td>
                                              @if ($preview->status =='2')
                                              <td> <span class="badge bg-success-light">Active</span> </td>
                                              @elseif($preview->status =='1')
                                              <td> <span class="badge bg-warning-light">Pending</span> </td>
                                              @else
                                              <td> <span class="badge bg-danger-light">Rejected</span> </td>
                                              @endif
                                              
                                              
                                             
                                          </tr>

                                          <tr>
                                            <td>External Link describing this project</td>
                                            <td> {{$preview->external_link}} </td>
                                            
                                           
                                        </tr>


                                        <tr>
                                            <td>Date Created</td>
                                            <td> {{ Carbon\Carbon::parse($preview->created_at)->format('M j, Y ')}} </td>
                                            
                                           
                                        </tr>

                                      </tbody>
                                  </table>
                              </div>
                          </div>

                         
                           <div class="popup-gallery">

                            <?php

                                $pictures = json_decode($preview->image);

                                foreach($pictures as $picture){

                                    ?>
                                    <a href="/{{ $picture }}" title="Caption. Can be aligned to any side and contain any HTML.">
                                        <img src="/{{ $picture }}" width="32.5%" alt="">
                                    </a>
                                    
                                    <?php

                                   
                                }
                                
                            ?>
                            
                        </div>
                      </div>
                  </div>				
              </div>
          </div>
      </div>

      </section>
      <!-- /.content -->
    </div>
</div>
@endsection