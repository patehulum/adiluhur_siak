@extends('layouts/navbar')
@section('title', 'Tambah Data Kelas |' )
@section('content')
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Kelas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <div class="box-body">
                <form role="form" class="form-horizontal" action="/kelas/store" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Kode Kelas</label>

                        <div class="col-sm-9">
                            <input type="text" required name="kd_kelas" class="form-control"
                                placeholder="Masukkan Kode Kelas">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Kelas</label>

                        <div class="col-sm-9">
                            <input type="text" required name="nama_kelas" class="form-control"
                                placeholder="Masukkan Nama Kelas">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tingkatan</label>

                        <div class="col-sm-5">
                            <select required name="kd_tingkatan" class="form-control">
                                <option value="">Pilih Tingkatan</option>
                                @foreach ($tingkatan as $t)
                                <option value="{{$t->kd_tingkatan}}">{{$t->nama_tingkatan}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Jurusan</label>

                        <div class="col-sm-5">
                            <select required name="kd_jurusan" class="form-control">
                                <option value="">Pilih Jurusan</option>
                                @foreach ($jurusan as $j)
                                <option value="{{$j->kd_jurusan}}">{{$j->nama_jurusan}}
                                </option>
                                @endforeach
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