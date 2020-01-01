<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CodSetting extends Model
{
	protected $table = 'cod_setting';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'is_active', 'all_product', 'min_purchase', 'default_purchase', 'all_courier', 'all_purpose'
    ];
}
