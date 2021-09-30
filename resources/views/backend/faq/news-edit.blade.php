@extends('arka')

@section('content')
    <div class="col-md-9">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">F.A.Q Yazısı Oluştur</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">

                <form method="post" action="{{route('admin.blog.kaydet',$blog->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div style="margin-left: 10px;" class="form-group">

                        {!! Form::text('yazibaslik',$blog->post_baslik, ['class' => 'form-control ', 'style'=> 'width:450px;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '']) !!}

                    </div>

                    <div class="col-12">
                        {!! Form::textarea('yazi', $blog->yazi, array('class' => 'ckeditor','style'=>'height:100px')) !!}
                    </div>

                    <div style="margin-top: 25px;" class="col-6">
                        <h5><b>Kapak Fotoğrafı Belirle</b></h5>

                        @if($blog->kimage !=null)
                            <img class="tumbnail" src="/uploads/blog/{{$blog->kimage}}" style="height: 350px; width: 100%; margin-bottom: 25px;" >
                        @endif

                        {!! Form::file('kimage', array('class' => 'form-control')) !!}
                    </div>

            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>

    <div class="col-md-3">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Öne Çıkan Görsel Belirle</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">

                @if($blog->gimage !=null)
                    <img class="tumbnail" src="/uploads/blog/{{$blog->gimage}}" style="height: 100px; width: 100%; margin-bottom: 25px;" >
                @endif

                {!! Form::file('gimage', array('class' => 'form-control')) !!}
            </div><!-- .widget-body -->


        </div><!-- .widget -->
    </div>
    <div class="col-md-3">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Yazı Özellikleri</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">

                <div class="form-group">

                    {!! Form::text('blog-aciklama',$blog->blog_aciklama, ['class' => 'form-control date',  'placeholder' => 'Blog Açıklama']) !!}
                </div>
                <div class="form-group">

                    {!! Form::text('blog-keyword',$blog->blog_keyword, ['class' => 'form-control date',  'placeholder' => 'Anahtar Kelimeleri giriniz']) !!}
                </div>



            </div><!-- .widget-body -->


        </div><!-- .widget -->
    </div>

    <div class="col-md-3">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Yazı Kategori</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">

                <div class="form-group">

                    <select id="blogkategori" type="blogkategori" class="form-control" name="blogkategori">
                        <option value="">--Kategori Seçiniz--</option>
                        @foreach ($blogkategori as $bk)




                            <option value="{{$bk->id}}" {{collect(old('blogkategori',$blog_kategoriler))
                                  ->contains($bk->id)? 'selected':''}}>{{$bk->kategori_adi}}</option>

                        @endforeach



                    </select>
                </div>




            </div><!-- .widget-body -->


        </div><!-- .widget -->
    </div>

    <div class="col-md-3">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Yayımlanma Ayarları</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">

                <div class="form-group">

                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput5">Yayında mı ? :</label>
                        <div class="col-md-6">
                            <label>
                                @if($blog->yayın == 1)
                                    <input type="checkbox" name="yayın" value="1" {{$blog->yayın ? 'checked' : ''}}> evet
                                @else
                                    <input type="checkbox" name="yayın" value="0" {{$blog->yayın ? 'checked' : ''}}> hayır
                                @endif

                            </label>
                        </div>
                    </div>
                </div>




            </div><!-- .widget-body -->


        </div><!-- .widget -->
    </div>

    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header text-center">
                <a href="{{route('admin.blog.index')}}" class="btn btn-danger">Geri Dön</a>
                {!! Form::submit(trans('Gönder'), ['class' => 'btn btn-success gradient-mint ']) !!}
            </header><!-- .widget-header -->
            {!! Form::close() !!}
        </div><!-- .widget -->
    </div>

@endsection



@section('js')
    <!-- Include Editor style. -->
    <link href="https://cdn1.codox.io/lib/css/wave.client.css" rel="stylesheet">


    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <!-- Include Editor JS files. -->
    <script src="https://app.codox.io/plugins/wave.client.js?apiKey=05725474-fa06-41b4-958e-ad6df1f5b119&app=froala" type="text/javascript"></script>


    <!-- Initialize the editor. -->
    <script>

        new FroalaEditor('#textarea', {
            events: {
                //setting up on initialization event
                'initialized': function() {
                    //Adding Wave configuration
                    const editor = this;
                    var config = {
                        "app"      : "froala",
                        "docId"    : "mydoc",
                        "user"     : {
                            "name" : "Joe Smith",
                        },
                        "editor"   : editor,
                        "apiKey"   : "d5bb1f48-356b-4032-8d0c-ba1a79396f79", //replace this
                    };

                    codox.init(config);
                }
            }
    </script>
@endsection
