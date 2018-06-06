<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";
    protected $fillable=['id','title','description','image','status','created_at','updated_at','price_brand','price','admin_price','moq','user_id','category_id','pieces_per_box','packing_type','dispatch_time','colour','dispatch_time_brand','food_grade','weight','ecom','material','moq_brand','admin_price'];
public function user()
{
return $this->belongsTo('App\User','user_id');
}
}
