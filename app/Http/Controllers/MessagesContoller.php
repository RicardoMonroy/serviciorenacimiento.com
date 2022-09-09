<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MessagesContoller extends Controller
{
    public function store(Request $request)
    {

        Mail::to('rmonroy.rodriguez@gmail.com')->send(new MessageReceived($request));
        return 'Mensaje Enviado';
    }
}
