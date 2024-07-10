<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        if ($request->wantsJson()) {
            return response()->json(['two_factor' => false]);
        };

        if (Auth::user()->hasRole('customer')) {
            return redirect(route('customer.dashboard'));
        }

        if (Auth::user()->hasRole('admin')) {
            return redirect(route('admin.dashboard'));
        }
    }
}