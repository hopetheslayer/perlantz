@extends('arka')

@section('content')

    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h2 style="text-align: center; margin-top: 15px;" class="text-center">Düzenlenecek Kullanıcı =  {{ $user->name }} {{$user->surname}}</h2>
            </header><!-- .widget-header -->

            <div class="widget-body">


                <form method="post" action="{{route('admin.user.guncelle',$user->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div style="margin-top: 10px;" class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-line">
                                @if($user->userDetay->imageb !=null)
                                    <img  class=" pull-right" src="/frontend/uploads/profile/{{$user->userDetay->imageb}}" style="height:250px; width: 250px;" >
                                @endif
                                <br>

                                <div class="pull-left">
                                    <label for="imageb">Profil Resmi</label>
                                    <br>
                                    <input type="file" id="imageb" name="imageb">
                                </div>
                            </div>
                        </div>

                        <div style="margin-top: 10px;" class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-line">
                                <strong>User name:</strong>
                                {!! Form::text('name',$user->name, array('placeholder' => 'name','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 10px;" class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-line">
                                <strong>User Surname:</strong>
                                {!! Form::text('surname',$user->surname, array('placeholder' => 'surname','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 10px;" class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-line">
                                <strong>Web site:</strong>
                                {!! Form::text('website',$user->userDetay->website, array('placeholder' => 'website','class' => 'form-control')) !!}
                            </div>
                        </div>





                        <div style="margin-top: 10px;" class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-line">
                                <strong>Adress Baslık:</strong>
                                {!! Form::text('adress_baslik',$user->userDetay->adress_baslik, array('placeholder' => 'Adress Baslık','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 10px;" class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-line">
                                <strong>adress 1:</strong>
                                {!! Form::text('adress',$user->userDetay->adress, array('placeholder' => 'adress','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 10px;" class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-line">
                                <strong>adress 2:</strong>
                                {!! Form::text('adress2',$user->userDetay->adress2, array('placeholder' => 'adress2','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 10px;" class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-line">
                                <strong>zipcode:</strong>
                                {!! Form::text('zipcode',$user->userDetay->zipcode, array('placeholder' => 'zipcode','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 10px;" class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-line">
                                <strong>Phone:</strong>
                                {!! Form::text('phone',$user->userDetay->phone, array('placeholder' => 'phone','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 10px;" class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-line">
                                <strong>Country:</strong>
                                {!! Form::text('country',$user->userDetay->country, array('placeholder' => 'country','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div style="margin-top: 10px;" class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-line">
                                <strong>State:</strong>
                                {!! Form::text('state',$user->userDetay->state, array('placeholder' => 'state','class' => 'form-control')) !!}
                            </div>
                        </div>



                    </div>

            </div>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>







        <div style="margin-top: 20px;" class="col-md-12">
            <div class="widget">
                <header class="widget-header text-center">
                    <a class="btn btn-info" href="{{ route('admin.user') }}"> Geri</a>
                    <input class="btn btn-primary" type="submit" value="Gönder">
                </header><!-- .widget-header -->

            </div><!-- .widget -->
        </div>
        </form>
    </div><!-- END column -->
@endsection

@section('js')
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

    <script src="//cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };


        CKEDITOR.replace('aciklama',options);

    </script>

    <script>
        $('.js-example-basic-multiple').select2({
            placeholder: 'Select an option'
        });
    </script>



@endsection
