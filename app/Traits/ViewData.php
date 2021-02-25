<?php


namespace App\Traits;


use App\Models\Admin\About;
use App\Models\Admin\Blog;
use App\Models\Admin\Slider;


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
        $data = [
            "slider" => $slider,
            "about" => $about,
            "blogs" => $blogs
         ];
        return $data ;
    }
}
