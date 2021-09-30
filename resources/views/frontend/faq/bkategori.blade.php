@extends('layouts.anatema')



@section('sayfa-title')

    <title>Perlantz | {{$kategori->kategori_adi}} </title>

@endsection

@section('sayfa-description','')

@section('sayfa-keywords','')

@section('sayfa-author','')



@section('css')

@stop

@section('content')


    <section    class="section  futura-section-color">
        <div class="container">
            <div  class="row text-center">
                <div style="margin-top: 50px;" class="container">
                    <div class="row">
                        <aside class="sidebar col-md-4 col-lg-3 order-2">
                            <div class="accordion accordion-default accordion-toggle accordion-style-1" role="tablist">
                                <div class="card">
                                    <div class="card-header accordion-header" role="tab" id="categories">
                                        <h3 class="text-3  mb-0">
                                            <a href="#" class="text-color-dark" data-toggle="collapse" data-target="#toggleCategories" aria-expanded="false" aria-controls="toggleCategories">F.A.Q CATEGORIES</a>
                                        </h3>
                                    </div>
                                    <div id="toggleCategories" class="accordion-body collapse show" aria-labelledby="categories">
                                        <div class="card-body">
                                            <ul class="list list-unstyled">
                                                @foreach($kategoris as $kg)

                                                    <li class="mb-2">
                                                        <a href="{{route('tkategori',$kg->slug)}}" class="font-weight-semibold text-color-dark"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i>{{$kg->kategori_adi}}</a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </aside>
                        <div class="col-md-8 col-lg-9 order-1 mb-5 mb-md-0">
                            <div class="row  portfolio-list portfolio-list-style-2" data-plugin-masonry data-plugin-options="{'itemSelector': '.isotope-item'}">
                                @if ($blog->isEmpty())

                                    <h2 class="text-color-dark text-12 news-there " ><u>THERE İS NO CONTENT.</u></h2>

                                @else
                                    @foreach($blog as $bg)
                                        <div class="col-sm-6 isotope-item mb-5 p-0">
                                            <div class="portfolio-item">
                                                <article class="blog-post">
                                                    <h2 class="font-weight-bold text-4 mb-3">
                                                        <a href="{{route('faqpost',$bg->slug)}}" class="text-color-dark">{{$bg->post_baslik}}</a>
                                                    </h2>
                                                    <div class="owl-carousel owl-theme dots-style-2 nav-style-2" data-plugin-options="{'items': 1, 'dots': true, 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut'}">
                                                        <div>
                                                            <a href="{{route('faqpost',$bg->slug)}}">
                                                                <div class="image-frame hover-effect-2">
                                                                    <div class="image-frame-wrapper">
                                                                        <img src="/frontend/uploads/faq/ongorsel/{{$bg->gimage}}" class="img-fluid" alt="" />
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex opacity-6 my-2">
                                                        <span class="top-sub-title text-color-dark px-3 text-2"> {{$bg->created_at->toDateString() }}</span>
                                                        <span class="top-sub-title  text-color-dark d-flex align-items-center border border-top-0 border-bottom-0 px-3"><i class="far fa-folder  text-3 mr-1"></i>{{$bg->treatmentkategori->kategori_adi}}</span>
                                                        <span class="top-sub-title  text-color-dark d-flex align-items-center  border-top-0 border-bottom-0 px-3"><i class="far fa-user-circle  text-3 mr-1"></i>Perlantz Admin</span>
                                                    </div>
                                                    <hr style="background-color: white;" class="mt- mb-3 ">
                                                    <p class="text-color-dark">{{$bg->onyazi}}</p>
                                                    <a href="{{route('faqpost',$bg->slug)}}" class="btn btn-sqr text-color-light font-weight-bold learn-more">READ MORE <i class="fas fa-angle-right text-3" aria-label="Read more"></i></a>
                                                </article>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <hr class="mt-5 mb-4">

                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination mb-0">

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br>




@stop


@section('js')

@stop
