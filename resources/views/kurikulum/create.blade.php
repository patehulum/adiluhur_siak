@extends('layouts/navbar')
@section('title')
Tambah Data Kurikulum |
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Kurikulum</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <div class="box-body">
                <form role="form" class="form-horizontal" action="/kurikulum/store" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Kurikulum</label>

                        <div class="col-sm-9">
                            <input type="text" name="nama_kurikulum" class="form-control"
                                placeholder="Masukkan Kode kurikulum" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Keterangan</label>

                        <div class="col-sm-9">
                            <select name="is_aktif" class="form-control" required>
                                <option value="">Pilih Keterangan</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>

                        <div class="col-sm-1">
                            <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
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
<!-- /.box-body -->
</form>
</div>
<!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
@endsection