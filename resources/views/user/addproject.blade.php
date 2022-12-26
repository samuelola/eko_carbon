@extends('layouts.master')

@section('title')
    | Add Project
@endsection

@section('content')

<div class="content-wrapper" style="min-height: 250.5px;">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h4 class="page-title">General Form Elements</h4>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Forms</li>
                              <li class="breadcrumb-item active" aria-current="page">General Form Elements</li>
                          </ol>
                      </nav>
                  </div>
              </div>
              
          </div>
      </div>	  

      <!-- Main content -->
      <section class="content">
          <div class="row">			  
              <div class="col-lg-6 col-12">
                    <div class="box">
                      <div class="box-header with-border">
                        <h4 class="box-title">Sample form 1</h4>
                      </div>
                      <!-- /.box-header -->
                      <form class="form">
                          <div class="box-body">
                              <h4 class="box-title text-primary mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
                              <hr class="my-15">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-label">Contact Number</label>
                                    <input type="text" class="form-control">
                                  </div>
                                </div>
                              </div>
                              <h4 class="box-title text-primary mb-0 mt-20"><i class="ti-save me-15"></i> Requirements</h4>
                              <hr class="my-15">
                              <div class="form-group">
                                <label class="form-label">Company</label>
                                <input type="text" class="form-control">
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-label">Interested in</label>
                                    <select class="form-select">
                                      <option>Interested in</option>
                                      <option>design</option>
                                      <option>development</option>
                                      <option>illustration</option>
                                      <option>branding</option>
                                      <option>video</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-label">Budget</label>
                                    <select class="form-select">
                                      <option>Budget</option>
                                      <option>less than 5000$</option>
                                      <option>5000$ - 10000$</option>
                                      <option>10000$ - 20000$</option>
                                      <option>more than 20000$</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="form-label">Select File</label>
                                <label class="file">
                                  <input type="file" id="file">
                                </label>
                              </div>
                              <div class="form-group">
                                <label class="form-label">About Project</label>
                                <textarea rows="5" class="form-control"></textarea>
                              </div>
                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                              <button type="button" class="btn btn-primary-light me-1">
                                <i class="ti-trash"></i> Cancel
                              </button>
                              <button type="submit" class="btn btn-primary">
                                <i class="ti-save-alt"></i> Save
                              </button>
                          </div>  
                      </form>
                    </div>
                    <!-- /.box -->			
              </div>  

              <div class="col-lg-6 col-12">
                    <div class="box">
                      <div class="box-header with-border">
                        <h4 class="box-title">Sample form 2</h4>
                      </div>
                      <!-- /.box-header -->
                      <form class="form">
                          <div class="box-body">
                              <h4 class="box-title text-primary mb-0"><i class="ti-user me-15"></i> About User</h4>
                              <hr class="my-15">
                              <div class="row">
                                <div class="col-md-6">

                                  <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-label">Contact Number</label>
                                    <input type="text" class="form-control">
                                  </div>
                                </div>
                              </div>
                              <h4 class="box-title text-primary mb-0 mt-20"><i class="ti-envelope me-15"></i> Contact Info &amp; Bio</h4>
                              <hr class="my-15">
                              <div class="form-group">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="email">
                              </div>
                              <div class="form-group">
                                <label class="form-label">Website</label>
                                <input class="form-control" type="url">
                              </div>
                              <div class="form-group">
                                <label class="form-label">Contact Number</label>
                                <input class="form-control" type="tel">
                              </div>
                              <div class="form-group">
                                <label class="form-label">Bio</label>
                                <textarea rows="4" class="form-control"></textarea>
                              </div>
                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer text-end">
                              <button type="button" class="btn btn-primary-light me-1">
                                <i class="ti-trash"></i> Cancel
                              </button>
                              <button type="submit" class="btn btn-primary">
                                <i class="ti-save-alt"></i> Save
                              </button>
                          </div>  
                      </form>
                    </div>
                    <!-- /.box -->			
              </div>

              <div class="col-lg-6 col-12">
                    <div class="box">
                      <div class="box-header with-border">
                        <h4 class="box-title">Sample Form 3 with the Icons</h4>
                      </div>
                      <!-- /.box-header -->
                      <form class="form">
                          <div class="box-body">
                              <div class="form-group">
                                  <label class="form-label">User Name</label>
                                  <div class="input-group mb-3">
                                      <span class="input-group-text"><i class="ti-user"></i></span>
                                      <input type="text" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label">Email address</label>
                                  <div class="input-group mb-3">
                                      <span class="input-group-text"><i class="ti-email"></i></span>
                                      <input type="email" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label">Password</label>
                                  <div class="input-group mb-3">
                                      <span class="input-group-text"><i class="ti-lock"></i></span>
                                      <input type="password" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label">Confirm Password</label>
                                  <div class="input-group mb-3">
                                      <span class="input-group-text"><i class="ti-lock"></i></span>
                                      <input type="password" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="checkbox checkbox-success">
                                      <input id="checkbox1" type="checkbox">
                                      <label for="checkbox1"> Remember me </label>
                                  </div>
                              </div>
                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                              <button type="button" class="btn btn-primary-light me-1">
                                <i class="ti-trash"></i> Cancel
                              </button>
                              <button type="submit" class="btn btn-primary">
                                <i class="ti-save-alt"></i> Save
                              </button>
                          </div>  
                      </form>
                    </div>
                    <!-- /.box -->			
              </div>

              <div class="col-lg-6 col-12">
                    <div class="box">
                      <div class="box-header with-border">
                        <h4 class="box-title">Sample Form 4 with the right Icons</h4>
                      </div>
                      <!-- /.box-header -->
                      <form class="form">
                          <div class="box-body">
                              <div class="form-group">
                                  <label class="form-label">User Name</label>
                                  <div class="input-group mb-3">
                                      <input type="text" class="form-control">
                                      <span class="input-group-text"><i class="ti-user"></i></span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label">Email address</label>
                                  <div class="input-group mb-3">
                                      <input type="email" class="form-control">
                                      <span class="input-group-text"><i class="ti-email"></i></span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label">Password</label>
                                  <div class="input-group mb-3">
                                      <input type="password" class="form-control">
                                      <span class="input-group-text"><i class="ti-lock"></i></span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label">Confirm Password</label>
                                  <div class="input-group mb-3">
                                      <input type="password" class="form-control">
                                      <span class="input-group-text"><i class="ti-lock"></i></span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="checkbox checkbox-success">
                                      <input id="checkbox2" type="checkbox">
                                      <label for="checkbox2"> Remember me </label>
                                  </div>
                              </div>
                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer text-end">
                              <button type="button" class="btn btn-primary-light me-1">
                                <i class="ti-trash"></i> Cancel
                              </button>
                              <button type="submit" class="btn btn-primary">
                                <i class="ti-save-alt"></i> Save
                              </button>
                          </div>  
                      </form>
                    </div>
                    <!-- /.box -->			
              </div>

              <div class="col-lg-6 col-12">
                  <!-- Basic Forms -->
                    <div class="box">
                      <div class="box-header with-border">
                        <h4 class="box-title">Default Basic Forms</h4>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div class="row">
                          <div class="col-12">
                              <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Text</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="text" value="Nil Yeager" id="example-text-input">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Search</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="example-url-input" class="col-sm-2 col-form-label">URL</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="password" value="hunter2" id="example-password-input">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="example-number-input" class="col-sm-2 col-form-label">Number</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="number" value="42" id="example-number-input">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date and time</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="example-month-input" class="col-sm-2 col-form-label">Month</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="month" value="2011-08" id="example-month-input">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="example-week-input" class="col-sm-2 col-form-label">Week</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="week" value="2011-W33" id="example-week-input">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="example-time-input" class="col-sm-2 col-form-label">Time</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="example-color-input" class="col-sm-2 col-form-label">Color</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="color" value="#563d7c" id="example-color-input">
                                </div>
                              </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->			
              </div>

              <div class="col-lg-6 col-12">
                  <!-- Basic Forms -->
                    <div class="box">
                      <div class="box-header with-border">
                        <h4 class="box-title">Form Sections</h4>
                      </div>
                      <!-- /.box-header -->
                      <form>
                          <div class="box-body">
                              <h4 class="mt-0 mb-20">1. Customer Info:</h4>
                              <div class="form-group">
                                  <label class="form-label">Full Name:</label>
                                  <input type="email" class="form-control" placeholder="Enter full name">
                              </div>
                              <div class="form-group">
                                  <label class="form-label">Email address:</label>
                                  <input type="email" class="form-control" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                  <label class="form-label">Contact:</label>							
                                  <input type="tel" class="form-control" placeholder="Phone number">
                              </div>
                              <div class="form-group">
                                  <label class="form-label">Communications :</label>
                                  <div class="c-inputs-stacked">
                                      <input type="checkbox" id="checkbox_123">
                                      <label for="checkbox_123" class="me-30">Email</label>
                                      <input type="checkbox" id="checkbox_234">
                                      <label for="checkbox_234" class="me-30">SMS</label>
                                      <input type="checkbox" id="checkbox_345">
                                      <label for="checkbox_345" class="me-30">Phone</label>
                                  </div>
                              </div>
                              <hr>

                              <h4 class="mt-0 mb-20">2. Payment Info:</h4>

                              <div class="form-group">
                                  <label class="form-label">Payment Method :</label>
                                  <div class="c-inputs-stacked">
                                      <input name="group123" type="radio" id="radio_123" value="1">
                                      <label for="radio_123" class="me-30">Credit Card</label>
                                      <input name="group456" type="radio" id="radio_456" value="1">
                                      <label for="radio_456" class="me-30">Cash</label>
                                      <input name="group789" type="radio" id="radio_789" value="1">
                                      <label for="radio_789" class="me-30">Wallet</label>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label">Amount:</label>
                                  <input type="email" class="form-control" placeholder="Enter full name">
                              </div>
                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                              <button type="submit" class="btn btn-danger">Cancel</button>
                              <button type="submit" class="btn btn-success pull-right">Submit</button>
                          </div>
                      </form>
                    </div>
                    <!-- /.box -->			
              </div>
          </div>
          <div class="row">
              <div class="col-12">
                <div class="box">
                    
                  <div class="box-header with-border">
                    <h4 class="box-title">Text inputs</h4>
                  </div>
                  <div class="box-body">
                      <div class="row">
                          <div class="col-lg-4 col-12">
                              <div class="form-group">
                                  <label class="form-label">Text input</label>
                                  <input type="text" class="form-control">
                              </div>
                          </div>
                          <div class="col-lg-4 col-12">
                              <div class="form-group">
                                  <label class="form-label">Password input</label>
                                  <input type="password" class="form-control">
                              </div>								
                          </div>
                          <div class="col-lg-4 col-12">
                              <div class="form-group">
                                  <label class="form-label">Input with helper</label>
                                  <input type="text" class="form-control">
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="text-success form-label">Contextual input helper</label>
                          <div class="form-group-feedback form-group-feedback-right">
                              <input type="text" class="form-control border-success">
                              <div class="form-control-feedback text-success">
                                  <i class="fa fa-check"></i>
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="form-label">Readonly input field</label>
                          <input type="text" class="form-control" readonly="">
                      </div>

                      <div class="form-group">
                          <label class="form-label">Disabled input field</label>
                          <input type="text" class="form-control" disabled="">
                      </div>

                      <div class="form-group">
                          <label class="form-label">Textarea</label>
                          <textarea rows="5" cols="5" class="form-control"></textarea>
                      </div>
                    
                  </div>	
                    
                  <div class="box-header with-border">
                    <h4 class="box-title">Input groups</h4>
                  </div>
                  <div class="box-body">						
                      <div class="form-group">
                          <label class="form-label">Left group addon</label>
                          <div class="input-group">
                              <span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
                              <input type="text" class="form-control">
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="form-label">Right group addon</label>
                          <div class="input-group">
                              <input type="text" class="form-control">
                              <span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="form-label">Left group button</label>
                          <div class="input-group">
                              <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                              <div class="dropdown-menu">
                                  <a href="#" class="dropdown-item">Action</a>
                                  <a href="#" class="dropdown-item">Another action</a>
                                  <a href="#" class="dropdown-item">Something else here</a>
                                  <a href="#" class="dropdown-item">One more line</a>
                              </div>
                              <input type="text" class="form-control">
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="form-label">Right group button</label>
                          <div class="input-group">
                              <input type="text" class="form-control">
                              <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                  <a href="#" class="dropdown-item">Action</a>
                                  <a href="#" class="dropdown-item">Another action</a>
                                  <a href="#" class="dropdown-item">Something else here</a>
                                  <a href="#" class="dropdown-item">One more line</a>
                              </div>
                          </div>
                      </div>

                      <div class="form-group form-group-feedback form-group-feedback-right">
                          <label class="form-label text-danger">Contextual input group</label>
                          <div class="position-relative">
                              <div class="input-group">
                                  <span class="input-group-text text-danger border-danger">
                                      <i class="fa fa-times-circle-o"></i>
                                  </span>
                                  <input type="text" class="form-control border-danger">
                              </div>
                              <div class="form-control-feedback text-danger">
                                  <i class="fa fa-times-circle-o"></i>
                              </div>
                          </div>
                      </div>
                  </div>	
                    
                  <div class="box-header with-border">
                    <h4 class="box-title">Selects</h4>
                  </div>
                  <div class="box-body">
                      <div class="form-group form-group-float">
                          <label class="form-label">Basic select</label>
                          <select class="form-select">
                              <option value="" selected="">Basic select</option>
                              <optgroup label="Alaskan/Hawaiian Time Zone">
                                  <option value="AK">Alaska</option>
                                  <option value="HI">Hawaii</option>
                              </optgroup>
                              <optgroup label="Pacific Time Zone">
                                  <option value="CA">California</option>
                                  <option value="NV">Nevada</option>
                                  <option value="WA">Washington</option>
                              </optgroup>
                              <optgroup label="Mountain Time Zone">
                                  <option value="AZ">Arizona</option>
                                  <option value="CO">Colorado</option>
                                  <option value="WY">Wyoming</option>
                              </optgroup>
                          </select>
                      </div>
                  </div>
            </div>
            <!-- /.box -->

            <!-- Form Element sizes -->
            <div class="box">
              <div class="box-header with-border">
                <h4 class="box-title">Different Height</h4>
              </div>
              <div class="box-body form-element">
                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                <br><br>
                <input class="form-control" type="text" placeholder="Default input">
                <br><br>
                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <div class="box">
              <div class="box-header with-border">
                <h4 class="box-title">Different Width</h4>
              </div>
              <div class="box-body form-element">
                <div class="row">
                  <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder=".col-sm-3">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder=".col-sm-4">
                  </div>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder=".col-sm-5">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- Input addon -->
            <div class="box">
              <div class="box-header with-border">
                <h4 class="box-title">Input Addon</h4>
              </div>
              <div class="box-body">
                  <div class="row">
                      <div class="col-lg-4 col-12">							
                        <div class="input-group">
                          <span class="input-group-addon">@</span>
                          <input type="text" class="form-control" placeholder="Username">
                        </div>						  
                      </div>
                      <div class="col-lg-4 col-12">
                        <div class="input-group">
                          <input type="text" class="form-control">
                          <span class="input-group-addon">.00</span>
                        </div>
                      </div>
                      <div class="col-lg-4 col-12">
                          <div class="input-group">
                              <span class="input-group-addon">$</span>
                              <input type="text" class="form-control">
                              <span class="input-group-addon">.00</span>
                            </div>
                      </div>
                  </div>

                <h6 class="mt-15 mb-5">With icons</h6>
                  <div class="row">
                      <div class="col-lg-4 col-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                              <input type="email" class="form-control">
                            </div>
                      </div>
                      <div class="col-lg-4 col-12">
                          <div class="input-group">
                              <input type="text" class="form-control">
                              <span class="input-group-addon"><i class="fa fa-check"></i></span>
                            </div>
                      </div>
                      <div class="col-lg-4 col-12">
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                          <input type="text" class="form-control">
                          <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                        </div>
                      </div>
                  </div>
                

                <h6 class="mt-15 mb-5">With checkbox and radio inputs</h6>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <input type="checkbox" id="addon_Checkbox_1">
                        <label for="addon_Checkbox_1" style="padding-left: 20px;height: 17px;"></label>
                      </span>
                      <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                    <div class="input-group">
                          <span class="input-group-addon">
                            <input name="group1" type="radio" id="addon_Option_1">
                            <label for="addon_Option_1" style="padding-left: 20px;height: 17px;"></label>
                          </span>
                      <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-12">
            <!-- Horizontal Form -->
            <div class="box">
              <div class="box-header with-border">
                <h4 class="box-title">Horizontal Form</h4>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal form-element">
                <div class="box-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 form-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 form-label">Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="ms-auto col-sm-10">
                      <div class="checkbox">
                          <input type="checkbox" id="Remember">
                          <label for="Remember">Remember me</label> 
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-danger">Cancel</button>
                  <button type="submit" class="btn btn-info pull-right">Sign in</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
            <!-- /.box -->
            <!-- general form elements disabled -->
            <div class="box">
              <div class="box-header with-border">
                <h4 class="box-title">General Elements</h4>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <form role="form">
                    <div class="row">
                      <div class="col-lg-6 col-12">
                          <!-- text input -->
                          <div class="form-group">
                            <label class="form-label">Text</label>
                            <input type="text" class="form-control">
                          </div>
                      </div>
                      <div class="col-lg-6 col-12">
                          <div class="form-group">
                            <label class="form-label">Text Disabled</label>
                            <input type="text" class="form-control" disabled="">
                          </div>
                      </div>
                      <div class="col-lg-6 col-12">
                          <!-- textarea -->
                          <div class="form-group">
                            <label class="form-label">Textarea</label>
                            <textarea class="form-control" rows="3"></textarea>
                          </div>
                      </div>
                      <div class="col-lg-6 col-12">
                          <div class="form-group">
                            <label class="form-label">Textarea Disabled</label>
                            <textarea class="form-control" rows="3" disabled=""></textarea>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                          <div class="col-lg-4 col-12">
                              <!-- input states -->
                              <div class="form-group has-success">
                                <label class="form-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                                <input type="text" class="form-control" id="inputSuccess">
                                <span class="help-block">Help block with success</span>
                              </div>
                          </div>
                          <div class="col-lg-4 col-12">
                              <div class="form-group has-warning">
                                <label class="form-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                                  warning</label>
                                <input type="text" class="form-control" id="inputWarning">
                                <span class="help-block">Help block with warning</span>
                              </div>
                          </div>
                          <div class="col-lg-4 col-12">
                              <div class="form-group has-error">
                                <label class="form-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                                  error</label>
                                <input type="text" class="form-control" id="inputError">
                                <span class="help-block">Help block with error</span>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6 col-12">
                              <!-- checkbox -->
                              <div class="form-group">
                                <div class="checkbox">
                                    <input type="checkbox" id="Checkbox_1">
                                    <label for="Checkbox_1">Checkbox 1</label>
                                </div>

                                <div class="checkbox">
                                    <input type="checkbox" id="Checkbox_2">
                                    <label for="Checkbox_2">Checkbox 2</label>
                                </div>

                                <div class="checkbox">
                                   <input type="checkbox" id="Checkbox_3" disabled="">
                                   <label for="Checkbox_3">Checkbox disabled</label>                      
                                </div>
                              </div>
                          </div>
                          <div class="col-lg-6 col-12">
                              <!-- radio -->
                              <div class="form-group">
                                <div class="radio">
                                    <input name="group1" type="radio" id="Option_1" checked="">
                                    <label for="Option_1">Option one is this and that—be sure to include why it's great</label>                    
                                </div>
                                <div class="radio">
                                    <input name="group1" type="radio" id="Option_2">
                                    <label for="Option_2">Option two can be something else and selecting it will deselect option one</label>   
                                </div>
                                <div class="radio">
                                    <input name="group1" type="radio" id="Option_3" disabled="">
                                    <label for="Option_3">Option three is disabled</label> 
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6 col-12">
                              
                          </div>
                          <div class="col-lg-6 col-12">
                              
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6 col-12">
                              <!-- select -->
                              <div class="form-group">
                                <label class="form-label">Select</label>
                                <select class="form-select">
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-lg-6 col-12">
                              <div class="form-group">
                                <label class="form-label">Select Disabled</label>
                                <select class="form-select" disabled="">
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
                                </select>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6 col-12">
                              <!-- Select multiple-->
                              <div class="form-group">
                                <label class="form-label">Select Multiple</label>
                                <select multiple="" class="form-select">
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-lg-6 col-12">
                              <div class="form-group">
                                <label class="form-label">Select Multiple Disabled</label>
                                <select multiple="" class="form-select" disabled="">
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
                                </select>
                              </div>
                          </div>
                      </div>
                </form>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->

      </section>
      <!-- /.content -->
    </div>
</div>

@endsection