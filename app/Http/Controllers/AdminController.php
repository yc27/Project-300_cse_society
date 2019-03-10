<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.adminHome');
    }

    public function inbox()
    {
        $title = "Inbox";
        $messages = Message::orderBy('created_at', 'DESC')->get();
        return view('admin.inbox', ['title' => $title, 'messages' => $messages]);
    }

    public function events()
    {
        $title = "Events";
        return view('admin.events', ['title' => $title]);
    }

    public function gallery()
    {
        $title = "Gallery";
        return view('admin.gallery', ['title' => $title]);
    }

    public function committee()
    {
        $title = "Committee";
        return view('admin.committee', ['title' => $title]);
    }
}
