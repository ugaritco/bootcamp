<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Heritage\Http\Request;
use Heritage\Support\Facades\Auth;

class Logout extends Controller
{
    public function __invoke(Request $request)
    {
        Auth::logout();

        // Invalidate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out.');
    }
}
