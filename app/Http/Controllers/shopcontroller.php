<?php

namespace App\Http\Controllers;

use App\shopproduct;
use Illuminate\Http\Request;
use DB;

class shopcontroller extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function insertshop(Request $request)
    {
        return response()->json(array(['OK' => '$_token', 'a' => 1, 'name' => 'phone'], ['OK' => '$_token', 'a' => 2, 'name' => 'camare'], ['OK' => '$_token', 'a' => 3, 'name' => 'computer'], ['OK' => '$_token', 'a' => 4, 'name' => 'sdcard'], ['OK' => '$_token', 'a' => 5, 'name' => 'tv'], ['OK' => '$_token', 'a' => 6, 'name' => 'monnitor']));
      
    }

    public function Shopproduct1(Request $request)
    {
     
        $query=shopproduct::all();
        $result = count($query);
        $alltotals='0';
    
       if($result>0)
       {
           foreach( $query as $all )
           {
            $alltotals=$alltotals+$all->price;
             
           }
        return response()->json(['data1'=>$query]);  //回傳明細
        // echo '價格'.$alltotals;  //回傳總價
          
       }

        // $total= '';
        // echo $query.'總價為'. $result;
    }

    // public function Shopproduct(Request $request)
    // {
    //     $query=shopproduct::all();
    // }


    public function allproduct(Request $request)
    {
        $_token = $request->get('test2');
        $result = DB::table('product')->get();
        $query=shopproduct::all();


        // $query=Chugen2::all();
        return response()->json(array(['OK' => $_token, 'a' => 1, 'name' => 'phone'], ['OK' => $_token, 'a' => 2, 'name' => 'camare'], ['OK' => $_token, 'a' => 3, 'name' => 'computer'], ['OK' => $_token, 'a' => 4, 'name' => 'sdcard'], ['OK' => $_token, 'a' => 5, 'name' => 'tv'], ['OK' => $_token, 'a' => 6, 'name' => 'monnitor']));
    }


    public function test(Request $request)
    {
        $_token = $request->get('test2');
        $result = DB::table('product')->get();
        // $test = $result[1];

        // $query=Chugen2::all();
        echo  $result;
    }
}
