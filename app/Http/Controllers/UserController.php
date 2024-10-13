<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index () {
        return User::all();
    }

    public function getMyEvents() {
        $events = Event::all()->where('creator_id', Auth::id());
        return view('dashboard', compact('events'));
    }

}
