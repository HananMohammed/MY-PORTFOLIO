<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EmailRequest;
use App\Models\Admin\Email;
use App\Traits\StoreUpdateTrait;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    use StoreUpdateTrait;
    /**
     * Display a listing of the Emails.
     *
     * @return view
     */
    public function index()
    {
        $emails = Email::all();

        return view('admin.settings.email.index',compact('emails'));

    }

    /**
     * Store a newly created Email in storage.
     *
     * @param EmailRequest  $request
     * @param Email $email
     * @return Response
     */
    public function store(EmailRequest $request, Email $email)
    {
        $this->storeData($request, $email);

        return back()->with('success' , 'Email Saved Successfully') ;
    }
    /**
     * Show the form for editing the specified Email.
     *
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function edit(Request $request, $id)
    {
        if ($request->ajax())
        {
            $data = Email::find($id);

            return response()->json($data);
        }
    }

    /**
     * Update the specified Email in storage.
     *
     * @param  EmailRequest  $request
     * @param  Email  $email
     * @return Response
     */
    public function update(EmailRequest $request, Email $email)
    {
        if (!isset($request->receive_contacts))
        {
            $request = array_merge($request->all(), ['receive_contacts' => null]);

            $email->update($request);

        }
        else {
            $this->updateData($request, $email);
        }

        return back()->with('success' , 'Email Updated Successfully') ;
    }

    /**
     * Remove the specified Email from storage.
     *
     * @param  Email  $email
     * @return Response
     */
    public function destroy(Email $email)
    {
        $email->delete();

        return back()->with('success' , 'Email Deleted Successfully') ;

    }
}
