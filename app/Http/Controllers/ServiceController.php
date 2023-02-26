<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\MessageHistory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function singleMessage(){
        return view('admin.service.single-message');
    }

    public function multipleMessage(){
        return view('admin.service.multiple-message');
    }

    public function messageInfo(){
        return view('admin.service.message-info');
    }

    public function messageHistory(){
        $messages = Message::get();
        return view('admin.service.message-history', compact('messages'));
    }
    public function store(Request $request){
        $message = Message::create([
            'body' => $request->message,
            'sms_count' => ceil(strlen($request->message)/80),
            'total_receiver' => 1,
            'total_count' => ceil(strlen($request->message)/80) * 1,
            'status' => 'pending',
            'sender_id' => '01911155454',
            'draft' => false,
        ]);
        MessageHistory::create([
            'user_id' => 1,
            'message_id' => $message->id,
        ]);
        return back();
    }
}
