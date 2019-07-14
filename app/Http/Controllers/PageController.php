<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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

        $types = ['cycling','surfing', 'kayak', 'safari', 'hiking',
                'paragliding', 'canyoning', 'horse riding', 'zip line', 'ATV', 'rafting'];
        foreach ($types as $type)
        {
            DB::table('types')->insert(['name' => $type, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        }

        return view('test');
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
