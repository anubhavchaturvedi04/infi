<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use \App\ProductAttribute;
use \App\Category;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
    	$user=Auth::user();
    	$products=Product::where('status',1)->where('user_id',$user->id)->paginate(10);
    	return view('products.index',compact('products'));
    }
    public function create()
    {
    	$category=Category::where('status',1)->select('id','title')->get();
    	foreach($category as $cat)
    	{
    		$categories[$cat->id]=$cat->title;
    	}
    	return view('products.create',compact('categories'));
    }

    public function show($id)
    {
        $product=Product::where('id',$id)->first();
    	return view('products.show',compact('product'));
    }

    public function edit($id)
    {
        $attributes=ProductAttribute::where('product_id',$id)->get();
    	$product=Product::where('id',$id)->first();
    	$categories=array();
    	$category=Category::where('status',1)->select('id','title')->get();
    	foreach($category as $cat)
    	{
    		$categories[$cat->id]=$cat->title;
    	}
    	return view('products.edit',compact('product','categories','attributes'));
    }

    public function save(Request $request)
    {
    	$product=$request->all();
    	$user=Auth::user();
    	$product['user_id']=$user->id;
    	if($request->has('image'))
    	{
    		$image = $request->file('image');

		    $product['image'] = 'product_'.time().'.'.$image->getClientOriginalExtension();

		    $destinationPath = public_path('/product');

		    $image->move($destinationPath, $product['image']);
    	}
    	else
    	{
    		unset($product['image']);
    	}
        $attr_names=$product['attr_name'];
        $attr_values=$product['attr_value'];
        unset($product['attr_name']);
        unset($product['attr_value']);
    	$productData=Product::create($product);
        $i=0;
        foreach($attr_names as $attr_name)
        {
            $attr['attr_name']=$attr_name;
            $attr['attr_value']=$attr_values[$i];
            $attr['product_id']=$productData->id;
            ProductAttribute::create($attr);
            $i++;
        }
    	return redirect()->route('products');
    }

    public function update(Request $request)
    {
    	$product=$request->all();
    	$user=Auth::user();
    	$product['user_id']=$user->id;
    	if($request->has('image') && $product['image']!='')
    	{
    		$image = $request->file('image');

		    $product['image'] = 'product_'.time().'.'.$image->getClientOriginalExtension();

		    $destinationPath = public_path('/product');

		    $image->move($destinationPath, $product['image']);
    	}
    	else
    	{
    		unset($product['image']);
    	}
    	unset($product['_token']);
        $attr_names=$product['attr_name'];
        $attr_values=$product['attr_value'];
        unset($product['attr_name']);
        unset($product['attr_value']);
    	Product::where('id',$product['id'])->update($product);
        ProductAttribute::where('product_id',$product)->delete();
        $i=0;
        foreach($attr_names as $attr_name)
        {
            $attr['attr_name']=$attr_name;
            $attr['attr_value']=$attr_values[$i];
            $attr['product_id']=$product['id'];
            ProductAttribute::create($attr);
            $i++;
        }
    	return redirect()->route('products');
    }

    public function delete($id)
    {
    	Product::where('id',$id)->delete();
    	return redirect()->route('products');
    }
}
