<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Brand extends Model
{
	protected $table = 'brand';
    public $timestamps = false;
	protected $primaryKey = 'brand_id';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name', 'logo', 'created_date', 'updated_date'
    ];
}
