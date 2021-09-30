@extends('arka')

@section('content')
    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title">Control Sizing</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">
                <form action="#" class="form-horizontal">
                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Large</label>
                        <div class="col-sm-5">
                            <input class="form-control input-lg" type="text" placeholder=".input-lg">
                        </div>
                    </div><!-- .form-group -->

                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Default</label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                    </div><!-- .form-group -->

                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Samll</label>
                        <div class="col-sm-5">
                            <input class="form-control input-sm" type="text" placeholder=".input-sm">
                        </div>
                    </div><!-- .form-group -->

                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Column sizing</label>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" placeholder=".col-sm-4">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" placeholder=".col-sm-6">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder=".col-sm-9">
                                </div>
                            </div>
                        </div>
                    </div><!-- .form-group -->
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>
@endsection
