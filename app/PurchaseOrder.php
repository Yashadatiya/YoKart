<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PurchaseOrder extends Model
{
	protected $table = 'purchase_order';
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_code', 'order_date', 'total_item', 'sub_total', 'total_discount', 'grand_total', 'vendor_id'
    ];
	
}
