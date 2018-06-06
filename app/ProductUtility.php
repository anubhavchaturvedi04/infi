<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductUtility extends Model
{
    protected $table="product_utility";
	protected $fillable=['product_id','utility_id','created_at','updated_at'];
	public function product()
	{
		return $this->belongsTo('App\AdminProduct','product_id');
	}

	public function utility()
	{
		return $this->belongsTo('App\Utility','utility_id');
	}
}
