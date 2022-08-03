<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class WelcomeController extends Controller
{

    public function index()
    {
        return view('components.start');
    }

    public function sendMessage(EmailRequest $request): RedirectResponse
    {
        $newEmail = new SendMailable($request);
        Mail::to('jduenasdiaz@gmail.com')->send($newEmail);

        return redirect()->route('start', '#contact')->with('message', 'Mensaje enviado correctamente');
    }

}
