<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        if (Auth::user()->role !== $role) {
            // Arahkan berdasarkan role yang benar
            switch (Auth::user()->role) {
                case 'admin':
                    return redirect()->route('admin')->with('error', 'Anda dialihkan ke dashboard Admin.');
                case 'wali':
                    return redirect()->route('wali.dashboard')->with('error', 'Anda dialihkan ke dashboard Wali.');
                default:
                    return redirect()->route('login')->with('error', 'Anda tidak memiliki akses.');
            }
        }

        return $next($request);
    }
}
