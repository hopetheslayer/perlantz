<?php

namespace App\Http\Controllers\Front;

use App\Models\KategoriUrun\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function commentstore(Request $request)
    {

        $request->validate([
            'comment_title'=>'required',
            'body'=>'required',
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;

        Comment::create($input);

        return back();

    }

    public function sil($id)
    {


        Comment::destroy($id);

        toastr()->success('Data has been deleted.');

        return redirect()->back();
    }
}
