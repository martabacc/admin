<?php
/**
 * Created by PhpStorm.
 * User: rona
 * Date: 28/03/2017
 * Time: 22:08
 */

namespace App\Repositories;

use App\Coupon;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CouponRepository
{
    private $defaultErrorMsg, $defaultSuccessMsg;
    function __construct()
    {
        $this->defaultErrorMsg = 'Maaf kupon yang anda masukkan tidak valid/tidak berlaku';
        $this->defaultSuccessMsg = 'Sukses , kupon yang anda masukkan berlaku.';
    }

    public function checkCodeStatus($user_facing_coupon){
        $coupon = Coupon::where('customerfacingcoupon','=',$user_facing_coupon)
            ->firstOrFail();
        if(!$coupon) return response()->json([ 'status' => false, 'msg' => 'Kupon tersebut tidak ada']);

//        check if now is greater than active date
        if($coupon->activedate->gt(Carbon::now())) return response()->json(['status'=>false, 'msg'=> 'Kupon ini belum berlaku']);
//        check if now < expired date
        if($coupon->expiredate->lt(Carbon::now())) return response()->json(['status'=>false, 'msg'=> 'Kupon ini sudah kadaluarsa']);

//        check usages
        if($coupon->usages<=0) return response()->json(['status'=>false,'msg'=> $this->defaultErrorMsg]);

        if($coupon->id_condition) return $this->additionalCodeCondition($user_facing_coupon);

//        all passed
        return $coupon->coupon_id;
    }

    public function additionalCodeCondition($user_facing_coupon){
        return [];
    }

    public function submitCode($data)
    {

        $first = $this->checkCodeStatus($data['usercoupon']);
        if(is_array($first)) return $first;

        //      submit your own logic here
        $stringExecute = "SELECT public.submit_coupon_code(".$data['user'].", ".$data['item'].",".$first.")";
        $result = DB::select($stringExecute);

        return $result[0]->submit_coupon_code;

    }
}
