@extends('layouts.general')
@section('content')
    @include('partials.flash-overlay-modal')

    <section class="content-header">
        <h1>Kupon</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Kupon</h3>
                        <div class="box-tools">
                            <div class="input-group" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th class="col-1">#</th>
                                <th class="col-2">Kupon</th>
                                <th>Status</th>
                                <th>Expired</th>
                                <th>Usages</th>
                                <th>Action</th>
                            </tr>
                            @foreach($data as $y => $x)
                                <tr>
                                    <td>{{ ++$y }}</td>
                                    <td><a href="{{ route('announcement.edit', $x->coupon_id) }}">{{ $x->customerfacingcoupon }}</a></td>
                                    <td>
                                        @if(strtotime($x->expiredate) > strtotime(\Carbon\Carbon::now()) && strtotime($x->activedate) < strtotime(\Carbon\Carbon::now()))
                                            <label class="label label-success">Masih Aktif</label>
                                        @else
                                            <label class="label label-primary">Kadaluarsa</label>
                                        @endif
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::createFromTimeStamp(strtotime($x->expiredate))->diffForHumans() }}
                                    </td>
                                    <td>
                                        {{ $x->limit_usages }} / {{ $x->usages }}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('coupon.edit', $x->id_announcement) }}"> <i class="fa fa-edit"></i> Edit</a>
                                        <a class="btn btn-danger btn-delete" id="{{$x->coupon_id}}" > <i class="fa fa-trash"></i> Delete</a>

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination no-margin pull-right">
                            <li><a href="{{ $data->previousPageUrl() }}">«</a></li>
                            <li><a href="#">{{ $data->currentPage() . '/' . $data->lastPage() }}</a></li>
                            <li><a href="{{ $data->nextPageUrl() }}">»</a></li>
                        </ul>
                    </div>
                </div><!-- /.box -->

            </div>
        </div>
    </section>


@stop

@section('custom_foot')
    <script type="text/javascript">
        @if (session('success'))
            swal({
                text: "Berhasil dibuat",
                title: 'Success!',
                type: 'success',
                confirmButtonColor: '#3085d6'});
        @endif
    </script>
@stop