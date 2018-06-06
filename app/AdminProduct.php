<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminProduct extends Model
{
    protected $table="admin_products";
    protected $fillable=['id','title','description','image','status','created_at','updated_at','price_brand','price','admin_price','moq','category_id','pieces_per_box','packing_type','dispatch_time','colour','capacity','dispatch_time_brand','food_grade','weight','ecom','material','moq_brand','slug','meta_keywords','meta_description'];

    public function category()
    {
    	return $this->belongsTo('App\Category','category_id');
    }
}
