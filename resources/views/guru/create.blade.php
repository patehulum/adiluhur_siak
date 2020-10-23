@extends('layouts/navbar')
@section('title', 'Tambah Data Guru | ')
@section('content')
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary margin">
            <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Guru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <div class="box-body margin">
                <form role="form" class="form-horizontal" action="/guru/store" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group margin">
                        <label class="col-sm-2 control-label">NUPTK</label>

                        <div class="col-sm-9">
                            <input type="text" name="nuptk" class="form-control" placeholder="Masukan NUPTK" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama</label>

                        <div class="col-sm-9">
                            <input type="text" name="nama_guru" class="form-control" placeholder="Masukan Nama Lengkap"
                                required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Jenis Kelamin</label>

                        <div class="col-sm-5">
                            <select name="jenis_kelamin" class="form-control" required>
                                <option value="0">Pilih Jenis Kelamin</option>
                                <option value="P">Laki-Laki</option>
                                <option value="W">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tempat, Tgl Lahir</label>

                        <div class="col-sm-5">
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir"
                                required>
                        </div>

                        <div class="col-sm-2">
                            <input type='text' class="form-control" id='datepicker'
                                placeholder='Tahun / Bulan / Tanggal' name="tanggal_lahir" style='width: 300px;'
                                required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Alamat</label>

                        <div class="col-sm-9">
                            <input type="text" name="alamat_guru" class="form-control" placeholder="Masukkan Alamat"
                                required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pendidikan Terakhir</label>

                        <div class="col-sm-9">
                            <input type="text" name="pendidikan_terakhir" class="form-control"
                                placeholder="Masukkan Pendidikan Terakhir" required>
                        </div>
                        {{-- <div class="col-sm-5">
                            <select name="pendidikan_terakhir" class="form-control">
                                <option value="0">Pilih Pendidikan Teraknir</option>
                                <option value="Laki-Laki">D1</option>
                                <option value="Perempuan">D2</option>
                                <option value="Perempuan">D3</option>
                                <option value="Perempuan">S1</option>
                                <option value="Perempuan">S2</option>
                                <option value="Perempuan">S3</option>
                            </select>
                        </div> --}}
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Bekerja Sejak Tahun</label>

                        <div class="col-sm-9">
                            <input type="text" name="tahun" class="form-control" placeholder="Masukkan Tahun" required>
                        </div>
                        {{-- <div class="col-sm-5">
                            <select name="pendidikan_terakhir" class="form-control">
                                <option value="0">Pilih Tahun</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                            </select>
                        </div> --}}
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nomor Telepon</label>

                        <div class="col-sm-9">
                            <input type="text" name="no_telp" class="form-control" placeholder="Masukkan Nomor Telepon"
                                required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Foto</label>

                        <div class="col-sm-5">
                            <input type="file" name="foto">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Status</label>

                        <div class="col-sm-5">
                            <select name="status" class="form-control" required>
                                <option value="0">Pilih Status</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Keluar">Keluar</option>
                                <option value="Pensiun">Pensiun</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password</label>

                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password"
                                required>
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
    
    
    // JS Datepicker
    $(document).ready(function(){
     
      $('#datepicker').datepicker({
        format: "yyyy-mm-dd",
        endDate: new Date('1998-12-31'),
        startDate: new Date('1965-1-1'),
      });
    
    });
</script>
@endsection