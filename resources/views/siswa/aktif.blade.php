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
                        <th>Jurusan</th>
                        <th>
                            <select onchange="getKelas()" name="kd_tingkatan" class="form-control" id="filter_jurusan">
                                @foreach ($jurusan as $j)
                                <option value="{{$j->kd_jurusan}}">{{$j->nama_jurusan}}</option>
                                @endforeach
                            </select>
                        </th>

                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <th>
                            <select name="kd_jurusan" id="kelas" class="form-control kelas"></select>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <button type="submit" name="export_jadwal" class="btn btn-success btn-sm"><i
                                    class="fa fa-print" aria-hidden="true"></i> Export Data</button>
                        </th>
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
                $('.kelas').append('<option id="cbkelas" value="'+item.kd_kelas'">'+item.nama_kelas'</option');
                } catch (error) {
                console.log(error);
                }

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