<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupMember;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function addMember(){
        $group = Group::all()->toArray();
        // dd($group);
        return view('admin.groupmember.add-member', compact('group'));
    }

    public function manageMember(){
        $members = GroupMember::get();
        return view('admin.groupmember.manage-member', compact('members'));
    }

    public function store(Request $request){
        // return $request->all();

        $members = GroupMember::create([
            'contact_name' => $request->contact_name,
            'contact_number' => $request->contact_number,

        ]);
        return back();
    }

    public function editMember($id){
        $members = GroupMember::findOrFail($id);
        return view('admin.groupmember.edit-member', compact('members'));
    }

    public function updateMember($id){
        $members = GroupMember::findOrFail($id);
        $members->contact_name;
        $members->contact_number;
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

