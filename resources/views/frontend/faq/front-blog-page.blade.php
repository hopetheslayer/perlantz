@extends('layouts.anatema')

@section('aside-page-title','TREATMENTS')

@section('sayfa-title')
    <title>Perlantz | F.A.Q </title>
@endsection

@section('sayfa-description','')

@section('sayfa-keywords','')

@section('sayfa-author','')

@section('css')

@stop

@section('content')


    <link rel="stylesheet" href="/frontend/assets/css/faq.css">

    <!-- ======= Hero Search Starts ======= -->
    <section id="hero">
        <div class="container search-box search-box--hero">
            <div class="hero__subtitle">Help desk</div>
            <div class="hero__title text-color-light-2">Hello, how can we help?</div>
            <form role="search" class="search" data-search="" data-instant="true" autocomplete="off">
                <input type="text" name="country" id="country" placeholder="Enter Your Questions here..!" class="form-control text-center bg-light-5 rounded border-0 text-dark text-1">
            </form>
        </div>
    </section><!-- Hero Search Ends -->

    <main id="main">


        <!-- ======= Frequently ======= -->
        <section style="margin-bottom: 56px;" id="faq" class="faq">
            <div class="container">
                <div class="col-lg-12">
                    <div id="country_list"></div>
                </div>

                <div class="row">
                    @foreach($kat as $k)
                        <div class="col-lg-4 ">
                            <a href="{{route('tkategori',$k->slug)}}">
                                <div class="icon-box">
                                    <div class="icon"><i class="fas fa-address-card"></i></div>
                                    <h4 class="title">{{$k->kategori_adi}}</h4>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    @foreach($kat1 as $k1)
                    <div class="col-lg-4 ">
                        <a href="{{route('tkategori',$k1->slug)}}">
                            <div class="icon-box">
                                <div class="icon"><i class="fas fa-address-card"></i></div>
                                <h4 class="title">{{$k1->kategori_adi}}</h4>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    @foreach($kat2 as $k2)
                        <div class="col-lg-4 ">
                            <a href="{{route('tkategori',$k2->slug)}}">
                                <div class="icon-box">
                                    <div class="icon"><i class="fas fa-address-card"></i></div>
                                    <h4 class="title">{{$k2->kategori_adi}}</h4>
                                </div>
                            </a>
                        </div>
                    @endforeach
                        @foreach($kat3 as $k3)
                    <div class="col-lg-6 ">
                        <a href="{{route('tkategori',$k3->slug)}}">
                            <div class="icon-box icon-box2">
                                <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                <h4 class="title">{{$k3->kategori_adi}}</h4>

                            </div>
                        </a>
                    </div>
                        @endforeach
                        @foreach($kat4 as $k4)
                            <div class="col-lg-6 ">
                                <a href="{{route('tkategori',$k4->slug)}}">
                                    <div class="icon-box icon-box2">
                                        <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                        <h4 class="title">{{$k4->kategori_adi}}</h4>

                                    </div>
                                </a>
                            </div>
                        @endforeach

                        @foreach($kat5 as $k5)
                            <div class="col-lg-6 ">
                                <a href="{{route('tkategori',$k5->slug)}}">
                                    <div class="icon-box icon-box2">
                                        <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                        <h4 class="title">{{$k5->kategori_adi}}</h4>

                                    </div>
                                </a>
                            </div>
                        @endforeach

                        @foreach($kat6 as $k6)
                            <div class="col-lg-6 ">
                                <a href="{{route('tkategori',$k6->slug)}}">
                                    <div class="icon-box icon-box2">
                                        <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                        <h4 class="title">{{$k6->kategori_adi}}</h4>

                                    </div>
                                </a>
                            </div>
                        @endforeach


                </div>

            </div>
        </section><!-- Frequently Ends -->


    </main><!-- End #main -->

    <br><br>


@stop


@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
        // jQuery wait till the page is fullt loaded
        $(document).ready(function () {
            // keyup function looks at the keys typed on the search box
            $('#country').on('keyup',function() {
                // the text typed in the input field is assigned to a variable
                var query = $(this).val();
                // call to an ajax function
                $.ajax({
                    // assign a controller function to perform search action - route name is search
                    url:"{{ route('autocompleate') }}",
                    // since we are getting data methos is assigned as GET
                    type:"GET",
                    // data are sent the server
                    data:{'country':query},
                    // if search is succcessfully done, this callback function is called
                    success:function (data) {
                        // print the search results in the div called country_list(id)
                        $('#country_list').html(data);
                    }
                })
                // end of ajax call
            });

            // initiate a click function on each search result
            $(document).on('click', 'li', function(){
                // declare the value in the input field to a variable
                var value = $(this).text();


                // assign the value to the search box
                $('#country').val(value);
                // after click is done, search results segment is made empty
                $('#country_list').html("");



            });
        });
    </script>
@stop
