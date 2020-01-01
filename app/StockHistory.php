<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;

class StockHistory extends Model
{
	protected $table = 'stock_history';
    /**
     * The attributes that are mass assignable. 
     *
     * @var array
     */
    protected $fillable = [
         'date', 'customer_id', 'user_id','product_id','product_size_color_id', 'description', 'order_id', 'basic', 'stock_in', 'stock_out', 'total'
    ];
	
	public function customer(){
        return $this->belongsTo('App\CustomerMaster','customer_id')->select('id',DB::raw("CONCAT(first_name,' ',last_name) AS customer_name"));
    }
	
	public function user(){
        return $this->belongsTo('App\AdminUsers','user_id')->select('id','name');
    }
	
	public function product(){
        return $this->belongsTo('App\Product','product_id')->select('id','name','code');
    }
	
	public function sizec(){
        return $this->belongsTo('App\ProductSizeColor','product_size_color_id')->select('id','size','color');
    }
}
