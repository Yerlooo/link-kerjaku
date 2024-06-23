<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessNewsLetter;
use App\Models\User;
use App\Models\Person;
use App\Mail\NewsLetter;
use App\Mail\TestSendingEmail;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Controller
{
    public function index()
    {
        $person = Person::all();
        Mail::to('roronoazoro@gmail.com')->send(new TestSendingEmail($person));
    }
    public function sendNewsLetter()
    {
        $emails = User::pluck('email');
        // dd($emails);
        foreach($emails as $email)
        {
            // Mail::to($email)->send(new NewsLetter());
            ProcessNewsLetter::dispatch($email);
        }
    } 
}
