<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class ComplaintController extends Controller
{
    public function submitComplaint(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'complaint' => 'required|string',
        ]);

        Complaint::create([
            'name' => $request->name,
            'email' => $request->email,
            'complaint' => $request->complaint,
        ]);

        return redirect()->back()->with('success', 'Keluhan Anda telah dikirim.');
    }
}
