<?php

namespace App\Helpers;
use App\ProductUtility;

class UtilityHelper
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public static function utility($utility,$product)
    {
        return ProductUtility::where('product_id',$product)->where('utility_id',$utility)->first();
    }
}
