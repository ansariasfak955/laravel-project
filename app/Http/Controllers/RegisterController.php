<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function save_form(Request $request){
            
        DB::table('users')->insert([
            'name' => $request->name,
            'email'=> $request->email,
            'mobile'=> $request->mobile,
            'password'=>Hash::make($request->password),
        ]);


        
        


    }
}
