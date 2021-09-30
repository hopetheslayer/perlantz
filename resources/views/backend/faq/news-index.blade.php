@extends('arka')

@section('content')
    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Oluşturulan F.A.Q  Yazıları</h4>
            </header>

            <a style="margin-left: 10px;" href="{{route('admin.faq.yeni')}}" class="btn mw-md btn-purple">Yazı Oluştur</a>
            <hr class="widget-separator">
            <div class="widget-body">
                <div class="table-responsive">
                    <table class="table  text-center">
                        <thead>
                        <tr>
                            <th></th>

                            <th class="text-center">Blog Başlık</th>
                            <th class="text-center">kapak fotoğrafı</th>
                            <th class="text-center">Öne cıkan görsel fotoğrafı</th>
                            <th class="text-center">Yayın Durumu</th>
                            <th class="text-center">Ayarlar</th>
                        </tr>
                        </thead>
                        @foreach($treatments as $treatx)
                            <tbody>
                            <tr>
                                <td>{{$treatx->id}}</td>
                                <td>{{$treatx->post_baslik}}</td>

                                <td>
                                    <img class="tumbnail" style="height: 50px; width: 50px;" src="/frontend/uploads/treatment/kapak/{{$treatx->kimage}}"></td>
                                <td>
                                    <img class="tumbnail" style="height: 50px; width: 50px;" src="/frontend/uploads/treatment/ongorsel/{{$treatx->gimage}}">
                                </td>
                                <td>
                                    @if($treatx->yayın == 1)
                                        <span class="btn btn-success">yayında</span>
                                    @else
                                        <span class="btn btn-warning">taslak</span>
                                    @endif

                                </td>

                                <td >
                                    <a href="{{route('admin.faq.duzenle',$treatx->id)}}" >
                                        <button class=" btn-xs btn-primary">Düzenle</button>
                                    </a>

                                    <div class="col">
                                        <a class="btn-xs btn-danger " href="{{ route('admin.faq.sil',$treatx->id) }}" data-toggle="tooltip" data-placement="top" title="sil" onclick="return confirm('Veriyi Silerseniz geri döndüremezsiniz. Silmek istiyor musunuz ? ')">Sil</a><br><br>
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
