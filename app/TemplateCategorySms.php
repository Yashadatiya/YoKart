<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class TemplateCategorySms extends Model
{
	protected $table = 'template_category_sms';
    public $timestamps = false;
	protected $primaryKey = 'category_id';
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'category', 'created_date'
    ];
}
