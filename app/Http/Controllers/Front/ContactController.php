<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ContactRequest;
use App\Models\admin\contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class ContactController extends Controller
{
    public function index()
    {
        return view('front.contact.index');
    }

    public function send(ContactRequest $request)
    {

        $data = $request->all();
        $model = new contact();
        $model->create($data);
        Mail::to('hananmohammed2468@gmail.com')->send(new SendMailable($data));

        return view('front.thanks.index');
    }
}
