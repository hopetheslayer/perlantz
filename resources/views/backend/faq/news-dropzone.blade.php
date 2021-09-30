<!-- imageupload.blade.php -->
<!DOCTYPE html>
<html>
<head>

    <meta name="_token" content="{{csrf_token()}}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" rel="stylesheet">
</head>
<body>
<div class="container">



    <form method="post" action="{{route('admin.blog.d',$blog->id)}}" enctype="multipart/form-data"
          class="dropzone" id="dropzone">
        <input type="hidden" name="inputx" value="{{$blog->id}}">
        @csrf
    </form>

    <style>

        .item{
            left: 0;
            top: 0;
            position: relative;
            overflow: hidden;
            margin-top:25px;

        }
        .item img{
            -webkit-transition: 0.6s ease;
            transition: 0.6s ease;

        }
        .item img:hover{
            -webkit-transform: scale(1.2);
            transform: scale(1.2);

        }
        .img-thumbnail{
            border:2px;
            border-radius:2px;
        }
    </style>

    <div style="margin-top: 25px;" class="row">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="col-md-12 text-center">
                    <div style="display: inline;" class="panel-body">
                        <h4 class="form-section"><i class="ft-mail"></i>Uploaded Files</h4>



                            <div class="container">

                                <div class="row">
                                    @forelse($photos as $photo)

                                    <div class="col-md-4">
                                        <div class="item">
                                            <img style="height: 150px; width: 255px; margin: 15px;" src="/frontend/uploads/blog/ekfoto/{{ $photo->imagex }}" class="img-thumbnail"></div>
                                        <a  style="display: inline;"   class="btn  btn-danger " href="{{ route('admin.dosya.sil',$photo->id) }}" data-toggle="tooltip" data-placement="top" title="delete" onclick="return confirm('Veriyi Silerseniz geri döndüremezsiniz. Silmek istiyor musunuz ? ')">Delete</a><br><br>

                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>



                        <a href="{{route('admin.blog.index')}}" class="btn btn-info">Geri Dön</a>



                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>










</body>
<script type="text/javascript">
    Dropzone.options.dropzone =
        {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            success: function(file, response)
            {
                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };
</script>
</html>
