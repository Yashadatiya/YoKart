<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class FreeShippingTransaction extends Model
{
	protected $table = 'free_shipping_transaction';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'min_price', 'max_disc'
    ];
}
