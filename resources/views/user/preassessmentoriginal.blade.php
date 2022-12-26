@extends('layouts.master')

@section('title')
    | Pre-Assessment
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 250.5px;">
    <div class="container-full">
  

      <!-- Main content -->
      <section class="content">
        

         <div class="row">
              <div class="col-12">
                <h4 class="header-title" style="text-align: center;">Pre-Assessment Calculator</h4>
                <p style="text-align: center;">Get an overview of a pre-assessment calculator</p>

                  <div class="row" style="
                  margin-top: 50px;
              ">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                              
                              <div class="col-md-12">
                                  <div class="row">
      
                                    <?php

                                    $useremail = $theuser->email;
                                    $userfirstname = $theuser->firstname;
                                    

                                    ?>
      
                                        <div class="mb-3">
                                          <label for="username" class="form-label" style="color:#000">I would like to pre-assess this project</label>
                                            <select class="form-select" style="margin-bottom: 30px;" id="name">
                                              {{-- <option>--Select-- </option> --}}
                                              <option value="Recycle">Recycle Materials</option>
                                              <option value="Photovolatic">Energy Photovolatic / Mini-grid</option>
                                              <option value="Stove">Energy Efficient Clean Cook Stove</option>
                                            </select>
                                        </div>

                                        <div id="Recycle" class="Recycle boxr">
                                            <form id="form11" class="ps-3 pe-3" action="#">
                                                
                                                <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}">
                                                <input type="hidden" value="{{ Auth::user()->id }}" id="user_id" name="user_id">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Books(kg)</label>
                                                            <input type="number" class="form-control" id="books" name="books"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Cardboards(kg)</label>
                                                            <input type="number" class="form-control" id="cardboards" name="cardboards"> 
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Magazines(kg)</label>
                                                            <input type="number" class="form-control" id="magazines" name="magazines"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Mixed Paper(kg)</label>
                                                            <input type="number" class="form-control" id="mixedpaper" name="mixedpaper"> 
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Newspapers(kg)</label>
                                                            <input type="number" class="form-control" id="newspapers" name="newspapers"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Plastics Pets(kg)</label>
                                                            <input type="number" class="form-control" id="plasticspets" name="plasticspets"> 
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Plastics HDPE(kg)</label>
                                                            <input type="number" class="form-control" id="plasticshdpe" name="plasticshdpe"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Plastics LDPE(kg)</label>
                                                            <input type="number" class="form-control" id="plasticsldpe" name="plasticsldpe"> 
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">LDPE & CLDPE(kg)</label>
                                                            <input type="number" class="form-control" id="ldpecldpe" name="ldpecldpe"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Plastics PVC(kg)</label>
                                                            <input type="number" class="form-control" id="plasticspvc" name="plasticspvc"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Aluminium(kg)</label>
                                                            <input type="number" class="form-control" id="aluminium" name="aluminium"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Brass(kg)</label>
                                                            <input type="number" class="form-control" id="brass" name="brass"> 
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Copper(kg)</label>
                                                            <input type="number" class="form-control" id="copper" name="copper"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Glass(kg)</label>
                                                            <input type="number" class="form-control" id="glass" name="glass"> 
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Lead(kg)</label>
                                                            <input type="number" class="form-control" id="lead" name="lead"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Stainless Steel(kg)</label>
                                                            <input type="number" class="form-control" id="stainlesssteel" name="stainlesssteel"> 
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Steel(kg)</label>
                                                            <input type="number" class="form-control" id="steel" name="steel"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Zinc(kg)</label>
                                                            <input type="number" class="form-control" id="zinc" name="zinc"> 
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Mixed Metals(kg)</label>
                                                            <input type="number" class="form-control" id="mixedmetals" name="mixedmetals"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Mixed Construction Metals(kg)</label>
                                                            <input type="number" class="form-control" id="mixedconstructionmetals" name="mixedconstructionmetals"> 
                                                        </div>
                                                    </div>
                                                </div>
        
                                                {{-- <div class="mb-3" style="padding-bottom: 30px;">
                                                  <label for="emailaddress" class="form-label" style="color:#000">Mixed Recycling</label>
                                                  <input class="form-control" type="number" id="mixedrecycling" name="mixedrecycling">
                                                </div> --}}
        
                                                <div class="mb-3" style="float: right">
                                                    <button type="button" onclick="myFunction1()" class="btn btn-secondary-light" style="border: 1px solid #000;">Cancel</button>
                                                    {{-- <button type="submit" id="rrecycle" class="btn btn-primary">submit</button> --}}
                                                    <button type="button" onclick="makePayment1()" class="btn btn-primary">Pay $50 to Calculate</button>
                                                  </div>
        
                                                
        
                                              </form> 
                                        </div> 
                                        <div id="Photovolatic" class="Photovolatic boxr">

                                            
                                            <form id="form22" class="ps-3 pe-3" action="#">

                                                <div class="row" style="border-top: 1px solid #f3eeee;
                                                padding-top: 25px;
                                                padding-bottom: 25px;">
                                                <p style="margin-left: 0px;"><b>Panel</b></p>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Watts</label>
                                                            <input type="text" class="form-control" id="phoneNumber1" placeholder="6437 Watts"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Number</label>
                                                            <input type="number" class="form-control" id="phoneNumber1"> 
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row" style="border-top: 1px solid #f3eeee;
                                                padding-top: 25px;
                                                padding-bottom: 25px;">
                                                    <p style="margin-left:0px;"><b>Battery</b></p>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Capacity</label>
                                                            <input type="text" class="form-control" id="phoneNumber1" placeholder="3.5V"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">AH</label>
                                                            <input type="number" class="form-control" id="phoneNumber1"> 
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row" style="border-top: 1px solid #f3eeee;
                                                padding-top: 25px;
                                                padding-bottom: 25px;">
                                                    <p style="margin-left: 0px;"><b>Cloud Cover</b></p>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Days</label>
                                                            <input type="number" class="form-control" id="phoneNumber1"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Dropbox</label>
                                                            <input type="number" class="form-control" id="phoneNumber1"> 
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row" style="border-top: 1px solid #f3eeee;
                                                padding-top: 25px;
                                                padding-bottom: 25px;">
                                                    <p style="margin-left: 0px;"><b>Inverter</b></p>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">KVA</label>
                                                            <input type="text" class="form-control" id="phoneNumber1" placeholder="4000KVA"> 
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Plastics LDPE(kg)</label>
                                                            <input type="number" class="form-control" id="phoneNumber1"> 
                                                        </div>
                                                    </div> --}}
                                                </div>
        
                                                <div class="row" style="border-top: 1px solid #f3eeee;
                                                padding-top: 25px;
                                                padding-bottom: 25px;">
                                                    <p style="margin-left: 0px;"><b>HH Beneficiary</b></p>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Number(rank)</label>
                                                            <input type="number" class="form-control" id="phoneNumber1"> 
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Plastics PVC(kg)</label>
                                                            <input type="number" class="form-control" id="phoneNumber1"> 
                                                        </div>
                                                    </div> --}}
                                                </div>
                                                <div class="row" style="border-top: 1px solid #f3eeee;
                                                padding-top: 25px;
                                                padding-bottom: 25px;">
                                                    <p style="margin-left: 0px;"><b>BAU Assessment</b></p>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Source of power</label>
                                                            <input type="number" class="form-control" id="phoneNumber1" placeholder="fossil"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">HH Cover</label>
                                                            <input type="number" class="form-control" id="phoneNumber1" placeholder="Number"> 
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row" style="padding-bottom: 50px;">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Installation Emission</label>
                                                            <input type="number" class="form-control" id="phoneNumber1" placeholder="Tonnes"> 
                                                        </div>
                                                    </div>
                                                    
                                                </div>
        
                                              
        
                                                <div class="mb-3" style="float: right;">
                                                    <button type="button" onclick="myFunction2()" class="btn btn-secondary-light" style="border: 1px solid #000;">Cancel</button>
                                                    <button type="button" onclick="makePayment()" class="btn btn-primary">Pay $50 to Calculate</button>
                                                    
                                                  </div>
        
                                                
        
                                              </form> 
                                        </div>
                                        <div id="Stove" class="Stove boxr">
                                            <form id="form33" class="ps-3 pe-3" action="#">

                                                <div class="row" style="border-top: 1px solid #f3eeee;
                                                padding-top: 25px;
                                                padding-bottom: 25px;">
                                                <p style="margin-left: 0px;"><b>Number of Stove</b></p>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Number</label>
                                                            <input type="text" class="form-control" id="phoneNumber1" placeholder="643"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Briqqutte</label>
                                                            <input type="number" class="form-control" id="phoneNumber1" placeholder="427"> 
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Dunghorse</label>
                                                            <input type="text" class="form-control" id="phoneNumber1" placeholder="643"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Risehusk</label>
                                                            <input type="number" class="form-control" id="phoneNumber1" placeholder="427"> 
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row" style="border-top: 1px solid #f3eeee;
                                                padding-top: 25px;
                                                padding-bottom: 25px;">
                                                    <p style="margin-left:0px;"><b>Energy Source</b></p>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Dropbox</label>
                                                            <input type="text" class="form-control" id="phoneNumber1" placeholder="3.5V"> 
                                                        </div>
                                                    </div>
                                                    
                                                </div>
        
                                                <div class="row" style="border-top: 1px solid #f3eeee;
                                                padding-top: 25px;
                                                padding-bottom: 25px;">
                                                    <p style="margin-left: 0px;"><b>Number of HH</b></p>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Number</label>
                                                            <input type="number" class="form-control" id="phoneNumber1" placeholder="32"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Dropbox</label>
                                                            <input type="number" class="form-control" id="phoneNumber1"> 
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row" style="border-top: 1px solid #f3eeee;
                                                padding-top: 25px;
                                                padding-bottom: 25px;">
                                                    <p style="margin-left: 0px;"><b>Business as Usual</b></p>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1" class="form-label" style="color:#000">Source of Energy</label>
                                                            {{-- <input type="text" class="form-control" id="phoneNumber1" placeholder="4000KVA">  --}}
                                                            
                                                            <select class="form-select">
                                                                <option value="fuel">fuel</option>
                                                              </select>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
              
                                                <div class="mb-3" style="float: right;">
                                                    <button type="button" onclick="myFunction3()" class="btn btn-secondary-light" style="border: 1px solid #000;">Cancel</button>
                                                    <button type="button" onclick="makePayment()" class="btn btn-primary">Pay $50 to Calculate</button>
                                                    
                                                  </div>
        
                                                
        
                                              </form>
                                        </div>   
                              

                                      
