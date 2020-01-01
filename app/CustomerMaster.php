<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CustomerMaster extends Model
{
	protected $table = 'customer_master';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'first_name', 'last_name', 'email', 'password', 'phone', 'dropship_name', 'dropship_phone', 'user_type', 'sales_id', 'photo', 'gcm_regid', 'hash', 'active', 'admin', 'balance', 'code_reset_password', 'is_open', 'send_address', 'is_fb', 'fb_id', 'user_code', 'device_type', 'device_token', 'created_date', 'updated_date', 'is_new'
    ];
	
	public function sales(){
        return $this->belongsTo('App\Sales','sales_id');
    }
	
	public function usertype(){
        return $this->belongsTo('App\CustomerTypeMaster','user_type');
    }
	
	public function address(){
        return $this->hasOne('App\CustomerAddress','user_id','id');
    }
}
