@extends('layouts/navbar')
@section('title')
{{$kelas->nama_kelas}} |
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Edit Kelas</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->


                <div class="box-body">
                    <form role="form" class="form-horizontal" action="/kelas/{{$kelas->kd_kelas}}" method="post"
                        enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kode Kelas</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$kelas->kd_kelas}}" name="kd_kelas" class="form-control"
                                    placeholder="Masukkan Kode Mapel">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Kelas</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$kelas->nama_kelas}}" name="nama_kelas" class="form-control"
                                    placeholder="Masukkan Nama Mapel">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tingkatan</label>

                            <div class="col-sm-5">
                                <select name="kd_tingkatan" class="form-control">
                                    <option value="{{$kelas->kd_tingkatan}}">{{$kelas->tingkatan->nama_tingkatan}}
                                    </option>
                                    @foreach ($tingkatan as $t)
                                    <option value="{{$t->kd_tingkatan}}">{{$t->nama_tingkatan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Jurusan</label>

                            <div class="col-sm-5">
                                <select name="kd_jurusan" class="form-control">
                                    <option value="{{$kelas->kd_jurusan}}">{{$kelas->jurusan->nama_jurusan}}</option>
                                    @foreach ($jurusan as $t)
                                    <option value="{{$t->kd_jurusan}}">{{$t->nama_jurusan}}</option>
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