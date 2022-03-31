<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    //
    public function check_user(Request $request){

       

        if($request->user_type=='admin'){

            if($this->verify_admin($request->email,$request->password,$request)){
                return redirect('/admin/dashboard');
            }else{
                return redirect('/login?status=login-failed');
            }

        }else if($request->user_type=='seller'){
            if($this->verify_seller($request->email,$request->password,$request)){
                return redirect('/seller/dashboard');
            }else{
                return redirect('/login?status=login-failed');
            }
        }else if($request->user_type=='guest'){

            if($this->verify_guest($request->email,$request->password,$request)){
                return redirect('/?status=login-success');
            }else{
                return redirect('/login?status=login-failed');
            }
        }

    }

    private function verify_seller($email,$password,$request){

        try{

            $validUser = DB::table('seller')->where('email',$email)->first();
            $hash_password = $validUser->password;
        // echo $hash_password;

    
        if(Hash::check($password,$hash_password))
        {
            $this->generate_session($validUser,$request);
            return true;
            
        }
        throw new \Exception();

        }catch(\Exception $e){
             return false;
        }
        


    }

    private function verify_guest($email,$password,$request){
        try{

            $validUser = DB::table('users')->where('email',$email)->first();
            $hash_password = $validUser->password;
        // echo $hash_password;

    
        if(Hash::check($password,$hash_password))
        {
            $this->generate_session( $validUser,$request);
            return true;
            
        }
        throw new \Exception();

        }catch(\Exception $e){
             return false;
        }
        
    }

    private function verify_admin($email,$password,$request){
        try{

            $validUser = DB::table('admin')->where('email',$email)->first();
            $hash_password = $validUser->password;
            
            
    
        if(Hash::check($password,$hash_password))
        {
            $this->generate_session($validUser,$request);
            return true;
        }
        throw new \Exception();

        }catch(\Exception $e){
            return false;
        }

    }

    private function generate_session($validUser,$request){

        if($request->session()->put('user.sessiondata',$validUser)){
            return true;
        }else{
            return false;
        }
    }

    public function logout_user(Request $request){

        $request->session()->forget('user.sessiondata');
        return redirect('/login?status=logout-successfully');
        
    }
}
