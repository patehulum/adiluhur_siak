@extends('layouts/navbar')

@section('title', 'Kurikulum Detail | ')
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
                            <select onchange="handleChange()" name="kd_jurusan" class="form-control"
                                id="filter_jurusan">
                                @foreach ($jurusan as $j)
                                <option value="{{$j->kd_jurusan}}">{{$j->nama_jurusan}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tingkatan Kelas</td>
                        <td>
                            <select name="kd_tingkatan" class="form-control" id="filter_tingkatan">

                                @foreach ($tingkatan as $t)
                                <option value="{{$t->kd_tingkatan}}">{{$t->nama_tingkatan}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button class="btn bg-navy btn-flat margin">Tambahkan Data</button>
                            <a href="/kurikulum/index"><button
                                    class="btn btn-danger btn-flat margin">Kembali</button></a>

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
                <div id="table_daftarpelajaran" class="text-center" style="display:block">
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
<script type="text/javascript">
    function handleChange()
    {
        var tingkatan_kelas = $("#filter_tingkatan").val();
        var jurusan         = $("#filter_jurusan").val();
        console.log(tingkatan_kelas + '-----' + jurusan);
        $.ajax({
            type    : 'GET',
            url     : 'http://localhost:8000/kurikulum_detail/'+tingkatan_kelas+'/'+jurusan,
            success : function(res) {
                console.log(res);
            }
        })
    }
</script>