<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function __invoke(Request $request)
    {
        dd($request->all());
    }
}
