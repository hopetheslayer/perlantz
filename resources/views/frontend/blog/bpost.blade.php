@extends('layouts.anatema')

@section('sayfa-title')

    @if(strlen($blog->post_baslik)<60)
        <title>Perlantz |{{$blog->post_baslik}} </title>
        @else
        <title>{{$blog->post_baslik}} </title>

    @endif

@endsection

@section('sayfa-description'){{$blog->onyazi}}@endsection

@section('sayfa-keywords'){{$blog->post_baslik}}@endsection

@section('sayfa-author','Rd Global Admin')

@section('tw-title'){{$blog->post_baslik}}@endsection
@section('tw-site','@rdglobal_inc')
@section('tw-description'){{$blog->onyazi}}@endsection


@section('fc-title'){{$blog->post_baslik}}@endsection
@section('fc-image')@endsection
@section('fc-description'){{$blog->onyazi}}@endsection





   @section('css')

@stop

@section('content')

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('anasayfa')}}"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item active"><a href="{{route('blog')}}">blog</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- blog main wrapper start -->
    <div class="blog-main-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="blog-sidebar-wrapper">
                        <div class="blog-sidebar">
                            <h5 class="title">search</h5>
                            <div class="sidebar-serch-form">
                                <form action="#">
                                    <input type="text" class="search-field" placeholder="search here">
                                    <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div> <!-- single sidebar end -->
                        <div class="blog-sidebar">
                            <h5 class="title">categories</h5>
                            <ul class="blog-archive blog-category">
                                @foreach($kategoris as $kg)
                                    <li class="mb-2">
                                        <a href="{{route('bkategori',$kg->slug)}}" class="font-weight-semibold text-color-dark"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i>{{$kg->kategori_adi}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div> <!-- single sidebar end -->

                        <div class="blog-sidebar">
                            <h5 class="title">recent post</h5>
                            <div class="recent-post">
                                @foreach($popular as $p)

                                    @if ($p->deleted_at == null )
                                        <div class="recent-post-item">
                                            <figure class="product-thumb">
                                                <a href="{{route('sblog',$p->slug)}}">
                                                    <img src="/frontend/uploads/blog/kapak/{{$p->kimage}}" alt="blog image">
                                                </a>
                                            </figure>
                                            <div class="recent-post-description">
                                                <div class="product-name">
                                                    <h6><a href="{{route('sblog',$p->slug)}}">{{$p->post_baslik}}</a></h6>
                                                    <p>{{date('d F , Y', strtotime($p->created_at))}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                @endforeach
                            </div>
                        </div> <!-- single sidebar end -->
                        <div class="blog-sidebar">
                            <h5 class="title">Tags</h5>
                            <ul class="blog-tags">
                                <li><a href="#">camera</a></li>
                                <li><a href="#">computer</a></li>
                                <li><a href="#">bag</a></li>
                                <li><a href="#">watch</a></li>
                                <li><a href="#">smartphone</a></li>
                                <li><a href="#">shoes</a></li>
                            </ul>
                        </div> <!-- single sidebar end -->
                    </aside>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="blog-item-wrapper">
                        <!-- blog post item start -->

                        <div class="blog-post-item blog-details-post">
                            <figure class="blog-thumb">
                                <img src="/frontend/uploads/blog/kapak/{{$blog->kimage}}" alt="blog image">
                            </figure>
                            <div class="blog-content">
                                <h3 class="blog-title">
                                    {{$blog->post_baslik}}
                                </h3>
                                <div class="blog-meta">
                                    <p>{{$blog->created_at->format('d M Y' )}} | <a href="#">Perlantz</a></p>
                                </div>
                                <div class="entry-summary">
                                    {!! $blog->yazi !!}
                                    <div class="blog-share-link">
                                        <h6>Share :</h6>
                                        <div class="blog-social-icon">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{route('sblog',$blog->slug)}}" class="facebook"><i class="fas fa-facebook"></i></a>
                                            <a href="https://twitter.com/intent/tweet?url={{route('sblog',$blog->slug)}}" class="twitter"><i class="fas fa-twitter"></i></a>
                                            <a href="https://wa.me/?text={{route('sblog',$blog->slug)}}"><i class="fas fa-whatsapp"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- blog post item end -->


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog main wrapper end -->


@stop


@section('js')

@stop
