@extends('layouts/navbar')


@section('title')
{{$kurikulum->nama_kurikulum}} |
@endsection
@section('content')
<div class="row">
    <!-- filter -->
    <div class="col-xs-4">

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Filter Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <table class="table table-bordered">
                    <tr>
                        <td>Jurusan</td>
                        <td>
                            <select name="kd_jurusan" class="form-control">
                                @foreach ($kurikulum as $k)
                                <option value="">{{$k->jurusan->nama_jurusan}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tingkatan Kelas</td>
                        <td>
                            <select name="kd_jurusan" class="form-control"></select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button class="btn bg-navy btn-flat margin">Tambahkan Data</button>
                            <a href="/kurikulum/index"><button
                                    class="btn bg-danger btn-flat margin">Kembali</button></a>

                        </td>
                    </tr>
                </table>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->

    <!-- tabel -->
    <div class="col-xs-8">

        <div class="box box-primary">
            <div class="box-header  with-border">
                <h3 class="box-title">Data Daftar Pelajaran</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <!-- disini tampil data -->
                <div id="table_daftarpelajaran" class="text-center">
                    <div class="callout callout-danger text-left">
                        <h4><i class="icon fa fa-warning"></i> Tingkatan Kelas Tidak terdeteksi</h4>
                        <p>Pilih Tingkatan Kelas yang ingin Ditampilkan Data Daftar Pelajaranya di Filter Data Terlebih
                            Dahulu</p>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->

</div>
@endsection