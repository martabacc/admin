@extends('layouts.general')
@section('custom-head')
        Pengumuman
    @endsection
@section('content')
    @include('partials.flash-overlay-modal')

    <section class="content-header">
        <h1>Tambah Pengumuman</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                @if($errors->all())
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban">

                        </i> Error </h4>
                    <ul>
                        @foreach ($errors->all() as $message)

                            <li>{{ $message }}</li>
                            @endforeach
                    </ul>
                </div>
                @endif

                <form method="post" action="{{ route('announcement.store') }}">
                <div class="box">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <h3>Judul Pengumuman</h3>
                                <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <h3>Isi Pengumuman</h3>
                            <div class="form-group">
                            <textarea class="textarea" placeholder="Place some text here" name="html_code" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            <br>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <h3>Waktu Pengumuman</h3>
                                <div class="col-md-6">
                                    <!-- Date range -->
                                    <div class="form-group">
                                        <label>Awal Pengumuman:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="reservation" name="start_time">
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                </div>
                            <div class="col-md-6">
                                <!-- Date range -->
                                <div class="form-group">
                                    <label>Akhir Pengumuman:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="reservation2" name="end_time">
                                    </div><!-- /.input group -->
                                </div><!-- /.form group -->
                            </div>
                        </div>

                            <hr>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div><!-- /.col-->
        </div><!-- ./row -->
    </section><!-- /.content -->
    </div><!-- /.content-wrapper -->



@stop
@section('custom_foot')

{{--    <script src="{{ url('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>--}}

    <script>

        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
//            CKEDITOR.replace('editor1');
            //bootstrap WYSIHTML5 - text editor
            $(".textarea").wysihtml5();
        });

        $('#reservation').daterangepicker({
//            timePicker: true,
            singleDatePicker: true,
        });
        $('#reservation2').daterangepicker({
//            timePicker: true,
            singleDatePicker: true,
        });

    </script>
@stop