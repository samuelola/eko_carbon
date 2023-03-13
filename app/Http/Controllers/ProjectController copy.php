<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Assessment;
use App\Models\KYC;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\TrialAssement;
use Carbon\Carbon;
use App\Models\OffsettersTransaction;
use App\Models\Project_type;



class ProjectController extends Controller
{
    public function addproject(Request $request){

        return view('user.addproject');
    }

    public function archive(Request $request){
         
         $projects = Project::where('user_id',Auth::user()->id)->get();
         $projectsr = Project::all();
         return view('user.archive',compact('projects','projectsr'));
    }

    public function preassessment(Request $request){
       
       $theuser = User::where('id',Auth::user()->id)->first(); 
       return view('user.preassessment',compact('theuser'));
    }

    public function trialversion(Request $request){

        return view('user.trialversion');
    }

    public function addpreassessment(Request $request){

         // Available alpha caracters
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // generate a pin based on 2 * 7 digits + a random character
    $pin = mt_rand(1000000, 9999999)
        . mt_rand(1000000, 9999999)
        . $characters[rand(0, strlen($characters) - 1)];

    // shuffle the result
    $transactionid = str_shuffle($pin);
  
    $dt = date('Y-m-d H:i:s'); 

     $payment_type = 'Payment for Preassessment';

        //books(kg)

        $booksmass = $request->books;
        $books = "Books";
        $user_id = $request->user_id;

        if(!empty($booksmass)){
            $bookconstant = 0.736;
            $emission_avoidance_books = ($booksmass*$bookconstant)/1000;
        }else{
            $booksmass= 0;
            $bookconstant = 0.736;
            $emission_avoidance_books = ($booksmass*$bookconstant)/1000;
        }
       
        Assessment::create([
            'recycle_type'=>$books,
            'mass_recycled'=>$booksmass,
            'emmision_factor'=>$bookconstant,
            'emission_avoidance'=>$emission_avoidance_books,
            'user_id'=>$user_id,
            
            
        ]);

        


        //cardboards(kg)

        $cardboardsmass = $request->cardboards;
        $cardboards = "Cardboards";

        if(!empty($cardboardsmass)){
            // $cardboardsconstant = 1.12;
            // $emission_avoidance_cardboardd = ($cardboardsmass*$cardboardsconstant)/1.0012;
            // $emission_avoidance_cardboard_round = $emission_avoidance_cardboardd/1000;
            // $emission_avoidance_cardboard = round($emission_avoidance_cardboard_round,4);

            $cardboardsconstant = 1.12;
            $emission_avoidance_cardboardd = (($cardboardsmass*$cardboardsconstant)/1.0012)/1000;
            $emission_avoidance_cardboard = round($emission_avoidance_cardboardd,4);

        }else{
            $cardboardsmass= 0;
            $cardboardsconstant = 1.12;
            $emission_avoidance_cardboardd = (($cardboardsmass*$cardboardsconstant)/1.0012)/1000;
            $emission_avoidance_cardboard = round($emission_avoidance_cardboardd,4);
            

        }
       
        Assessment::create([
            'recycle_type'=>$cardboards,
            'mass_recycled'=>$cardboardsmass,
            'emmision_factor'=>$cardboardsconstant,
            'emission_avoidance'=>$emission_avoidance_cardboard,
            'user_id'=>$user_id,
            
            
        ]);

        //magazines(kg)

        $magazinesmass = $request->magazines;
        $magazines = "Magazines";

        if(!empty($magazinesmass)){
            $magazinesconstant = 1.2;
            $emission_avoidance_magazinesr = (($magazinesmass*$magazinesconstant)/1.0034)/1000;
            $emission_avoidance_magazines = round($emission_avoidance_magazinesr,4);
        }else{
            $magazinesmass= 0;
            $magazinesconstant = 1.2;
            $emission_avoidance_magazinesr = (($magazinesmass*$magazinesconstant)/1.0034)/1000;
            $emission_avoidance_magazines = round($emission_avoidance_magazinesr,4);
        }
       
        Assessment::create([
            'recycle_type'=>$magazines,
            'mass_recycled'=>$magazinesmass,
            'emmision_factor'=>$magazinesconstant,
            'emission_avoidance'=> $emission_avoidance_magazines,
            'user_id'=>$user_id,
            
        ]);


        //mixed paper(kg)

        $mixedpapersmass = $request->mixedpaper;
        $mixedpaper = "Mixedpaper";

        if(!empty($mixedpapersmass)){
            $mixedpapeconstant = 1.17;
            $emission_avoidance_mixedpaperr = (($mixedpapersmass*$mixedpapeconstant)/1.004)/1000;
            $emission_avoidance_mixedpaper = round($emission_avoidance_mixedpaperr,4);
        }else{
            $mixedpapersmass= 0;
            $mixedpapeconstant = 1.17;
            $emission_avoidance_mixedpaperr = (($mixedpapersmass*$mixedpapeconstant)/1.004)/1000;
            $emission_avoidance_mixedpaper = round($emission_avoidance_mixedpaperr,4);
        }
       
        Assessment::create([
            'recycle_type'=>$mixedpaper,
            'mass_recycled'=>$mixedpapersmass,
            'emmision_factor'=>$mixedpapeconstant,
            'emission_avoidance'=>$emission_avoidance_mixedpaper,
            'user_id'=>$user_id,
            
            
        ]);


        //newspaper(kg)

        $newspapersmass = $request->newspapers;
        $newspapers = "Newspaper";

        if(!empty($newspapersmass)){
            $newspapersconstant = 1.2;
            $emission_avoidance_newspapersr = (($newspapersmass*$newspapersconstant)/1.0034)/1000;
            $emission_avoidance_newspapers = round($emission_avoidance_newspapersr,4);
        }else{
            $newspapersmass= 0;
            $newspapersconstant = 1.2;
            $emission_avoidance_newspapersr = (($newspapersmass*$newspapersconstant)/1.0034)/1000;
            $emission_avoidance_newspapers = round($emission_avoidance_newspapersr,4);
        }
       
        Assessment::create([
            'recycle_type'=>$newspapers,
            'mass_recycled'=>$newspapersmass,
            'emmision_factor'=>$newspapersconstant,
            'emission_avoidance'=>$emission_avoidance_newspapers,
            'user_id'=>$user_id,
            
            
        ]);


        //books(kg)

        $plasticshdpemass = $request->plasticshdpe;
        $plasticshdpe = "Plastics HDPE";
        
        if(!empty($plasticshdpemass)){
            $plasticshdpeconstant = 0.9;
            $emission_avoidance_plasticshdper = ($plasticshdpemass*$plasticshdpeconstant)/1000;
            $emission_avoidance_plasticshdpe = round($emission_avoidance_plasticshdper,4);
        }else{
            $plasticshdpemass = 0;
            $plasticshdpeconstant = 0.9;
            $emission_avoidance_plasticshdper = ($plasticshdpemass*$plasticshdpeconstant)/1000;
            $emission_avoidance_plasticshdpe = round($emission_avoidance_plasticshdper,4);
        }
       
        Assessment::create([
            'recycle_type'=>$plasticshdpe,
            'mass_recycled'=>$plasticshdpemass,
            'emmision_factor'=>$plasticshdpeconstant,
            'emission_avoidance'=>$emission_avoidance_plasticshdpe,
            'user_id'=>$user_id,
            
            
        ]);


        //books(kg)

        $plasticspetsmass = $request->plasticspets;
        $plasticspets = "Plastics Pets";

        if(!empty($plasticspetsmass)){
            $plasticspetsconstant = 0.89;
            $emission_avoidance_plasticspetsr = ($plasticspetsmass*$plasticspetsconstant)/1000;
            $emission_avoidance_plasticspets = round($emission_avoidance_plasticspetsr,4);
        }else{
            $plasticspetsmass= 0;
            $plasticspetsconstant = 0.89;
            $emission_avoidance_plasticspetsr = ($plasticspetsmass*$plasticspetsconstant)/1000;
            $emission_avoidance_plasticspets = round($emission_avoidance_plasticspetsr,4);
        }
       
        Assessment::create([
            'recycle_type'=>$plasticspets,
            'mass_recycled'=>$plasticspetsmass,
            'emmision_factor'=>$plasticspetsconstant,
            'emission_avoidance'=>$emission_avoidance_plasticspets, 
            'user_id'=>$user_id,
            
            
        ]);


        //books(kg)

        $plasticsldpemass = $request->plasticsldpe;
        $plasticsldpe = "Plastics LDPE";

        if(!empty($plasticsldpemass)){
            $plasticsldpeconstant = 0.79;
            $emission_avoidance_plasticsldper = ($plasticsldpemass*$plasticsldpeconstant)/1000;
            $emission_avoidance_plasticsldpe = round($emission_avoidance_plasticsldper,4);
        }else{
            $plasticsldpemass = 0;
            $plasticsldpeconstant = 0.79;
            $emission_avoidance_plasticsldper = ($plasticsldpemass*$plasticsldpeconstant)/1000;
            $emission_avoidance_plasticsldpe = round($emission_avoidance_plasticsldper,4);
        }
       
        Assessment::create([
            'recycle_type'=>$plasticsldpe,
            'mass_recycled'=>$plasticsldpemass,
            'emmision_factor'=>$plasticsldpeconstant,
            'emission_avoidance'=>$emission_avoidance_plasticsldpe,
            'user_id'=>$user_id,
            
            
        ]);

        //books(kg)

        $ldpecldpesmass = $request->ldpecldpe;
        $ldpecldpe = "LDPE & CLDPE";

        if(!empty($ldpecldpesmass)){
            $ldpecldpeconstant = 0.66;
            $emission_avoidance_ldpecldper = ($ldpecldpesmass*$ldpecldpeconstant)/1000;
            $emission_avoidance_ldpecldpe = round($emission_avoidance_ldpecldper,4);
        }else{
            $ldpecldpesmass = 0;
            $ldpecldpeconstant = 0.66;
            $emission_avoidance_ldpecldper = ($ldpecldpesmass*$ldpecldpeconstant)/1000;
            $emission_avoidance_ldpecldpe = round($emission_avoidance_ldpecldper,4);
        }
       
        Assessment::create([
            'recycle_type'=>$ldpecldpe,
            'mass_recycled'=>$ldpecldpesmass,
            'emmision_factor'=>$ldpecldpeconstant,
            'emission_avoidance'=>$emission_avoidance_ldpecldpe,
            'user_id'=>$user_id,
            
            
        ]);


        //books(kg)

        $plasticspvcmass = $request->plasticspvc;
        $plasticspvc = "Plastics Pvc";
       

        if(!empty($plasticspvcmass)){
            $plasticspvcconstant = 0.51;
            $emission_avoidance_plasticspvcr = ($plasticspvcmass*$plasticspvcconstant)/1000;
            $emission_avoidance_plasticspvc = round($emission_avoidance_plasticspvcr,4);
        }else{
            $plasticspvcmass= 0;
            $plasticspvcconstant = 0.51;
            $emission_avoidance_plasticspvcr = ($plasticspvcmass*$plasticspvcconstant)/1000;
            $emission_avoidance_plasticspvc = round($emission_avoidance_plasticspvcr,4);
        }
       
        Assessment::create([
            'recycle_type'=>$plasticspvc,
            'mass_recycled'=>$plasticspvcmass,
            'emmision_factor'=>$plasticspvcconstant,
            'emission_avoidance'=>$emission_avoidance_plasticspvc,
            'user_id'=>$user_id,
            
            
        ]);


        //books(kg)

        $glassmass = $request->glass;
        $glass = "Glass";

        if(!empty($glassmass)){
            $glassconstant = 0.56;
            $emission_avoidance_glassr = ($glassmass*$glassconstant)/1000;
            $emission_avoidance_glass = round($emission_avoidance_glassr,4);
        }else{
            $glassmass= 0;
            $glassconstant = 0.56;
            $emission_avoidance_glassr = ($glassmass*$glassconstant)/1000;
            $emission_avoidance_glass = round($emission_avoidance_glassr,4);
        }
       
        Assessment::create([
            'recycle_type'=>$glass,
            'mass_recycled'=>$glassmass,
            'emmision_factor'=> $glassconstant,
            'emission_avoidance'=>$emission_avoidance_glass,
            'user_id'=>$user_id,
            
            
        ]);

        // aluminium:aluminium,
        //                 brass:brass,
        //                 copper:copper,
        //                 lead:lead,
        //                 stainlesssteel:stainlesssteel,
        //                 steel:steel,
        //                 zinc:zinc,
        //                 mixedmetals:mixedmetals,
        //                 mixedconstructionmetals:mixedconstructionmetals,

        //books(kg)

        $aluminiummass = $request->aluminium;
        $aluminium = "Aluminium";

        if(!empty($aluminiummass)){
            $aluminiumconstant = 8.11;
            $emission_avoidance_aluminiumr = ($aluminiummass*$aluminiumconstant)/1000;
            $emission_avoidance_aluminium = round($emission_avoidance_aluminiumr,4);
        }else{
            $aluminiummass = 0;
            $aluminiumconstant = 8.11;
            $emission_avoidance_aluminiumr = ($aluminiummass*$aluminiumconstant)/1000;
            $emission_avoidance_aluminium = round($emission_avoidance_aluminiumr,4);
        }
       
        Assessment::create([
            'recycle_type'=>$aluminium,
            'mass_recycled'=>$aluminiummass,
            'emmision_factor'=>$aluminiumconstant,
            'emission_avoidance'=>$emission_avoidance_aluminium,
            'user_id'=>$user_id,
            
            
        ]);

        //books(kg)

        $brassmass = $request->brass;
        $brass = "Brass";
        
        if(!empty($brassmass)){
            $brassconstant = 2.38;
            $emission_avoidance_brassr = ($brassmass*$brassconstant)/1000;
            $emission_avoidance_brass = round($emission_avoidance_brassr,4);
        }else{
            $brassmass= 0;
            $brassconstant = 2.38;
            $emission_avoidance_brassr = ($brassmass*$brassconstant)/1000;
            $emission_avoidance_brass = round($emission_avoidance_brassr,4);
        }
       
        Assessment::create([
            'recycle_type'=>$brass,
            'mass_recycled'=>$brassmass,
            'emmision_factor'=>$brassconstant,
            'emission_avoidance'=>$emission_avoidance_brass,
            'user_id'=>$user_id,
            
            
        ]);

        //books(kg)

        $coppermass = $request->copper;
        $copper = "Copper";

        if(!empty($coppermass)){
            $copperconstant = 2.38;
            $emission_avoidance_copperr = ($coppermass*$copperconstant)/1000;
            $emission_avoidance_copper = round($emission_avoidance_copperr,4);
        }else{
            $coppermass= 0;
            $copperconstant = 2.38;
            $emission_avoidance_copperr = ($coppermass*$copperconstant)/1000;
            $emission_avoidance_copper = round($emission_avoidance_copperr,4);
        }
       
        Assessment::create([
            'recycle_type'=>$copper,
            'mass_recycled'=>$coppermass,
            'emmision_factor'=>$copperconstant,
            'emission_avoidance'=>$emission_avoidance_copper,
            'user_id'=>$user_id,
            
            
        ]);


        $leadmass = $request->lead;
        $lead = "Lead";

        if(!empty($leadmass)){
            $leadconstant = 2.38;
            $emission_avoidance_leadr = ($leadmass*$leadconstant)/1000;
            $emission_avoidance_lead = round($emission_avoidance_leadr,4);
        }else{
            $leadmass= 0;
            $leadconstant = 2.38;
            $emission_avoidance_leadr = ($leadmass*$leadconstant)/1000;
            $emission_avoidance_lead = round($emission_avoidance_leadr,4);
        }
       
        Assessment::create([
            'recycle_type'=>$lead,
            'mass_recycled'=>$leadmass,
            'emmision_factor'=>$leadconstant,
            'emission_avoidance'=>$emission_avoidance_lead,
            'user_id'=>$user_id,
            
            
        ]);


        $steelmass = $request->steel;
        $steel = "Steel";

        if(!empty($steelmass)){
            $steelconstant = 1.34;
            $emission_avoidance_steelr = ($steelmass*$steelconstant)/1000;
            $emission_avoidance_steel = round($emission_avoidance_steelr,4);
        }else{
            $steelmass= 0;
            $steelconstant = 1.34;
            $emission_avoidance_steelr = ($steelmass*$steelconstant)/1000;
            $emission_avoidance_steel = round($emission_avoidance_steelr,4);
        }
       
        Assessment::create([
            'recycle_type'=>$steel,
            'mass_recycled'=>$steelmass,
            'emmision_factor'=>$steelconstant,
            'emission_avoidance'=>$emission_avoidance_steel,
            'user_id'=>$user_id,
            
            
        ]);


        $stainlesssteelmass = $request->stainlesssteel;
        $stainlesssteel = "Stainlesssteel";

        if(!empty($stainlesssteelmass)){
            $stainlesssteelconstant = 2.38;
            $emission_avoidance_stainlesssteelr = ($stainlesssteelmass*$stainlesssteelconstant)/1000;
            $emission_avoidance_stainlesssteel = round($emission_avoidance_stainlesssteelr,4);
        }else{
            $stainlesssteelmass= 0;
            $stainlesssteelconstant = 2.38;
            $emission_avoidance_stainlesssteelr = ($stainlesssteelmass*$stainlesssteelconstant)/1000;
            $emission_avoidance_stainlesssteel = round($emission_avoidance_stainlesssteelr,4);
        }
       
        Assessment::create([
            'recycle_type'=>$stainlesssteel,
            'mass_recycled'=>$stainlesssteelmass,
            'emmision_factor'=>$stainlesssteelconstant,
            'emission_avoidance'=>$emission_avoidance_stainlesssteel,
            'user_id'=>$user_id,
            
            
        ]);



        $zincmass = $request->zinc;
        $zinc = "Zinc";

        if(!empty($zincmass)){
            $zincconstant = 2.38;
            $emission_avoidance_zincr = ($zincmass*$zincconstant)/1000;
            $emission_avoidance_zinc = round($emission_avoidance_zincr,4);
        }else{
            $zincmass= 0;
            $zincconstant = 2.38;
            $emission_avoidance_zincr = ($zincmass*$zincconstant)/1000;
            $emission_avoidance_zinc = round($emission_avoidance_zincr,4);
        }
       
        Assessment::create([
            'recycle_type'=>$zinc,
            'mass_recycled'=>$zincmass,
            'emmision_factor'=>$zincconstant,
            'emission_avoidance'=>$emission_avoidance_zinc,
            'user_id'=>$user_id,
            
            
        ]);


        $mixedmetalsmass = $request->mixedmetals;
        $mixedmetals = "Mixed Metals";

        if(!empty($mixedmetalsmass)){
            $mixedmetalsconstant = 2.03;
            $emission_avoidance_mixedmetalsr = ($mixedmetalsmass*$mixedmetalsconstant)/1000;
            $emission_avoidance_mixedmetals = round($emission_avoidance_mixedmetalsr,4);
        }else{
            $mixedmetalsmass= 0;
            $mixedmetalsconstant = 2.03;
            $emission_avoidance_mixedmetalsr = ($mixedmetalsmass*$mixedmetalsconstant)/1000;
            $emission_avoidance_mixedmetals = round($emission_avoidance_mixedmetalsr,4);
        }
       
        Assessment::create([
            'recycle_type'=>$mixedmetals,
            'mass_recycled'=>$mixedmetalsmass,
            'emmision_factor'=>$mixedmetalsconstant,
            'emission_avoidance'=>$emission_avoidance_mixedmetals,
            'user_id'=>$user_id,
            
            
        ]);


        $mixedconstructionmetalsmass = $request->mixedconstructionmetals;
        $mixedconstructionmetals = "Mixed Construction Metals";

        if(!empty($mixedconstructionmetalsmass)){
            $mixedconstructionmetalsconstant = 2.38;
            $emission_avoidance_mixedconstructionmetalsr = ($mixedconstructionmetalsmass*$mixedconstructionmetalsconstant)/1000;
            $emission_avoidance_mixedconstructionmetals = round($emission_avoidance_mixedconstructionmetalsr,4);
        }else{
            $mixedconstructionmetalsmass= 0;
            $mixedconstructionmetalsconstant = 2.38;
            $emission_avoidance_mixedconstructionmetalsr = ($mixedconstructionmetalsmass*$mixedconstructionmetalsconstant)/1000;
            $emission_avoidance_mixedconstructionmetals = round($emission_avoidance_mixedconstructionmetalsr,4);
        }
       
        Assessment::create([
            'recycle_type'=>$mixedconstructionmetals,
            'mass_recycled'=>$mixedconstructionmetalsmass,
            'emmision_factor'=>$mixedconstructionmetalsconstant,
            'emission_avoidance'=>$emission_avoidance_mixedconstructionmetals,
            'user_id'=>$user_id,
            
            
        ]);


        
        

        
        //end books(kg)

        $cert_id = chunk_split($transactionid, 3, '-');
        // $repl = preg_replace('/-[^-]*$/', '', $transactionid);

        function removeLast($str){

            $desired_result="";

            $pieces = explode("-",$str);
            $count = count($pieces);
        
            for ($x = 0; $x <= $count - 2; $x++) {
               $desired_result .= $pieces[$x].'-';
            } 
            $desired_result = substr($desired_result, 0, -1);
        
            return $desired_result;
        }

        $my_result = removeLast($cert_id);

        Transaction::create([
            'user_id'=>$user_id,
            'amount'=>$request->amount,
            'transaction_id'=>$transactionid,
            'payment_type'=> $payment_type,
            'cert_id' => $my_result,
            'created_at'=>$dt,
            'updated_at'=>$dt
        ]);

        

        return "Preassessment Successfully!";

     }


