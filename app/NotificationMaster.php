<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class NotificationMaster extends Model
{
	protected $table = 'notification_master';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'title', 'content', 'image', 'is_notif', 'push_result'
    ];
	
	public function getDateAttribute($value)
    {
        return date('d-m-Y',strtotime($value));
    }
}
