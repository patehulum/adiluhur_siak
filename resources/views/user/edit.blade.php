@extends('layouts/navbar')
@section('title')
{{$user->nama_lengkap}} |
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Edit Pengguna Sistem</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->


                <div class="box-body">
                    <form role="form" class="form-horizontal" action="/user/{{$user->id}}" method="post"
                        enctype="multipart/form-data">
                        @method('patch')
                        @csrf

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Lengkap</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$user->nama_lengkap}}" name="nama_lengkap"
                                    class="form-control" placeholder="Masukan Nama Lengkap" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-9">
                                <input type="email" value="{{$user->email}}" name="email" class="form-control"
                                    placeholder="Masukan Email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Old Password</label>

                            <div class="col-sm-9">
                                <input type="password" value="{{$user->password}}" class="form-control"
                                    placeholder="Masukan Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-9">
                                <input type="password" class="form-control" placeholder="Masukan Password"
                                    name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Level User</label>

                            <div class="col-sm-5">
                                <select name="id_level_user" class="form-control">
                                    <option value="{{$user->id_level_user}}">{{$user->leveluser->nama_level}}
                                    </option>
                                    @foreach ($level as $l)
                                    <option value="{{$l->id_level_user}}">{{$l->nama_level}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Foto</label>

                            <div class="col-sm-5">
                                <img src="{{ asset('storage/'.$user->foto) }}" width="100px" height="100px"
                                    style="margin-bottom: 10px">
                                <input type="file" value="{{$user->foto}}" name="foto">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>

                            <div class="col-sm-1">
                                <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
                            </div>

                            <div class="col-sm-1">
                                {{-- <form action="/siswa/{{$siswa->nis}}">
                                @method('delete')
                                @csrf
                                <button type="submit" value="{{$user->}}" name="submit"
                                    class="btn btn-danger btn-flat">Delete</button>
                    </form> --}}
                    </form>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<script type="text/javascript">
    $(document).ready(function(){
     
      $('#datepicker').datepicker({
        format: "yyyy-mm-dd",
        startDate: new Date('2000-1-1'),
        endDate: new Date('2006-12-31')
      });
    
    });
</script>
@endsection