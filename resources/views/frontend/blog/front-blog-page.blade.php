@extends('layouts.anatema')

@section('aside-page-title','NEWS ROOM')

@section('sayfa-title')
    <title>Perlantz | Blog </title>
@endsection

@section('sayfa-description','')

@section('sayfa-keywords','')

@section('sayfa-author','')

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
                                @foreach($kategori as $kg)
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
                    </aside>
                </div>
                <div class="col-lg-9 order-1">
                    <div class="blog-item-wrapper">
                        <!-- blog item wrapper end -->
                        <div class="row mbn-30">
                            @foreach($blog as $bg)
                            <div class="col-md-6">
                                <!-- blog post item start -->
                                <div class="blog-post-item mb-30">
                                    <figure class="blog-thumb">
                                        <a href="{{route('sblog',$bg->slug)}}">
                                            <img src="/frontend/uploads/blog/ongorsel/{{$bg->gimage}}" alt="blog image">
                                        </a>
                                    </figure>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <p> {{date('d F , Y', strtotime($bg->created_at))}}  | <a href="#">Perlantz</a></p>
                                        </div>
                                        <h4 class="blog-title">
                                            <a href="{{route('sblog',$bg->slug)}}l"> {{$bg->post_baslik}}</a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- blog post item end -->
                            </div>
                            @endforeach

                        </div>
                        <!-- blog item wrapper end -->

                        <!-- start pagination area -->
                        <div class="paginatoin-area text-center">
                            <ul class="pagination-box">
                                {{ $blog->links() }}
                            </ul>
                        </div>
                        <!-- end pagination area -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog main wrapper end -->

@stop


@section('js')

@stop
