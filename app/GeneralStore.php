<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class GeneralStore extends Model
{
	protected $table = 'general_store';
    public $timestamps = false;
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'tagline', 'email', 'website', 'mask_email', 'telephone', 'phone_no', 'address', 'province_id', 'province_name', 'city_id', 'city_name', 'postal_code', 'longitude', 'latitude', 'about_us', 'about_us_img', 'terms_condition', 'terms_condition_img', 'que_ans', 'que_rep_img', 'howtoshop', 'howtoshop_img', 'car_payment', 'car_payment_img', 'track_shipment', 'track_shipment_img', 'privacy_policy', 'privacy_policy_img', 'avatar', 'logo', 'bg', 'is_logo_active', 'is_bg_active', 'landing_page', 'show_shortcuts', 'show_categories', 'show_parent_category', 'show_shortcut_below', 'maintenance_mode', 'app_ver_no', 'app_ver_name', 'app_desc', 'sms_activation', 'admin_activation', 'day', 'hour', 'minute', 'working_hours', 'facebook', 'instagram', 'twitter', 'cart_method', 'cart_timer', 'product_dtl_design', 'stock_reduce', 'pay_spot', 'checkout_button', 'checkout_button_name', 'pay_spot_button_name', 'subcategory_layout', 'cod', 'show_related_product', 'show_auto_detect_location', 'show_courier_price_product_details',
		'show_related_image'
    ];
	
	public function getLogoImageURL(){
			return  url(env('imgpath').'general/' . $this->logo);
	}
}
