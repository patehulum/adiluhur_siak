@extends('layouts/navbar')
@section('title')
{{$mapel->nama_mapel}} |
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Edit Mata Pelajaran</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->


                <div class="box-body">
                    <form role="form" class="form-horizontal" action="/mapel/{{$mapel->kd_mapel}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kode Mapel</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$mapel->kd_mapel}}" name="kd_mapel" class="form-control"
                                    placeholder="Masukkan Kode Mapel" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Mapel</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$mapel->nama_mapel}}" name="nama_mapel" class="form-control"
                                    placeholder="Masukkan Nama Mapel" required>
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