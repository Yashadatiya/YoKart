<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MenuMaster extends Model
{
	protected $table = 'menu_master';
    public $timestamps = false;
	protected $primaryKey = 'menu_id';
	
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'parent_id', 'access', 'url'
    ];
}
