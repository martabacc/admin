@extends('layouts.general')
@section('content')
    @include('partials.flash-overlay-modal')

    <section class="content-header">
        <h1>Pengumuman</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check">

                            </i> Sukses </h4>
                        <ul>
                            {{ session('success') }}
                        </ul>
                    </div>
                @endif
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Pengumuman</h3>
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
                                <th class="col-2">Judul</th>
                                <th>Status</th>
                                <th>End Date</th>
                                <th>Action</th>
                            </tr>
                            @foreach($data as $y => $x)
                            <tr>
                                <td>{{ ++$y }}</td>
                                <td><a href="{{ route('announcement.show', $x->id_announcement) }}">{{ $x->name }}</a></td>
                                <td>
                                    @if(strtotime($x->end_time) > strtotime(\Carbon\Carbon::now()) && strtotime($x->start_time) < strtotime(\Carbon\Carbon::now()))
                                        <label class="label label-success">Masih Aktif</label>
                                    @else
                                        <label class="label label-primary">Kadaluarsa</label>
                                    @endif
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::createFromTimeStamp(strtotime($x->end_time))->diffForHumans() }}
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('announcement.edit', $x->id_announcement) }}"> <i class="fa fa-edit"></i> Edit</a>
                                    <a class="btn btn-danger" href="{{ route('announcement.edit', $x->id_announcement) }}"> <i class="fa fa-trash"></i> Delete</a>

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
    </script>
@stop