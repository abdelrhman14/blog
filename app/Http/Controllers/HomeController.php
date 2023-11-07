<?php

namespace App\Http\Controllers;

use App\Mails\ContactMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Stripe\Charge;
use Stripe\Stripe;

class HomeController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function sendEmail(Request $request): RedirectResponse
    {
        $attributes = $request->validate([
            'email'=>['required'],
            'phone'=>['required'],
            'first_name'=>['required'],
            'last_name'=>['required'],
            'message'=>['required'],
            'type'=>['required'],
        ]);

        $locale = request()->session()->get('locale');
        if (!isset($locale) || $locale == null) {
            $locale = 'dutch';
        }
        App::setLocale($locale);

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($attributes));

        return back()->with('success', 'DONE');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function setLocale(Request $request): RedirectResponse
    {
        $locale = $request->input('locale');
        if (!isset($locale) || $locale == null) {
            $locale = 'dutch';
        }
        // Store the selected locale in session or database for future use
        $request->session()->put('locale', $locale);
        App::setLocale($locale);
        // Redirect the user back to the desired page or reload the current page
        return redirect()->back();
    }
}
