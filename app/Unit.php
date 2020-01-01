<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Unit extends Model
{
	protected $table = 'unit';
    public $timestamps = false;
	protected $primaryKey = 'unit_id';
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name', 'created_date', 'updated_date'
    ];
}
