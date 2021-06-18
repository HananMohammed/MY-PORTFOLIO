<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactRequest;
use App\Mail\SendMailable;
use App\Models\Admin\Contact;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    use GeneralTrait;
    /** get Contacts
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $contacts = Contact::where('status', null)->get();

        return view('admin.contact.index', compact('contacts'));
    }
    public function create ()
    {
        $contacts = Contact::orderBy('created_At', 'desc')->get();

        return view('admin.contact.replay', compact('contacts'));
    }
    public function sendNewEmail (ContactRequest $request)
    {
         $contact = Contact::create(array_merge($request->all(), ['status' => '1']));
        if (App::environment('staging')) {
            Mail::to($request->email)->send(new SendMailable($request->all()));
        }
        try {
            return $this->returnData('email',$contact, 'Email Send Successfully ');
        }catch (\Exception $exception){
            return $this->returnError('500', 'Server Error , Kindly try again !!!');
        }

    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('success' , 'Contact Email Deleted Successfully') ;
    }
}
