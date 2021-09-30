@extends('layouts.anatema-app')


@section('css')



@stop

@section('content')



    <div style="margin-top: 25px; margin-bottom: 25px;" class="page-content">
        <div class="dashboard">
            <div class="container">
                <div class="myaccount-content">
                    <h5>Create Support Ticket</h5>



                        <form method="post" action="{{route('support-tickets.store')}}" enctype="multipart/form-data">

                            @csrf
                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-input-item">
                                        <label class="required">Title </label>
                                        {!! Form::text('title',null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-input-item">
                                        <label class="required">Select Category </label>
                                        <select id="category" type="category" class="form-control" name="category">
                                            <option value=""></option>
                                            @foreach ($categories as $category)

                                                <option value="{{ $category->id }}">{{ $category->name }}</option>


                                            @endforeach



                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single-input-item">
                                        <label class="required">Pick Priority </label>
                                        <select id="priority" type="" class="form-control" name="priority">
                                            <option value="">Select Your Priority</option>
                                            <option value="Low">Low</option>
                                            <option value="Medium">Medium</option>
                                            <option value="High">High</option>
                                            <option value="VeryHigh">Very High</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-input-item">
                                        <label class="required">Support Ticket  </label>
                                        {!! Form::textarea('message', null, array('class' => 'ckeditor','style'=>'height:100px')) !!}
                                    </div>
                                </div>



                            </div>


                            <div style="margin-top: 10px;margin-bottom: 20px;">
                                <button type="submit" class="btn btn-sqr">
                                    <span>SAVE CHANGES</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>
                                <a href="{{route('support-tickets.index')}}" style="color:#fff3cd;" class="btn btn-sqr">Back</a>
                            </div>

                        </form>

                    </div>
                </div>
        </div>


    </div>




@endsection



@section('js')



    <script src="//cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };


        CKEDITOR.replace('aciklama',options);

    </script>
@stop

