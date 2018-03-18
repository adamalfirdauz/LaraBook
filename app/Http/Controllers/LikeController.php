<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use Auth;

class LikeController extends Controller
{
    public function like(Request $request)
    {
        $like = Like::create([
            'user_id' => Auth::user()->id,
            'status_id' => $request->status_id,
        ]);
        if($like) return back()->with('success', 'Status disukai');
        else return back()->with('danger', 'Gagal menyukai status');
    }
}
