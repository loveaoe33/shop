<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopcontroller extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function allproduct(Request $request)
    {
        $_token=$request->get('test2');
        

        // $query=Chugen2::all();
        return response()->json(array(['OK'=>$_token,'a'=>1],['OK'=>$_token,'a'=>2],['OK'=>$_token,'a'=>3],['OK'=>$_token,'a'=>4],['OK'=>$_token,'a'=>5],['OK'=>$_token,'a'=>6]));
    }
}
