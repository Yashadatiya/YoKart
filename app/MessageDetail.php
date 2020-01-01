<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MessageDetail extends Model
{
	protected $table = 'message_detail';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'msg_id', 'date', 'group', 'from', 'message', 'user_read', 'datetime_read', 'push_result'
    ];
}
