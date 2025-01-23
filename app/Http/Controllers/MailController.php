<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyEmail;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function sendEmail()
    {
        Mail::to('sonalikhanijo24@gmail.com')->send(new MyEmail([
            'name' => 'Demo',
       ]));
       
   
        return 'Email sent Successfully';
        // $details = [
        //     'title' => 'Mail from Your App',
        //     'body' => 'This is a test email sent from Laravel.'
        // ];

        // Mail::to('khanijo77777@gmail.com')->send(new MyEmail($details));

        // return "Email Sent Successfully!";
    }
}
