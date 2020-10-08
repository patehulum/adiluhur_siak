@extends('layouts/navbar')
@section('title', 'Data Guru')
@section('content')
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header  with-border">
                <h3 class="box-title">Data Table Mata Pelajaran</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <!-- button add -->
                <a href="/mapel/create"><button class="btn bg-navy btn-flat margin">Tambah Data</button></a>
                <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable"
                    cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KODE MAPEL</th>
                            <th>NAMA MATA PELAJARAN</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                </table>
                <tbody>
                    @foreach ($mapel as $s)
                    <tr>
                        <td></td>
                        <td></td>
                        <td>{{ $m->kd_mapel }}</td>
                        <td>{{ $m->nama_mapel }}</td>
                        <td>
                            <a href="/mapel/{{$m->kd_mapel}}"><i class="fa fa-eye" style="margin-right:5px"></i></a>
                            <a href="/mapel/{{$m->kd_mapel}}/edit"><i class="fa fa-edit"
                                    style="margin-right:5px"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

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
@endsection
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}">
</script>
<link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">