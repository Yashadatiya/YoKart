<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class TemplateCategory extends Model
{
	protected $table = 'template_category';
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
