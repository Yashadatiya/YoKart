<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Category extends Model
{
	protected $table = 'category';
    public $timestamps = false;
	protected $primaryKey = 'cat_id';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'parent_id', 'subparent_id', 'top_menu', 'logo', 'created_date', 'updated_date'
    ];
	
	public function lavel1(){
        return $this->belongsTo('App\Category','parent_id')->select('name','parent_id','subparent_id','cat_id');
    }
	
	public function lavel2(){
        return $this->belongsTo('App\Category','subparent_id')->select('name','parent_id','subparent_id','cat_id');
    }
	
	public function lavel1hasmany(){
        return $this->hasMany('App\Category','parent_id')->select('name','parent_id','subparent_id','cat_id');
    }
	
	
}
