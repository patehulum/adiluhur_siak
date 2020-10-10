@extends('layouts/navbar')
@section('title')
{{$ruangan->nama_ruangan}} | Edit
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Edit Siswa</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->


                <div class="box-body">
                    <form role="form" class="form-horizontal" action="/ruangan/{{$ruangan->kd_ruangan}}" method="post"
                        enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kode Ruangan</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$ruangan->kd_ruangan}}" name="kd_ruangan"
                                    class="form-control" placeholder="Masukkan Kode Mapel">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Ruangan</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$ruangan->nama_ruangan}}" name="nama_ruangan"
                                    class="form-control" placeholder="Masukkan Nama Mapel">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kapasitas</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$ruangan->kapasitas}}" name="kapasitas" class="form-control"
                                    placeholder="Masukkan Kapasistas">
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