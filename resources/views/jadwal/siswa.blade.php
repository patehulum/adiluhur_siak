@extends('layouts/navbar')
@section('title')
Data Jadwal |
@endsection
@section('content')
<div class="row">

    <!-- filter -->
    <div class="col-xs-12">
        <div class="box box-info">
            <div class="box-header  with-border">
                <table class="table table-bordered">
                    <tr>
                        <th width="200">Tahun Akademik</th>
                        <th> : {{$tahun->tahun_akademik}}</th>
                    </tr>
                    <tr>
                        <th>Semester</th>
                        <th> : {{$tahun->semester}}</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- /.col -->

    <!-- tabel -->
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header  with-border">
                <h3 class="box-title">Data Jadwal Pelajaran</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <!-- disini tampil data -->
                <table id="table_daftarpelajaran"
                    class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>JURUSAN</th>
                            <th>MATA PELAJARAN</th>
                            <th>HARI</th>
                            <th>JAM</th>
                            <th>RUANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jsiswa as $j)
                        <tr>
                            <td></td>
                            <td>{{$j->jurusan->nama_jurusan}}</td>
                            <td>{{$j->mapel->nama_mapel}}</td>
                            <td>{{$j->hari}}</td>
                            <td>{{$j->jam}}</td>
                            <td>{{$j->ruangan->nama_ruangan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->

</div>
@endsection
<style>
    body {
        counter-reset: Serial;
        /* Set the Serial counter to 0 */
    }

    table {
        border-collapse: separate;
    }

    tr td:first-child:before {
        counter-increment: Serial;
        /* Increment the Serial counter */
        content: counter(Serial);
        /* Display the counter */
    }

</style>