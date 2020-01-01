<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class LimitedProductSetting extends Model
{
	protected $table = 'limited_product_setting';
    public $timestamps = false;
	
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'due_date', 'stock_minimum', 'is_show_stock', 'promo_limit', 'feature_limit', 'latest_limit', 'free_postage', 'status_stok', 'parameter_status'
    ];
}
