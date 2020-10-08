@extends('layouts/navbar')
@section('title')
{{$siswa->nama}} | Edit
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
                    <form role="form" class="form-horizontal" action="/siswa/{{$siswa->nis}}" method="post"
                        enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-2 control-label">NIS</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$siswa->nis}}" readonly="true" name="nis"
                                    class="form-control" placeholder="Masukkan NIS">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$siswa->nama}}" name="nama" class="form-control"
                                    placeholder="Masukkan Nama Lengkap">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tempat, Tgl Lahir</label>

                            <div class="col-sm-5">
                                <input type="text" value="{{$siswa->tempat_lahir}}" name="tempat_lahir"
                                    class="form-control" placeholder="Tempat Lahir">
                            </div>

                            <div class="col-sm-2">
                                <input type='text' class="form-control" id='datepicker'
                                    value="{{$siswa->tanggal_lahir}}" name="tanggal_lahir" style='width: 300px;'>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Jenis Kelamin</label>

                            <div class="col-sm-5">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="{{$siswa->jenis_kelamin}}">{{$siswa->jenis_kelamin}}</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Agama</label>

                            <div class="col-sm-5">
                                {{-- {{$siswa->agama->nama_agama}} --}}
                                <select name="kd_agama" class="form-control">
                                    {{-- {{$siswa->nama_agama}} --}}
                                    <option value="{{$siswa->kd_agama}}" selected>{{$siswa->agama->nama_agama}}</option>

                                    {{-- @foreach ($agama as $a)

                                    @endforeach --}}
                                    <option value="1">ISLAM</option>
                                    <option value="2">KRISTEN/ PROTESTAN</option>
                                    <option value="3">KATHOLIK</option>
                                    <option value="4">HINDU</option>
                                    <option value="5">BUDHA</option>
                                    <option value="6">KHONG HU CHU</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Alamat_siswa</label>

                            <div class="col-sm-5">
                                <input type="text" value="{{$siswa->alamat_siswa}}" name="alamat_siswa"
                                    class="form-control" placeholder="Masukkan Alamat Siswa">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nomor Telp Siswa</label>

                            <div class="col-sm-5">
                                <input type="text" value="{{$siswa->no_telp_siswa}}" name="no_telp_siswa"
                                    class="form-control" placeholder="Masukkan Nomor Telp Siswa">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Sekolah Asal</label>

                            <div class="col-sm-5">
                                <input type="text" value="{{$siswa->sekolah_asal}}" name="sekolah_asal"
                                    class="form-control" placeholder="Masukkan Nama Sekolah Asal">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nomor Ijazah</label>

                            <div class="col-sm-5">
                                <input type="text" value="{{$siswa->no_ijazah}}" name="no_ijazah" class="form-control"
                                    placeholder="Masukkan Nomor Ijazah">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Ayah</label>

                            <div class="col-sm-5">
                                <input type="text" value="{{$siswa->nama_ayah}}" name="nama_ayah" class="form-control"
                                    placeholder="Masukkan Nama Ayah Siswa">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Ibu</label>

                            <div class="col-sm-5">
                                <input type="text" value="{{$siswa->nama_ibu}}" name="nama_ibu" class="form-control"
                                    placeholder="Masukkan Nama Ibu Siswa">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Alamat Orang Tua</label>

                            <div class="col-sm-5">
                                <input type="text" value="{{$siswa->alamat_ortu}}" name="alamat_ortu"
                                    class="form-control" placeholder="Masukkan Alamat Orang Tua">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nomor Telp Orang Tua</label>

                            <div class="col-sm-5">
                                <input type="text" value="{{$siswa->no_telp_ortu}}" name="no_telp_ortu"
                                    class="form-control" placeholder="Masukkan Nomor Telp Orang Tua">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Foto</label>

                            <div class="col-sm-5">
                                <input type="file" name="foto">
                                <img src="" width="150px">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kelas Awal</label>

                            <div class="col-sm-5">
                                <select name="kd_kelas" class="form-control">
                                    <option value="{{$siswa->kd_kelas}}">{{$siswa->kelas->nama_kelas}}</option>
                                    <option value="IPAX1">X IPA 1</option>
                                    <option value="IPAX2">X IPA 2</option>
                                    <option value="IPAXI1">XI IPA 1</option>
                                    <option value="IPAXI2">XI IPA 2</option>
                                    <option value="IPAXII">XII IPA </option>
                                    <option value="IPSX1">X IPS 1</option>
                                    <option value="IPSX2">X IPS 2</option>
                                    <option value="IPSXI">XI IPS </option>
                                    <option value="IPSXII">XII IPS</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Status Siswa</label>

                            <div class="col-sm-5">
                                <select name="status_siswa" class="form-control">
                                    <option value="{{$siswa->status_siswa}}">{{$siswa->status_siswa}}</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Keluar">Keluar</option>
                                    <option value="Pindah">Pindah</option>
                                    <option value="Lulus">Lulus</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Username</label>

                            <div class="col-sm-5">
                                <input type="text" value="{{$siswa->email}}" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-5">
                                <input type="text" name="password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>

                            <div class="col-sm-1">
                                <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
                            </div>

                            {{-- <div class="col-sm-1">
                                <form action="/siswa/{{$siswa->nis}}">
                            @method('delete')
                            @csrf
                            <button type="submit" name="submit" class="btn btn-danger btn-flat">Delete</button>
                    </form>
                </div> --}}
            </div>
        </div>
        <!-- /.box-body -->
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
        format: "yy-mm-dd",
        startDate: new Date('2000-1-1'),
        endDate: new Date('2006-12-31')
      });
    
    });
</script>
@endsection