<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Sales extends Model
{
	protected $table = 'sales';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'sales_id', 'sales_name', 'status', 'created_date', 'updated_date'
    ];
}
