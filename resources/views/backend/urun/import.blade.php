@extends('arka')

@section('content')



    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">





                <div class="body">

                    <div class="container">
                        <div class="card bg-light mt-3 text-center">
                            <h2>-Excel Dosyası Yüklenirken dikkat edilmesi gereken kurallar-</h2>
                            <h5 style="margin-top: 15px;"><span style="color: red;">Sistem sadece yeni ürün eklerken kullanılmalıdır.</span></h5>

                            <div class="card-body">
                                <form action="{{ route('urun.import') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file" class="form-control">
                                    <br>
                                    <button class="btn btn-success">Import User Data</button>
                                    <a class="btn btn-warning" href="{{ route('urun.export') }}">Export User Data</a>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>




@endsection


