<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function addGroup(){
        return view('admin.group.add-group');
    }

    public function manageGroup(){
        $groups = Group::get();
        return view('admin.group.manage-group', compact('groups'));
    }

    public function store(Request $request){
        // dd($request->all());
        $groups = Group::create([
            'group_name' => $request->group_name,
            'created_by' => 'Aleen',
        ]);
        return back();
    }

    public function edit($id){
        $groups = Group::findOrFail($id);
        return view('admin.group.edit-group', compact('groups'));
    }

    public function updateGroup(Request $request, $id){
        $groups = Group::findOrFail($id);
        $groups->group_name;
        $groups->created_by;
        return redirect(route('manage.group'));

    }

    public function delete($id){
        $groups = Group::findOrFail($id);
        $groups->delete();
        return redirect(route('manage.group'));
    }
}
