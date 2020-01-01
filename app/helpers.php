<?php

use Illuminate\Support\Facades\Session;
use Response as Res;

define('cur_date',date('Y-m-d'));
define('cur_date_time',date('Y-m-d H:i:s'));

if (! function_exists('mergetoParent')) {
	function mergetoParent(&$childObje,$parent){		
		foreach($childObje as &$row){	
			if($row->{$parent}){								
				foreach($row->{$parent}->toArray() as $key=>$value){										
					if(!property_exists($row,$key)){
						$row->{$key}=$value;					
					}					
				}
				unset($row->{$parent});
			}
		}
			return $childObje;
	}
}
if (! function_exists('PassMd5')) {
	function PassMd5($psw) {
		$AcakPass = $psw;
	   for ($i=1; $i<=88; $i++)
	   {
		   $AcakPass = md5($AcakPass);
	   }
	   return $AcakPass;
	}
}
if (! function_exists('getModule')) {
	function getModule($md) {
		$gpId = Session::get('GCadmin')->idgrup;
		$a = array();
		$a = App\CustomergroupModulAccess::where(["group_id" => $gpId, "module_id" => $md])->first();
		return $a;
	}
}
if (! function_exists('pushforAdd')) {
	function pushforAdd($device_type,$token,$sku){ 
		$url = 'https://fcm.googleapis.com/fcm/send';
		$genSet = DB::table("general_store")->where("id",'1')->first();
		$title =$genSet->title;
		$sound="default";
		if($device_type=="android"){
		  $fields = array(
			'registration_ids' => $token,
			'data' => array('title' => $title, 'message' => 'Silakan cek produk terbaru kami.',"product_data"=>'',"type"=>'new_product','code'=>$sku),        
			'sound' => $sound
		 );
		  $headers = array('Authorization:key=AAAAaRfMFCc:APA91bGydCIhU57Tzt9DM5v9wNkChNnd4UtuXYAPXo5zgVK4KbXswDfe_HZVEQgT4qnDTv5tckIu0WSLqB2_caFVmkeQMaxkgcd24G3AALZL1p3zBjUVJMO-JakBH5Jumn07iXQvH4Ly' ,
			'Content-Type:application/json'
		  );
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_POST, true);
		  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		  curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
		  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);       
		  $result = curl_exec($ch);
		  curl_close($ch);
		   return $result;
		}
		else if($device_type=="iOS"){
		  $notification = array('title' =>$title , 'text' => 'Silakan cek produk terbaru kami.', 'sound' => $sound); //, 'badge' => $badge,"msgCount"=>$msgCount,"notiCount"=>$notiCount
		  $arrayToSend = array('to' => $token, 'notification' => $notification,'priority'=>'high');
		  $json = json_encode($arrayToSend);
		  $headers = array();
		  $headers[] = 'Content-Type: application/json';
		  $headers[] = 'Authorization: key=AAAAaRfMFCc:APA91bGydCIhU57Tzt9DM5v9wNkChNnd4UtuXYAPXo5zgVK4KbXswDfe_HZVEQgT4qnDTv5tckIu0WSLqB2_caFVmkeQMaxkgcd24G3AALZL1p3zBjUVJMO-JakBH5Jumn07iXQvH4Ly';
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
		  curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		  //Send the request
		  $response = curl_exec($ch);
		  curl_close($ch); 
		   return $response;
		}
	}
}
if (! function_exists('gettime')) {
	function gettime($dtm) {
        date_default_timezone_set('Asia/Calcutta');
        date("Y-m-d H:i:s");
        $date1 = date_create(date("Y-m-d H:i:s"));
        $date2 = date_create($dtm);
        $diff = date_diff($date1, $date2);
        //return $diff->format("%d %h %i ");
        if ($diff->format("%d") >= 1) {
            $date = date_create($dtm);
            $gtm = date_format($date, "d-m-Y h:i: A");
        } else if ($diff->format("%h") >= 2) {
            $gtm = $diff->format("%h") . " hours ago";
        } else if ($diff->format("%h") >= 2) {
            $gtm = $diff->format("%h") . " hours ago";
        } else if ($diff->format("%h") >= 1) {
            $gtm = "1 hours ago";
        } else if ($diff->format("%i") >= 2) {
            $gtm = $diff->format("%i") . " minutes ago";
        } else if ($diff->format("%i") >= 1) {
            $gtm = "1 minute ago";
        } else if ($diff->format("%s") >= 10) {
            $gtm = $diff->format("%s") . " sec ago";
        } else {
            $gtm = "Just Now";
        }
        return $gtm;
    }
}

