<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ExtraFeeShipping extends Model
{
	protected $table = 'extra_fee_shipping';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'courier_service', 'province', 'city', 'additional_fees', 'province_name', 'city_name'
    ];
	
	public function shipping(){
        return $this->belongsTo('App\ShippingMaster','courier_service')->select('id','code');
    }
}
