<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use Illuminate\Support\Facades\Validator;

class StatusController extends Controller
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'konten' => 'required'
        ]);
        dd(Auth::user());
        Status::create([
            'konten' => $request->konten,
            'user_id' => Auth::user(),
        ]);
    }
}
