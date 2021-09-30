@extends('arka')

@section('content')
    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">

                <h4 class="widget-title text-center">Gödnerilme Tarihi = {{$contact->created_at}}</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">
                <form action="#" class="form-horizontal">
                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Gönderen Kisi Ad</label>
                        <div class="col-sm-5">
                            {!! Form::text('yazibaslik',$contact->firstname, ['class' => 'form-control ', 'style'=> 'width:100%;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '','disabled']) !!}
                        </div>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Gönderen Kisi Soyad</label>
                        <div class="col-sm-5">
                            {!! Form::text('yazibaslik',$contact->lastname, ['class' => 'form-control ', 'style'=> 'width:100%;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '','disabled']) !!}
                        </div>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Gönderen Kisi Email</label>
                        <div class="col-sm-5">
                            {!! Form::text('yazibaslik',$contact->email, ['class' => 'form-control ', 'style'=> 'width:100%;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '','disabled']) !!}
                        </div>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Gönderen Kisi Phone</label>
                        <div class="col-sm-5">
                            {!! Form::text('yazibaslik',$contact->phone, ['class' => 'form-control ', 'style'=> 'width:100%;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '','disabled']) !!}
                        </div>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Gönderen Kisi Company</label>
                        <div class="col-sm-5">
                            {!! Form::text('yazibaslik',$contact->company, ['class' => 'form-control ', 'style'=> 'width:100%;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '','disabled']) !!}
                        </div>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Gönderen Kisi Ünvan</label>
                        <div class="col-sm-5">
                            {!! Form::text('yazibaslik',$contact->jobtitle, ['class' => 'form-control ', 'style'=> 'width:100%;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '','disabled']) !!}
                        </div>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Gönderen Kisi Ülke</label>
                        <div class="col-sm-5">
                            {!! Form::text('yazibaslik',$contact->country, ['class' => 'form-control ', 'style'=> 'width:100%;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '','disabled']) !!}
                        </div>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Gönderen Kisi İlçe</label>
                        <div class="col-sm-5">
                            {!! Form::text('yazibaslik',$contact->states, ['class' => 'form-control ', 'style'=> 'width:100%;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '','disabled']) !!}
                        </div>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Gönderen Kisi Adres Bilgileri</label>
                        <div class="col-sm-5">
                            {!! Form::textarea('yazibaslik',$contact->address, ['class' => 'form-control ', 'style'=> 'width:100%;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '','disabled']) !!}
                        </div>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Gönderen Kisi Soyad</label>
                        <div class="col-sm-5">
                            {!! Form::textarea('yazibaslik',$contact->other, ['class' => 'form-control ', 'style'=> 'width:100%;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '','disabled']) !!}
                        </div>
                    </div><!-- .form-group -->

                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>
@endsection

