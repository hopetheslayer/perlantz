@extends('arka')

@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="header">
                        <h2 style="text-align: center; margin-top: 15px;" class="text-center">Yeni Ürün ekle</h2>
                    </div>
                </div>

                <div class="body">
                    <!-- Nav tabs -->
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif

                <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="profile_with_icon_title">
                            <form method="post" action="{{route('admin.urun.kaydet')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Bulunduğu Kategori</strong>
                                            <select class="form-control js-example-basic-multiple" name="kategoriler[]" id="kategoriler" multiple>
                                                @foreach ($kategoriler as $bk)

                                                    <option value="{{ $bk->id }}">{{ $bk->kategori_adi }}</option>


                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-line">
                                            <strong>Product Name:</strong>
                                            {!! Form::text('urun_adi',null, array('placeholder' => 'Ürün Baslik','class' => 'form-control')) !!}
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-line">
                                            <strong>İndirimsiz Fiyati:</strong>
                                            {!! Form::text('fiyat_eur_indirim',null, array('placeholder' => 'Ürün Baslik','class' => 'form-control')) !!}
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-line">
                                            <strong>İndirimli Fiyati:</strong>
                                            {!! Form::text('fiyat_eur',null, array('placeholder' => 'Ürün Baslik','class' => 'form-control')) !!}
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-line">
                                            <strong>Quantity:</strong>
                                            {!! Form::text('qty',null, array('placeholder' => 'Ürün Adet','class' => 'form-control')) !!}
                                        </div>
                                    </div>

                                    <div style="margin-top: 15px;" class="col-xs-12 col-sm-12 col-md-12">
                                        <h5><b>Ürün Fotoğrafı Belirle</b></h5>

                                        {!! Form::file('urun_resmi', array('class' => 'form-control')) !!}
                                    </div>

                                </div>

                                <section style="margin-top: 25px;"  class="about-us section-padding pb-0">
                                    <div class="container-fluid">
                                        <div  class="row align-items-center">

                                            <div style="" class="col-lg-12">
                                                <div class="about-content text-center">
                                                    <h2 style="text-align: center; margin-top: 15px;" class="text-center">Ürün Alt Tablo Özellikleri</h2>
                                                    <div style="margin-top: 45px;" class="row">
                                                        <div class="table-responsive">
                                                            <table class="table ">
                                                                <tbody>
                                                                <tr>
                                                                    <th  class="table-yazi-baslik">
                                                                        <br>
                                                                        General
                                                                    </th>
                                                                    <td>
                                                                        <strong>Metal</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('main_metal_k',null, array('placeholder' => 'Main Metal','class' => 'form-control','style'=>'width:200px;')) !!}

                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Color</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('metal_color',null, array('placeholder' => ' Metal Color','class' => 'form-control','style'=>'width:200px;')) !!}

                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Dimensions</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('width_thickness',null, array('placeholder' => 'Dimensions','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Chain</strong>

                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('chain',null, array('placeholder' => 'Chain ','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Size length</strong>

                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('sizelen',null, array('placeholder' => 'Chain ','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>

                                                                    <th class="table-yazi-baslik"> <br>Dimensions</th>
                                                                    <td>
                                                                        <strong> 8k_weight</strong>

                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('eightk_weight',null, array('placeholder' => 'Average Weight','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong> 9k_weight</strong>

                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('ninek_weight',null, array('placeholder' => 'Average Weight','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong> 14k_weight</strong>

                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('forteenk_weight',null, array('placeholder' => 'Average Weight','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong> 18k_weight</strong>

                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('eighteenk_weight',null, array('placeholder' => 'Average Weight','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong> 950plt_weight</strong>

                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('ninefiveplt_weight',null, array('placeholder' => 'Average Weight','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong> 25k_weight</strong>

                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('twentyfivek_weight',null, array('placeholder' => 'Average Weight','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="table-yazi-baslik"> <br>Center Stone</th>
                                                                    <td>
                                                                        <strong>Stone</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('stone',null, array('placeholder' => 'Stone','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Certificate</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('certificate',null, array('placeholder' => 'Certificate','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Color </strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('color',null, array('placeholder' => 'Color / Clarity','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Clarity</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('clarity',null, array('placeholder' => 'Size','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Shape</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('shape',null, array('placeholder' => 'Carat','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>MM</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('mm',null, array('placeholder' => 'Carat','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <strong>Carat</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('total_crt',null, array('placeholder' => 'Carat','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>



                                                                </tr>

                                                                <tr>
                                                                    <th class="table-yazi-baslik"> <br>Accent Stone dia1</th>
                                                                    <td>
                                                                        <strong>Stone dia1</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('stone_dia1',null, array('placeholder' => 'Stone','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Cert dia1</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('cert_dia1',null, array('placeholder' => 'Carat','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Color dia1 </strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('color_dia1',null, array('placeholder' => 'Color','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Clarity dia1</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('clarity_dia1',null, array('placeholder' => 'Clarity','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Shape dia1</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('shape_dia1',null, array('placeholder' => 'Clarity','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Qty dia1</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('qty_dia1',null, array('placeholder' => 'Clarity','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>MM dia1</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('mm_dia1',null, array('placeholder' => 'Clarity','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Total Carat dia1</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('total_crt_dia1',null, array('placeholder' => 'Clarity','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="table-yazi-baslik"> <br>Accent Stone dia2</th>
                                                                    <td>
                                                                        <strong>Stone dia2</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('stone_dia2',null, array('placeholder' => 'Stone','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Certificate dia2 </strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('cert_dia2',null, array('placeholder' => 'Carat','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Color dia2 </strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('color_dia2',null, array('placeholder' => 'Color','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Clarity dia2</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('clarity_dia2',null, array('placeholder' => 'Clarity','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Shape dia2</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('shape_dia2',null, array('placeholder' => 'Clarity','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Qty dia2</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('qty_dia2',null, array('placeholder' => 'Clarity','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>mm dia2</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('mm_dia2',null, array('placeholder' => 'Clarity','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <strong>Total Carat dia2</strong>
                                                                        <div class="table-yazi-info1">
                                                                            {!! Form::text('total_crt_dia2',null, array('placeholder' => 'Clarity','class' => 'form-control','style'=>'width:200px;')) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>




                                <div style="margin-top: 25px;"  class="panel panel-default">
                                    <div  class="panel-heading" role="tab" id="heading-2">
                                        <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                            <h4 class="panel-title">Ürün Seo Detayları</h4>
                                            <i class="fa acc-switch"></i>
                                        </a>
                                    </div>
                                    <div id="collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-2">
                                        <div class="panel-body">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-line">
                                                    <strong>Seo Title:</strong>
                                                    {!! Form::text('seo_title',null, array('placeholder' => 'Seo title','class' => 'form-control')) !!}
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-line">
                                                    <strong>Seo Description:</strong>
                                                    {!! Form::text('seo_description',null, array('placeholder' => 'Seo description','class' => 'form-control')) !!}
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-line">
                                                    <strong>Seo Keyword:</strong>
                                                    {!! Form::text('seo_keywords',null, array('placeholder' => 'Seo keyword','class' => 'form-control')) !!}
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>








                                <div  class="col-md-12">
                                    <div class="widget">

                                        <header class="widget-header text-center">
                                            <a class="btn btn-info" href="{{ route('admin.urun') }}"> Geri</a>
                                            <input class="btn btn-primary" type="submit" value="Gönder">
                                        </header><!-- .widget-header -->

                                    </div><!-- .widget -->
                                </div>
                            </form>
                        </div><!-- END column -->
                        @endsection

                        @section('js')
                            <script defer src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>

                            <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
                            <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

                            <script defer src="//cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
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
