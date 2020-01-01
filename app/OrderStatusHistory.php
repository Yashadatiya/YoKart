<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class OrderStatusHistory extends Model
{
	protected $table = 'order_status_history';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'order_id', 'date', 'explanation'
    ];
}