<script src="https://checkout.flutterwave.com/v3.js"></script>
                                  
                                  </div>
                                  
                              </div>     
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div>
                    <div class="col-md-2"></div>
                  </div>
                  
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


<script>

    function makePayment1() {
      FlutterwaveCheckout({
        public_key: "FLWPUBK_TEST-SANDBOXDEMOKEY-X",
        // tx_ref: "titanic-48981487343MDI0NzMx",
        tx_ref: +Math.floor((Math.random() * 1000000000) + 1),
        amount: 50,
        currency: "NGN",
        payment_options: "card, mobilemoneyghana, ussd",
        // redirect_url: "https://glaciers.titanic.com/handle-flutterwave-payment",
        meta: {
          consumer_id: 23,
          consumer_mac: "92a3-912ba-1192a",
        },
        callback: function (data) {

            var cash =  50;
            var ok = data.status;

            var books = $("#books").val();
            var cardboards = $("#cardboards").val();
            var magazines = $("#magazines").val();
            var mixedpaper = $("#mixedpaper").val();
            var newspapers = $("#newspapers").val();
            var plasticspets = $("#plasticspets").val();
            var plasticshdpe = $("#plasticshdpe").val();
            var plasticsldpe = $("#plasticsldpe").val();
            var ldpecldpe = $("#ldpecldpe").val();
            var plasticspvc = $("#plasticspvc").val();
            var glass = $("#glass").val();
            var aluminium = $("#aluminium").val();
            var brass = $("#brass").val();
            var copper = $("#copper").val();
            var lead = $("#lead").val();
            var stainlesssteel = $("#stainlesssteel").val();
            var steel = $("#steel").val();
            var zinc = $("#zinc").val();
            var mixedmetals = $("#mixedmetals").val();
            var mixedconstructionmetals = $("#mixedconstructionmetals").val();
            var user_id = $("#user_id").val();

            if(ok == 'successful'){

                $.ajax({

                    type: "post",
                    url: '/addpreassessment',
                    data: {
                        amount:cash,
                        _token: $("#csrf").val(),
                        books:books,
                        cardboards:cardboards,
                        magazines:magazines,
                        mixedpaper:mixedpaper,
                        newspapers:newspapers,
                        plasticspets:plasticspets,
                        plasticshdpe:plasticshdpe,
                        plasticsldpe:plasticsldpe,
                        ldpecldpe:ldpecldpe,
                        plasticspvc:plasticspvc,
                        glass:glass,
                        aluminium:aluminium,
                        brass:brass,
                        copper:copper,
                        lead:lead,
                        stainlesssteel:stainlesssteel,
                        steel:steel,
                        zinc:zinc,
                        mixedmetals:mixedmetals,
                        mixedconstructionmetals:mixedconstructionmetals, 
                        user_id:user_id,
                    },

                    success: function(data){
                    console.log(data);

                    alert(data);

                    window.location = "/pre-assessment";
                    
                    },error: function(data){
                    console.log(data); 
                    }

                    });
            }
        },
        customer: {
          email: "<?php echo $useremail; ?>",
          phone_number: "",
          name: "<?php echo $userfirstname; ?>",
        },
        customizations: {
          title: "Eko Carbon",
          description: "Payment for Eko carbon Preassessment",
          logo: "",
        },
      });
    }
    
    
