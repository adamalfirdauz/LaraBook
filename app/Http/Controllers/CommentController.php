<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;

class CommentController extends Controller
{
    public function create(Request $request)
    {
        $comment = Comment::create([
            'user_id' => Auth::user()->id,
            'status_id' => $request->status_id,
            'konten' => $request->konten,
        ]);
        if($comment) return back()->with('success', 'Komentar berhasil ditambahkan.');
        else return back()->with('danger', 'Komentar tidak berhasil ditambahkan.');
    }
}
