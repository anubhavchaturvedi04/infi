<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    protected $table="utility";
	protected $fillable=['title','status','slug','created_at','updated_at','parent_id'];
	public function parent()
	{
		return $this->belongsTo('App\Utility','parent_id');
	}
	public function child()
	{
		return $this->hasMany('App\Utility','parent_id','id');
	}
}
