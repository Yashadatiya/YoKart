<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class NotificationSetting extends Model
{
	protected $table = 'notification_setting';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'template_category_id', 'sms', 'email', 'push', 'description'
    ];
}
