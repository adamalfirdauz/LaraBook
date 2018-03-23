<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use App\Like;
use App\Comment;
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
    public function edit(Request $request)
    {
        $status = Status::find($request->id);
        $status->konten = $request->konten;
        if($status->save())
        {
            return back()->with('success', 'Status berhasil diperbarui');
        }
        else
        {
            return back()->with('danger', 'Error, gagal memperbarui status');
        }
    }
    public function hapus(Request $request)
    {
        $like = Like::where('status_id', '=',$request->id);
        $comment = Comment::where('status_id', '=', $request->id);
        $comment->delete();
        $like->delete();
        $status = Status::find($request->id);
        if($status->delete())
        {
            return back()->with('success', 'Status berhasil dihapus');
        }
        else
        {
            return back()->with('danger', 'Error, gagal menghapus status');
        }
    }
}
