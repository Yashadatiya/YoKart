<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Wishlist extends Model
{
	protected $table = 'wishlist';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'user_code', 'product_id', 'date'
    ];
	
	public function product(){
        return $this->belongsTo('App\Product','product_id');
    }
	
}
