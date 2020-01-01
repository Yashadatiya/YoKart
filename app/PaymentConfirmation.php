<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PaymentConfirmation extends Model
{
	protected $table = 'payment_confirmation';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'date', 'code', 'receiver_bank_id', 'no_of_transfer', 'sender_bank_id', 'account_owner_name', 'explanation', 'photo', 'user_id', 'guest_id', 'header_id', 'status', 'updated_date'
    ];
	
	public function getDateAttribute($value)
    {
        return date('d-m-Y h:i A',strtotime($value));
    }
	
	public function order(){
        return $this->belongsTo('App\OrderMaster','header_id');
    }
	
	public function customer(){
        return $this->belongsTo('App\CustomerMaster','user_id')->select('first_name','last_name','id');
    }
	
	public function bank(){
        return $this->belongsTo('App\BankTransfer','receiver_bank_id')->select('account_owner_name','id');
    }
}
