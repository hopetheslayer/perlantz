@extends('layouts.anatema-app')


@section('css')


@stop

@section('content')

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('anasayfa')}}"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item " aria-current="page"><a href="{{route('home')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('support-tickets.index')}}">Support Tickets</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 25px; margin-bottom: 25px;" class="page-content">
        <div class="dashboard">
            <div class="container">
                 <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header text-center">
                    <h2> Ticket Number: # {{ $ticket->ticket_id }} - <b>{{ $ticket->title }}</b></h2></i>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="col-md-12 col-md-offset-1">
                            <div class="panel panel-default">


                                <div class="panel-body">


                                    <div class="ticket-info">
                                        <p style="font-size: 25px;">Ticket Message:

                                            {!! $ticket->message !!}</p>
                                        <hr>
                                        <p style="font-size: 25px;">Category: {{ $category->name }}</p>
                                        <hr>
                                        <p style="font-size: 25px;">
                                            @if ($ticket->status === 'Open')
                                                Status: <span class="btn-xs btn-sqr">{{ $ticket->status }}</span>
                                        </p>
                                        <hr>
                                        <p style="font-size: 25px;">Created Time: {{ $ticket->created_at->diffForHumans() }}</p>
                                        <hr>
                                        <p style="font-size: 25px;">Additional Messages to the Topic</p>
                                        <div class="comments">
                                            @foreach ($comments as $comment)
                                                <div class="panel panel-@if($ticket->user->id === $comment->user_id) {{"default"}}@else{{"success"}}@endif">
                                                    <div class="">
                                                        <div style="border-style: dashed; border-width: 1px;" class="card-text">
                                                            <div style="margin: 10px;">
                                                                <h5>{{ $comment->user->name}} {{ $comment->user->sname }}

                                                                    <span class="pull-right">{{ $comment->created_at->diffForHumans() }}</span>
                                                                </h5>
                                                                <hr>
                                                                Message : <b>{{ $comment->comment }}</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>



                                    <div style="margin-top: 50px;" class="comment-form">
                                        <form action="{{ url('comment') }}" method="POST" class="form">
                                            {!! csrf_field() !!}

                                            <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">

                                            <div class="form-line{{ $errors->has('comment') ? ' has-error' : '' }}">
                                                <textarea style="background: #fff3cd" rows="10" class="form-control" name="comment"></textarea>


                                            </div>

                                            <div style="margin-top: 15px;" class="form-group">
                                                <a href="{{route('support-tickets.index')}}" style="color:#fff3cd;" class="btn btn-sqr">Back</a>
                                                <button type="submit" class="btn btn-sqr">Gönder</button>
                                            </div>
                                        </form>
                                    </div>



                                    @else






                                        Status: <span class="btn-xs btn-danger">
                                          Your Support Ticket has been closed because it was answered by Perlantz Jewellery support.
                                            </span>
                                        <hr>
                                        <p style="font-size: 25px;">Messages received by us</p>
                                        <hr>








                                    @foreach($comm as $com)
                                            <div class="panel panel-heading">
                                                <div style="border-style: dashed; border-width: 1px;" class="card-text">
                                                    <div style="margin: 10px;">
                                                        <h5>{{ $com->admin->name }} {{ $com->admin->sname }}

                                                            <span class="pull-right">{{ $com->created_at->diffForHumans() }}</span>
                                                        </h5>
                                                        <hr>
                                                        {{$com->comment}}
                                                    </div>
                                                </div>

                                            </div>



                                        @endforeach
                                        <div style="margin-top: 25px;">
                                            <a href="{{route('support-tickets.index')}}" style="color:#fff3cd;" class="btn btn-sqr">Back</a>
                                        </div>


                                    @endif
                                </div>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>




@endsection


@section('js')
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="/toast/toast.js"></script>

@stop


