<?php


namespace App\Traits;


use App\Models\Admin\About;
use App\Models\Admin\Adress;
use App\Models\Admin\Blog;
use App\Models\Admin\Email;
use App\Models\Admin\Phone;
use App\Models\Admin\Service;
use App\Models\Admin\Setting;
use App\Models\Admin\Slider;
use App\Models\Admin\SocialMedia;


class ViewData
{
    /**
     * @return array
     */
    public Static function HomepageData()
    {
        $slider = Slider::select('title','text','image')->first();
        $about = About::first();
        $blogs = Blog::orderBy('id', 'desc')->take(4)->get();
        $setting = Setting::all();
        $emails = Email::select('email')->get();
        $phones = Phone::select('phone')->get();
        $addresses = Adress::select('address')->get();
        $socialMedia = SocialMedia::all();
        $services = Service::all();

        $data = [
            "slider" => $slider,
            "about" => $about,
            "blogs" => $blogs,
            "setting" => $setting,
            "emails" => $emails,
            "phones" => $phones,
            "addresses" => $addresses,
            "socialMedia" => $socialMedia,
            "services" => $services
         ];
        return $data ;
    }
}
