<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ContactRequest;
use App\Models\admin\contact;
use App\Models\Admin\Email;
use App\Traits\GeneralTrait;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class ContactController extends Controller
{
    use GeneralTrait;
    public function send(ContactRequest $request)
    {
        $emails = Email::where('receive_contacts', 1)->get();
        $data = $request->all();
        $model = new contact();
        $model->create($data);
        if (App::environment('staging')) {
            foreach ($emails as $email){
                Mail::to($email->email)->send(new SendMailable($data));
            }
        }
        try {
            return $this->returnSuccessMessage("message send Successfully , wait my response",  '0000');
        }catch (\Exception $exception){
            return $this->returnError('500', 'Server Error , Kindly try again !!!');
        }
     }
}
