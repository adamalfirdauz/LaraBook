<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use Auth;

class LikeController extends Controller
{
    public function like(Request $request)
    {
        if(Like::where('status_id', '=', $request->status_id)->where('user_id', '=', Auth::user()->id)->get()->count() < 1)
        {
            $like = Like::create([
                'user_id' => Auth::user()->id,
                'status_id' => $request->status_id,
            ]);
            if($like) return back()->with('success', 'Like Sukses.');
            else return back()->with('danger', 'Gagal menyukai status.');
        }
        else
        {
            $like = Like::where('status_id', '=', $request->status_id)->where('user_id', '=', Auth::user()->id)->first();
            // dd($like);
            $like->delete();
            return back()->with('success', 'Unlike Sukses.');
        }
    }

    public function dislike(Request $request)
    {
        $like = Like::create([
            'user_id' => Auth::user()->id,
            'status_id' => $request->status_id,
        ]);
        if($like) return back()->with('success', 'Status disukai');
        else return back()->with('danger', 'Gagal menyukai status');
    }
}
