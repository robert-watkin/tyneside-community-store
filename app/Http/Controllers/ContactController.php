<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactFormMail;
use Log;

class ContactController extends Controller
{
    //
    private $bccRecipients = ['melanie@tynesidecommunitystore.co.uk', 'shakira@tynesidecommunitystore.co.uk'];

    public function contactFormSubmitted(Request $request)
    {
        Log::debug("Entered contact conteroller");

        // validate input
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        Log::debug("validated input");

        // store input in variables
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'body' => $request->message // renamed to body as message is protected in Mailable
        );
        // send contact form mail
        // to $email
        try {
            Mail::to($request->email)->bcc($this->bccRecipients)->send(new ContactFormMail($data));
        } catch (\Exception $e) {
            Log::debug("Error sending email");
            Log::debug($e);

            // return error without redirect
            return response()->json([
                'message' => 'Error sending email',
                'error' => $e
            ], 500);
        }
    }
}
