<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class FreeShippingDestination extends Model
{
	protected $table = 'free_shipping_destination';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'province_id', 'province_name', 'city_id', 'city_name'
    ];
}
