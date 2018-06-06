<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $table="products_attribute";
    protected $fillable=['id','created_at','updated_at','product_id','attr_name','attr_value'];

    public function category()
    {
    	return $this->belongsTo('App\Category','category_id');
    }
}
