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

    <div style="margin-top: 50px; margin-bottom: 50px;" class="container text-center">
        <div class="myaccount-content">
            <h2 class="text-center">Included Support Tickets</h2>
            @if ($tickets->isEmpty())
                <p style="text-align:center; font-size: 23px;"><u>There are no support tickets available in the system.</u></p>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <a class="btn btn-sqr" href="{{route('support-tickets.create')}}">Create Support Ticket</a>

                </div>
                <br><br>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <a class="btn btn-sqr" href="{{ route('home') }}"> Back</a>

                </div>
            @else
                <div class="myaccount-table table-responsive text-center">


                    <table style="margin-top: 50px;" class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th>Category</th>
                            <th>Reason</th>
                            <th>Status</th>
                            <th>Create Date</th>
                            <th>Update Date</th>
                        </tr>
                        </thead>

                        <tr>
                        @foreach ($tickets as $ticket)
                            <tr>
                                <td>
                                    @foreach ($categories as $category)
                                        @if ($category->id === $ticket->category_id)
                                            {{ $category->name }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <a class="btn btn-sqr" href="{{ url('support-tickets/'. $ticket->ticket_id) }}">
                                        #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                                    </a>
                                </td>
                                <td>
                                    @if ($ticket->status === 'Open')
                                        <button class="btn btn-sqr">{{ $ticket->status }}</button>
                                    @else
                                        <span class="btn btn-sqr">{{ $ticket->status }}</span>
                                    @endif
                                </td>
                                <td>{{$ticket->created_at}}</td>
                                <td>{{ $ticket->updated_at }}</td>
                            </tr>
                        @endforeach
                    </table>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        @if ($ticket->status === 'Closed')

                            <a class="btn btn-sqr" href="{{route('support-tickets.create')}}">Destek Bileti Oluştur</a>
                        @endif



                    </div>
                    {{ $tickets->render() }}

                </div>
            @endif
        </div>

    </div>




@endsection


@section('js')


@stop


