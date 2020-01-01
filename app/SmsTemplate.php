<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class SmsTemplate extends Model
{
	protected $table = 'sms_template';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'category', 'body', 'created_date'
    ];
	
	public function getCreatedDateAttribute($value)
    {
        return date('d-m-Y',strtotime($value));
    }
	
	public function get_category(){
        return $this->belongsTo('App\TemplateCategorySms','category');
    }
}
