<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Product;
use \App\Utility;
use Illuminate\Support\Facades\Auth;

class ProductUtilityController extends Controller
{
    public function index()
    {
    	$user=Auth::user();
    	$categories=Utility::where('id','>',0)->with('parent')->paginate(20);
    	return view('admin.products.utility.index',compact('categories'));
    }
    public function create()
    {
    	$status=array();
        $status[0]='Inactive';
        $status[1]='Active';
        $category=Utility::select('id','title')->get();
    	foreach($category as $cat)
    	{
    		$categories[$cat->id]=$cat->title;
    	}
    	return view('admin.products.utility.create',compact('status','categories'));
    }

    public function edit($id)
    {
    	$category=Utility::where('id',$id)->first();
    	$categories=array();
    	$status=array();
        $status[0]='Inactive';
        $status[1]='Active';
        $categors=Utility::select('id','title')->get();
    	foreach($categors as $cat)
    	{
    		$categories[$cat->id]=$cat->title;
    	}
    	return view('admin.products.utility.edit',compact('category','status','categories'));
    }

    public function save(Request $request)
    {
    	$category=$request->all();
        $category['slug']=strtolower(str_replace(" ","-",$category['title']));
    	Utility::create($category);
    	return redirect()->route('utilitiesAdmin');
    }

    public function update(Request $request)
    {
    	$category=$request->all();
    	unset($category['_token']);
    	Utility::where('id',$category['id'])->update($category);
    	return redirect()->route('utilitiesAdmin');
    }

    public function delete($id)
    {
    	Utility::where('id',$id)->delete();
    	return redirect()->route('utilitiesAdmin');
    }
}
