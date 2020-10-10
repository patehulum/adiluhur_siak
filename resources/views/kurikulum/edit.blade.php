@extends('layouts/navbar')
@section('title')
{{$kurikulum->nama_kurikulum}} | Edit
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
                    <form role="form" class="form-horizontal" action="/kurikulum/{{$kurikulum->id_kurikulum}}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Kurikulum</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$kurikulum->nama_kurikulum}}" name="nama_kurikulum"
                                    class="form-control" placeholder="Masukkan Kode kurikulum">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Keterangan</label>

                            <div class="col-sm-9">
                                <select name="is_aktif" class="form-control">
                                    <option value="{{$kurikulum->is_aktif}}">{{$kurikulum->is_aktif}}</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
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