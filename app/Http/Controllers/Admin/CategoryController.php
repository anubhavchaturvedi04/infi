<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Product;
use \App\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
    	$user=Auth::user();
    	$categories=Category::where('id','>',0)->with('parent')->paginate(20);
    	return view('admin.category.index',compact('categories'));
    }
    public function create()
    {
    	$status=array();
        $status[0]='Inactive';
        $status[1]='Active';
        $category=Category::select('id','title')->get();
    	foreach($category as $cat)
    	{
    		$categories[$cat->id]=$cat->title;
    	}
    	return view('admin.category.create',compact('status','categories'));
    }

    public function edit($id)
    {
    	$category=Category::where('id',$id)->first();
    	$categories=array();
    	$status=array();
        $status[0]='Inactive';
        $status[1]='Active';
        $categors=Category::select('id','title')->get();
    	foreach($categors as $cat)
    	{
    		$categories[$cat->id]=$cat->title;
    	}
    	return view('admin.category.edit',compact('category','status','categories'));
    }

    public function save(Request $request)
    {
    	$category=$request->all();
        $category['slug']=strtolower(str_replace(" ","-",$category['title']));
    	Category::create($category);
    	return redirect()->route('categoriesAdmin');
    }

    public function update(Request $request)
    {
    	$category=$request->all();
    	unset($category['_token']);
    	Category::where('id',$category['id'])->update($category);
    	return redirect()->route('categoriesAdmin');
    }

    public function delete($id)
    {
    	Category::where('id',$id)->delete();
    	return redirect()->route('categoriesAdmin');
    }
}
