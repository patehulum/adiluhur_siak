@extends('layouts/navbar')
@section('title')
Wali Kelas |
@endsection
@section('content')
<div class="row">

    <div class="col-xs-12">
        <div class="box box-info">
            <div class="box-header  with-border">
                <table class="table table-bordered">
                    <tr>
                        <td width="200">Tahun Akademik</td>
                        <td> : <?php echo get_tahun_akademik('tahun_akademik'); ?></td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td> : <?php echo get_tahun_akademik('semester'); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header  with-border">
                <h3 class="box-title">Data Table Walikelas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable"
                    cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KELAS</th>
                            <th>NAMA JURUSAN</th>
                            <th>TINGKATAN</th>
                            <th>NAMA WALIKELAS</th>
                        </tr>
                    </thead>
                </table>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
@endsection