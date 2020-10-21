@extends('layouts/navbar')
@section('title')
Tambah Data Tahun Akademik
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Tahun Akademik</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                <form role="form" class="form-horizontal" action="/tahunakademik/store" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tahun Akademik</label>

                        <div class="col-sm-9">
                            <input type="text" name="tahun_akademik" class="form-control"
                                placeholder="Masukkan Kode kurikulum" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Is Aktif</label>

                        <div class="col-sm-9">
                            <select name="is_aktif" class="form-control" required>
                                <option value="">Pilih Keterangan</option>
                                <option value="Y">Aktif</option>
                                <option value="N">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>

                        <div class="col-sm-9">
                            <button type="submit" name="submit" onclick="incrementValue()" value="Increment Value"
                                class="btn btn-primary btn-flat">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection