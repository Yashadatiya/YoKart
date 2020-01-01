<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;

class PurchaseOrderDetails extends Model
{
	protected $table = 'purchase_order_details';
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'purchase_order_id', 'product_id', 'sku', 'sizecolor_id', 'qty', 'price', 'sub_total'
    ];
	
	public function product(){
        return $this->belongsTo('App\Product','product_id')->select('name','id');
    }
	
	public function sizecolor(){
        return $this->belongsTo('App\ProductSizeColor','sizecolor_id')->select('size',"color",'id');
    }
}
