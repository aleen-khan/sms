<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupMember;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function addMember(){
        $groups = Group::where('created_by', auth()->user()->id)->get();
        return view('admin.groupmember.add-member', compact('groups'));
    }

    public function manageMember(){
        $members = GroupMember::whereHas('group' , function ($item){
            $item->where('created_by', auth()->user()->id);
    })->get();
        info($members);
        return view('admin.groupmember.manage-member', compact('members'));
    }

    public function store(Request $request){
        $members = GroupMember::create([
            'group_id' => $request->group,
            'contact_name' => $request->contact_name,
            'contact_number' => $request->contact_number,
        ]);
        return redirect(route('manage.member'))->with('message','Saved Successfully');
    }

    public function editMember($id){
        $members = GroupMember::findOrFail($id);
        info($members);
        return view('admin.groupmember.edit-member', compact('members'));
    }


    public function updateMember(Request $request){
        $members = GroupMember::find($request->id);
        $members->update([
            'contact_name' => $request->contact_name,
            'contact_number' => $request->contact_number
        ]);
        return redirect(route('manage.member'));
    }

    public function deleteMember($id){
        $members = GroupMember::findOrFail($id);
        $members->delete();
        return redirect(route('manage.member'));
    }
}


























// class ServiceController extends Controller
// {
//     public function sendSms(){
//         return view('admin.service.sendSms');
//     }

//     public function serviceHistory(){
//         $messages = Message::get();
//         return view('admin.service.serviceHistory', compact('messages'));
//     }
//     public function store(Request $request){
//         $message = Message::create([
//             'body' => $request->message,
//             'sms_count' => ceil(strlen($request->message)/80),
//             'total_receiver' => 1,
//             'total_count' => ceil(strlen($request->message)/80) * 1,
//             'status' => 'pending',
//             'sender_id' => '01911155454',
//             'draft' => false,
//         ]);
//         MessageHistory::create([
//             'user_id' => 1,
//             'message_id' => $message->id,
//         ]);
//         return back();
//     }
// }

