<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
	protected $table = 'product_master';
    public $timestamps = false;
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'company_id', 'code', 'name', 'description', 'keyword', 'weight', 'capital_price', 'selling_price', 'silver_price', 'gold_price', 
		'platinum_price', 'discount_price', 'discount_type', 'discount_price_from_date', 'discount_price_to_date', 'percent_discount', 'from_date_percent_discount', 
		'to_date_percent_discount', 'status', 'minimum_msg', 'brand_id', 'rating', 'respond', 'review', 'new_product', 'new_product_validity', 'product_cod', 
		'product_feature', 'product_preorder', 'product_soldout', 'product_free_shipping', 'product_wholesale', 'push_noti', 'created_date', 'updated_date', 
		'user_update', 'img_src', 'location_id', 'main_image', 'unit_id', 'is_delete'
    ];
	
	public function getCreatedDateAttribute($value)
    {
        return date('d-m-Y h:i A',strtotime($value));
    }
	
	public function getDiscountPriceFromDateAttribute($value)
    {
        return date('d-m-Y',strtotime($value));
    }
	
	public function pcategory(){
        return $this->hasMany('App\ProductCategory','product_id');
    }
	public function productsizecolor(){
        return $this->hasMany('App\ProductSizeColor','product_id');
    }
	public function productwholesaler(){
        return $this->hasMany('App\ProductWholesaler','product_id');
    }
	
}
