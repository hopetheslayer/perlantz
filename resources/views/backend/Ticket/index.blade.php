@extends('arka')


@section('css')


@endsection

@section('content')



    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Support Tickets</h4>
            </header>


            <hr class="widget-separator">
            <div class="widget-body">
                <div class="table-responsive">
                    <table class="table  text-center">
                        <thead>
                        <tr>
                         

                            <th class="text-center">Category</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Last Updated</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>

                            <tbody>
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
                                        <a href="{{ route('admin.ticket.show', $ticket->ticket_id) }}">
                                            #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                                        </a>
                                    </td>
                                    <td>
                                        @if ($ticket->status === 'Open')
                                            <span class="btn btn-success">{{ $ticket->status }}</span>
                                        @else
                                            <span class="btn btn-danger">{{ $ticket->status }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $ticket->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.ticket.show', $ticket->ticket_id) }}" class="btn btn-primary">Yorum Yap</a>
                                    </td>
                                    <td>
                                        <form action="{{ url('close_ticket/' . $ticket->ticket_id) }}" method="POST">
                                            {!! csrf_field() !!}
                                            <button type="submit" class="btn btn-danger">Postu Kapat</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                    </table>
                </div>
            </div>
        </div><!-- .widget -->
    </div>


@endsection



@section('js')




@endsection
