@extends('layouts/navbar')
@section('title')
Tambah Detail Kurikulum |
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Edit Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->


            <div class="box-body">
                <form role="form" class="form-horizontal" action="/kurikulum_detail/{{$kurikulum->id_kurikulum}}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Kurikulum</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" value="{{$kurikulum->nama_kurikulum}}" readonly>
                            {{-- <select name="id_kurikulum" value="" class="form-control" disabled>
                                <option value="{{$kurikulum->id_kurikulum}}">{{$kurikulum->nama_kurikulum}}</option>
                            </select> --}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Mata Pelajaran</label>

                        <div class="col-sm-5">
                            <select name="kd_mapel" class="form-control">
                                @foreach ($mapel as $m)
                                <option value="{{$m->kd_mapel}}">{{$m->nama_mapel}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Jurusan</label>

                        <div class="col-sm-5">
                            <select name="kd_jurusan" class="form-control">
                                @foreach ($jurusan as $j)
                                <option value="{{$j->kd_jurusan}}">{{$j->nama_jurusan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tingkatan Kelas</label>

                        <div class="col-sm-5">
                            <select name="kd_tingkatan" class="form-control">
                                @foreach ($tingkatan as $t)
                                <option value="{{$t->kd_tingkatan}}">{{$t->nama_tingkatan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>

                        <div class="col-sm-5">
                            <button type="submit" name="submit" class="btn btn-primary btn-flat margin">Simpan</button>

                            <a href="/kurikulum_detail/{{$kurikulum->id_kurikulum}}">
                                <input type="button" class="btn btn-danger btn-flat margin" value="Kembali">
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.row -->
@endsection