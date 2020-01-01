<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AdminUsers extends Model
{
	protected $table = 'admin_users';
    public $timestamps = false;
	 
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'userid', 'password', 'idgrup', 'as_notification', 'email', 'photo', 'phone', 'active', 'select_theme', 'data_color', 'filter_color', 'background_color', 'background_image', 'background_visible'
    ];
	
	public function user_group(){
        return $this->belongsTo('App\CustomerGroup','idgrup');
    }
}