     //start trial 

     public function trialpreassessment(Request $request){


     

        // Available alpha caracters
   $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

   $getNumber = str_shuffle($characters);

   if(isset($_COOKIE['pre']) ){

    echo "You have already done a preassement";
    
    

 }else{

    setcookie('pre',$getNumber, time()+60*60*24*30);

    // generate a pin based on 2 * 7 digits + a random character
   $pin = mt_rand(1000000, 9999999)
   . mt_rand(1000000, 9999999)
   . $characters[rand(0, strlen($characters) - 1)];

// shuffle the result
$transactionid = str_shuffle($pin);

$dt = date('Y-m-d H:i:s'); 

$payment_type = 'Payment for Preassessment';

   //books(kg)

   $booksmass = $request->books;
   $books = "Books";
   $user_id = $request->user_id;

   if(!empty($booksmass)){
       $bookconstant = 0.736;
       $emission_avoidance_books = ($booksmass*$bookconstant)/1000;
   }else{
       $booksmass= 0;
       $bookconstant = 0.736;
       $emission_avoidance_books = ($booksmass*$bookconstant)/1000;
   }
  
   TrialAssement::create([
       'recycle_type'=>$books,
       'mass_recycled'=>$booksmass,
       'emmision_factor'=>$bookconstant,
       'emission_avoidance'=>$emission_avoidance_books,
       'user_id'=>$user_id,
       
       
   ]);

   


   //cardboards(kg)

   $cardboardsmass = $request->cardboards;
   $cardboards = "Cardboards";

   if(!empty($cardboardsmass)){
       // $cardboardsconstant = 1.12;
       // $emission_avoidance_cardboardd = ($cardboardsmass*$cardboardsconstant)/1.0012;
       // $emission_avoidance_cardboard_round = $emission_avoidance_cardboardd/1000;
       // $emission_avoidance_cardboard = round($emission_avoidance_cardboard_round,4);

       $cardboardsconstant = 1.12;
       $emission_avoidance_cardboardd = (($cardboardsmass*$cardboardsconstant)/1.0012)/1000;
       $emission_avoidance_cardboard = round($emission_avoidance_cardboardd,4);

   }else{
       $cardboardsmass= 0;
       $cardboardsconstant = 1.12;
       $emission_avoidance_cardboardd = (($cardboardsmass*$cardboardsconstant)/1.0012)/1000;
       $emission_avoidance_cardboard = round($emission_avoidance_cardboardd,4);
       

   }
  
   TrialAssement::create([
       'recycle_type'=>$cardboards,
       'mass_recycled'=>$cardboardsmass,
       'emmision_factor'=>$cardboardsconstant,
       'emission_avoidance'=>$emission_avoidance_cardboard,
       'user_id'=>$user_id,
       
       
   ]);

   //magazines(kg)

   $magazinesmass = $request->magazines;
   $magazines = "Magazines";

   if(!empty($magazinesmass)){
       $magazinesconstant = 1.2;
       $emission_avoidance_magazinesr = (($magazinesmass*$magazinesconstant)/1.0034)/1000;
       $emission_avoidance_magazines = round($emission_avoidance_magazinesr,4);
   }else{
       $magazinesmass= 0;
       $magazinesconstant = 1.2;
       $emission_avoidance_magazinesr = (($magazinesmass*$magazinesconstant)/1.0034)/1000;
       $emission_avoidance_magazines = round($emission_avoidance_magazinesr,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$magazines,
       'mass_recycled'=>$magazinesmass,
       'emmision_factor'=>$magazinesconstant,
       'emission_avoidance'=> $emission_avoidance_magazines,
       'user_id'=>$user_id,
       
   ]);


   //mixed paper(kg)

   $mixedpapersmass = $request->mixedpaper;
   $mixedpaper = "Mixedpaper";

   if(!empty($mixedpapersmass)){
       $mixedpapeconstant = 1.17;
       $emission_avoidance_mixedpaperr = (($mixedpapersmass*$mixedpapeconstant)/1.004)/1000;
       $emission_avoidance_mixedpaper = round($emission_avoidance_mixedpaperr,4);
   }else{
       $mixedpapersmass= 0;
       $mixedpapeconstant = 1.17;
       $emission_avoidance_mixedpaperr = (($mixedpapersmass*$mixedpapeconstant)/1.004)/1000;
       $emission_avoidance_mixedpaper = round($emission_avoidance_mixedpaperr,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$mixedpaper,
       'mass_recycled'=>$mixedpapersmass,
       'emmision_factor'=>$mixedpapeconstant,
       'emission_avoidance'=>$emission_avoidance_mixedpaper,
       'user_id'=>$user_id,
       
       
   ]);


   //newspaper(kg)

   $newspapersmass = $request->newspapers;
   $newspapers = "Newspaper";

   if(!empty($newspapersmass)){
       $newspapersconstant = 1.2;
       $emission_avoidance_newspapersr = (($newspapersmass*$newspapersconstant)/1.0034)/1000;
       $emission_avoidance_newspapers = round($emission_avoidance_newspapersr,4);
   }else{
       $newspapersmass= 0;
       $newspapersconstant = 1.2;
       $emission_avoidance_newspapersr = (($newspapersmass*$newspapersconstant)/1.0034)/1000;
       $emission_avoidance_newspapers = round($emission_avoidance_newspapersr,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$newspapers,
       'mass_recycled'=>$newspapersmass,
       'emmision_factor'=>$newspapersconstant,
       'emission_avoidance'=>$emission_avoidance_newspapers,
       'user_id'=>$user_id,
       
       
   ]);


   //books(kg)

   $plasticshdpemass = $request->plasticshdpe;
   $plasticshdpe = "Plastics HDPE";
   
   if(!empty($plasticshdpemass)){
       $plasticshdpeconstant = 0.9;
       $emission_avoidance_plasticshdper = ($plasticshdpemass*$plasticshdpeconstant)/1000;
       $emission_avoidance_plasticshdpe = round($emission_avoidance_plasticshdper,4);
   }else{
       $plasticshdpemass = 0;
       $plasticshdpeconstant = 0.9;
       $emission_avoidance_plasticshdper = ($plasticshdpemass*$plasticshdpeconstant)/1000;
       $emission_avoidance_plasticshdpe = round($emission_avoidance_plasticshdper,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$plasticshdpe,
       'mass_recycled'=>$plasticshdpemass,
       'emmision_factor'=>$plasticshdpeconstant,
       'emission_avoidance'=>$emission_avoidance_plasticshdpe,
       'user_id'=>$user_id,
       
       
   ]);


   //books(kg)

   $plasticspetsmass = $request->plasticspets;
   $plasticspets = "Plastics Pets";

   if(!empty($plasticspetsmass)){
       $plasticspetsconstant = 0.89;
       $emission_avoidance_plasticspetsr = ($plasticspetsmass*$plasticspetsconstant)/1000;
       $emission_avoidance_plasticspets = round($emission_avoidance_plasticspetsr,4);
   }else{
       $plasticspetsmass= 0;
       $plasticspetsconstant = 0.89;
       $emission_avoidance_plasticspetsr = ($plasticspetsmass*$plasticspetsconstant)/1000;
       $emission_avoidance_plasticspets = round($emission_avoidance_plasticspetsr,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$plasticspets,
       'mass_recycled'=>$plasticspetsmass,
       'emmision_factor'=>$plasticspetsconstant,
       'emission_avoidance'=>$emission_avoidance_plasticspets, 
       'user_id'=>$user_id,
       
       
   ]);


   //books(kg)

   $plasticsldpemass = $request->plasticsldpe;
   $plasticsldpe = "Plastics LDPE";

   if(!empty($plasticsldpemass)){
       $plasticsldpeconstant = 0.79;
       $emission_avoidance_plasticsldper = ($plasticsldpemass*$plasticsldpeconstant)/1000;
       $emission_avoidance_plasticsldpe = round($emission_avoidance_plasticsldper,4);
   }else{
       $plasticsldpemass = 0;
       $plasticsldpeconstant = 0.79;
       $emission_avoidance_plasticsldper = ($plasticsldpemass*$plasticsldpeconstant)/1000;
       $emission_avoidance_plasticsldpe = round($emission_avoidance_plasticsldper,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$plasticsldpe,
       'mass_recycled'=>$plasticsldpemass,
       'emmision_factor'=>$plasticsldpeconstant,
       'emission_avoidance'=>$emission_avoidance_plasticsldpe,
       'user_id'=>$user_id,
       
       
   ]);

   //books(kg)

   $ldpecldpesmass = $request->ldpecldpe;
   $ldpecldpe = "LDPE & CLDPE";

   if(!empty($ldpecldpesmass)){
       $ldpecldpeconstant = 0.66;
       $emission_avoidance_ldpecldper = ($ldpecldpesmass*$ldpecldpeconstant)/1000;
       $emission_avoidance_ldpecldpe = round($emission_avoidance_ldpecldper,4);
   }else{
       $ldpecldpesmass = 0;
       $ldpecldpeconstant = 0.66;
       $emission_avoidance_ldpecldper = ($ldpecldpesmass*$ldpecldpeconstant)/1000;
       $emission_avoidance_ldpecldpe = round($emission_avoidance_ldpecldper,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$ldpecldpe,
       'mass_recycled'=>$ldpecldpesmass,
       'emmision_factor'=>$ldpecldpeconstant,
       'emission_avoidance'=>$emission_avoidance_ldpecldpe,
       'user_id'=>$user_id,
       
       
   ]);


   //books(kg)

   $plasticspvcmass = $request->plasticspvc;
   $plasticspvc = "Plastics Pvc";
  

   if(!empty($plasticspvcmass)){
       $plasticspvcconstant = 0.51;
       $emission_avoidance_plasticspvcr = ($plasticspvcmass*$plasticspvcconstant)/1000;
       $emission_avoidance_plasticspvc = round($emission_avoidance_plasticspvcr,4);
   }else{
       $plasticspvcmass= 0;
       $plasticspvcconstant = 0.51;
       $emission_avoidance_plasticspvcr = ($plasticspvcmass*$plasticspvcconstant)/1000;
       $emission_avoidance_plasticspvc = round($emission_avoidance_plasticspvcr,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$plasticspvc,
       'mass_recycled'=>$plasticspvcmass,
       'emmision_factor'=>$plasticspvcconstant,
       'emission_avoidance'=>$emission_avoidance_plasticspvc,
       'user_id'=>$user_id,
       
       
   ]);


   //books(kg)

   $glassmass = $request->glass;
   $glass = "Glass";

   if(!empty($glassmass)){
       $glassconstant = 0.56;
       $emission_avoidance_glassr = ($glassmass*$glassconstant)/1000;
       $emission_avoidance_glass = round($emission_avoidance_glassr,4);
   }else{
       $glassmass= 0;
       $glassconstant = 0.56;
       $emission_avoidance_glassr = ($glassmass*$glassconstant)/1000;
       $emission_avoidance_glass = round($emission_avoidance_glassr,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$glass,
       'mass_recycled'=>$glassmass,
       'emmision_factor'=> $glassconstant,
       'emission_avoidance'=>$emission_avoidance_glass,
       'user_id'=>$user_id,
       
       
   ]);

   // aluminium:aluminium,
   //                 brass:brass,
   //                 copper:copper,
   //                 lead:lead,
   //                 stainlesssteel:stainlesssteel,
   //                 steel:steel,
   //                 zinc:zinc,
   //                 mixedmetals:mixedmetals,
   //                 mixedconstructionmetals:mixedconstructionmetals,

   //books(kg)

   $aluminiummass = $request->aluminium;
   $aluminium = "Aluminium";

   if(!empty($aluminiummass)){
       $aluminiumconstant = 8.11;
       $emission_avoidance_aluminiumr = ($aluminiummass*$aluminiumconstant)/1000;
       $emission_avoidance_aluminium = round($emission_avoidance_aluminiumr,4);
   }else{
       $aluminiummass = 0;
       $aluminiumconstant = 8.11;
       $emission_avoidance_aluminiumr = ($aluminiummass*$aluminiumconstant)/1000;
       $emission_avoidance_aluminium = round($emission_avoidance_aluminiumr,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$aluminium,
       'mass_recycled'=>$aluminiummass,
       'emmision_factor'=>$aluminiumconstant,
       'emission_avoidance'=>$emission_avoidance_aluminium,
       'user_id'=>$user_id,
       
       
   ]);

   //books(kg)

   $brassmass = $request->brass;
   $brass = "Brass";
   
   if(!empty($brassmass)){
       $brassconstant = 2.38;
       $emission_avoidance_brassr = ($brassmass*$brassconstant)/1000;
       $emission_avoidance_brass = round($emission_avoidance_brassr,4);
   }else{
       $brassmass= 0;
       $brassconstant = 2.38;
       $emission_avoidance_brassr = ($brassmass*$brassconstant)/1000;
       $emission_avoidance_brass = round($emission_avoidance_brassr,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$brass,
       'mass_recycled'=>$brassmass,
       'emmision_factor'=>$brassconstant,
       'emission_avoidance'=>$emission_avoidance_brass,
       'user_id'=>$user_id,
       
       
   ]);

   //books(kg)

   $coppermass = $request->copper;
   $copper = "Copper";

   if(!empty($coppermass)){
       $copperconstant = 2.38;
       $emission_avoidance_copperr = ($coppermass*$copperconstant)/1000;
       $emission_avoidance_copper = round($emission_avoidance_copperr,4);
   }else{
       $coppermass= 0;
       $copperconstant = 2.38;
       $emission_avoidance_copperr = ($coppermass*$copperconstant)/1000;
       $emission_avoidance_copper = round($emission_avoidance_copperr,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$copper,
       'mass_recycled'=>$coppermass,
       'emmision_factor'=>$copperconstant,
       'emission_avoidance'=>$emission_avoidance_copper,
       'user_id'=>$user_id,
       
       
   ]);


   $leadmass = $request->lead;
   $lead = "Lead";

   if(!empty($leadmass)){
       $leadconstant = 2.38;
       $emission_avoidance_leadr = ($leadmass*$leadconstant)/1000;
       $emission_avoidance_lead = round($emission_avoidance_leadr,4);
   }else{
       $leadmass= 0;
       $leadconstant = 2.38;
       $emission_avoidance_leadr = ($leadmass*$leadconstant)/1000;
       $emission_avoidance_lead = round($emission_avoidance_leadr,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$lead,
       'mass_recycled'=>$leadmass,
       'emmision_factor'=>$leadconstant,
       'emission_avoidance'=>$emission_avoidance_lead,
       'user_id'=>$user_id,
       
       
   ]);


   $steelmass = $request->steel;
   $steel = "Steel";

   if(!empty($steelmass)){
       $steelconstant = 1.34;
       $emission_avoidance_steelr = ($steelmass*$steelconstant)/1000;
       $emission_avoidance_steel = round($emission_avoidance_steelr,4);
   }else{
       $steelmass= 0;
       $steelconstant = 1.34;
       $emission_avoidance_steelr = ($steelmass*$steelconstant)/1000;
       $emission_avoidance_steel = round($emission_avoidance_steelr,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$steel,
       'mass_recycled'=>$steelmass,
       'emmision_factor'=>$steelconstant,
       'emission_avoidance'=>$emission_avoidance_steel,
       'user_id'=>$user_id,
       
       
   ]);


   $stainlesssteelmass = $request->stainlesssteel;
   $stainlesssteel = "Stainlesssteel";

   if(!empty($stainlesssteelmass)){
       $stainlesssteelconstant = 2.38;
       $emission_avoidance_stainlesssteelr = ($stainlesssteelmass*$stainlesssteelconstant)/1000;
       $emission_avoidance_stainlesssteel = round($emission_avoidance_stainlesssteelr,4);
   }else{
       $stainlesssteelmass= 0;
       $stainlesssteelconstant = 2.38;
       $emission_avoidance_stainlesssteelr = ($stainlesssteelmass*$stainlesssteelconstant)/1000;
       $emission_avoidance_stainlesssteel = round($emission_avoidance_stainlesssteelr,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$stainlesssteel,
       'mass_recycled'=>$stainlesssteelmass,
       'emmision_factor'=>$stainlesssteelconstant,
       'emission_avoidance'=>$emission_avoidance_stainlesssteel,
       'user_id'=>$user_id,
       
       
   ]);



   $zincmass = $request->zinc;
   $zinc = "Zinc";

   if(!empty($zincmass)){
       $zincconstant = 2.38;
       $emission_avoidance_zincr = ($zincmass*$zincconstant)/1000;
       $emission_avoidance_zinc = round($emission_avoidance_zincr,4);
   }else{
       $zincmass= 0;
       $zincconstant = 2.38;
       $emission_avoidance_zincr = ($zincmass*$zincconstant)/1000;
       $emission_avoidance_zinc = round($emission_avoidance_zincr,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$zinc,
       'mass_recycled'=>$zincmass,
       'emmision_factor'=>$zincconstant,
       'emission_avoidance'=>$emission_avoidance_zinc,
       'user_id'=>$user_id,
       
       
   ]);


   $mixedmetalsmass = $request->mixedmetals;
   $mixedmetals = "Mixed Metals";

   if(!empty($mixedmetalsmass)){
       $mixedmetalsconstant = 2.03;
       $emission_avoidance_mixedmetalsr = ($mixedmetalsmass*$mixedmetalsconstant)/1000;
       $emission_avoidance_mixedmetals = round($emission_avoidance_mixedmetalsr,4);
   }else{
       $mixedmetalsmass= 0;
       $mixedmetalsconstant = 2.03;
       $emission_avoidance_mixedmetalsr = ($mixedmetalsmass*$mixedmetalsconstant)/1000;
       $emission_avoidance_mixedmetals = round($emission_avoidance_mixedmetalsr,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$mixedmetals,
       'mass_recycled'=>$mixedmetalsmass,
       'emmision_factor'=>$mixedmetalsconstant,
       'emission_avoidance'=>$emission_avoidance_mixedmetals,
       'user_id'=>$user_id,
       
       
   ]);


   $mixedconstructionmetalsmass = $request->mixedconstructionmetals;
   $mixedconstructionmetals = "Mixed Construction Metals";

   if(!empty($mixedconstructionmetalsmass)){
       $mixedconstructionmetalsconstant = 2.38;
       $emission_avoidance_mixedconstructionmetalsr = ($mixedconstructionmetalsmass*$mixedconstructionmetalsconstant)/1000;
       $emission_avoidance_mixedconstructionmetals = round($emission_avoidance_mixedconstructionmetalsr,4);
   }else{
       $mixedconstructionmetalsmass= 0;
       $mixedconstructionmetalsconstant = 2.38;
       $emission_avoidance_mixedconstructionmetalsr = ($mixedconstructionmetalsmass*$mixedconstructionmetalsconstant)/1000;
       $emission_avoidance_mixedconstructionmetals = round($emission_avoidance_mixedconstructionmetalsr,4);
   }
  
   TrialAssement::create([
       'recycle_type'=>$mixedconstructionmetals,
       'mass_recycled'=>$mixedconstructionmetalsmass,
       'emmision_factor'=>$mixedconstructionmetalsconstant,
       'emission_avoidance'=>$emission_avoidance_mixedconstructionmetals,
       'user_id'=>$user_id,
       
       
   ]);


   
   

   
   //end books(kg)

   //get total trial preassement

//    $total_mass_emission_avoidance = TrialAssement::sum('emission_avoidance');

   

   return "Your Preassement is Successful";
 }

   

    }

