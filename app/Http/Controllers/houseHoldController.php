<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Project_type;
use App\Models\Householdcal;
use Illuminate\Support\Facades\DB;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use App\Models\OffsettersTransaction;
use App\Models\Setting;

class houseHoldController extends Controller
{
    public function householddashboard(Request $request){


        $theprojects = Project::where('user_id',Auth::user()->id)->take(3)->get();
        // $countprojectview = Project::sum('theprojectview');

        $alltheemissions = Householdcal::where('user_id',Auth::user()->id)->sum('total');

        $flightemissions = Householdcal::where('user_id',Auth::user()->id)->where('type','Flight')->sum('total');
        $travelemissions = Householdcal::where('user_id',Auth::user()->id)->where('type','Vehicles')->sum('total');
        $houseemissions = Householdcal::where('user_id',Auth::user()->id)->where('type','Household')->sum('total');
        //percentage of views per project
        $offsetterspayments = Transaction::all();
        $allprojects = Project::all();

        $topfiveemissions = Householdcal::where('user_id',Auth::user()->id)->get();

        $chart_options = [
            'chart_title' => 'Emission by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Householdcal',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'line',
        ];
        $chart1 = new LaravelChart($chart_options);

        return view('household.dashboard',compact('theprojects','offsetterspayments','allprojects','alltheemissions','flightemissions','travelemissions','houseemissions','topfiveemissions','chart1'));
           
        
    }

    public function carbonemmission(Request $request){
        $user_id = Auth::user()->id;

        $alltotalemissions = Householdcal::where('user_id',$user_id)->get();

        $factor = Setting::where('id',1)->first();

        return view('household.carbonemmission',compact('user_id','alltotalemissions','factor'));

    }

    public function generatereport(Request $request){

        $theprojects = Project::where('user_id',Auth::user()->id)->take(3)->get();
        $countprojectview = Project::sum('theprojectview');
        //percentage of views per project
        $offsetterspayments = Transaction::all();
        $allprojects = Project::all();
        $topfiveemissions = Householdcal::where('user_id',Auth::user()->id)->get();

        return view('household.generatereport',compact('theprojects','countprojectview','offsetterspayments','allprojects','topfiveemissions'));

    }

    public function emissionreport(Request $request,$type){

          $getemissionreport = Householdcal::where('type',$type)->get();

          return view('household.emissionreport',compact('getemissionreport'));
    }

    public function marketplace(Request $request){

        $alltheprojects = Project::orderBy('id', 'DESC')->get();

        $alltype = Project_type::all();

         return view('household.marketplace',compact('alltheprojects','alltype'));
    }

    public function plan(Request $request){
        $id = Auth::user()->id;
        $user  = User::where('id','=',$id)->first();
         return view('plan.plan',compact('user'));
    }

   
    public function householdcal(Request $request){

        

        $dt = date('Y-m-d H:i:s'); 

        Householdcal::create([
            'user_id' => $request->id,
          'calusername1' => $request->calusername1,
          'calusername2'=> $request->calusername2,
          'caladult'=>$request->caladult,
        'calchildren' => $request->calchildren,
        'callivingspace' => $request->callivingspace,
        'calfrom' => $request->calfrom,
        'calto' => $request->calto,
        'cars'=>$request->cars,
        'carfuel1'=>$request->carfuel1,
        'carfuel2'=>$request->carfuel2,
        'carfuel3'=>$request->carfuel3,
        'cardistance'=>$request->cardistance,
        'carfuel11'=>$request->carfuel11,
        'carfuel12'=>$request->carfuel12,
        'carfuel13'=>$request->carfuel13,
        'cardistancedriven21'=>$request->cardistancedriven21,
        'cardistancedriven22'=>$request->cardistancedriven22,
        'cardistancedriven23'=>$request->cardistancedriven23,
        'flight'=>$request->flight,
        'shortflight'=>$request->shortflight,
        'created_at'=>$dt,
            'updated_at'=>$dt
        ]);
                        
        return "Successfully Saved";


    }

