<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function __invoke(Request $request)
    {

        $data = $request->validate([
            'email' => 'required|email',
            'message' => 'string|required'
        ]);

        Mail::to('info@sourchtech.com')->send(new ContactUs($data));

        return redirect()->back();

    }
}
