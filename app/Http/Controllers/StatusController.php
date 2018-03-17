<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use Auth;
use Illuminate\Support\Facades\Validator;

class StatusController extends Controller
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'konten' => 'required'
        ]);
        Status::create([
            'konten' => $request->konten,
            'user_id' => Auth::user()->id,
        ]);
        return back();
    }
}
