<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class OrderDetails extends Model
{
	protected $table = 'order_details';
    public $timestamps = false;
	protected $primaryKey = 'odetail_id';
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'product_id', 'qty', 'size_color_id', 'weight', 'price', 'sub_total', 'note', 'created_date'
    ];
	
	public function order(){
        return $this->hasOne('App\OrderMaster','order_id','order_id')->select('order_id','total_qty','status');
    }
	
	public function product(){
        return $this->belongsTo('App\Product','product_id')->select('name','code','weight','selling_price','main_image','id','is_delete');
    }
	
	public function sizecolor(){
        return $this->belongsTo('App\ProductSizeColor','size_color_id')->select('size','color','id','image','price');
    }
}
