@extends('layouts/navbar')
@foreach ($guru as $g)

@section('title')
{{$g->nama_guru}}
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
                    <img src="{{ asset('storage/'.$g->foto) }}" width="500px" class="img-responsive center-block">
                </div>
                <div class="col-sm-1"></div>
                <div class="col-xs-10" style="object-position: center;">
                    <br>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">NUPTK</th>
                                <td>{{$g->nuptk}}</td>
                            </tr>

                            <tr>
                                <th scope="row">NAMA</th>
                                <td>{{$g->nama_guru}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Tempat, Tgl Lahir</th>
                                <td>{{$g->tempat_lahir}}, {{$g->tanggal_lahir}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Jenis Kelamin</th>
                                <td>{{$g->jenis_kelamin}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Alamat</th>
                                <td>{{$g->alamat_guru}}</td>
                            </tr>

                            <tr>
                                <th scope="row">No. Telepon</th>
                                <td>{{$g->no_telp}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Status </th>
                                <td>{{$g->status}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Pendidikan Terakhir </th>
                                <td>{{$g->pendidikan_terakhir}}</td>
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
        @endforeach