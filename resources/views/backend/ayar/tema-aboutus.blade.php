@extends('arka')

@section('content')

    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h3 class="text-center">Tema About Us Ayarlar</h3>
            </header><!-- .widget-header -->

            <div class="widget-body">


                <form method="POST" class="form-horizontal" action="{{route('admin.aboutus.kaydet')}}" enctype="multipart/form-data">
                    <h2 style="margin-left: 15px;" >Header Ayarları</h2>
                    @csrf
                    <hr style="margin-top: 10px;" class="widget-separator">
                    @foreach($aboutus as $a)

                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">Baslik :</label>
                            <div class="col-sm-9">
                                {!! Form::text('baslik', $a->baslik, array('placeholder' => 'Adresinizi Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>
                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">Baslik yazi :</label>
                            <div class="col-sm-9">
                                {!! Form::text('baslik_yazi', $a->baslik_yazi, array('placeholder' => 'Adresinizi Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">görsel:</label>
                            <div class="col-md-9">
                                <label id="projectinput8" class="file center-block">
                                    {!! Form::file('image', array('class' => 'form-control')) !!}
                                    <span class="file-custom"></span>
                                </label>
                            </div>
                        </div>
                        @if($a->image !=null)
                            <div class="form-group row">
                                <label class="col-md-3 label-control">Yüklenilen Görsel</label>
                                <div class="col-md-9">


                                    <img  src="/frontend/uploads/theme/aboutus/{{$a->image}}" style="height: 100px; width: 150px; " >

                                </div>

                            </div>
                        @endif
                        <hr style="margin-top: 10px;" class="widget-separator">
                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">icon 1 :</label>
                            <div class="col-sm-9">
                                {!! Form::text('fp', $a->fp, array('placeholder' => 'İcon 1  Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">icon 1 baslik:</label>
                            <div class="col-sm-9">
                                {!! Form::text('fp_baslik', $a->fp_baslik, array('placeholder' => 'İcon 1 Baslik Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">icon 1 yazi :</label>
                            <div class="col-sm-9">
                                {!! Form::text('fp_yazi', $a->fp_yazi, array('placeholder' => 'icon 1 yazi Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">icon 2 :</label>
                            <div class="col-sm-9">
                                {!! Form::text('fd', $a->fd, array('placeholder' => 'İcon 2  Giriniz','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">icon 2 baslik:</label>
                            <div class="col-sm-9">
                                {!! Form::text('fd_baslik', $a->fd_baslik, array('placeholder' => 'İcon 2 baslik  Giriniz','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">icon 2 yazi :</label>
                            <div class="col-sm-9">
                                {!! Form::text('fd_yazi', $a->fd_yazi, array('placeholder' => 'icon 2 yazi Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">icon 3 :</label>
                            <div class="col-sm-9">
                                {!! Form::text('dl', $a->dl, array('placeholder' => 'icon 3 Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">icon 3 baslik:</label>
                            <div class="col-sm-9">
                                {!! Form::text('dl_baslik', $a->dl_baslik, array('placeholder' => 'icon 3 baslik Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">icon 3 yazi :</label>
                            <div class="col-sm-9">
                                {!! Form::text('dl_yazi', $a->dl_yazi, array('placeholder' => 'icon 3 yazi Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>
                        <hr style="margin-top: 10px;" class="widget-separator">
                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">sayi 1 :</label>
                            <div class="col-sm-9">
                                {!! Form::text('sayi1', $a->sayi1, array('placeholder' => 'sayi 1  Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>
                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">sayi 1 yazi :</label>
                            <div class="col-sm-9">
                                {!! Form::text('sayi1_yazi', $a->sayi1_yazi, array('placeholder' => 'sayi 1 yazi Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">sayi 2 :</label>
                            <div class="col-sm-9">
                                {!! Form::text('sayi2', $a->sayi2, array('placeholder' => 'sayi 2 Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>
                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">sayi 2 yazi :</label>
                            <div class="col-sm-9">
                                {!! Form::text('sayi2_yazi', $a->sayi2_yazi, array('placeholder' => 'sayi 2 yazi Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">sayi 3 :</label>
                            <div class="col-sm-9">
                                {!! Form::text('sayi3', $a->sayi3, array('placeholder' => 'sayi 3 Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>
                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">sayi 3 yazi :</label>
                            <div class="col-sm-9">
                                {!! Form::text('sayi3_yazi', $a->sayi3_yazi, array('placeholder' => 'sayi 3 yazi Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">sayi 4 :</label>
                            <div class="col-sm-9">
                                {!! Form::text('sayi4', $a->sayi4, array('placeholder' => 'sayi 4 Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>
                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">sayi 4 yazi :</label>
                            <div class="col-sm-9">
                                {!! Form::text('sayi4_yazi', $a->sayi4_yazi, array('placeholder' => 'sayi 4 yazi Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">görsel alt:</label>
                            <div class="col-md-9">
                                <label id="projectinput8" class="file center-block">
                                    {!! Form::file('imagex', array('class' => 'form-control')) !!}
                                    <span class="file-custom"></span>
                                </label>
                            </div>
                        </div>
                        @if($a->imagex !=null)
                            <div class="form-group row">
                                <label class="col-md-3 label-control">Yüklenilen Görsel</label>
                                <div class="col-md-9">


                                    <img  src="/frontend/uploads/theme/aboutus/{{$a->imagex}}" style="height: 100px; width: 150px; " >

                                </div>

                            </div>
                        @endif


                    @endforeach
                    <div class="form-actions text-center">
                        {!! Form::submit(trans('Gönder'), ['class' => 'btn btn-primary gradient-mint ']) !!}
                    </div>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>

@endsection
