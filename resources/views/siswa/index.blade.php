@extends('layouts/navbar')
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
                <a href="siswa/create"><button class="btn bg-navy btn-flat margin">Tambah Data</button></a>

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
                        @foreach ($siswa as $item)
                        <tr>
                            <td></td>
                            <td>{{ $item->foto }}</td>
                            <td>{{ $item->nis }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->tanggal_lahir }}</td>
                            <td>{{ $item->status_siswa }}</td>
                            <td></td>
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
{{-- </section>

<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}">
</script>
<link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

<script>
    $(document).ready(function() {
                var t = $('#mytable').DataTable( {
                    "ajax": '{{  }}',
                    "order": [[ 2, 'asc' ]],
                    "columns": [
                        {
                            "data": null,
                            "width": "50px",
                            "class": "text-center",
                            "orderable": false,
                        },
                        { 
                            "data": "foto",
                            "class": "text-center"
                        },
                        {
                            "data": "nis",
                            "width": "120px",
                            "class": "text-center"
                        },
                        { 
                            "data": "nama",
                        },
                        { 
                            "data": "jenis_kelamin",
                            "width": "150px"
                        },
                        { 
                            "data": "tanggal_lahir", 
                            "width": "150px",
                            "class": "text-center"
                        },
                        {
                            "data": "status_siswa",
                            "width": "150px",
                            "class": "text-center"
                        },
                        { 
                            "data": "aksi",
                            "width": "80px",
                            "class": "text-center"
                        },
                    ]
                } );
                   
                t.on( 'order.dt search.dt', function () {
                    t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                        cell.innerHTML = i+1;
                    } );
                } ).draw();
            } );
</script> --}}
@endsection