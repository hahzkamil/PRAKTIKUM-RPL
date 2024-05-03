<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthManager extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('profile.profile', compact('$user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('landing.signup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max12',
        ]);

        User::create($validatedData);

        return redirect('/login')->with('Berhasil', 'Anda telah berhasil terdaftar!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'nama'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max12',
        ]);

        User::where('id', $user->id)
                ->update($validatedData);

        return redirect('profile.profile')->with('Berhasil','Anda berhasil melakukan perubahan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