</script>


<script>
    // jQuery functions to hide and show the div
    $(document).ready(function () {
        $("#name").on('change',function(){

            $(".boxr").hide();
            $("#" + $(this).val()).show();
        }).change();
    });
</script>

<script>
   function myFunction1() {
    document.getElementById("form11").reset();
}
</script>
<script>
    function myFunction2() {
     document.getElementById("form22").reset();
 }
 </script>
 <script>
    function myFunction3() {
     document.getElementById("form33").reset();
 }
 </script>

 
<script>

$(document).ready(function (e) {
    
      $(document).on('click', '#rrecycle', function(event){
    
        event.preventDefault();

        var books = $("#books").val();
        var cardboards = $("#cardboards").val();
        var magazines = $("#magazines").val();
        var mixedpaper = $("#mixedpaper").val();
        var newspapers = $("#newspapers").val();
        var plasticspets = $("#plasticspets").val();
        var plasticshdpe = $("#plasticshdpe").val();
        var plasticsldpe = $("#plasticsldpe").val();
        var ldpecldpe = $("#ldpecldpe").val();
        var plasticspvc = $("#plasticspvc").val();
        var metalscraps = $("#metalscraps").val();
        var metalmixedcans = $("#metalmixedcans").val();
        var electronicwaste = $("#electronicwaste").val();
        var glass = $("#glass").val();
        var mixedrecycling = $("#mixedrecycling").val();
        var user_id = $("#user_id").val();

        

        $.ajax({
           
            type: "POST",
            url: "/addpreassessment",
            data: {
                _token: $("#csrf").val(),
                books:books,
                cardboards:cardboards,
                magazines:magazines,
                mixedpaper:mixedpaper,
                newspapers:newspapers,
                plasticspets:plasticspets,
                plasticshdpe:plasticshdpe,
                plasticsldpe:plasticsldpe,
                ldpecldpe:ldpecldpe,
                plasticspvc:plasticspvc,
                metalscraps:metalscraps,
                metalmixedcans:metalmixedcans,
                electronicwaste:electronicwaste,
                glass:glass,
                mixedrecycling:mixedrecycling,
                user_id:user_id,
            },
            success: function(data){
                console.log(data);
                
              },
              
              error: function(data){
                console.log(data); 
              }

        });
        
    
        
      });
    
    });
    
    
      
    </script>


@endsection

