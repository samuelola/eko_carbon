<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Bank;
use App\Models\Transaction;
use App\Models\Account;
use App\Models\Country;
use App\Models\KYC;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\Assessment;
use App\Models\Role;
use App\Models\Project_type;
use App\Models\OffsettersTransaction;
use App\Models\Rolepermission;
use App\Models\Setting;

class KycController extends Controller
{
    public function listing(Request $request){

        // $id = Crypt::decryptString($id);
        $id = Auth::user()->id;
        $user  = User::where('id','=',$id)->first();
        return view('user.listing',compact('user'));
    }

    public function kyccarbon(Request $request){

        // $id = Crypt::decryptString($id);
        $id = Auth::user()->id;
        $user  = User::where('id','=',$id)->first();
        return view('user.carbon',compact('user'));
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

    public function getRole($id){

        $roles = DB::table('users')
            ->where('id', $id)
            ->first();

        $main_role = DB::table('roles')
        ->where('name',$roles->role)->first();  
        
        return $main_role;
        
        // if (count($main_role) > 0) {
        //     return response()->json($main_role);
        // }

        
    }


    public function updateadminrole(Request $request){

        $id = $request->id;
        $firstname = $request->myfname;
        $lastname = $request->mylname;
        $role = $request->myrrole;

        $update_role = DB::table('users')->where('id',$id)->update(['firstname'=>$firstname,'lastname'=>$lastname,'role'=>$role]);

        if($update_role){

            return "Admin Role updated Successfully";

        }else{
            return "Admin Role  not updated";
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

        foreach($theprojects as $thval){

            $theproid = $thval;

        }
        $countprojectview = Project::where('user_id',$theproid->user_id)->sum('theprojectview');
        //percentage of views per project
        $offsetterspayments = OffsettersTransaction::where('owner_id',$theproid->user_id)->orderBy('id', 'DESC')->get();
        $allprojects = Project::where('user_id',$theproid->user_id)->orderBy('id', 'DESC')->take(4)->get();
        $allproject_type = Project_type::all();
        

        $offsettersowner = OffsettersTransaction::where('owner_id',Auth::user()->id)->get();

        //get all

        $theprojectss = Project::where('user_id',Auth::user()->id)->get();

        foreach($theprojectss as $thvall){

            $theproidd = $thvall;

        }

        $offsetterspaymentsts = Project::where('user_id',Auth::user()->id)->get();

        //pie chart count

        

        
        return view('user.dashboard',compact('theprojects','countprojectview','offsetterspayments','allprojects','allproject_type','offsettersowner','offsetterspaymentsts'));
    }

    public function admindashboard(Request $request){
        
        $allregistrations = User::all();
        $theregistrations = User::latest();
        $allusers = User::where('kyc_status',1)->get();
        $allprojects = Project::all();
        $listers = User::where('kyc_status',1)->where('role','!=','admin')->get();
        // $offsetters = OffsettersTransaction::distinct()->pluck('user_id');
        $offsetters = OffsettersTransaction::all();
        return view('admin.admindashboard',compact('allprojects','allregistrations','allusers','listers','theregistrations','offsetters'));
    }

    public function adminusers(Request $request){

        $adminusers = User::where('role','!=','user')->Where('role','!=','lister')->get();
        $ordinaryusers = User::where('role','=','user')->get();
        $userscount = User::all();
        // $adminlisters = User::where('kyc_status',1)->where('role','!=','admin')->get();
        $adminlisters = User::where('role','!=','admin')->where('role','!=','user')->where('role','!=','superadmin')->get();
        return view ('admin.adminusers',compact('adminusers','userscount','adminlisters','ordinaryusers'));

    }

    public function adminbids(Request $request){
         
        $adminusers = User::where('role','!=','user')->Where('role','!=','lister')->get();
        $ordinaryusers = User::where('role','=','user')->get();
        $userscount =  OffsettersTransaction::all();
        // $adminlisters = User::where('kyc_status',1)->where('role','!=','admin')->get();
        $adminlisters = User::where('role','!=','admin')->where('role','!=','user')->where('role','!=','superadmin')->get();
        return view ('admin.adminbids',compact('adminusers','userscount','adminlisters','ordinaryusers'));

    }


    public function adminproject(Request $request){

        $adminusers = User::where('role','!=','user')->get();
        $adminprojects = Project::all();
        $adminprojectpending = Project::where('status',1)->get();
        $adminprojectapproved = Project::where('status',2)->get();
        $adminprojectdeclined = Project::where('status',3)->get();
        // $adminlisters = User::where('kyc_status',1)->where('role','!=','admin')->get();
        $adminlisters = User::where('role','!=','admin')->where('role','!=','superadmin')->get();
        return view ('admin.adminprojects',compact('adminusers','adminprojects','adminprojectpending','adminprojectapproved','adminprojectdeclined','adminlisters'));

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

        

        User::where('id',$user_id)->update(['kyc_status'=>1,'role'=>'lister']);

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
        $carbon_credit = $request->carbon_credit;
        $tags = $request->tags;
        
        


        $pinn = mt_rand(10000, 99999);
       

    // shuffle the result
    $transactionidf = str_shuffle($pinn);


       

        if($file = $request->file('image')){

            $name = time() . $file->getClientOriginalName();

            $file->move('projectimages',$name);

            $theimage = "projectimages/".$name;


        }

        
        // $fr = implode(",",$tags);

        // foreach($tags as $val){

        //     $tag = $val;
        // }

        

        Project::create([
            'user_id'=>$user_id,
            'project_type'=>$project_type,
            'project_name'=>$project_name,
            'project_desc'=>$project_desc,
            'tonnes'=>$tonnes,
            'image'=> $theimage,
            'status'=>$status,
            'external_link'=>$external_link,
            'theprojectview' => $theprojectview,
            'idproject' => "ID:".$transactionidf,
            'carbon_credit' => $carbon_credit,
            'offsetters_amount'=> 0,
            // 'tags' =>$fr
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


    public function deleteuser($id){

        User::find($id)->delete();
  
        return back();

    }


    public function deleteproject($id){

        $theproject = Project::where('id',$id)->first();

        $filePath = 'projectimages/'.$theproject->image;

        if(file_exists($filePath)){

            unlink($filePath);

            Project::find($id)->delete();

        }else{

            Project::find($id)->delete();

        }

        
        return back();

    }
    

    public function updatelister(Request $request){

        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $role = $request->role;
        $id = $request->id;
        $nn = NOW();

        User::where('id',$id)->update(['firstname' => $firstname,'lastname' => $lastname,'email'=>$email,'role'=>$role,'updated_at'=> $nn]);

        return "Lister Updated Successfully!";

    }


    public function deletelister(Request $request){

        $theids = $request->id;

        foreach($theids as $theid){

            User::find($theid)->delete();
        }

        return "Lister Deleted Successfully!";

    }


    public function approve(Request $request){

        $theids = $request->id;

        $nn = NOW();

        foreach($theids as $theid){

            Project::where('id',$theid)->update(['status' => 2,'updated_at'=> $nn]);
        }

        return "Project has been Approved Successfully!";

    }


    public function disapprove(Request $request){

        $theids = $request->id;

        $nn = NOW();

        foreach($theids as $theid){

            Project::where('id',$theid)->update(['status' => 3,'updated_at'=> $nn]);
        }

        return "Project has been Disapproved !";

    }


    public function pending(Request $request){

        $theids = $request->id;

        $nn = NOW();

        foreach($theids as $theid){

            Project::where('id',$theid)->update(['status' => 1,'updated_at'=> $nn]);
        }

        return "Project is now pending!";

    }

    


    public function updatetheproject(Request $request){

        $project_name = $request->project_name;
        $project_type = $request->project_type;
        $carbon_credit = $request->carbon_credit;
        $tonnes = $request->tonnes;
        $status = $request->status;
        $external_link = $request->external_link;
        $id = $request->id;
        $projectcost = $request->projectcost;
        $nn = NOW();

        if($file = $request->file('image')){

            $myimgname = time() . $file->getClientOriginalName();

            $file->move('projectimages',$myimgname);

            $theupdateimage = "projectimages/".$myimgname;


        }else{

            $getImages = Project::where('id','=',$id)->first();

            $theupdateimage = $getImages->image;
        }

        Project::where('id',$id)->update(['project_name' => $project_name,'project_type' => $project_type,'carbon_credit'=>$carbon_credit,'tonnes'=>$tonnes,'image'=>$theupdateimage,'status'=>$status,'projectcost'=>$projectcost,'external_link'=>$external_link,'updated_at'=> $nn]);

        return "Project Updated Successfully!";

    }


    public function updatetherole(Request $request){

        $role_desc = $request->role_desc;
        $name = $request->name;
        $id = $request->id;
        $nn = NOW();

        Role::where('id',$id)->update(['name'=>$name,'role_desc'=>$role_desc,'updated_at'=>$nn]);

        return "Role Updated Successfully";


    }


    public function adminsetting(Request $request){

        // $roles = DB::table('roles')
        //     ->join('users', 'roles.name', '=', 'users.role')
        //     ->select('roles.*')
        //     ->get();
        $roles = Role::where('role_name','superadmin')->get();
        $theroles = Role::all();
        $adminusers = User::where('role','!=','user')->get();
        $adminuserss = User::where('role','=','admin')->get();
        $userscount = User::all();
        $offtrans = OffsettersTransaction::all();

        $factor = Setting::where('id',1)->first();

        // $adminlisters = User::where('kyc_status',1)->where('role','!=','admin')->get();
        $adminlisters = User::where('role','!=','admin')->where('role','!=','superadmin')->get();
        return view ('admin.adminsetting',compact('adminusers','adminuserss','userscount','adminlisters','roles','theroles','offtrans','factor'));

        
    }

    public function adminaddrole(Request $request){

        return view('admin.adminaddrole');
    }

    public function updaterolepermission (Request $request){

        $id = $request->id;
        $name = $request->name;
        $desc = $request->desc;
        $project = $request->project;
        $list = $request->list;
        $market = $request->market;
        $user = $request->users;
        $credit = $request->credit;
        $addrole = $request->addrole;

        $update_role = Role::where('id',$id)->update([
            'name'=>$name,
            'role_desc'=>$desc,
            'created_at'=> NOW()
        ]);

        $update_rolepermission = Rolepermission::where('role_id',$id)->update([
            
            'project'=>$project,
            'listing'=>$list,
            'market'=>$market,
            'users'=>$user,
            'credit'=>$credit,
            'addrole'=>$addrole,
            'created_at'=> NOW()
        ]);
        
        
         return 'Role updated Successfully';;
    }


    public function rolepermission (Request $request){

        
        $name = $request->name;
        $desc = $request->desc;

        $project = $request->viewproject;
        $list = $request->listing;
        $market = $request->markett;
        $user = $request->users;
        $assigncarbon = $request->assigncarbon;
        $assignrole = $request->assignrole;

        $role_id = Role::create([
            'name'=>$name,
            'role_desc'=>$desc,
            'role_name'=>'superadmin',
            'created_at'=> NOW()
        ])->id;

        $update_rolepermission = Rolepermission::create([


            'role' => $name,
            'role_id'=>$role_id,
            'project'=>$project,
            'listing'=>$list,
            'market'=>$market,
            'users'=>$user,
            'credit'=>$assigncarbon,
            'addrole'=>$assignrole,
            'created_at'=> NOW()
        ]);
        
        
         return "Role created successfully";
    }

    public function factor (Request $request){

        $factor = $request->factor;

         Setting::create([


            'factor' => $factor,
            
        ]);

        return "Created successfully";
    }
    

    public function updatefactor (Request $request){

        $factor = $request->factor;

         Setting::where('id',1)->update([


            'factor' => $factor,
            
        ]);

        return "Updated successfully";
    }

    

    
}
