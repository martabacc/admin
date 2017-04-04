@extends('layouts.general')
@section('content')
    @include('partials.flash-overlay-modal')

    <section class="content-header">
        <h1>Pengguna</h1>
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
                        <h3 class="box-title">Daftar Pengguna</h3>
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
                                <th class="col-2">Nama</th>
                                <th>Email</th>
                                <th>Status Verifikasi</th>
                                <th>Tanggal Verifikasi</th>
                                <th>Action</th>
                            </tr>
                            @foreach($data as $y => $x)
                                <tr>
                                    <td>{{ ++$y }}</td>
                                    <td><a href="{{ url('user/'. $x->id) }}">{{ $x->name }}</a></td>
                                    <td>{{ $x->email }}</td>
                                    <td>
                                        @if($x->isVerified())
                                            <label class="label label-success">Terverifikasi</label>
                                        @else
                                            <label class="label label-primary">Belum Terverifikasi</label>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $x->isVerified() ? $x->verified->verified_date->diffForHumans() : '-' }}
                                    </td>
                                    <td>
                                        @if(!$x->isVerified())
                                        <a class="btn btn-success" href="{{ route('announcement.edit', $x->id_announcement) }}"> Verifikasi Pengguna</a>
                                        @else
                                            <a class="btn btn-primary" href="{{ route('announcement.edit', $x->id_announcement) }}"> Detail Pengguna</a>
                                            @endif
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