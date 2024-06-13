<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('event.event', compact('events'));
    }
}