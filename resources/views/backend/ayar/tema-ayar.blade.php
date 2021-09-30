@extends('arka')

@section('content')

    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h3 class="text-center">Tema Genel Ayarlar</h3>
            </header><!-- .widget-header -->

            <div class="widget-body">


                    <form method="POST" class="form-horizontal" action="{{route('admintema.kaydet')}}" enctype="multipart/form-data">
                    <h2 style="margin-left: 15px;" >Header Ayarları</h2>
                        @csrf
                    <hr style="margin-top: 10px;" class="widget-separator">
                        @foreach($ayarlar as $a)


                            <div class="form-group row">
                                <label for="exampleTextInput1" class="col-sm-3 control-label">HEADER LOGO :</label>
                                <div class="col-md-9">
                                    <label id="projectinput8" class="file center-block">
                                        {!! Form::file('logo', array('class' => 'form-control')) !!}
                                        <span class="file-custom"></span>
                                    </label>
                                </div>

                            </div>
                            @if($a->logo !=null)
                                <div class="form-group row">
                                    <label class="col-md-3 label-control">Yüklenilen Görsel</label>
                                    <div class="col-md-9">


                                        <img  src="/frontend/uploads/theme/anasayfa/{{$a->logo}}" style="height: 100px; width: 150px; " >

                                    </div>

                                </div>
                            @endif

                            <div style="margin-top: 25px;" class="form-group">
                                <label for="exampleTextInput1" class="col-sm-3 control-label">Header Sağ Yazi :</label>
                                <div class="col-sm-9">
                                    {!! Form::text('sag_yazi', $a->sag_yazi, array('placeholder' => 'Header Sağ yazi Giriniz ','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>
                            <h2 style="margin-left: 15px;" >Footer Ayarları</h2>

                            <hr style="margin-top: 10px;" class="widget-separator">
                            <div style="margin-top: 25px;" class="form-group">
                                <label for="exampleTextInput1" class="col-sm-3 control-label">Yazi AYARLARI :</label>
                                <div class="col-sm-9">
                                    {!! Form::textarea('fyazi', $a->fyazi, array('placeholder' => 'Footer yazi Giriniz ','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>
                            <div style="margin-top: 25px;" class="form-group">
                                <label for="exampleTextInput1" class="col-sm-3 control-label">TELEFON AYARLARI :</label>
                                <div class="col-sm-9">
                                    {!! Form::text('telefon', $a->telefon, array('placeholder' => 'Telefon Numaranızı Giriniz','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>
                            <div style="margin-top: 25px;" class="form-group">
                                <label for="exampleTextInput1" class="col-sm-3 control-label">TELEFON AYARLARI :</label>
                                <div class="col-sm-9">
                                    {!! Form::text('telefon_2', $a->telefon_2, array('placeholder' => '2. Telefon yada Fax Numaranızı Giriniz','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>
                            <div style="margin-top: 25px;" class="form-group">
                                <label for="exampleTextInput1" class="col-sm-3 control-label">E-MAİL AYARLARI :</label>
                                <div class="col-sm-9">
                                    {!! Form::text('mail', $a->mail, array('placeholder' => 'Emailinizi Giriniz ','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>
                            <div style="margin-top: 25px;" class="form-group">
                                <label for="exampleTextInput1" class="col-sm-3 control-label">E-MAİL AYARLARI :</label>
                                <div class="col-sm-9">
                                    {!! Form::text('mail_2', $a->mail_2, array('placeholder' => '2. Emailinizi Giriniz ','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>

                            <h2 style="margin-left: 15px;" >Sosyal Medya Ayarları</h2>

                            <hr style="margin-top: 10px;" class="widget-separator">
                            <div style="margin-top: 25px;" class="form-group">
                                <label for="exampleTextInput1" class="col-sm-3 control-label">FACEBOOK AYARLARI :</label>
                                <div class="col-sm-9">
                                    {!! Form::text('facebook', $a->facebook, array('placeholder' => 'facebook sosyal medya alanı','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>
                            <div style="margin-top: 25px;" class="form-group">
                                <label for="exampleTextInput1" class="col-sm-3 control-label">TWİTTER AYARLARI :</label>
                                <div class="col-sm-9">
                                    {!! Form::text('twitter', $a->twitter, array('placeholder' => 'twitter sosyal medya alanı','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>
                            <div style="margin-top: 25px;" class="form-group">
                                <label for="exampleTextInput1" class="col-sm-3 control-label">YOUTUBE AYARLARI :</label>
                                <div class="col-sm-9">
                                    {!! Form::text('youtube', $a->youtube, array('placeholder' => 'youtube sosyal medya alanı','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>
                            <div style="margin-top: 25px;" class="form-group">
                                <label for="exampleTextInput1" class="col-sm-3 control-label">İNSTGRAM AYARLARI :</label>
                                <div class="col-sm-9">
                                    {!! Form::text('insta', $a->link, array('placeholder' =>'linkedin sosyal medya alanı','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>
                            <div style="margin-top: 25px;" class="form-group">
                                <label for="exampleTextInput1" class="col-sm-3 control-label">LİNKEDİN AYARLARI :</label>
                                <div class="col-sm-9">
                                    {!! Form::text('link', $a->link, array('placeholder' =>'linkedin sosyal medya alanı','class' => 'form-control border-primary')) !!}
                                </div>
                            </div>
                @endforeach
                        <div class="form-actions text-center">
                            {!! Form::submit(trans('Gönder'), ['class' => 'btn btn-primary gradient-mint ']) !!}
                        </div>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>

@endsection
