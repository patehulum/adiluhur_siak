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
                        <input type="text" name="" id="filter_kurikulum" value="{{$kurikulum->id_kurikulum}}" hidden>
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
                            <select onchange="handleChange()" name="kd_tingkatan" class="form-control"
                                id="filter_tingkatan">

                                @foreach ($tingkatan as $t)
                                <option value="{{$t->kd_tingkatan}}">{{$t->nama_tingkatan}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="kurikulum">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="/kurikulum_detail/{{$kurikulum->id_kurikulum}}/edit"><button
                                    class="btn bg-navy btn-flat margin">Tambahkan Data</button></a>
                            <a href="/kurikulum"><button class="btn btn-danger btn-flat margin">Kembali</button></a>

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
<script>
    function handleChange()
    {
        var kurikulum       = $('#filter_kurikulum').val();
        var tingkatan_kelas = $("#filter_tingkatan").val();
        var jurusan         = $("#filter_jurusan").val();
        
        $('#table_daftarpelajaran').html('<table class="table lists"><tr><th>Nama Kurikulum</th><th>Mapel</th><th>jurusan</th><th>tingkatan</th></tr></table>');
        $.ajax({
            type    : 'GET',
            url     : 'http://localhost:8000/kurikulum_detail/'+kurikulum+'/'+tingkatan_kelas+'/'+jurusan,
            success : function(res) {
                
                $.each(res, function(i, item){
                    try {
                        $('.lists').append('<tr><td>'+item.kurikulum.nama_kurikulum+'</td><td>'+item.mapel.nama_mapel+'</td><td>'+item.jurusan.nama_jurusan+'</td><td>'+item.tingkatan.nama_tingkatan+'</td></tr>');
                        $('#kurikulum').html(item.kurikulum.nama_kurikulum);
                    } catch (error) {
                        console.log(error);
                    }
                })
                // console.log(res.data);
            }
        })
    }
</script>