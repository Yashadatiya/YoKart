<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductCategory extends Model
{
	protected $table = 'product_category';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'product_id', 'category_id'
    ];
	
	public function category(){
        return $this->belongsTo('App\Category','category_id')->select('cat_id','name');
    }
	
	public function product(){
        return $this->belongsTo('App\Product','product_id');
    }
	
	public function products()
    {
        return $this->hasManyThrough('App\Product', 'App\Podcast');
    }
}
