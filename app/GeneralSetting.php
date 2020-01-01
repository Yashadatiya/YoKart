<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class GeneralSetting extends Model
{
	protected $table = 'general_setting';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_due_date', 'order_due_day', 'order_due_hour', 'order_due_min', 'min_stock', 'is_show_stock', 'limit_promo', 'limit_featured', 'limit_latest', 'free_shiping', 'status_stock', 'stock_limit', 'is_show_grand_stock', 'is_show_size', 'is_show_color', 'cart_due_day', 'cart_due_hour', 'cart_due_min', 'prod_keep', 'product_design', 'auto_payment_expired', 'auto_payment_cron_interval', 'cron_payment_enabled', 'last_cron_payment','unique_code'
    ];
}
