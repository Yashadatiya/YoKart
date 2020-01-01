<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UniquePaymentCode extends Model
{
	protected $table = 'unique_payment_code';
    public $timestamps = false;
	
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'bank_code', 'price', 'created'
    ];
}