if (! function_exists('getPropinsi')) {
	function getPropinsi($id = "") {
       return doRequest("https://".env('RAJA_ONGKIR_TYP').".rajaongkir.com/api/province".(strlen($id)>0?"?id=$id":""));
	}
}
if (! function_exists('doRequest')) {
	function doRequest($url) {
	   $curl = curl_init();

	   curl_setopt_array($curl, array(
		 CURLOPT_URL => $url,
		 CURLOPT_RETURNTRANSFER => true,
		 CURLOPT_ENCODING => "",
		 CURLOPT_MAXREDIRS => 10,
		 CURLOPT_TIMEOUT => 30,
		 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		 CURLOPT_CUSTOMREQUEST => "GET",
		 CURLOPT_HTTPHEADER => array(
		   "key: ".env('RAJA_ONGKIR_KEY')
		 ),
	   ));

	   $response = curl_exec($curl);
	   
	   $err = curl_error($curl);

	   curl_close($curl);

	   if($response === false) {
		   //echo "cURL Error #:" . $err;
		   return array();
	   } else {
		   $result =  json_decode($response, true);
		   return $result["rajaongkir"]["results"];
	   }
	}
}
if (! function_exists('generateRandomString')) {
	function generateRandomString()  {
        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $digits = '1234567890';
        $randomString = '';
        
        for ($i = 0; $i < 1; $i++) {
            $randomString .= $letters[rand(0, strlen($letters) - 1)];
        }
        for ($i = 0; $i < 2; $i++) {
            $randomString .= $digits[rand(0, strlen($digits) - 1)];
        }
        for ($i = 0; $i < 1; $i++) {
            $randomString .= $letters[rand(0, strlen($letters) - 1)];
        }
        for ($i = 0; $i < 1; $i++) {
            $randomString .= $digits[rand(0, strlen($digits) - 1)];
        }
        for ($i = 0; $i < 3; $i++) {
            $randomString .= $letters[rand(0, strlen($letters) - 1)];
        }
        return $randomString;
    }
}
if (! function_exists('cus_encrypt')) {
	function cus_encrypt($str, $isBinary = false) {	
        $iv = 'fedcba9876543210';
        $str = $isBinary ? $str : utf8_decode($str);		
        $td = @mcrypt_module_open('rijndael-128', ' ', 'cbc', $iv);
        @mcrypt_generic_init($td, '0123456789abcdef', $iv);
        $encrypted = @mcrypt_generic($td, $str);
        @mcrypt_generic_deinit($td);
        @mcrypt_module_close($td);
        return $isBinary ? $encrypted : bin2hex($encrypted);
        //return md5($str);
    }
}

