<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Mail\ContactMail;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function comingSoon()
    {
        return view('pages.coming-soon');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }

    public function subscribe(Request $request)
    {
        $validatedData = $request->validate([
            'mail' => 'required|email|max:255',
        ]);
        Redis::sadd('emails', $validatedData['mail']);
        return response()->json('Successfully subscribed');
    }

    public function test()
    {
        $events = Event::all();
        $events = json_encode($events);
        return view('test', compact('events'));
    }

    public function sendMail(Request $request)
    {
        $mail = $request->input();
//        dd($mail);
        $user = new \stdClass();
        $user->email = 'info@holidaymontenegro.com';
        \Mail::to($user)->send(new ContactMail($mail));
        return 'success';
    }

    public function rent_a_car()
    {
        return view('pages.rent_a_car');
    }

    public function transfers()
    {
        return view('pages.transfers');
    }

    public function apartments()
    {
        return view('pages.apartments');
    }


}
