<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="category";
	protected $fillable=['title','status','slug','created_at','updated_at','parent_id'];
	public function parent()
	{
		return $this->belongsTo('App\Category','parent_id');
	}
	public function child()
	{
		return $this->hasMany('App\Category','parent_id','id');
	}
}
