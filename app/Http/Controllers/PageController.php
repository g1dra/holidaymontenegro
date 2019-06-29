<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PageController extends Controller
{
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

}
