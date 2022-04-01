<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){

        $data['title'] = 'Add Catgory';
        $data['cakes_list'] = DB::table('category')->get();
        return view('seller.category.add',$data);
    }

    public function create(Request $request){

        DB::table('category')->insert([
            'name'=>$request->name,
        ]);
        $request->session()->flash('status','Cake Added Successfully');
        return redirect('/seller/category/add?status=Cake-Added-Successfully');
    } 

}
