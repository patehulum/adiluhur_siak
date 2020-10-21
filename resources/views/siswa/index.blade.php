@extends('layouts/navbar')
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}">
</script>
<link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@section('title', 'Data Siswa | ')
@section('content')
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header  with-border">
                <h3 class="box-title">Data Table Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <!-- button add -->
                <a href="/siswa/create"><button class="btn bg-navy btn-flat margin">Tambah Data</button></a>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="mytable_length"><label>Show <select name="mytable_length"
                                    aria-controls="mytable" class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries</label></div>
                    </div>
                    <div class="col-sm-6">
                        <div id="mytable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                    class="form-control input-sm" placeholder="" aria-controls="mytable"></label>
                        </div>
                    </div>
                </div>
                @if (session('store'))
                <div class="alert alert-success">
                    {{ session('store') }}
                </div>
                @elseif (session('update'))
                {{ session('update') }}
                @endif
                <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable"
                    cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>FOTO</th>
                            <th>NIS</th>
                            <th>NAMA</th>
                            <th>JENIS KELAMIN</th>
                            <th>TANGGAL LAHIR</th>
                            <th>Status</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $s)
                        <tr>
                            {{-- {{(dd($siswa))}} --}}
                            <td></td>
                            <td><img src="{{ asset('storage/'.$s->foto) }}" width="100px" height="100px"></td>
                            <td>{{ $s->nis }}</td>
                            <td>{{ $s->nama }}</td>
                            <td>{{ $s->jenis_kelamin }}</td>
                            <td>{{ $s->tanggal_lahir }}</td>
                            <td>{{ $s->status_siswa }}</td>
                            <td>
                                <a href="/siswa/{{$s->nis}}"><i class="fa fa-eye" style="margin-right:5px"></i></a>
                                <a href="/siswa/{{$s->nis}}/edit"><i class="fa fa-edit"
                                        style="margin-right:5px"></i></a>
                            </td>
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