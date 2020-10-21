@extends('layouts/navbar')
@section('title')
Tambah Data Mata Pelajaran |
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Mata Pelajaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <div class="box-body">
                <form role="form" class="form-horizontal" action="/mapel/store" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Kode Mapel</label>

                        <div class="col-sm-9">
                            <input type="text" name="kd_mapel" class="form-control" placeholder="Masukkan Kode Mapel"
                                required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Mapel</label>

                        <div class="col-sm-9">
                            <input type="text" name="nama_mapel" class="form-control" placeholder="Masukkan Nama Mapel"
                                required>
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