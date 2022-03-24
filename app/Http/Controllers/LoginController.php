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
            $this->verify_admin($request->email,$request->password);
        }else if($request->user_type=='seller'){
            $this->verify_seller($request->email,$request->password);
        }else if($request->user_type=='guest'){
            $this->verify_guest($request->email,$request->password);
        }

    }

    private function verify_seller($email,$password){

        try{

            $validUser = DB::table('seller')->where('email',$email)->first();
            $hash_password = $validUser->password;
        // echo $hash_password;

        if(Hash::check($password,$hash_password)){
            echo 'login successfull';
            return Redirect::to('/seller/dashboard?status=seller-login-success');
            echo 'login successfull 2';
        }else{
             throw new \Exception();
        }

        }catch(\Exception $e){
            echo 'Invalid Login';

             return Redirect::to('/login?status=login-failed');
        }
        


    }

    private function verify_guest($email,$password){

    }

    private function verify_admin($email,$password){

    }
}
