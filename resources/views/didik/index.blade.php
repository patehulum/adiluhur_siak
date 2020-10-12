@extends('layouts/navbar')
@section('title', 'Data Siswa | ')
@section('content')
<div class="row">
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
                        <td>Kelas</td>
                        <td>
                            <select onchange="loadSiswa()" class="form-control kelas" id="cbkelas">
                                <option></option>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="export_jadwal" class="btn btn-success btn-sm"><i
                                    class="fa fa-print" aria-hidden="true"></i> Export Data</button>
                        </td>
                    </tr>
                </table>

                </form>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->

    <div class="col-xs-8">

        <div class="box box-primary">
            <div class="box-header  with-border">
                <h3 class="box-title">Data Table Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <div id="dataSiswa"></div>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
<!-- /.row -->
@endsection
<script>
    function handleChange()
    {
    var jurusan = $("#filter_jurusan").val();

    $('#cbkelas').html('<select onchange="loadSiswa(kelas)" name="kd_kelas" class="form-control kelas" id="cbkelas"></select>');
    $.ajax({
        type : 'GET',
        url : 'http://localhost:8000/didik/kelas/'+jurusan,
        success : function(res) {
                $.each(res, function(i, item){
                    try {
                        $('.kelas').append('<option value="'+item.kd_kelas+'">'+item.nama_kelas+'</option>');
                    } catch (error) {
                        console.log(error);
                    }
                })         
                var kelas = $("#cbkelas").val();
                loadSiswa(kelas);
        }
    })
    }
    function loadSiswa(kelas)
    {
        var kelas = $("#cbkelas").val();
        $('#dataSiswa').html('<table class="table lists"><tr><th>NIS</th><th>Nama</th><th>Jenis Kelamin</th></tr></table>');
            $.ajax({
                type : 'GET',
                url : 'http://localhost:8000/didik/siswa/'+kelas,
                success : function(res) {
                    $.each(res, function(i, item){
                    try {
                    $('.lists').append('<tr><td>'+item.nis+'</td><td>'+item.nama+'</td><td>'+item.jenis_kelamin+'</td></tr>');
                    } catch (error) {
                    console.log(error);
                    }
                    })
                // console.log(res);
            }
        })
    }
</script>