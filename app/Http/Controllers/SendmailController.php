<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SendmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validator = $this->verifyData($request);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput(); 
        }

        $mailData = $request->only(['name', 'email', 'subject', 'message']);

        Mail::to(env('MAIL_TO_ADDRESS'))->send(new SendMail($mailData));

        return to_route('mail.email-sent');
    }

    public function verifyData(Request $request)
    {
        return Validator::make($request->all(), [
            'name' => [
                'required',
                'regex:/^[a-zA-Z0-9\sáÁâÂãÃàÀéÉêÊíÍóÓôÔõÕúÚçÇ]+$/'
            ],
            'email' => [
                'required',
                'regex:/^[\w\-\.]+\@[\w-]+\.[\w-]+\.[\w-]{2}|[\w\-]+\@[\w]+\.[\w-]+$/i'
            ],
            'subject' => [
                'required',
                'regex:/^[\s\S]*$/'
            ],
            'message' => [
                'required',
                'regex:/^[\s\S]*$/'
            ]
        ],
        [
            'name.required' => 'Este campo é obrigatório',
            'name.regex' => 'Este campo não pode conter caracteres especiais',
            'email.required' => 'Este campo é obrigatório',
            'email.regex' => 'Formato de e-mail inválido',
            'subject.required' => 'Este campo é obrigatório',
            'subject.regex' => 'Este campo não pode conter caracteres especiais',
            'message.required' => 'Este campo é obrigatório',
            'message.regex' => 'Este campo não pode conter caracteres especiais',
        ]);
    }
}