if (! function_exists('generateCode')) {
	function generateCode($characters) {
        $possible = '23456789bcdfhkmnrstvwx';
        $code = '';
        $i = 0;
        while ($i < $characters) {
            $code .= substr($possible, mt_rand(0, strlen($possible) - 1), 1);
            $i++;
        }
        return $code;
    }
}
if (! function_exists('generateToken')) {
	function generateToken() 
    {
        $token = openssl_random_pseudo_bytes(16);
        return $token = bin2hex($token); 
    }
}
if (! function_exists('getAccessModul')) {
	function getAccessModul()
	{
		$gpId = Session::get('GCadmin')->idgrup;
		$a = array();
		$a = App\CustomergroupModulAccess::where(["group_id" => $gpId])->get()->keyBy('module_id');
		return $a;
	}
}
if (! function_exists('getCost')) {
	function getCost($origin, $originType, $destination, $destinationType, $weight, $courier) {
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://" . env('RAJA_ONGKIR_TYP') . ".rajaongkir.com/api/cost",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "origin=$origin&originType=$originType&destination=$destination&destinationType=subdistrict&weight=$weight&courier=$courier",
			CURLOPT_HTTPHEADER => array(
				"content-type: application/x-www-form-urlencoded",
				"key: " . env('RAJA_ONGKIR_KEY')
			),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		if ($err) {
			return array();
		} else {
			$result = json_decode($response, true);
			return $result["rajaongkir"]["results"][0]["costs"];
		}
	}
}
if (! function_exists('getKota')) {
	function getKota($prop, $id = "") {
        return doRequest("https://" . env('RAJA_ONGKIR_TYP') . ".rajaongkir.com/api/city?province=$prop" . (strlen($id) > 0 ? "&id=$id" : ""));
    }
}
if (! function_exists('setFreeVal')) {
	function setFreeVal($total) {
		$freeSMinp = App\FreeShippingTransaction::where('min_price','>=',$total)->orderBy('min_price','asc')->first();
		if($freeSMinp!=NULL){
			return $freeSMinp->max_disc;
		}
		return 0;
	}
}
if (! function_exists('getKecamatan')) {
	function getKecamatan($city) {
        return doRequest("https://" . env('RAJA_ONGKIR_TYP') . ".rajaongkir.com/api/subdistrict?city=" . $city);
    }
}
if (! function_exists('AddStockHistory')) {
	function AddStockHistory($proid,$size_id,$stock,$description,$total_stock){
		$data['user_id'] = Session::get('GCadmin_id');
		$data['product_id'] = $proid;
		$data['product_size_color_id'] = $size_id;
		$data['stock_in'] = str_replace(',', '', $stock);
		$data['description'] = $description;
		$data['total'] = str_replace(',', '', $total_stock);
		$record = new App\StockHistory($data);
		$record->save();
	}
}
if (! function_exists('getc')) {
	function getc($value = '') {
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://" . env('RAJA_ONGKIR_TYP') . ".rajaongkir.com/api/cost",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "origin=501&originType=city&destination=574&destinationType=subdistrict&weight=1700&courier=jne",
			CURLOPT_HTTPHEADER => array(
				"content-type: application/x-www-form-urlencoded",
				"key: " . env('RAJA_ONGKIR_KEY')
			),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo $response;
		}
	}
}
if (! function_exists('strArr')) {
	function strArr($str) {
		$str = explode(",", $str);
		$stAr = array();
		foreach ($str as $value) {
			$value = "'" . $value . "'";
			$stAr[] = $value;
		}
		//print_r($stAr);
		return $xl = implode(",", $stAr);
	}
}
if (! function_exists('generateUcode')) {
	function generateUcode($characters) {
		$possible = '0123456789';
		$code = '';
		$i = 0;
		while ($i < $characters) {
				$code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
				$i++;
		}
		return $code;
	}
}
if (! function_exists('generateRandomCode')) {
	function generateRandomCode() 
    {
        $alphabet = 'AbCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return strtoupper(implode($pass));
    }
}
class Comman_controller
{
	 static function successResponse($array, $response, $message, $result) 
    {  
        $array['ResponseCode'] = $response; 
        $array['ResponseMsg'] = $message;
        $array['Result'] = $result;
        $array['ServerTime'] = date('T');
		
		return Res::json($array);                  
    }
    
    static function responseMessage($res, $responseMessage, $result)
    {
		return Res::json(array('ResponseCode'=>$res,'ResponseMsg'=>"$responseMessage",'Result'=>"$result",'ServerTime'=>date('T')));          
    }
    
    static function errorResponse()
    {
        return Comman_controller::responseMessage(0,"It seems web-server is too much busy, please try again.","False");
    }
    
}

class PushModel 
{
   
  static function  pushforAdd($device_type,$token,$message,$prData="",$type=""){ //
    $url = 'https://fcm.googleapis.com/fcm/send';
	$genSet = App\GeneralStore::find(1);
    $title =$genSet->title;
    $sound="default";

    if($device_type=="android"){
      
      $fields = array(
        'to' => $token,
        'data' => array('title' => $title, 'message' => $message,"product_data"=>$prData,"type"=>$type), //,"msgCount"=>$msgCount,"notiCount"=>$notiCount               
        'sound' => $sound
     );

      $headers = array(	'Authorization:key=AAAAaRfMFCc:APA91bGydCIhU57Tzt9DM5v9wNkChNnd4UtuXYAPXo5zgVK4KbXswDfe_HZVEQgT4qnDTv5tckIu0WSLqB2_caFVmkeQMaxkgcd24G3AALZL1p3zBjUVJMO-JakBH5Jumn07iXQvH4Ly' ,
			'Content-Type:application/json'
		  );
                       
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);       
      $result = curl_exec($ch);
      curl_close($ch);
       return $result;
    }
    
