@foreach($comments as $comment)
    @if ($comment->verified == 1)
        <div class="reviews">

            <div  class="review">
                <div class="row no-gutters">
                    <div class="col-md-2 col-sm-12">
                        <h4><a href="#">{{ $comment->user->name }} {{ $comment->user->surname }}</a></h4>
                        <div class="ratings-container">
                            <div class="d-sm-block">
                                <img height="50" width="75" class="avatar rounded-circle" alt="" src="/frontend/uploads/profile/{{$comment->user->userDetay->imageb}}">
                            </div>
                        </div><!-- End .rating-container -->
                        <span class="review-date">{{ $comment->created_at->diffForHumans() }}</span>
                    </div><!-- End .col -->
                    <div class="col">
                        <h4>{{ $comment->comment_title }} </h4>

                        <div class="review-content">
                            <p>{{ $comment->body }}</p>
                        </div><!-- End .review-content -->

                        <div class="review-action">
                            <a href="#">
                                @auth
                                    @if (Auth::user()->id == $comment->user_id )
                                        <a style="margin-top: 18px; color: whitesmoke;" class="btn btn-danger " href="{{ route('user.comment.sil',$comment->id) }}" data-toggle="tooltip" data-placement="top" title="sil" onclick="return confirm('Veriyi Silerseniz geri döndüremezsiniz. Silmek istiyor musunuz ? ')">Delete</a><br><br>

                                    @endif
                                @endauth
                            </a>
                        </div><!-- End .review-action -->
                    </div><!-- End .col-auto -->
                </div><!-- End .row -->
            </div><!-- End .review -->



    @endif

@endforeach
