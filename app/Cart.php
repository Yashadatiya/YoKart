<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;

class Cart extends Model
{
	protected $table = 'cart';
    public $timestamps = false;
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'size_color_id', 'user_id', 'user_code', 'qty', 'weight', 'note', 'grand_total', 'created_date', 'username', 'custome_name'
    ];
	
	public function customer(){
        return $this->belongsTo('App\CustomerMaster','user_id')->select('id',DB::raw("CONCAT(first_name,' ',last_name) AS customer_name"));
    }
	
	public function product(){
        return $this->belongsTo('App\Product','product_id')->select('name','code','weight','selling_price','main_image','id');
    }
	
	public function sizecolor(){
        return $this->belongsTo('App\ProductSizeColor','size_color_id')->select('size','color','id','image');
    }
}
