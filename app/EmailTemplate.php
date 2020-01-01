<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class EmailTemplate extends Model
{
	protected $table = 'email_template';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category', 'subject', 'body', 'sender_email', 'sender_name', 'created_date'
    ];
	
	public function getCreatedDateAttribute($value)
    {
        return date('d-m-Y',strtotime($value));
    }
	
	public function get_category(){
        return $this->belongsTo('App\TemplateCategory','category');
    }
}
