<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class DesktopNotificationMaster extends Model
{
	protected $table = 'desktop_notification_master';
    public $timestamps = false;
	protected $primaryKey = 'nid';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'noti_txt', 'dt', 'type', 'is_read'
    ];
}
