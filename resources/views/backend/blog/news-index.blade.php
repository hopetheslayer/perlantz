@extends('arka')

@section('content')
    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Oluşturulan Blog Yazıları</h4>
            </header>

            <a style="margin-left: 10px;" href="{{route('admin.blog.yeni')}}" class="btn mw-md btn-purple">Yazı Oluştur</a>
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
                        @foreach($blogs as $blog)
                            <tbody>
                            <tr>
                                <td>{{$blog->id}}</td>
                                <td>{{$blog->post_baslik}}</td>

                                <td>
                                    <img class="tumbnail" style="height: 50px; width: 50px;" src="/frontend/uploads/blog/kapak/{{$blog->kimage}}"></td>
                                <td>
                                    <img class="tumbnail" style="height: 50px; width: 50px;" src="/frontend/uploads/blog/ongorsel/{{$blog->gimage}}">
                                </td>
                                <td>
                                    @if($blog->yayın == 1)
                                        <span class="btn btn-success">yayında</span>
                                    @else
                                        <span class="btn btn-warning">taslak</span>
                                    @endif

                                </td>

                                <td >
                                    <a href="{{route('admin.blog.duzenle',$blog->id)}}" >
                                        <button class=" btn-xs btn-primary">Düzenle</button>
                                    </a>

                                    <a href="{{route('admin.blog.dosyaekle',$blog->id)}}" >
                                        <button class=" btn-xs btn-warning">Foto Ekle</button>
                                    </a>

                                    <div class="col">
                                        <a class="btn-xs btn-danger " href="{{ route('admin.blog.sil',$blog->id) }}" data-toggle="tooltip" data-placement="top" title="sil" onclick="return confirm('Veriyi Silerseniz geri döndüremezsiniz. Silmek istiyor musunuz ? ')">Sil</a><br><br>
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
