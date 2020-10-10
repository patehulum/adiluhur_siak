@extends('layouts/navbar')
@section('title')
{{$tahunakademik->nama_tahuna_kademik}} | Edit
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
                    <form role="form" class="form-horizontal"
                        action="/tahunakademik/{{$tahunakademik->id_tahuna_kademik}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kode tahunakademik Kelas</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$tahunakademik->id_tahuna_kademik}}"
                                    name="id_tahuna_kademik" class="form-control"
                                    placeholder="Masukkan Kode tahunakademik Kelas" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama tahunakademik Kelas</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$tahunakademik->nama_tahuna_kademik}}"
                                    name="nama_tahuna_kademik" class="form-control"
                                    placeholder="Masukkan Nama tahunakademik Kelas">
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