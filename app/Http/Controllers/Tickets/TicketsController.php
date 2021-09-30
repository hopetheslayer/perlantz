<?php

namespace App\Http\Controllers\Tickets;


use App\Mailers\AppTicMailer;
use App\Models\Ticket\Category;
use App\Models\Ticket\Comment;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ticket\Ticket;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class TicketsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id = auth()->id();

        $tickets = Ticket::where('user_id',$user_id)->paginate(10);
        $categories = Category::all();
        return view('userbackend.ticket.index', compact('tickets', 'categories'))->with('i',(request()->input('page',1)-1)*10);
    }

    public function create()
    {
        $categories = Category::all();
    return view('userbackend.ticket.create',compact('categories'));
    }

    public function store(Request $request, AppTicMailer $mailer)
    {



        $user_id = auth()->id();

        $this->validate($request, [
            'title'     => 'required',
            'category'  => 'required',
            'priority'  => 'required',
            'message'   => 'required'
        ]);

        $ticket = new Ticket([
            'title'     => $request->input('title'),
            'user_id' => $user_id,
            'ticket_id' => strtoupper(str_random(5)),
            'category_id'  => $request->input('category'),
            'priority'  => $request->input('priority'),
            'message'   => $request->input('message'),
            'status'    => "Open",
            'cevaplandı' => "hayır",
        ]);





        $ticket->save();




        return redirect()->route('support-tickets.index');

    }

    public function show($id)
    {

        $ticket = Ticket::where('ticket_id', $id)->firstOrFail();



        $comments = $ticket->comments;

        $category = $ticket->category;

        $comm = $ticket->comm;


    return view('userbackend.ticket.show',compact('comments','category','comm','ticket'));
    }

    public function postComment(Request $request, AppTicMailer $mailer)
    {
        $this->validate($request, [
            'comment'   => 'required'
        ]);

        $comment = Comment::create([
            'ticket_id' => $request->input('ticket_id'),
            'user_id'    => auth()->id(),
            'comment'    => $request->input('comment'),
        ]);




        return redirect()->back();
    }

}
