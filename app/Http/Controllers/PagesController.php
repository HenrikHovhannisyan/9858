<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function luxury_delivery()
    {
        return view('pages.luxury-delivery');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function shop()
    {
        return view('pages.shop');
    }

    public function custom_packaging()
    {
        return view('pages.custom-packaging');
    }

    public function concierge_service()
    {
        return view('pages.concierge-service');
    }

    public function settings()
    {
        $user = auth()->user();
        return view('pages.dashboard.settings', compact('user'));
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|max:255|unique:users,email,' . auth()->id(),
        ]);

        $user = auth()->user();
        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->email      = $request->email;
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = auth()->user();

        if (!\Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        $user->password = bcrypt($request->password);
        $user->save();

        return back()->with('success', 'Password updated successfully.');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