     //end trial

     public function trialresult(){
          
          $total_mass_emission_avoidance = TrialAssement::sum('emission_avoidance');
          return view('user.trialresult',compact('total_mass_emission_avoidance'));
     }

    public function profile(Request $request){

        $profile = KYC::where('user_id',Auth::user()->id)->first();

        $profile_lister = Project::where('user_id',Auth::user()->id)->first();

        return view('user.profile',compact('profile','profile_lister'));
     }


     public function offsetbids(Request $request){

        $profile = KYC::where('user_id',Auth::user()->id)->first();

        $profile_lister = Project::where('user_id',Auth::user()->id)->first();

        return view('user.offsetbids',compact('profile','profile_lister'));
     }

     public function projectoverview(Request $request){

        $theprojects = Project::where('user_id',Auth::user()->id)->take(3)->get();
        $countprojectview = Project::sum('theprojectview');
        //percentage of views per project
        $offsetterspayments = Transaction::all();
        $allprojects = Project::all();

        return view('user.projectoverview',compact('theprojects','countprojectview','offsetterspayments','allprojects'));
     }

     public function progresslog(Request $request){

        $theprojectlog = Project::where('user_id',Auth::user()->id)->get();

        return view('user.progresslog',compact('theprojectlog'));

     }

     public function getDesc(Request $request){

        $desc = DB::table('project')
            ->where('project_name', $request->project_name)
            ->first();
        
        return $desc->project_desc;
    }


