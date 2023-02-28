<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupMember;
use App\Models\Message;
use App\Models\MessageHistory;
use App\Models\MessageInfo;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function singleMessage(){
        $messages = Group::where('created_by', auth()->user()->id)->get();
        // $gid = $request->post('gid');
        // $messages = GroupMember::where('contact_name')->get();
        return view('admin.service.single-message', compact('messages'));
    }

    public function groupMembers($id){
        // return 'hello';
        return $messages = GroupMember::where('group_id', $id)->get();
        return view('admin.service.single-message', compact('messages'));
    }

    public function multipleMessage(){
        $messages = Group::where('created_by', auth()->user()->id)->get();
        return view('admin.service.multiple-message', compact('messages'));
    }

    public function messageInfo(){
        $receivers = GroupMember::get(); 
        return view('admin.service.message-info');
    }

    public function messageHistory(){
        $messages = Message::get();
        return view('admin.service.message-history', compact('messages'));
    }
    
    public function store(Request $request){
        $message = Message::create([
            'body'            => $request->message,
            'receiver_number' => $request->contact_number,
            'sms_count'       => ceil(strlen($request->message)/80),
            'total_count'     => ceil(strlen($request->message)/80) * 1,
            'total_receiver'  => 1,
            'sender_id'       => '01911155454',
            'draft'           => false,
            'status'          => 'pending',
        ]);
        MessageHistory::create([
            'user_id'    => 1,
            'message_id' => $message->id,
        ]);
        MessageInfo::create([
            'group_member_id',
            'number',
            'message_id' => $message->id
        ]);
        return back();
    }
}
