<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile_model;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function index(){
        return view('users.login_register');
    }
    public function register(Request $request){
        $this->validate($request,[
           'name'=>'required|string|max:255',

            'email'=>'required|string|email|unique:users,email',
            'password'=>'required|min:6|confirmed',
        ]);


       return User::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => Hash::make($request['password']),
        'api_token' => Str::random(60),
    ]);

        return $user ;

    }
    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required',

        ]);
        $input_data=$request->all();
        if(Auth::attempt(['email'=>$input_data['email'],'password'=>$input_data['password']]))
        {
            Session::put('frontSession',$input_data['email']);
            return response()->json("logged In", 200);
        }else{
            return ['error'=>["Compte is invalide"]];
        }
    }
    public function logout(){
        Auth::logout();
        Session::forget('frontSession');
        return redirect('/');
    }
    public function account(){
        $countries=DB::table('countries')->get();
        $user_login=User::where('id',Auth::id())->first();
        return view('users.account',compact('countries','user_login'));
    }
    public function updateprofile(Request $request,$id){
        $this->validate($request,[
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'mobile'=>'required',
        ]);
        $input_data=$request->all();
        DB::table('users')->where('id',$id)->update(['name'=>$input_data['name'],
            'address'=>$input_data['address'],
            'city'=>$input_data['city'],
            'state'=>$input_data['state'],
            'country'=>$input_data['country'],
            'pincode'=>$input_data['pincode'],
            'mobile'=>$input_data['mobile']]);
        return back()->with('message','Update Profile already!');

    }
    public function updatepassword(Request $request,$id){
        $oldPassword=User::where('id',$id)->first();
        $input_data=$request->all();
        if(Hash::check($input_data['password'],$oldPassword->password)){
            $this->validate($request,[
               'newPassword'=>'required|min:6|max:12|confirmed'
            ]);
            $new_pass=Hash::make($input_data['newPassword']);
            User::where('id',$id)->update(['password'=>$new_pass]);
            return back()->with('message','Update Password Already!');
        }else{
            return back()->with('oldpassword','Old Password is Inconrrect!');
        }
    }
}
