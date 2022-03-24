<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class sellerController extends Controller
{
    //
    public function saveSeller(Request $request)
    {
        
        // dd($request->all());

        DB::table('seller')->insert([
            'name' => $request->name,
            'email'=> $request->email,
            'mobile'=> $request->mobile,
            'password'=>Hash::make($request->password),
        ]);

        return redirect(url('/login?status=seller-register-success'));
        
    }
}
