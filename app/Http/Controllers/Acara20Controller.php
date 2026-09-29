<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;

class Acara20Controller extends Controller
{
    public function form()
    {
        return view('acara20-form');
    }

    public function submitForm(UserRequest $request)
    {
        return view('acara20-success', [
            'name' => $request->name,
            'email' => $request->email,
        ]);
    }
}
