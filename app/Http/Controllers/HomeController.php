<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupMember;
use App\Models\MessageHistory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalGroups = Group::count();
        $totalContacts = GroupMember::count();
        $totalSmsSent = MessageHistory::count();
        return view('home', compact('totalGroups', 'totalContacts', 'totalSmsSent'));
    }
}
