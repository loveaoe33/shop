<?php

namespace App\Http\Controllers;

use App\shopproduct;
use ECPay_PaymentMethod as ECPayMethod;
use ECPay_AllInOne as ECPay;
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
        $tatalprice = 0;
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
            } else if($result2>0){
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

        $shopdata = DB::table('shopproduct')->where('productid', '=', $id)
            ->get();
        $totalprice = 0;
        $shoptatal = DB::table('shopproduct')->get();
        $result3 = count($shoptatal);
        if ($result3 > 0) {

            foreach ($shoptatal as $all) {
                // global $tatalprice;
                $tatalprice = $tatalprice +  $all->total;
            };
        } else {

            $tatalprice = 0;
        }

        // $result = count($query);


        // if ($result > 0) {
        //     foreach ($query as $all) {
        //         $alltotals = $alltotals + $all->price;
        //     }
        return response()->json(['data1' => $shopdata, 'data2' => $exist, 'data3' => $tatalprice]);  //回傳明細
        // echo '價格'.$alltotals;  //回傳總價

        // }
    }

    public function deleteshop(Request $request)
    {
        $deleteid = $request->get('deleteid');
        $tatolprice = 0;
        DB::table('shopproduct')
            ->where('productid', $deleteid)
            ->delete();
        $lasttotal = shopproduct::all();
        $result4 = count($lasttotal);
        if ($result4 > 0) {

            foreach ($lasttotal as $all) {
                // global $tatalprice;
                $tatolprice = $tatolprice +  $all->total;
            };
        } else {

            $tatolprice = 0;
        }


        return response()->json(['ok'=>$tatolprice]);
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

    public function CardTest(Request $request) //測試用
    {
       
        try {
            
            
            $obj =new ECPay();
       
            //服務參數
            $obj->ServiceURL  = "https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5";   //服務位置
            $obj->HashKey     = '5294y06JbISpM5x9' ;                                           //測試用Hashkey，請自行帶入ECPay提供的HashKey
            $obj->HashIV      = 'v77hoKGq4kWxNNIS' ;                                           //測試用HashIV，請自行帶入ECPay提供的HashIV
            $obj->MerchantID  = '2000132';                                                     //測試用MerchantID，請自行帶入ECPay提供的MerchantID
            $obj->EncryptType = '1';                                                           //CheckMacValue加密類型，請固定填入1，使用SHA256加密
    
    
            //基本參數(請依系統規劃自行調整)
            $MerchantTradeNo = "Test".time() ;
            $obj->Send['ReturnURL']         = "http://www.ecpay.com.tw/receive.php" ;    //付款完成通知回傳的網址
            $obj->Send['MerchantTradeNo']   = $MerchantTradeNo;                          //訂單編號
            $obj->Send['MerchantTradeDate'] = date('Y/m/d H:i:s');                       //交易時間
            $obj->Send['TotalAmount']       = 200;                                      //交易金額
            $obj->Send['TradeDesc']         = "good to drink" ;                          //交易描述
            $obj->Send['ChoosePayment']     = ECPayMethod::Credit ;              //付款方式:Credit
            $obj->Send['IgnorePayment']     = ECPayMethod::GooglePay ;           //不使用付款方式:GooglePay
    
            //訂單的商品資料
            array_push($obj->Send['Items'], array('Name' => "歐付寶黑芝麻豆漿", 'Price' => (int)"200",
                       'Currency' => "元", 'Quantity' => (int) "1", 'URL' => "dedwed"));
    
    
            //Credit信用卡分期付款延伸參數(可依系統需求選擇是否代入)
            //以下參數不可以跟信用卡定期定額參數一起設定
            $obj->SendExtend['CreditInstallment'] = "12" ;    //分期期數，預設0(不分期)，信用卡分期可用參數為:3,6,12,18,24
            $obj->SendExtend['InstallmentAmount'] = 0 ;    //使用刷卡分期的付款金額，預設0(不分期)
            $obj->SendExtend['Redeem'] = false ;           //是否使用紅利折抵，預設false
            $obj->SendExtend['UnionPay'] = false;          //是否為聯營卡，預設false;
    
            //Credit信用卡定期定額付款延伸參數(可依系統需求選擇是否代入)
            //以下參數不可以跟信用卡分期付款參數一起設定
            // $obj->SendExtend['PeriodAmount'] = '' ;    //每次授權金額，預設空字串
            // $obj->SendExtend['PeriodType']   = '' ;    //週期種類，預設空字串
            // $obj->SendExtend['Frequency']    = '' ;    //執行頻率，預設空字串
            // $obj->SendExtend['ExecTimes']    = '' ;    //執行次數，預設空字串
            
            # 電子發票參數
            /*
            $obj->Send['InvoiceMark'] = ECPay_InvoiceState::Yes;
            $obj->SendExtend['RelateNumber'] = "Test".time();
            $obj->SendExtend['CustomerEmail'] = 'test@ecpay.com.tw';
            $obj->SendExtend['CustomerPhone'] = '0911222333';
            $obj->SendExtend['TaxType'] = ECPay_TaxType::Dutiable;
            $obj->SendExtend['CustomerAddr'] = '台北市南港區三重路19-2號5樓D棟';
            $obj->SendExtend['InvoiceItems'] = array();
            // 將商品加入電子發票商品列表陣列
            foreach ($obj->Send['Items'] as $info)
            {
                array_push($obj->SendExtend['InvoiceItems'],array('Name' => $info['Name'],'Count' =>
                    $info['Quantity'],'Word' => '個','Price' => $info['Price'],'TaxType' => ECPay_TaxType::Dutiable));
            }
            $obj->SendExtend['InvoiceRemark'] = '測試發票備註';
            $obj->SendExtend['DelayDay'] = '0';
            $obj->SendExtend['InvType'] = ECPay_InvType::General;
            */
    
    
            //產生訂單(auto submit至ECPay)
            $obj->CheckOut();
    
        
        } catch (Exception $e) {
            echo $e->getMessage();
        } 
    

    }

}
