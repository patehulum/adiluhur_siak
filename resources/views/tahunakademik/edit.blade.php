@extends('layouts/navbar')
@section('title')
{{$tahun->tahun_akademik}} |
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Edit Tahun Akadamik</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->


                <div class="box-body">
                    <form role="form" class="form-horizontal" action="/tahunakademik/{{$tahun->id_tahun_akademik}}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kode Tahun Akademik </label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$tahun->tahun_akademik}}" name="tahun_akademik"
                                    class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Is Aktif</label>

                            <div class="col-sm-9">
                                <select name="is_aktif" class="form-control" disabled>
                                    @if ($tahun->is_aktif == "Y")
                                    <option value="{{$tahun->id_tahuna_kademik}}">
                                        {{$tahun->is_aktif="Aktif"}}
                                    </option>
                                    @else
                                    <option value="{{$tahun->id_tahuna_kademik}}">
                                        {{$tahun->is_aktif="Tidak Aktif"}}
                                    </option>
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Semester</label>

                            <div class="col-sm-9">
                                <select name="semester" class="form-control" required>
                                    @if ($tahun->semester != null)
                                    <option value="{{$tahun->semester}}">{{$tahun->semester}}</option>
                                    @else
                                    <option value="">Pilih Semester</option>
                                    @endif
                                    <option value="{{$tahun->semester}}">Ganjil</option>
                                    <option value="{{$tahun->semester}}">Genap</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>

                            <div class="col-sm-9">
                                <button type="submit" name="submit"
                                    class="btn btn-primary btn-flat margin">Simpan</button>
                                <a href="{{ url()->previous() }}" class="btn btn-danger btn-flat">Kembali</a>
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