<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\User;
use \App\Enquiry;
use \App\Category;
use \App\Utility;
use \App\ProductUtility;
use \App\AdminProduct;
use \App\AdminProductAttribute;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $categories=Category::where('status',1)->where('parent_id',0)->where('id','>',0)->with('child')->get();
        $utilities=Utility::where('status',1)->where('parent_id',0)->where('id','>',0)->with('child')->get();
        $glassJars=AdminProduct::with(['category'=>function($query){
            $query->select('id','slug')->first();
        }])->where('category_id',4)->limit(8)->get();
        $petBottles=AdminProduct::with(['category'=>function($query){
            $query->select('id','slug')->first();
        }])->where('category_id',2)->limit(8)->get();
        $paperBottles=AdminProduct::with(['category'=>function($query){
            $query->select('id','slug')->first();
        }])->where('category_id',26)->limit(8)->get();
        $closures=AdminProduct::with(['category'=>function($query){
            $query->select('id','slug')->first();
        }])->where('category_id',25)->limit(8)->get();
        return view('front.home',compact('categories','glassJars','utilities','petBottles','paperBottles','closures'));
    }

    public function aboutUs()
    {
        $categories=Category::where('status',1)->where('parent_id',0)->where('id','>',0)->with('child')->get();
        return view('front.about',compact('categories'));
    }

    public function privacyPolicy()
    {
        $categories=Category::where('status',1)->where('parent_id',0)->where('id','>',0)->with('child')->get();
        return view('front.privacy',compact('categories'));
    }

    public function categoryProduct($slug)
    {
        $categories=Category::where('status',1)->where('parent_id',0)->where('id','>',0)->with('child')->get();
        $utilities=Utility::where('status',1)->where('parent_id',0)->where('id','>',0)->with('child')->get();
        $category=Category::where('slug',$slug)->select('id')->first();
        $products=AdminProduct::where('category_id',$category->id)->paginate(20);
        return view('front.category',compact('categories','products','slug','utilities'));
    }

    public function utilityProduct($slug)
    {
        $categories=Category::where('status',1)->where('parent_id',0)->where('id','>',0)->with('child')->get();
        $utilities=Utility::where('status',1)->where('parent_id',0)->where('id','>',0)->with('child')->get();
        $category=Utility::where('slug',$slug)->select('id','slug')->first();
        $products=ProductUtility::where('utility_id',$category->id)->with('product')->paginate(20);
        return view('front.utility',compact('categories','products','slug','utilities'));
    }

    public function getProduct($slug,$product)
    {
        $categories=Category::where('status',1)->where('parent_id',0)->where('id','>',0)->with('child')->get();
        $utilities=Utility::where('status',1)->where('parent_id',0)->where('id','>',0)->with('child')->get();
        $detail=AdminProduct::where('slug',$product)->first();
        $attributes=AdminProductAttribute::where('product_id',$detail->id)->get();
        $images=explode(',',$detail->image);
        $putils=ProductUtility::where('product_id',$detail->id)->with(['utility'=>function($query){
            $query->select('id','title','slug')->get();
        }])->get();
        return view('front.product',compact('categories','detail','utilities','putils','attributes','images'));
    }

    public function getUtilityProduct($slug,$product)
    {
        $categories=Category::where('status',1)->where('parent_id',0)->where('id','>',0)->with('child')->get();
        $utilities=Utility::where('status',1)->where('parent_id',0)->where('id','>',0)->with('child')->get();
        $detail=AdminProduct::where('slug',$product)->first();
        $attributes=AdminProductAttribute::where('product_id',$detail->id)->get();
        $images=explode(',',$detail->image);
        $putils=ProductUtility::where('product_id',$detail->id)->with(['utility'=>function($query){
            $query->select('id','title','slug')->get();
        }])->get();
        return view('front.product',compact('categories','detail','utilities','putils','attributes','images'));
    }

    public function submitEnquiry(Request $request)
    {
        $input=$request->all();
        Enquiry::create($input);
        return "Success";
    }

    public function getLogin()
    {
        $categories=Category::where('status',1)->where('parent_id',0)->where('id','>',0)->with('child')->get();
        return view('front.register',compact('categories'));
    }

    public function userEnquiries()
    {
        $categories=Category::where('status',1)->where('parent_id',0)->where('id','>',0)->with('child')->get();
        $enquiries=Enquiry::where('user_id',Auth::user()->id)->with(['product'=>function($query){
            $query->select('id','title','image')->get();
        }])->paginate(10);
        return view('front.enquiry',compact('categories','enquiries'));
    }
}
