<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $events = Event::latest()->take(10)->get();;

        return view('home', compact('events'));
    }
}
