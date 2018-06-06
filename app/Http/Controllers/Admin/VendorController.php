<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\Auth;

class VendorController extends Controller
{
    public function index()
    {
    	$user=Auth::user();
    	$vendors=User::where('role_id',2)->paginate(20);
    	return view('admin.vendors.index',compact('vendors'));
    }
}
