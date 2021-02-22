<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Front\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function index()
    {
        $followers = NewsLetter::all();
        return view('admin.news-letter.index', compact('followers'));

    }
}
