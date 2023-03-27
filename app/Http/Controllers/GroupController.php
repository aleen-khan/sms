<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function addGroup()
    {
        return view('admin.group.add-group');
    }

    public function manageGroup()
    {
        $groups = Group::where('created_by', auth()->user()->id)->get();
        return view('admin.group.manage-group', compact('groups'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'group_name' => 'required|max:255',
            'description' => 'required|max:255',

        ]);
        $groups = Group::create([
            'group_name'  => $request->group_name,
            'description' => $request->description,
            'created_by'  => auth()->user()->id,
        ]);
        $request->session()->flash('msg', 'Group Successfully Created');
        // $request->session()->flash('status', 'Task was successful!');
        return redirect(route('manage.group'))->with('message', 'Saved Successfully');
    }

    public function edit($id)
    {
        $groups = Group::findOrFail($id);
        return view('admin.group.edit-group', compact('groups'));
    }

    public function updateGroup(Request $request)
    {
        // return $request->all();
        $request->validate([
            'group_name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        $groups = Group::find($request->id);
        $groups->update([
            'group_name'  => $request->group_name,
            'description' => $request->description
        ]);
        $request->session()->flash('msg', 'Group Successfully Updated');
        return redirect(route('manage.group'));
    }

    public function delete($id)
    {
        $groups = Group::findOrFail($id);
        $groups->delete();
        return redirect(route('manage.group'))->with('message', 'Delete Successfully');;
    }
}