    public function getLog(Request $request){

        $thellog = DB::table('project')
            ->where('id', $request->log_id)
            ->first();

        $dd['pro_desc']= $thellog->project_desc;
        $dd['pro_date']= $thellog->created_at;

        
        return $dd;
    }


   public function getSmallUser(Request $request){

    $theluser = DB::table('project')
    ->where('user_id', $request->user_id)
    ->first();

    $user = User::where('id',$theluser->user_id)->first();

        $userrecord['email']= $user->email;
        $userrecord['firstname']= $user->firstname;
        $userrecord['lastname']= $user->lastname;

    return $userrecord;
    
        
   }


   public function searchProject(Request $request)
   {
      $thesearch = Project_type::all();

      if($request->keyword != ''){
      $thesearch = Project_type::where('name','LIKE','%'.$request->keyword.'%')->get();
      }
      return response()->json([
         'thesearch' => $thesearch
      ]);
    }


    public function allCat(Request $request)
    {
       $categories = Project::where('status',2)->get();

       

       foreach($categories as $setn){

            $cf = $setn->tags;
       }

       $chi = explode(',',$cf);

       $categories[] = $chi;
       
       return response()->json([
          'categories' => $categories,
        
       ]);
     }


    public function searchCat(Request $request)
   {
      $categories = Project::all();

      if($request->categories != ''){

         foreach( $request->categories as $d){

              $categories = Project::where('project_type',$d)->get();
              $d = $categories;
         }
        
      }else{

      }

      return response()->json([
         'category' => $d
      ]);

        
    }


