<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('faq.faq', compact('faqs'));
    }
}