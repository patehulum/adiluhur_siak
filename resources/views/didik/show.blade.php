@extends('layouts/navbar')
@foreach ($siswa as $s)

@endforeach
@section('title')
{{$s->nama}} |
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Detail Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-sm-12">
                    <img src="{{ asset('storage/'.$s->foto) }}" width="500px" class="img-responsive center-block">
                </div>
                <div class="col-sm-1"></div>
                <div class="col-xs-10" style="object-position: center;">
                    <br>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">NIS</th>
                                <td>{{$s->nis}}</td>
                            </tr>

                            <tr>
                                <th scope="row">NAMA</th>
                                <td>{{$s->nama}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Tempat, Tgl Lahir</th>
                                <td>{{$s->tempat_lahir}}, {{$s->tanggal_lahir}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Jenis Kelamin</th>
                                <td>{{$s->jenis_kelamin}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Agama</th>
                                <td>
                                    {{$s->agama->nama_agama}}
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">Alamat Siswa</th>
                                <td>{{$s->alamat_siswa}}</td>
                            </tr>

                            <tr>
                                <th scope="row">No. Telpon Siswa</th>
                                <td>{{$s->no_telp_siswa}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Nama Sekolah Asal</th>
                                <td>{{$s->sekolah_asal}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Nomor Ijazah</th>
                                <td>{{$s->no_ijazah}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Nama Ayah</th>
                                <td>{{$s->nama_ayah}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Nama Ibu</th>
                                <td>{{$s->nama_ibu}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Alamat Orang Tua</th>
                                <td>{{$s->alamat_ortu}}</td>
                            </tr>

                            <tr>
                                <th scope="row">No. Telpon Orang Tua</th>
                                <td>{{$s->no_telp_ortu}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Kelas</th>
                                <td>
                                    {{$s->kelas->nama_kelas}}
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">Status Siswa</th>
                                <td>{{$s->status_siswa}}</td>
                            </tr>
                            {{--
                            <tr>
                                <th scope="row">Username</th>
                                <td>['username']; ?></td>
                            </tr>

                            <tr>
                                <th scope="row">Password</th>
                                <td> ['password']; ?></td>
                            </tr> --}}

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        @endsection