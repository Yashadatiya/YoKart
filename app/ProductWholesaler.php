<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ProductWholesaler extends Model
{
	protected $table = 'product_wholesaler';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'product_id', 'min_stock', 'max_stock', 'price'
    ];
}
