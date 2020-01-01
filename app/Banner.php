<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Banner extends Model
{
	protected $table = 'banner';
    public $timestamps = false;
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'filename', 'title', 'detail', 'sub_detail_1', 'sub_detail_2', 'image', 'is_active', 'category_id'
    ];
}
