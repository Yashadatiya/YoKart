<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class BankTransfer extends Model
{
	protected $table = 'bank_transfer';
    public $timestamps = false;
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_no', 'account_owner_name', 'bank_code', 'bank_name', 'branch', 'picture', 'is_active', 'is_auto_active', 'username_ibanking', 'password_ibanking'
    ];
}
