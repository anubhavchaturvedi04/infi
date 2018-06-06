<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $table="enquiry";
protected $fillable=['product_id','user_id','quantity','name','email','location','comment','contact','created_at','updated_at','status'];
public function product()
{
	return $this->belongsTo('App\AdminProduct','product_id');
}
}
