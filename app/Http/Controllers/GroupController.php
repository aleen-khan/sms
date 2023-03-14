<?php

namespace App\Http\Controllers;

use App\Models\Group;
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
        $groups = Group::create([
            'group_name'  => $request->group_name,
            'description' => $request->description,
            'created_by'  => auth()->user()->id,
        ]);
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
        $groups = Group::find($request->id);
        $groups->update([
            'group_name'  => $request->group_name,
            'description' => $request->description
        ]);
        return redirect(route('manage.group'));
    }

    public function delete($id)
    {
        $groups = Group::findOrFail($id);
        $groups->delete();
        return redirect(route('manage.group'));
    }
}
