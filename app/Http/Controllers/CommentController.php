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
    public function delete(Request $request)
    {
        $comment =  Comment::where('id', '=', $request->id)->first();
        if($comment->delete())
            return back()->with('success', 'Komentar berhasil dihapus.');
        return back()->with('danger', 'Komentar gagal dihapus.');
    }
}
