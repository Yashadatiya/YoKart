<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ShippingMaster extends Model
{
	protected $table = 'shipping_master';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'code', 'name', 'is_active', 'image'
    ];
}
