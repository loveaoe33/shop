<?php

namespace App\Http\Controllers;

use App\shopproduct;
use Illuminate\Http\Request;
use DB;

class shopcontroller extends Controller
{
    public function index()
    {
        DB::table('shopproduct')->delete();
        return view('index');
    }

    public function insertshop(Request $request)

    {
        $exist = '';
        $id = $request->get('shopidd');
        $productqyilty = $request->get('shopquiltyy');
        $getstamps = DB::table('product')
            ->where('id', '=', $id)
            ->get();
        $result = count($getstamps);
        if ($result > 0) {
            $price = $getstamps[0]->price;
            $name = $getstamps[0]->productname;
            $shop = DB::table('shopproduct')
                ->where('productid', '=', $id)
                ->get();
            $alltotals = 0;
            $result2 = count($shop);

            if ($result2 <= 0) {
                $alltotals = $price * $productqyilty;
                DB::table('shopproduct')->insert(
                    ['name' => $name, 'quantity' => $productqyilty, 'price' => $price, 'total' =>  $alltotals, 'productid' => $id]


                );
                global $exist;
                $exist = 'false';
                // $users = DB::table('shopproduct')->where('productid', '=', $id)
                // ->get();
                // return response()->json(['data1' => $users,'data2' =>$exist]);
            } else {
                // $name= $getstamps[0]->productname;
                $check = DB::table('shopproduct')
                    ->where('productid', '=', $id)
                    ->get();
                $qul = $check[0]->quantity;
                $totalprice = $check[0]->total;
                $qul = $qul + $productqyilty;
                $alltotals = $price * $productqyilty;
                $alltotals = $alltotals + $totalprice;
                DB::table('shopproduct')
                    ->where('productid', $id)
                    ->update(['quantity' => $qul, 'total' => $alltotals]);
                global $exist;
                $exist = 'true';
                // $users = DB::table('shopproduct')->where('productid', '=', $id)
                // ->get();
                // return response()->json(['data1' => $users,'data2' =>$exist]); 
            }
        }

        $users = DB::table('shopproduct')->where('productid', '=', $id)
            ->get();

        // $result = count($query);


        // if ($result > 0) {
        //     foreach ($query as $all) {
        //         $alltotals = $alltotals + $all->price;
        //     }
        return response()->json(['data1' => $users, 'data2' => $exist]);  //回傳明細
        // echo '價格'.$alltotals;  //回傳總價

        // }
    }

    public function Shopproduct1(Request $request) //測試用
    {

        $query = shopproduct::all();
        $result = count($query);
        $alltotals = '0';

        if ($result > 0) {
            foreach ($query as $all) {
                $alltotals = $alltotals + $all->price;
            }
            return response()->json(['data1' => $query]);  //回傳明細
            // echo '價格'.$alltotals;  //回傳總價

        }

        $total = '';
        echo $query . '總價為' . $result;
    }

    // public function Shopproduct(Request $request)
    // {
    //     $query=shopproduct::all();
    // }


    public function allproduct(Request $request)
    {
        $_token = $request->get('test2');
        $result = DB::table('product')->get();
        $query = shopproduct::all();


        // $query=Chugen2::all();
        return response()->json(array(['OK' => '$_token', 'a' => 4, 'name' => 'phone'], ['OK' => '$_token', 'a' => 1, 'name' => 'camare'], ['OK' => '$_token', 'a' => 2, 'name' => 'computer'], ['OK' => '$_token', 'a' => 5, 'name' => 'sdcard'], ['OK' => '$_token', 'a' => 6, 'name' => 'tv'], ['OK' => '$_token', 'a' => 3, 'name' => 'monnitor']));
    }


    public function test(Request $request) //測試用
    {
        $users = DB::table('shopproduct')->where('productid', '=', '4') //取出json
            ->get();
        $user = DB::table('shopproduct')->where('productid', '4')->first(); //取出陣列
        echo  $users;

        // $id =6;
        // $productqyilty =8;
        // $getstamps = DB::table('product')
        //     ->where('id', '=', $id)
        //     ->get();
        // $result = count($getstamps);
        // if ($result > 0) {
        //     $price = 200;
        //     $name = '222222';
        //     $shop = DB::table('shopproduct')
        //     ->where('productid', '=', $id)
        //     ->get();
        //     $alltotals = 0;
        //     $result2 = count($shop);

        //     if ($result2 <= 0) {
        //         $alltotals = $price * $productqyilty;
        //         DB::table('shopproduct')->insert(
        //             ['name' => $name, 'quantity' => $productqyilty, 'price' => $price, 'total' =>  $alltotals, 'productid' => $id]


        //         );
        //     } else {
        //         // $name= $getstamps[0]->productname;
        //         $check = DB::table('shopproduct')
        //             ->where('productid', '=', $id)
        //             ->get();
        //         $qul = $check[0]->quantity;
        //         $totalprice = $check[0]->total;
        //         $qul = $qul + $productqyilty;
        //         $alltotals = $price * $productqyilty;
        //         $alltotals = $alltotals+$totalprice ;
        //         DB::table('shopproduct')
        //             ->where('productid', $id)
        //             ->update(['quantity' => $qul, 'total' => $alltotals]);
        //     }
        // }
    }
}
