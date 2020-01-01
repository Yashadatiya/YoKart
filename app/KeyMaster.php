<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class KeyMaster extends Model
{
	protected $table = 'key_master';
    public $timestamps = false;
	protected $primaryKey = 'key_id';
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key_name', 'cdate'
    ];
	
	public static function checkKeyExist($key) 
    {
        try {
			if(self::where('key_name', '=', $key)->exists()){
				$response = 1;
			}else{
				$response = 0;
			}

        } catch (\Exception $e){ exit;} 
        return $response; 
        
    }
}
