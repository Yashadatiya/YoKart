<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class NotificationSentMaster extends Model
{
	protected $table = 'notification_sent_master';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'msg', 'created_date', 'updated_date'
    ];
}
