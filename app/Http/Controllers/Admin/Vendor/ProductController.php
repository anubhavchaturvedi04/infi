<?php

namespace App\Http\Controllers\Admin\Vendor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Product;
use \App\AdminProduct;
use \App\Category;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
    	$user=Auth::user();
    	$products=Product::with('user')->paginate(20);
        $ecoms=AdminProduct::select('id','title')->get();
    	return view('admin.vendors.products.index',compact('products','ecoms'));
    }

    public function show($id)
    {
        $product=Product::where('id',$id)->first();
    	return view('admin.vendors.products.show',compact('product'));
    }

    public function map(Request $request)
    {
        $data=$request->all();
        $input['admin_price']=$data['map_id'];
        Product::where('id',$data['id'])->update($input);
        return "Success";
    }
}
