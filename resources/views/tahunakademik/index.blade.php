@extends('layouts/navbar')
@section('title')
Data Kurikulum |
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header  with-border">
                <h3 class="box-title">Data Table Tahun Akademik</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <!-- button add -->
                <a href="/tahunakademik/create"><button class="btn bg-navy btn-flat margin">Tambah Data</button></a>
                @if (session('store'))
                <div class="alert alert-success">
                    {{ session('store') }}
                </div>
                @elseif (session('update'))
                <div class="alert alert-info">
                    {{ session('update') }}
                </div>
                @elseif (session('delete'))
                <div class="alert alert-danger">
                    {{ session('delete') }}
                </div>
                @endif
                <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable"
                    cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>TAHUN AKADEMIK</th>
                            <th>KETERANGAN</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tahun as $t)
                        <form action="/tahunakademik/aktif/{{$t->id_tahun_akademik}}" method="POST"
                            enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <tr>
                                <td></td>
                                <td>{{$t->tahun_akademik}}</td>
                                <td>
                                    @if ($t->is_aktif == "Y")
                                    {{$t->is_aktif="Aktif"}}
                                    @else
                                    {{$t->is_aktif="Tidak Aktif"}}
                                    @endif
                                </td>
                                <td class="center">
                                    <button type="submit" name="submit" class="btn btn-xs bg-orange margin"
                                        data-placement="top" title="Aktif">
                                        Ubah Aktif
                                    </button>

                                    <a href="/tahunakademik/{{$t->id_tahun_akademik}}"><i class="fa fa-edit"
                                            style="margin-right:5px"></i></a>
                                    <a href="/tahunakademik/{{$t->id_tahun_akademik}}/delete" method="delete"><i
                                            class="fa fa-times" style="color:red"></i></a>
                                </td>
                            </tr>
                        </form>
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