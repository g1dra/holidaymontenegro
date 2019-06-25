<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PageController extends Controller
{
    public function subscribe(Request $request)
    {
        $validatedData = $request->validate([
            'mail' => 'required|email|max:255',
        ]);
        Redis::sadd('emails', $validatedData['mail']);
        return response()->json('Successfully subscribed');
    }

}
