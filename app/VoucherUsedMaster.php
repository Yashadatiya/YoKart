<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class VoucherUsedMaster extends Model
{
	protected $table = 'voucher_used_master';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'voucher_id', 'user_id', 'created_date'
    ];
}
