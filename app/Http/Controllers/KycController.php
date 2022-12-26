<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use DB;
use App\Models\Bank;
use App\Models\Transaction;
use App\Models\Account;
use App\Models\Country;
use App\Models\KYC;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\Assessment;



class KycController extends Controller
{
    public function listing(Request $request){

        // $id = Crypt::decryptString($id);
        $id = Auth::user()->id;
        $user  = User::where('id','=',$id)->first();
        return view('user.listing',compact('user'));
    }

    public function kyc(Request $request){
        
        $id = Auth::user()->id;
        $user  = User::where('id','=',$id)->first();
        $banks = Bank::all();
        $accounts = Account::all();
        $allcountry = Country::all();
        return view('user.kyc',compact('user','banks','accounts','allcountry'));
    }

    public function getState(Request $request){

        $states = DB::table('states')
            ->where('country_id', $request->country_id)
            ->get();
        
        if (count($states) > 0) {
            return response()->json($states);
        }
    }

    public function getCity(Request $request){

        $cities = DB::table('cities')
            ->where('state_id', $request->state_id)
            ->get();
        
        if (count($cities) > 0) {
            return response()->json($cities);
        }
    }

    public function dashboard(Request $request){
        
        $theprojects = Project::where('user_id',Auth::user()->id)->take(3)->get();
        $countprojectview = Project::sum('theprojectview');
        //percentage of views per project

        return view('user.dashboard',compact('theprojects','countprojectview'));
    }

    public function admindashboard(Request $request){
        
        $allregistrations = User::all();
        $allusers = User::where('kyc_status',1)->get();
        $listers = User::where('kyc_status',1)->where('role','!=','admin')->get();
        return view('admin.admindashboard',compact('allregistrations','allusers','listers'));
    }

    public function adminusers(Request $request){

        $adminusers = User::where('role','=','admin')->get();

        return view ('admin.adminusers');

    }


    public function saveKYC(Request $request){


        // $this->validate($request,[

        //     'country'=>'required',
        //     'account_type'=> ' required',
        //     'thumbnail'=>'required|file|size:80|Mimes:jpeg,jpg,png|dimensions:width=80,height=50',
        //     'video_preview'=>'required|file|mimetypes:video/x-flv,video/mp4',
        //     'image_preview'=>'required|file|mimes:jpeg|dimensions:width=2560,height=1440',
        //     'main_file'=>'required|file|mimes:zip|size:3072',
        //     'account_number'=>'required',
        //     'bank_name'=>'required',
        //     'account_name'=> 'required',
        //     'business_name'=> 'required',
        //     'business_email'=> 'required',
        //     'business_address'=>'required',
        //     'website' => 'required',
        //     'industry' => 'required',
        //     'summary' => 'required',
        //     'project_scope' => 'required',
        //     'business_owner' => 'required',
        //     'more' => 'required',
        //     'bus_fullname' => 'required',
        //     'bus_email' => 'required',
        //     'phone' => 'required',
        //     'bus_country' => 'required',
        //     'bus_state' => 'required',
        //     'bus_city' => 'required',
        //     'address' => 'required',
        //     'identity' => 'required',
        // ]);
          
        

        // $country= $request->country;
		// $user_id = $request-> user_id;
		// $account_type = $request->account_type;
		//  $mybank = $request->mybank;
		//  $samt = $request->samt;
		//  $myacctname = $request->myacctname;
		//  $business_name = $request->business_name;
		//  $business_email = $request->business_email;
		//  $business_address = $request->business_address;
		//  $website = $request->website;
		//  $industry= $request->industry;
		//  $summary = $request->summary;
		//  $project_scope = $request->project_scope;
		//  $business_owner = $request->business_owner;
		//  $more = $request->more;
		//  $bus_fullname = $request->bus_fullname;
		//  $bus_email = $request->bus_email;
		//  $phone = $request->phone;
		//  $bus_country = $request->bus_country;
		//  $bus_state = $request->bus_state;
		//  $bus_city = $request->bus_city;
		//  $address = $request->address;
		//  $identityy = $request->identityy;
		//  $input_file = $request->input_file;

        
        $user_id= $request->user_id;
        $status = $request->status;
        $country= $request->country;
        $account_type= $request->account_type;
        $account_number = $request->account_number;
        $bank_name = $request->bank_name;
        $account_name = $request->account_name;
        $business_name = $request->business_name;
        $business_email = $request->business_email;
        $business_address = $request->business_address;
        $website = $request->website;
        $industry = $request->industry;
        $summary = $request->summary;
        $project_scope = $request->project_scope;
        $business_owner = $request->business_owner;
        $more = $request->more;
        $bus_fullname = $request->bus_fullname;
        $bus_email = $request->bus_email;
        $phone = $request->phone;
        $bus_country = $request->bus_country;
        $bus_state = $request->bus_state;
        $bus_city = $request->bus_city;
        $address = $request->address;
        $identity = $request->identity;

        if($file = $request->file('image')){

            $name = time() . $file->getClientOriginalName();

            $file->move('kycimages',$name);

            $theimage = "kycimages/".$name;


        }

        KYC::create([
            'user_id'=>$user_id,
            'country'=>$country,
            'account_type'=>$account_type,
            'account_number'=>$account_number,
            'bank_name'=>$bank_name,
            'account_name'=>$account_name,
            'business_name'=>$business_name,
            'business_email'=>$business_email,
            'business_address'=>$business_address,
            'website'=>$website,
            'industry'=>$industry,
            'summary'=>$summary,
            'project_scope'=>$project_scope,
            'business_owner'=>$business_owner,
            'bus_state'=>$bus_state,
            'phone'=>$phone,
            'bus_country'=>$bus_country,
            'bus_city'=>$bus_city,
            'more'=>$more,
            'address'=>$address,
            'identity'=>$identity,
            'image'=> $theimage,
            'bus_fullname'=>$bus_fullname,
            'bus_email'=> $bus_email,
            'status'=> $status 
            
        ]);

        

        User::where('id',$user_id)->update(['kyc_status'=>1]);

        return "Created Successfully!";

        
    }

