<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\AdminProduct as Product;
use \App\Product as ProductVendor;
use \App\AdminProductAttribute;
use \App\Category;
use \App\Utility;
use \App\ProductUtility;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
    	$user=Auth::user();
    	$products=Product::paginate(20);
    	return view('admin.products.index',compact('products'));
    }
    public function create()
    {
        $utilities=Utility::where('status',1)->where('id','>',0)->get();
    	$category=Category::where('status',1)->select('id','title')->get();
    	foreach($category as $cat)
    	{
    		$categories[$cat->id]=$cat->title;
    	}
    	return view('admin.products.create',compact('categories','utilities'));
    }

    public function show($id)
    {
        $product=Product::where('id',$id)->first();
        $vendors=ProductVendor::where('admin_price',$product->id)->with('user')->get();
    	return view('admin.products.show',compact('product','vendors'));
    }

    public function edit($id)
    {
        $attributes=AdminProductAttribute::where('product_id',$id)->get();
        $utilities=Utility::where('status',1)->where('id','>',0)->get();
    	$product=Product::where('id',$id)->first();
    	$categories=array();
    	$category=Category::where('status',1)->select('id','title')->get();
    	foreach($category as $cat)
    	{
    		$categories[$cat->id]=$cat->title;
    	}
    	return view('admin.products.edit',compact('product','categories','utilities','attributes'));
    }

    public function save(Request $request)
    {
    	$product=$request->all();
    	$user=Auth::user();
        $product['slug']=strtolower(str_replace(" ","-",$product['title']));
        $utilities=$product['utility'];
        unset($product['utility']);
    	if($request->has('image'))
    	{
    		$product['image']='';
            foreach($request->file('image') as $pimage)
            {
                $image = $pimage;
                $product['image'] .= 'product_'.time().'.'.$image->getClientOriginalExtension().',';
                $mimage='product_'.time().'.'.$image->getClientOriginalExtension();

                $destinationPath = public_path('/product');

                $image->move($destinationPath, $mimage);
            }
    	}
    	else
    	{
    		unset($product['image']);
    	}
        $productData=Product::create($product);
        if($request->has('attr_name')){
            $attr_names=$product['attr_name'];
            $attr_values=$product['attr_value'];
            unset($product['attr_name']);
            unset($product['attr_value']);
            $i=0;
            foreach($attr_names as $attr_name)
            {
                $attr['attr_name']=$attr_name;
                $attr['attr_value']=$attr_values[$i];
                $attr['product_id']=$productData->id;
                AdminProductAttribute::create($attr);
                $i++;
            }    
        }
        foreach($utilities as $utility)
        {
            $util['product_id']=$productData->id;
            $util['utility_id']=$utility;
            ProductUtility::create($util);
        }
    	return redirect()->route('productsAdmin');
    }

    public function update(Request $request)
    {
    	$product=$request->all();
    	$user=Auth::user();
    	if($request->has('image') && $product['image']!='')
    	{
            $product['image']='';
            foreach($request->file('image') as $pimage)
            {
                $image = $pimage;
                $product['image'] .= 'product_'.time().'.'.$image->getClientOriginalExtension().',';
                $mimage='product_'.time().'.'.$image->getClientOriginalExtension();

                $destinationPath = public_path('/product');

                $image->move($destinationPath, $mimage);
            }
    	}
    	else
    	{
    		unset($product['image']);
    	}
    	unset($product['_token']);
        $utilities=$product['utility'];
        unset($product['utility']);
    	$attr_names=$product['attr_name'];
        $attr_values=$product['attr_value'];
        unset($product['attr_name']);
        unset($product['attr_value']);
        Product::where('id',$product['id'])->update($product);
        AdminProductAttribute::where('product_id',$product['id'])->delete();
        $i=0;
        foreach($attr_names as $attr_name)
        {
            $attr['attr_name']=$attr_name;
            $attr['attr_value']=$attr_values[$i];
            $attr['product_id']=$product['id'];
            AdminProductAttribute::create($attr);
            $i++;
        }
        ProductUtility::where('product_id',$product['id'])->delete();
        foreach($utilities as $utility)
        {
            $util['product_id']=$product['id'];
            $util['utility_id']=$utility;
            ProductUtility::create($util);
        }
    	return redirect()->route('productsAdmin');
    }

    public function isUtil($utility,$product)
    {
        return ProductUtility::where('utility_id',$utility)->where('product_id',$product)->first();
    }

    public function delete($id)
    {
    	Product::where('id',$id)->delete();
    	return redirect()->route('productsAdmin');
    }
}
