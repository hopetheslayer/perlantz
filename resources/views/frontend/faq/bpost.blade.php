@extends('layouts.anatema')



@section('sayfa-title')

    @if(strlen($blog->post_baslik)<50)
        <title>Perlantz |{{$blog->post_baslik}} </title>
        @else
        <title>{{$blog->post_baslik}} </title>

    @endif

@endsection

@section('sayfa-description'){{$blog->blog_aciklama}}@endsection

@section('sayfa-keywords'){{$blog->post_baslik}}@endsection

@section('sayfa-author','Perlantz Admin')

@section('tw-title'){{$blog->post_baslik}}@endsection
@section('tw-site','@perlantz_inc')
@section('tw-description'){{$blog->blog_aciklama}}@endsection


@section('fc-title'){{$blog->post_baslik}}@endsection
@section('fc-image')@endsection
@section('fc-description'){{$blog->blog_aciklama}}@endsection





   @section('css')

@stop

@section('content')



           <section    class="section  futura-section-color">

        <div class="container">
            <div class="row">
                <aside class="sidebar col-md-4 col-lg-3 order-2">
                    <div class="accordion accordion-default accordion-toggle accordion-style-1 mb-5" role="tablist">

                        <div class="card">
                            <div class="card-header accordion-header" role="tab" id="popularPosts">
                                <h3 class="text-3 mb-0">
                                    <a href="#" class="text-color-dark-2" data-toggle="collapse" data-target="#togglePopularPosts" aria-expanded="false" aria-controls="togglePopularPosts">POPULAR</a>
                                </h3>
                            </div>
                            <div id="togglePopularPosts" class="accordion-body collapse show" aria-labelledby="popularPosts">
                                <div class="card-body">

                                        @foreach($popular as $p)

                                        @if ($p->deleted_at == null )
                                            <article class="row align-items-center mb-3">
                                                <div class="col-4 pr-0">

                                                        <img src="/frontend/uploads/blog/kapak/{{$p->kimage}} " class="img-fluid hover-effect-2" alt="" />

                                                </div>
                                                <div class="col-8">
                                                    <span class="text-color-dark-2"> {{$p->post_baslik}}</span>
                                                    <h4 class="text-2 mb-0">
                                                        <a href="#" class="text-1">  {{date('d F , Y', strtotime($p->created_at))}} </a>
                                                    </h4>
                                                </div>
                                            </article>
                                        @endif

                                         @endforeach


                                </div>

                            </div>
                        </div>



                    </div>

                </aside>



                <div class="col-md-8 col-lg-9 order-1 mb-5 mb-md-0">
                    <article class="blog-post mb-4">
                        <h2  class="font-weight-bold  mb-3 text-center">
                            <a  style="white-space: pre-wrap; /* css-3 */
                                    white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
                                    white-space: -pre-wrap; /* Opera 4-6 */
                                    white-space: -o-pre-wrap; /* Opera 7 */
                                    word-wrap: break-word; /* Internet Explorer 5.5+ */ "  class="text-color-dark-2">{{$blog->post_baslik}}</a>
                        </h2>
                        <div class="d-flex mb-3">
                            <span class="post-date text-color-dark-2 text-3 pr-3"><i class="fas fa-calendar-alt"></i> {{$blog->created_at->format('d M Y' )}}</span>

                        </div>
                        <header class="blog-post-header mb-3 text-center">
                            <img style="height: 500px;" src="/frontend/uploads/treatment/kapak/{{$blog->kimage}}" class="img-fluid" alt="" />
                        </header>
                        <div style="white-space: pre-wrap; /* css-3 */
                                    white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
                                    white-space: -pre-wrap; /* Opera 4-6 */
                                    white-space: -o-pre-wrap; /* Opera 7 */
                                    word-wrap: break-word; /* Internet Explorer 5.5+ */ " class="mb-4 text-color-light text-justify">
                    {!! $blog->yazi !!}

                        </div>


	                <div class="container mb-5 pb-3">

					<div class="row">

						<div class="col-md-12">


							<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
								<div class="row">



								</div>
							</div>

						</div>
					</div>

				</div>


                    </article>

                </div>
            </div>
        </div>
    </section>




@stop


@section('js')
           <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
           <script src="{{ asset('js/share.js') }}"></script>
@stop


