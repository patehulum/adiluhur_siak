@extends('layouts/navbar')
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}">
</script>
<link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
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
                            <select onchange="getKelas()" name="kd_tingkatan" class="form-control" id="filter_jurusan">
                                @foreach ($jurusan as $j)
                                <option value="{{$j->kd_jurusan}}">{{$j->nama_jurusan}}</option>
                                @endforeach
                            </select>
                        </td>

                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>
                            <select name="kd_jurusan" id="kelas" class="form-control kelas"></select>
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
<script type="text/javascript">
    function getKelas()
    {
        var jurusan = $("#filter_jurusan").val();
        
        $.ajax({
            type    : 'GET',
            url     : 'http://localhost:8000/siswa/aktif/'+jurusan,
            success : function(res) {

                $.each(res, function(i, item){
                    try {
                    $('.kelas').append('<option id="cbkelas" value="'+item.kd_kelas'">'+item.nama_kelas'</option>');
                    } catch (error) {
                    console.log(error);
                    }

                })
            }
        })
    }

    function loadSiswa(kelas)
    {   
        var kelas   = $("#cbkelas").val();
        $.ajax({
            type    : 'GET',
            url     : ,
            data    : 'kd_kelas='+kelas,
            success : function(html) {
                $("#dataSiswa").html(html);
            }
        })
    }
</script>