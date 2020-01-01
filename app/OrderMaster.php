<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;

class OrderMaster extends Model
{
	protected $table = 'order_master';
    public $timestamps = false;
	protected $primaryKey = 'order_id';
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'guest_id', 'code', 'order_date', 'address_id', 'dropship_id', 'dropship_name', 'dropship_phone', 'email_notifi', 'payment', 'total_qty', 
		'grand_total', 'sis', 'voucher_id', 'voucher_price', 'total', 'unique_payment_code', 'unique_code', 'is_open', 'date_update_status',
		'status', 'shiping_id', 'bank_id', 'receipt_no', 'additional_fee', 'created_date', 'auto_track_last_run', 'auto_track_description', 
		'cancel_reason', 'once_time', 'auto_print_flag'
    ];
	
	public function getOrderDateAttribute($value)
    {
        return date('d-m-Y',strtotime($value));
    }
	
	public function orderstatus(){
        return $this->belongsTo('App\OrderStatus','status');
    }
	
	public function customer(){
        return $this->belongsTo('App\CustomerMaster','user_id')->select('id',DB::raw("CONCAT(first_name,' ',last_name) AS customer_name"));
    }
	
	public function order_details(){
        return $this->belongsTo('App\OrderDetails','order_id')->select('order_id', 'product_id', 'qty', 'size_color_id','odetail_id');
    }
	
	public function orderdetails(){
        return $this->belongsTo('App\OrderDetails','order_id');
    }
	
	public function orderdetailsHasMany(){
        return $this->hasMany('App\OrderDetails','order_id');
    }
	
	public function bank(){
        return $this->belongsTo('App\BankTransfer','bank_id')->select('id','bank_name');
    }
	
	public function paymentconfirmation(){
        return $this->hasOne('App\PaymentConfirmation','header_id','order_id');
    }
	
}
