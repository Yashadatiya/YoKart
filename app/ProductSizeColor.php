<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;

class ProductSizeColor extends Model
{
	protected $table = 'product_size_color';
    public $timestamps = false;
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'size', 'color', 'first_total', 'total', 'keep', 'dropship', 'sold', 'sku', 'price', 'image', 'order_by'
    ];
	
	public function product(){
        return $this->belongsTo('App\Product','product_id');
    }
	
	public function pcategory(){
        return $this->hasMany('App\ProductCategory','product_id');
    }
	
    public function cart(){
        return $this->hasMany('App\Cart','size_color_id','id')->select('qty','size_color_id');
    }
	
	public function order_details(){
        return $this->hasMany('App\OrderDetails','size_color_id','id')->select('qty','size_color_id','order_id');
    }
	
	public function productcode(){
        return $this->belongsTo('App\Product','product_id')->select('id','code');
    }
}
