@extends('arka')

@section('content')
    <div class="col-md-9">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Blog Yazısı Oluştur</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">

                <form method="post" action="{{route('admin.blog.guncelle',$blog->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div style="margin-left: 10px;" class="form-group col-md-6">
                            <label>Yazı Basliği Giriniz</label>
                            {!! Form::text('post_baslik',$blog->post_baslik, ['class' => 'form-control ', 'style'=> 'width:450px;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '']) !!}

                        </div>

                        <div style="margin-left: 10px;" class="form-group col-6">
                            <label>Ön Yazi Giriniz</label>
                            {!! Form::text('onyazi',$blog->onyazi, ['class' => 'form-control ', 'style'=> 'width:450px;' ,'placeholder' => 'Ön Yazı Giriniz', 'required' => '']) !!}

                        </div>
                    </div>

                    <div class="col-12">
                        {!! Form::textarea('yazi', $blog->yazi, array('class' => 'ckeditor','style'=>'height:100px')) !!}
                    </div>

                    <div style="margin-top: 25px;" class="col-6">
                        <h5><b>Kapak Fotoğrafı Belirle</b></h5>

                        @if($blog->kimage !=null)
                            <img class="tumbnail text-center" src="/frontend/uploads/blog/kapak/{{$blog->kimage}}" style="height: 350px; width: 500px; margin-bottom: 25px;" >
                        @endif

                        {!! Form::file('kimage', array('class' => 'form-control')) !!}
                    </div>

                    <div style="margin-top: 25px;" class="col-6">
                        <h5><b>DROPZONE</b></h5>

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
                    <img class="tumbnail" src="/frontend/uploads/blog/ongorsel/{{$blog->gimage}}" style="height: 100px; width: 100%; margin-bottom: 25px;" >
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

                    {!! Form::text('blog_aciklama',$blog->blog_aciklama, ['class' => 'form-control date',  'placeholder' => 'Blog Açıklama']) !!}
                </div>
                <div class="form-group">

                    {!! Form::text('blog_keyword',$blog->blog_keyword, ['class' => 'form-control date',  'placeholder' => 'Anahtar Kelimeleri giriniz']) !!}
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
                    <div class="form-group">
                        <label class="col-md-6 label-control" for="userinput5">Oluşturulma zamanı :</label>
                        {!! Form::date('created_at',$blog->created_at , ['class' => 'form-control', 'required' => true]) !!}

                        <label class="col-md-6 label-control" for="userinput5">Guncellenme zamanı :</label>
                        {!! Form::date('updated_at',$blog->updated_at , ['class' => 'form-control', 'required' => true]) !!}
                    </div>
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
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />

    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>

    <!-- Initialize the editor. -->
    <script>
        new FroalaEditor('textarea');
    </script>
@endsection



