@extends('layouts/navbar')
@section('title', 'Data Pengguna Sistem | ')
@section('content')
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header  with-border">
                <h3 class="box-title">Data Table Menu</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <!-- button add -->
                <a href="/menu/create"><button class="btn bg-navy btn-flat margin">Tambah Data</button></a>

                <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable"
                    cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA MENU</th>
                            <th>LINK</th>
                            <th>IS MAIN MENU</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($index as $i)
                        <tr>
                            <td></td>
                            <td>{{$i->nama_menu}}</td>
                            <td>{{$i->link}}</td>
                            @if ($i->is_main_menu==0)
                            <td>Main Menu</td>
                            @else
                            <td>Sub menu</td>
                            @endif
                            <td>
                                <form action="/menu/{{$i->id}}" method="post" enctype="multipart/form-data">
                                    @method('delete')
                                    @csrf
                                    <a href="/menu/{{$i->id}}/edit"><i class="fa fa-edit"
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
@endsection