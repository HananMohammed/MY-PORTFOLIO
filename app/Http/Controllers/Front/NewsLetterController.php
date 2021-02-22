<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\NewsLetterRequest;
use App\Models\Front\NewsLetter;
use App\Traits\StoreUpdateTrait;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    use StoreUpdateTrait;

    public function store(NewsLetterRequest $request)
    {
        $model = new NewsLetter();

        $model->create($request->all());

        return back()->with('success' , 'Course Saved Successfully') ;

    }
}
