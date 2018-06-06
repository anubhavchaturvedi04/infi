<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Enquiry;
use \App\AdminProduct as Product;
use \App\Product as ProductVendor;
use Illuminate\Support\Facades\Auth;

class EnquiryController extends Controller
{
    public function index()
    {
    	$user=Auth::user();
    	$enquiries=Enquiry::with('product')->paginate(20);
    	return view('admin.enquiry.index',compact('enquiries'));
    }

    public function show($id)
    {
        $enquiry=Enquiry::where('id',$id)->with('product')->first();
        $vendors=ProductVendor::where('admin_price',$enquiry->product->id)->with('user')->get();
    	return view('admin.enquiry.show',compact('enquiry','vendors'));
    }

}
