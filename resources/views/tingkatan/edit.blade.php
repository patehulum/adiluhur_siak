@extends('layouts/navbar')
@section('title')
{{$tingkatan->nama_tingkatan}} |
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Edit Tingkatan</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->


                <div class="box-body">
                    <form role="form" class="form-horizontal" action="/tingkatan/{{$tingkatan->kd_tingkatan}}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kode Tingkatan Kelas</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$tingkatan->kd_tingkatan}}" name="kd_tingkatan"
                                    class="form-control" placeholder="Masukkan Kode Tingkatan Kelas" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Tingkatan Kelas</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$tingkatan->nama_tingkatan}}" name="nama_tingkatan"
                                    class="form-control" placeholder="Masukkan Nama Tingkatan Kelas" required>
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