    public function householdlogin(Request $request){

        return view('household.householdlogin');
    }

    public function householdsignup(Request $request){

        return view('household.householdsignup');
    }

    public function householdlist(Request $request){

        return view('household.householdlist');

    }

    public function householdmyaccount(Request $request){

        $getUpdateUser = User::where('id',Auth::user()->id)->first();

        //important
        $alemit =  DB::table('emissioncal')->select('type')->distinct()->pluck('type')->toArray();

        $getAlluserEmissionTransactions = OffsettersTransaction::where('user_id',Auth::user()->id)->get();

        return view('household.myaccount',compact('getUpdateUser','alemit','getAlluserEmissionTransactions'));

        
    }


    public function householdupdateacct(Request $request){

        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $user_id = $request->user_id;
        $nn = NOW();

        User::where('id',$user_id)->update(
            [
                
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'updated_at'=> $nn
        
            ]);

            return "Profile Successfully!";
    }


    public function emittcarboncar(Request $request){
        
        //car
        $distance = $request->distance; 
        $emissionfactor = $request->emissionfactor;  
        $user_id = Auth::user()->id;
        $nn = NOW();

        if(!empty($distance)){

            $result =  $distance*$emissionfactor;
            $total = round($result);
            // Householdcal::create([
            //     'user_id'=>$user_id,
            //     'distance'=>$distance,
            //     'emissionfactor'=>$emissionfactor,
            //     'total' => $total,
            //     'type'=>'Vehicles'
                
            // ]);

            DB::table('emissioncal')->insert(
                [ 
                    'user_id'=>$user_id,
                    'distance'=>$distance,
                    'emissionfactor'=>$emissionfactor,
                    'total' => $total,
                    'type'=>'Vehicles',
                    'created_at'=> $nn,
                    'updated_at'=> $nn,
                    ]
            );
    

        }else{

            // $distance = 0;
            // $emissionfactor = $emissionfactor;
            // $result =  $distance*$emissionfactor;
            // $total = $result;
            // Householdcal::create([
            //     'user_id'=>$user_id,
            //     'distance'=>$distance,
            //     'emissionfactor'=>$emissionfactor,
            //     'total' => $total
                
            // ]);

        }


        return "Your carbon emission for travelling is  ".$total. " Tonnes";
        
        
    }

    public function emittcarbonflight(Request $request){

        $flightdistance = $request->flightdistance;
        $flightemissionfactor = $request->flightemissionfactor;
        $oneway = $request->oneway;
        // $returnflight = $request->returnflight;
        $user_id = Auth::user()->id;
        $nn = NOW();

        if(!empty($flightdistance)){

            $result =  $flightdistance*$flightemissionfactor;
            $total = round($result);

            // Householdcal::create([
            //     'user_id'=>$user_id,
            //     'distance'=>$flightdistance,
            //     'emissionfactor'=>$flightemissionfactor,
            //     'trip_type' => $oneway,
               
            //     'total' => $total,
            //     'type'=>'Flight'
            // ]);

            DB::table('emissioncal')->insert(
                [ 
                    'user_id'=>$user_id,
                    'distance'=>$flightdistance,
                    'emissionfactor'=>$flightemissionfactor,
                    'trip_type' => $oneway,
                    // 'returnflight'=>$returnflight,
                    'total' => $total,
                    'type'=>'Flight',
                    'created_at'=> $nn,
                    'updated_at'=> $nn,
                    ]
            );
  
        }

        return "Your carbon emission for Flight is  ".$total. " Tonnes";
    }


    public function procount(Request $request){

       $id =  $request->projectId;
       $preview = Project::where('id',$id)->first();
       $mypreviewproject = Project::where('id',$id)->update(['theprojectview'=>$preview->theprojectview+1]);

      return $mypreviewproject;

    }


    public function householdtrial(Request $request){

        return view('household.householdtrial');

    }


    public function householdlogout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/householdsignin');
       
    }

}
