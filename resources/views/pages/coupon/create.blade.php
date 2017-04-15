@extends('layouts.general')
@section('custom-head')
    Pengumuman
@endsection
@section('content')
    @include('partials.flash-overlay-modal')

    <section class="content-header">
        <h1>Tambah Kupon</h1>
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

                <form method="post" action="{{ route('coupon.store') }}">
                    <div class="box">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h3>Teks Kupon</h3>
                                    <input type="text" name="customerfacingcoupon" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <h3>Waktu Penggunaan</h3>
                                <div class="col-md-6">
                                    <!-- Date range -->
                                    <div class="form-group">
                                        <label>Batas Awal:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="reservation" name="activedate">
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Date range -->
                                    <div class="form-group">
                                        <label>Batas Akhir:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="reservation2" name="expiredate">
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                </div>
                            </div>

                            <div class="col-md-12">
                                <h3>Teks Ketentuan</h3>
                                <div class="form-group">
                                    <textarea class="textarea" placeholder="Place some text here" name="terms" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    <br>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <h3>Batas Penggunaan</h3>
                                    <input type="number" value="1" name="usages" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="form-group">
                                    <h3>Free Shipping</h3>
                                    <label>
                                        <input type="checkbox" class="minimal" name="free_shipping">
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <h3>Pilih user yang bisa menggunakan kupon ini</h3>
                                    <select class="form-control select2" style="width: 100%;" name="id_user">
                                        @foreach($user as $u)
                                                <option value="{{ $u->id }}">{{ $u->name }}</option>
                                            @endforeach
                                    </select>
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

    <script>

        $(function () {
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

        $('.select2').select2();

    </script>
@stop