<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CustomerAddress extends Model
{
	protected $table = 'customer_address';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'address', 'province_id', 'province_name', 'city_id', 'city_name', 'district_id', 'district_name', 'postal_code', 'phone', 'as_default', 'created_date', 'updated_date'
    ];
    
    
}
