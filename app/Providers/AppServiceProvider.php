<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Category;
use App\GeneralStore;
use App\GeneralContact;
use App\HelpPage;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $helps = HelpPage::get();
        $customercare = GeneralStore::first();
        $main_category = array();  
        $all_category = Category::where('parent_id',0)->get();
        foreach ($all_category as $key => $value) 
        {
            $get_product_cat =  Category::where('parent_id',$value->cat_id)->first();
            if(!empty($get_product_cat))
            {
                array_push($main_category,$value->name);
            }
        }
        //$main_category = Category::where('id',$all_category->parent_id)->take(4)->get();
        $contactno = GeneralContact::where('type','no_hp')->first();
        $whatsappno = GeneralContact::where('type','wa1')->first();
        $customercare['contactno'] = $contactno->contact;
        $customercare['whatsappno'] = $whatsappno->contact;
        View::share(['helps' => $helps, 'customercare' => $customercare,'main_category'=>$main_category,'contactno'=>$contactno,'whatsappno'=>$whatsappno]);
    }
}