    else if($device_type=="iOS"){
      $notification = array('title' =>$title , 'text' => $message, 'sound' => $sound); //, 'badge' => $badge,"msgCount"=>$msgCount,"notiCount"=>$notiCount
      $arrayToSend = array('to' => $token, 'notification' => $notification,'priority'=>'high');
      $json = json_encode($arrayToSend);
      $headers = array(	'Authorization:key=AAAAaRfMFCc:APA91bGydCIhU57Tzt9DM5v9wNkChNnd4UtuXYAPXo5zgVK4KbXswDfe_HZVEQgT4qnDTv5tckIu0WSLqB2_caFVmkeQMaxkgcd24G3AALZL1p3zBjUVJMO-JakBH5Jumn07iXQvH4Ly' ,
			'Content-Type:application/json'
		  );
              
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
      curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
      curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      //Send the request
      $response = curl_exec($ch);
      curl_close($ch); 
       return $response;
    }
   
   
  }


  static function  pushforMsg($device_type,$token,$message,$title,$msgCount=1,$notiCount=1,$badge=1){
    $url = 'https://fcm.googleapis.com/fcm/send';
     
    $sound="default";

    if($device_type=="android"){
      $fields = array(
        'to' => $token,
        'data' => array('title' => $title, 'message' => $message,'type'=>"message","msgCount"=>$msgCount,"notiCount"=>$notiCount),               
        'sound' => $sound
     );

      $headers = array(	'Authorization:key=AAAAaRfMFCc:APA91bGydCIhU57Tzt9DM5v9wNkChNnd4UtuXYAPXo5zgVK4KbXswDfe_HZVEQgT4qnDTv5tckIu0WSLqB2_caFVmkeQMaxkgcd24G3AALZL1p3zBjUVJMO-JakBH5Jumn07iXQvH4Ly' ,
			'Content-Type:application/json'
		  );
                       
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);       
      $result = curl_exec($ch);
      curl_close($ch);
    }
    
    else if($device_type=="iOS"){
      $notification = array('title' =>$title , 'text' => $message,'type'=>"message", 'sound' => $sound, 'badge' => $badge,"msgCount"=>$msgCount,"notiCount"=>$notiCount);
      $arrayToSend = array('to' => $token, 'notification' => $notification,'priority'=>'high');
      $json = json_encode($arrayToSend);
      $headers = array(	'Authorization:key=AAAAaRfMFCc:APA91bGydCIhU57Tzt9DM5v9wNkChNnd4UtuXYAPXo5zgVK4KbXswDfe_HZVEQgT4qnDTv5tckIu0WSLqB2_caFVmkeQMaxkgcd24G3AALZL1p3zBjUVJMO-JakBH5Jumn07iXQvH4Ly' ,
			'Content-Type:application/json'
		  );
              
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
      curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
      curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      //Send the request
      $response = curl_exec($ch);
      curl_close($ch); 
    }
   
  }

  static function checkFbMSgCount($userId)
  {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://bless-48760.firebaseio.com/BadgeCounter/$userId.json");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    return $result = curl_exec($ch);
    curl_close ($ch);
  }

  static function addNotiFb($userId,$totalNoti)
  { 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://bless-48760.firebaseio.com/BadgeCounter/$userId/.json");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $fields = array('notiCount' => $totalNoti);

    curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($fields));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
    $headers = array();
    $headers[] = "Content-Type: application/x-www-form-urlencoded";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
      echo 'Error:' . curl_error($ch);
    }
    curl_close ($ch);
  }

  static function addMsgFb($userId,$totalMsg)
  { 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://bless-48760.firebaseio.com/BadgeCounter/$userId/.json");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $fields = array('msgCount' => $totalMsg);

    curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($fields));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
    $headers = array();
    $headers[] = "Content-Type: application/x-www-form-urlencoded";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
      echo 'Error:' . curl_error($ch);
    }
    curl_close ($ch);
  }

}  

?>