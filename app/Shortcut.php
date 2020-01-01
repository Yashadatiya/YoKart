<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Shortcut extends Model
{
	protected $table = 'shortcut';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'name', 'direction', 'icon'
    ];
	
	public function link_master(){
        return $this->belongsTo('App\LinkMaster','direction');
    }
}
