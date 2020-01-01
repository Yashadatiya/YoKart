<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class VendorList extends Model
{
	protected $table = 'vendor_list';
    public $timestamps = false;
	 
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'photo', 'phone', 'province_id', 'province', 'city_id', 'city', 'active'
    ];
	
}
