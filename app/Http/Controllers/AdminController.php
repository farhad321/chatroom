<?php

namespace App\Http\Controllers;

use App\Events\MessageSend;
use App\Message;
use Illuminate\Http\Request;
use Redis;

class AdminController extends Controller
{
    public function index()
    {
        return view('message');
    }
    public function sendMessage(Request $request)
    {
        $attributes = [
            'to' =>(int) $request->to,
            'from' => (int)$request->from,
            'message' => $request->message,
        ];
//        dump(extension_loaded('redis'));
//        dump(\Auth::user()->name);
        $message=  Message::create($attributes);
//        $r=Redis::connections();
//        $r=new Redis();
//        $r->connect('localhost');
//       $r->subscribe(['MessageSend'], function ($message) {
//        var_dump($message);
//       });
//        dump($r);
        event(new MessageSend($message));
        return $request;
    }
}
