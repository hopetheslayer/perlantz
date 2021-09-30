@extends('arka')

@section('content')
    <div class="col-md-12">
        <div class="widget">

            <hr class="widget-separator">
            <div class="widget-body">

                <div class="col-md-4 pull-left">

                </div>

                <div class="row clearfix">
                    <!-- Task Info -->

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <div class="card">
                            <div class="header">
                                <h2 class="text-center">Kullanıcı Yönetim   <span  style="font-size: 95%" class="badge bg-blue"></span></h2>

                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover dashboard-task-infos ">
                                        <thead>
                                        <tr>
                                            <th>Siparis id</th>
                                            <th>Billing Name </th>
                                            <th>Billing Email</th>
                                            <th>Price</th>
                                            <th>O.Tarihi</th>
                                            <th>G.Tarihi</th>
                                            <th>Ayarlar</th>
                                        </tr>
                                        </thead>

                                        @foreach ($siparis as $li)
                                            <tr>


                                                <td class="table-primary">{{ $li->id}}</td>
                                                <td class="table-warning">{{ $li->billing_name}} {{ $li->billing_lastname}}</td>
                                                <td class="table-warning">{{ $li->billing_email}}</td>
                                                <td class="table-light">€ {{$li->siparis_tutari/100,3}}</td>
                                                <td class="table-warning">{{ $li->created_at}}</td>
                                                <td class="table-dark ">{{ $li->updated_at}}</td>
                                                <td>
                                                    <div class="col ">
                                                        <a class="btn-xs btn-warning " href="{{ route('admin.siparis.look',$li->id) }}">İncele</a><br><br>
                                                    </div>
                                                    <div class="col ">
                                                        <a class="btn-xs btn-warning " href="{{ route('admin.siparis.duzenle',$li->id) }}">Düzenle</a><br><br>
                                                    </div>
                                                    <div class="col">
                                                        <a class="btn-xs btn-danger " href="{{ route('admin.siparis.sil',$li->id) }}" data-toggle="tooltip" data-placement="top" title="sil" onclick="return confirm('Veriyi Silerseniz geri döndüremezsiniz. Silmek istiyor musunuz ? ')">Sil</a><br><br>
                                                    </div>




                                                </td>
                                            </tr>

                                        @endforeach

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- #END# Task Info -->
                </div>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>
@endsection