    public function createproject(Request $request){


        $this->validate($request, [
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'required',
            'external_link' => 'required|string',
            'project_type' => 'required|string',
            'project_name' => 'required|string',
        ]);
        
        $user_id = $request->user_id;
        $project_type = $request->project_type;
        $project_name = $request->project_name;
        $project_desc = $request->project_desc;
        $tonnes = $request->tonnes;
        $status = $request->status;
        $external_link = $request->external_link;
        $theprojectview = $request->theprojectview;
        
        // if($file = $request->file('image')){

        //     $name = time() . $file->getClientOriginalName();

        //     $file->move('projectimages',$name);

        //     $theimage = "projectimages/".$name;


        // }


        if($request->hasfile('image')){

            foreach($request->file('image') as  $imager){
               
                $name = time() . $imager->getClientOriginalName();

                $imager->move('projectimages',$name);

                $theimaget[] = "projectimages/".$name;

            }

        }

        $theimage = json_encode($theimaget);

        Project::create([
            'user_id'=>$user_id,
            'project_type'=>$project_type,
            'project_name'=>$project_name,
            'project_desc'=>$project_desc,
            'tonnes'=>$tonnes,
            'image'=> $theimage,
            'status'=>$status,
            'external_link'=>$external_link,
            'theprojectview' => $theprojectview
        ]);

        return "Project Created Successfully!";
    }


    public function certificate(Request $request){
        
        $id = Auth::user()->id;
        $user  = User::where('id','=',$id)->first();
        $transaction = Transaction::where('user_id',$id)->first();
        $thepreassements = Assessment::where('user_id',$id)->get();
        $total_mass_recycled = Assessment::sum('mass_recycled');
        $total_mass_emission_avoidance = Assessment::sum('emission_avoidance');
        $company_name = KYC::where('user_id',$id)->first();
        return view('user.certificate',compact('user','transaction','thepreassements','total_mass_recycled','total_mass_emission_avoidance','company_name'));
    }


    
}
