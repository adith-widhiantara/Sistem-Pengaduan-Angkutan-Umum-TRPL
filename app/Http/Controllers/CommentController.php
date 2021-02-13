<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
use App\Pengaduan1;
use App\Comment;
use Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $userid = Auth::user()->id;
        $c = new \App\Comment();
        $c->id = mt_rand(1000, 9999);
        $c->post_id = $request->idnya;
        $c->user_id = $userid;
        $c->message = $request->message;
        $c->save();

        return redirect()->back();
    }
}
