<?php

namespace App\Http\Controllers;

use App\ContactForm;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    /**
     * Show the admin dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitForm(Request $request)
    {
        $data = $request->except('_token');

        ContactForm::create($data);

        Mail::to('pontapaul@hotmail.it')->send(new Contact($data));

        return redirect()->route('thank-you');
    }
}