    public function searchFilter(Request $request){

        $d = $request->filter;


        $filter = Project::where('carbon_credit','=',$d)->get();
        

        // if($request->filter != ''){

        //     foreach( $request->filter as $d){
   
        //          $filter = Project::where('carbon_credit','<=',$d)->get();
        //          $d = $filter;
        //     }
           
        //  }else{
   
        //  }
   
         return response()->json([
            'filter' => $filter
         ]);
    }



    public function updatelog(Request $request){
        $user_id = $request->user_id;
        $project_name = $request->project_type;
        $project_desc = $request->project_desc;
        $nn = NOW();
        Project::where('project_name',$project_name)->update(['project_desc' => $project_desc,'updated_at'=> $nn]);

        return "Log Updated Successfully!";

    }

     public function adminprofile(Request $request){

        $profile = KYC::where('user_id',Auth::user()->id)->first();

        $profile_lister = Project::where('user_id',Auth::user()->id)->first();

        return view('admin.adminprofile',compact('profile','profile_lister'));
     }

     public function previewproject(Request $request,$id){

         $preview = Project::where('id',$id)->first();

         $offsetterspayments = Transaction::all();

         $allprojects = Project::orderBy('id', 'DESC')->take(4)->get();

         $mypreviewproject = Project::where('id',$id)->update(['theprojectview'=>$preview->theprojectview+1]);
        
         return view('user.projectview',compact('preview','offsetterspayments','allprojects'));
     }


     public function addoffsetters(Request $request){

             // Available alpha caracters
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // generate a pin based on 2 * 7 digits + a random character
    $pin = mt_rand(1000000, 9999999)
        . mt_rand(1000000, 9999999)
        . $characters[rand(0, strlen($characters) - 1)];

    // shuffle the result
    $transactionid = str_shuffle($pin);
  
    $dt = date('Y-m-d H:i:s'); 

    $payment_type = 'Payment for Offsetters';

    $id = $request->id;
    $owner_id = $request->owner_id;
        

    OffsettersTransaction::create([
            'user_id'=>$id,
            'owner_id'=> $owner_id,
            'amount'=>$request->amount,
            'transaction_id'=>$transactionid,
            'payment_type'=> $payment_type,
            'created_at'=>$dt,
            'updated_at'=>$dt
        ]);
                        
        return "Congratulations you have successfuly Offsetted a project";
       
     }


    
}
