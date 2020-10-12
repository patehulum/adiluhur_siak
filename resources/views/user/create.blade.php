@extends('layouts/navbar')
@section('title', 'Tambah Data User | ')
@section('content')
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Tambah User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <div class="box-body">
                <form role="form" class="form-horizontal" action="/user/store" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Lengkap</label>

                        <div class="col-sm-9">
                            <input type="text" name="nama_lengkap" class="form-control"
                                placeholder="Masukan Nama Lengkap">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" placeholder="Masukan Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password</label>

                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" placeholder="Masukan Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Level User</label>

                        <div class="col-sm-5">
                            <select name="id_level_user" class="form-control">
                                <option value="0">Pilih Level User</option>
                                @foreach ($user as $u)
                                <option value="{{$u->leveluser->id_level_user}}">{{$u->leveluser->nama_level}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Foto</label>

                        <div class="col-sm-5">
                            <input type="file" name="foto">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>

                        <div class="col-sm-1">
                            <button type="submit" name="submit" onclick="incrementValue()" value="Increment Value"
                                class="btn btn-primary btn-flat">Simpan</button>
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

<script type="text/javascript">
    function incrementValue()
    {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('number').value = value;
    }
</script>
@endsection