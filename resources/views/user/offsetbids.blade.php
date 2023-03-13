@extends('layouts.master')

@section('title')
    | OffsetBids
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
                          <h4 class="header-title">Offset Bids</h4>
                          <p>This is an overview of the bids made on your project</p>
                          
                          <h4 class="header-title">Bids</h4>
                          
                          <div class="row">
                              <div class="col-md-6">

                                @foreach ($offsetterspayments as $val)


                                <p>
                                  <img src="{{ asset('/ava.png') }}" width="32" height="32" class="bg-light rounded-circle my-n1" alt="Avatar">
                                  <b style="color:#64646a">{{ ucfirst($val->user->firstname) }} {{ ucfirst($val->user->lastname) }}</b> <span>&nbsp;&nbsp;{{ Carbon\Carbon::parse($val->created_at)->format('M j, Y ')}} <span><svg style="float: right;position: relative;
                                      top: 10px;" xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#187a56" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                      <circle cx="8" cy="8" r="8"/>
                                    </svg></span></span><br>
                                  <b style="margin-left: 35px;color:#909097;">Bidded</b> <span style="color:#187a56">${{ number_format($val->amount) }}</span>
                                  
                              </p>


                                @endforeach
                                
                                
                                {{ $offsetterspayments->links() }}
                                
                              </div>

                              {{-- <div class="col-md-6">
                                <p>
                                    <img src="{{ asset('/htmly/images/avatar/avatar-2.png') }}" width="32" height="32" class="bg-light rounded-circle my-n1" alt="Avatar">
                                    <b style="color:#64646a">Cynthia Nwadike</b> <span>&nbsp;&nbsp;2 mins ago</span><svg style="float: right;position: relative;
                                    top: 10px;" xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#187a56" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                    <circle cx="8" cy="8" r="8"/>
                                  </svg><br>
                                    <b style="margin-left: 35px;color:#909097;">Bidded</b> <span style="color:#187a56"> #200000</span>
                                </p>

                                <p>
                                    <img src="{{ asset('/htmly/images/avatar/avatar-1.png') }}" width="32" height="32" class="bg-light rounded-circle my-n1" alt="Avatar">
                                    <b style="color:#64646a">Obi Chioma</b> <span>&nbsp;&nbsp;10 mins ago</span><svg style="float: right;position: relative;
                                    top: 10px;" xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#187a56" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                    <circle cx="8" cy="8" r="8"/>
                                  </svg><br>
                                    <b style="margin-left: 35px;color:#909097;">Bidded</b> <span style="color:#187a56"> #200000</span>
                                </p>

                                <p>
                                    <img src="{{ asset('/htmly/images/avatar/avatar-8.png') }}" width="32" height="32" class="bg-light rounded-circle my-n1" alt="Avatar">
                                    <b style="color:#64646a">Ayo Balogun</b> <span>&nbsp;&nbsp;2 mins ago</span><svg style="float: right;position: relative;
                                    top: 10px;" xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#187a56" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                    <circle cx="8" cy="8" r="8"/>
                                  </svg><br>
                                    <b style="margin-left: 35px;color:#909097;">Bidded</b> <span style="color:#187a56"> #200000</span>
                                </p>
                            </div> --}}
                          </div>


                          {{-- <h4 style="margin-top: 40px;" class="header-title">All Bids</h4>

                          <div class="row">
                            <div class="col-md-6">
                              
                              <p>
                                  <img src="{{ asset('/htmly/images/avatar/avatar-2.png') }}" width="32" height="32" class="bg-light rounded-circle my-n1" alt="Avatar">
                                  <b style="color:#64646a">Cynthia Nwadike</b> <span>&nbsp;&nbsp;2 mins ago</span><svg style="float: right;position: relative;
                                  top: 10px;" xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#187a56" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                  <circle cx="8" cy="8" r="8"/>
                                </svg><br>
                                  <b style="margin-left: 35px;color:#909097;">Bidded</b> <span style="color:#187a56"> #200000</span>
                              </p>

                              <p>
                                  <img src="{{ asset('/htmly/images/avatar/avatar-1.png') }}" width="32" height="32" class="bg-light rounded-circle my-n1" alt="Avatar">
                                  <b style="color:#64646a">Obi Chioma</b> <span>&nbsp;&nbsp;10 mins ago</span><svg style="float: right;position: relative;
                                  top: 10px;" xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#187a56" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                  <circle cx="8" cy="8" r="8"/>
                                </svg><br>
                                  <b style="margin-left: 35px;color:#909097;">Bidded</b> <span style="color:#187a56"> #200000</span>
                              </p>

                              <p>
                                  <img src="{{ asset('/htmly/images/avatar/avatar-8.png') }}" width="32" height="32" class="bg-light rounded-circle my-n1" alt="Avatar">
                                  <b style="color:#64646a">Ayo Balogun</b> <span>&nbsp;&nbsp;2 mins ago</span><svg style="float: right;position: relative;
                                  top: 10px;" xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#187a56" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                  <circle cx="8" cy="8" r="8"/>
                                </svg><br>
                                  <b style="margin-left: 35px;color:#909097;">Bidded</b> <span style="color:#187a56"> #200000</span>
                              </p>

                            </div>

                            <div class="col-md-6">
                              <p>
                                  <img src="{{ asset('/htmly/images/avatar/avatar-2.png') }}" width="32" height="32" class="bg-light rounded-circle my-n1" alt="Avatar">
                                  <b style="color:#64646a">Cynthia Nwadike</b> <span>&nbsp;&nbsp;2 mins ago</span><svg style="float: right;position: relative;
                                  top: 10px;" xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#187a56" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                  <circle cx="8" cy="8" r="8"/>
                                </svg><br>
                                  <b style="margin-left: 35px;color:#909097;">Bidded</b> <span style="color:#187a56"> #200000</span>
                              </p>

                              <p>
                                  <img src="{{ asset('/htmly/images/avatar/avatar-1.png') }}" width="32" height="32" class="bg-light rounded-circle my-n1" alt="Avatar">
                                  <b style="color:#64646a">Obi Chioma</b> <span>&nbsp;&nbsp;10 mins ago</span><svg style="float: right;position: relative;
                                  top: 10px;" xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#187a56" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                  <circle cx="8" cy="8" r="8"/>
                                </svg><br>
                                  <b style="margin-left: 35px;color:#909097;">Bidded</b> <span style="color:#187a56"> #200000</span>
                              </p>

                              <p>
                                  <img src="{{ asset('/htmly/images/avatar/avatar-8.png') }}" width="32" height="32" class="bg-light rounded-circle my-n1" alt="Avatar">
                                  <b style="color:#64646a">Ayo Balogun</b> <span>&nbsp;&nbsp;2 mins ago</span><svg style="float: right;position: relative;
                                  top: 10px;" xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#187a56" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                  <circle cx="8" cy="8" r="8"/>
                                </svg><br>
                                  <b style="margin-left: 35px;color:#909097;">Bidded</b> <span style="color:#187a56"> #200000</span>
                              </p>
                          </div>
                        </div> --}}

                          
                          
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

@section('script')

@endsection