@extends('layouts/navbar')
@section('title')
{{$m->nama_menu}} |
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Edit Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <div class="box-body">
                <form action="/menu/{{$m->id}}" method="post" role="form" enctype="multipart/form-data"
                    class="form-horizontal">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Menu</label>

                        <div class="col-sm-9">
                            <input type="text" value="{{$m->nama_menu}}" name="nama_menu" class="form-control"
                                placeholder="Masukkan Nama Menu">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Link</label>

                        <div class="col-sm-9">
                            <input type="text" value="{{$m->link}}" name="link" class="form-control"
                                placeholder="Masukkan Link Menu">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Icon</label>

                        <div class="col-sm-6">
                            <input type="text" value="{{$m->icon}}" name="icon" class="form-control"
                                placeholder="Masukkan Icon Menu">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Is Main Menu</label>

                        <div class="col-sm-6">

                            <!-- kalo menggunakan cmb_dinamis tidak bisa memilih menjadi main menu karena pilihan main menu tidak tersedia, makanya menggunakan cmb manual sehingga bisa menambhakan pilihan baru -->
                            <select name="is_main_menu" class="form-control">
                                <option value="0">Main Menu</option>
                                @foreach ($index as $i)
                                <option value="{{$i->is_main_menu}}">{{$i->nama_menu}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>

                        <div class="col-sm-1">
                            <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
                        </div>
                    </div>

                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection