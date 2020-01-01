<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class OrderStatus extends Model
{
	protected $table = 'order_status';
    public $timestamps = false;
	protected $primaryKey = 'sts_id';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'sts_name', 'sts_nickname'
    ];
}
