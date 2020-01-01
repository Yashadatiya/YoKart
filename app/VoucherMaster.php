<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class VoucherMaster extends Model
{
	protected $table = 'voucher_master';
    public $timestamps = false;
	
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'type','voucher_code', 'nominal', 'voucher_type', 'voucher_jenis', 'valid_time', 'max_allowed', 'min_spent', 'is_valid'
    ];
	
	public function getValidTimeAttribute($value)
    {
        return date('d-m-Y',strtotime($value));
    }
}
