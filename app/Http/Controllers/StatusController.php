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
        $status = Status::create([
            'konten' => $request->konten,
            'user_id' => Auth::user()->id,
        ]);
        if($status) return back()->with('success', 'Status berhasil dibagikan');
        else return back()->with('danger', 'Error');
    }
}
