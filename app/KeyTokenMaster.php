<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class KeyTokenMaster extends Model
{
	protected $table = 'key_token_master';
    public $timestamps = false;
	protected $primaryKey = 'key_token_id';
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key', 'token', 'cdate'
    ];
	
	public static function checkKeyTokenExist($key, $token)
    {
       try {
			if(self::where(array("key"=>$key,"token"=>$token))->exists()){
				$response = 1;
			}else{
				$response =0;
			}
        } catch (Exception $e){ exit;} 
        return $response; 
    }

}
