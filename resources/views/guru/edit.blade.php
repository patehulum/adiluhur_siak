@extends('layouts/navbar')
@section('title')
{{$guru->nama_guru}} |
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
                    <form role="form" class="form-horizontal" action="/guru/{{$guru->id_guru}}" method="post"
                        enctype="multipart/form-data">
                        @method('patch')
                        @csrf

                        <div class="form-group">
                            <label class="col-sm-2 control-label">NUPTK</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$guru->nuptk}}" name="nuptk" class="form-control"
                                    placeholder="Masukan NUPTK">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$guru->nama_guru}}" name="nama_guru" class="form-control"
                                    placeholder="Masukan Nama Lengkap">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Jenis Kelamin</label>

                            <div class="col-sm-5">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="{{$guru->jenis_kelamin}}">{{$guru->jenis_kelamin}}</option>
                                    <option value="P">P</option>
                                    <option value="W">W</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tempat, Tgl Lahir</label>

                            <div class="col-sm-5">
                                <input type="text" value="{{$guru->tempat_lahir}}" name="tempat_lahir"
                                    class="form-control" placeholder="Tempat Lahir">
                            </div>

                            <div class="col-sm-2">
                                <input type='text' class="form-control" id='datepicker'
                                    placeholder='Tahun / Bulan / Tanggal' value="{{$guru->tanggal_lahir}}"
                                    name="tanggal_lahir" style='width: 300px;'>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Alamat</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$guru->alamat_guru}}" name="alamat_guru"
                                    class="form-control" placeholder="Masukkan Alamat">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Pendidikan Terakhir</label>

                            <div class="col-sm-9">
                                <input type="text" value="{{$guru->pendidikan_terakhir}}" name="pendidikan_terakhir"
                                    class="form-control" placeholder="Masukkan Pendidikan Terakhir">
                            </div>
                            {{-- <div class="col-sm-5">
                                                    <select value="{{$guru->}}" name="pendidikan_terakhir"
                            class="form-control">
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
                        <input type="text" value="{{$guru->tahun}}" name="tahun" class="form-control"
                            placeholder="Masukkan Tahun">
                    </div>
                    {{-- <div class="col-sm-5">
                                                    <select value="{{$guru->}}" name="pendidikan_terakhir"
                    class="form-control">
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
                    <input type="text" value="{{$guru->no_telp}}" name="no_telp" class="form-control"
                        placeholder="Masukkan Nomor Telepon">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Foto</label>

                <div class="col-sm-5">
                    <input type="file" value="{{$guru->foto}}" name="foto">
                    <td><img src="{{ asset('storage/'.$guru->foto) }}" width="100px" height="100px"></td>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Status</label>

                <div class="col-sm-5">
                    <select name="status" class="form-control">
                        <option value="{{$guru->status}}">{{$guru->status}}</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Keluar">Keluar</option>
                        <option value="Pensiun">Pensiun</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>

                <div class="col-sm-9">
                    <input type="email" value="{{$guru->email}}" name="email" class="form-control"
                        placeholder="Masukkan email">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>

                <div class="col-sm-9">
                    <input type="password" value="{{$guru->password}}" name="password" class="form-control"
                        placeholder="Masukkan Password">
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
                <button type="submit" value="{{$guru->}}" name="submit" class="btn btn-danger btn-flat">Delete</button>
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
        format: "yyyy-mm-dd",
        startDate: new Date('2000-1-1'),
        endDate: new Date('2006-12-31')
      });
    
    });
</script>
@endsection