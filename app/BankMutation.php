<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class BankMutation extends Model
{
	protected $table = 'bank_mutation';
    public $timestamps = false;
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bank_code', 'date', 'description', 'debt', 'credit', 'created'
    ];
}
