@extends('arka')

@section('content')
    <section class="app-content">
        <!-- search results -->
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row m-b-lg">

                    <div class="col-md-12">
                        @if(count($urunler)==0)
                            <div class="col-md-12 text-center">
                                Bir ürün bulunamadı
                            </div>
                        @endif
                        @foreach($urunler as $urun)
                                <div class="search-result">
                                    <h2><a href="{{route('admin.urun.duzenle',$urun->id)}}" class="_fz_md text-primary">{{$urun->id}}</a></h2>
                                    <img  src="/frontend/uploads/urun/{{$urun->urun_resmi}}" style="height:50px; width: 50px;" >
                                    <h4><a href="{{route('admin.urun.duzenle',$urun->id)}}" class="_fz_md text-primary">{{$urun->urun_adi}}</a></h4>
                                    <p><a href="{{route('admin.urun.duzenle',$urun->id)}}" class="_fz_sm text-success">{{$urun->slug}}</a></p>
                                    <p><a href="{{route('admin.urun.duzenle',$urun->id)}}" class="_fz_sm text-success">{{$urun->perlantz_sku}}</a></p>
                                    <a href="{{route('admin.urun.dosyaekle',$urun->id)}}" >

                                        <button class=" btn-xs btn-warning">Foto Ekle</button>

                                    </a>
                                    <p>{{$urun->overview_yazi3}}</p>
                                </div>

                        @endforeach


                    </div>
                    <div class="col-md-12 text-center">
                                <a class="btn btn-info" href="{{ route('admin.urun') }}"> Geri</a>
                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection
