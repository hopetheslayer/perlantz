@extends('arka')

@section('content')
    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Oluşturulan Blog Yazıları</h4>
            </header>

            <a style="margin-left: 10px;" href="{{route('admin.urunkategori.yeni')}}" class="btn mw-md btn-purple">Kategori Oluştur</a>
            <hr class="widget-separator">
            <div class="widget-body">
                <div class="table-responsive">
                    <table class="table  text-center">
                        <thead>
                        <tr>
                            <th></th>

                            <th class="text-center">Kategori Slug</th>
                            <th class="text-center">Kategori Title</th>
                            <th class="text-center">Oluşturulma Tarihi</th>
                            <th class="text-center">Guncelleme Tarihi</th>
                            <th class="text-center">Ayarlar</th>
                        </tr>
                        </thead>
                        @foreach($kats as $kat)
                            <tbody>
                            <tr>
                                <td>{{$kat->id}}</td>
                                <td>{{$kat->slug}}</td>
                                <td>{{$kat->kategori_adi}}</td>
                                <td>{{$kat->created_at}}</td>
                                <td>{{$kat->updated_at}}</td>
                                <td >
                                    <a href="{{route('admin.urunkategori.duzenle',$kat->id)}}" >
                                        <button class=" btn-xs btn-primary">Düzenle</button>
                                    </a>

                                    <div class="col">
                                        <a class="btn-xs btn-danger " href="{{ route('admin.urunkategori.sil',$kat->id) }}" data-toggle="tooltip" data-placement="top" title="sil" onclick="return confirm('Veriyi Silerseniz geri döndüremezsiniz. Silmek istiyor musunuz ? ')">Sil</a><br><br>
                                    </div>
                                </td>

                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div><!-- .widget -->
    </div>
@endsection
