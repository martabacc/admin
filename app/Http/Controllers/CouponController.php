<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Repositories\CouponRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    private $couponRepository, $userRepository;

    function __construct(CouponRepository $couponRepository,
                         UserRepository $userRepository)
    {
        $this->couponRepository= $couponRepository;
        $this->userRepository = $userRepository;
    }



    public function index()
    {
        $data['data'] = Coupon::orderBy('activedate', 'desc')->paginate(20);
        return view('pages.coupon.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user'] = $this->userRepository->checkbox();
        return view('pages.coupon.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $data['limit_usages'] = $data['usages'];
        $ss = $this->couponRepository->storeCoupon($data);

        if($ss) return redirect('coupon')->with('success',true);
        else return redirect('coupon')->with('success',false);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function detailusages(Request $request, $id)
    {

    }

    public function usages()
    {

    }
}
