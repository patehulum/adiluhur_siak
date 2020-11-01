@extends('layouts/navbar')
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}">
</script>
<link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@section('title', 'Data Pengguna Sistem | ')
@section('content')
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header  with-border">
                <h3 class="box-title">Data Pengguna Sistem</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <!-- button add -->
                <a href="/user/create"><button class="btn bg-navy btn-flat margin">Tambah Data</button></a>
                <a href="/user/rule"><button class="btn btn-danger btn-flat margin">User Rule</button></a>
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
                            <th>FOTO</th>
                            <th>NAMA LENGKAP</th>
                            <th>LEVEL</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $u)
                        <tr>
                            {{-- {{dd($user)}} --}}
                            <td></td>
                            <td><img src="{{ asset('storage/'.$u->foto) }}" width="75px" height="75px"></td>
                            <td>{{ $u->nama_lengkap }}</td>
                            <td>{{ $u->id_level_user }}</td>
                            <td>
                                <form action="/user/{{$u->id}}" method="post" enctype="multipart/form-data">
                                    @method('delete')
                                    @csrf
                                    <a href="/user/{{$u->id}}/edit"><i class="fa fa-edit"
                                            style="margin-right:5px"></i></a>
                                    <button type="submit" name="submit" class="btn btn-link btn-flat in-line"><i
                                            class="fa fa-times" style="color:red"></i></button>
                                </form>
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