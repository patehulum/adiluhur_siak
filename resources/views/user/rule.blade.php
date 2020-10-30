@extends('layouts/navbar')
@section('title')
Rule
@endsection
@section('content')
<div class="row">

    <!-- filter -->
    <div class="col-xs-4">

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Filter Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <table class="table table-bordered">
                    <tr>
                        <th>Level User</th>
                        <th>
                            <select onchange="handleChange()" class="form-control" name="level_user" id="filter_level">
                                <option value="">Pilih Level</option>
                                @foreach ($level as $l)
                                <option value="{{$l->id_level_user}}">{{$l->nama_level}}</option>
                                @endforeach
                            </select>
                        </th>
                    </tr>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->

    <div class="col-xs-8">

        <div class="box box-primary">
            <div class="box-header  with-border">
                <h3 class="box-title">Data Hak Akses Module</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <div id="table-module">
                    <table id="mytable"
                        class="table table-striped table-bordered table-hover table-full-width dataTable"
                        cellspacing="0" width="100%">
                        <thead>
                            <th>NO</th>
                            <th>NAMA MODUL</th>
                            <th>LINK</th>
                            <th>HAK AKSES</th>
                        </thead>
                        <tbody>
                            @foreach ($modul as $m)
                            <tr>
                                <td><input id="id_menu" value="{{$m->id}}" type="hidden">{{$m->id}}</td>
                                <td>
                                    {{$m->nama_menu}}
                                </td>
                                <td>{{$m->link}}</td>

                                <td id="check" class="text-center">
                                    <input class="id_check" type="checkbox" {{-- @foreach ($count as $c)
                                        {{$c->id == $m->id ? 'checked' : ''}} @endforeach --}}>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->

</div>
@endsection
<script>
    function handleChange()
    {
    var level = $("#filter_level").val();
    $('#mytable').html('<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%"><thead><th>NO</th><th>NAMA MODUL</th><th>LINK</th><th>HAK AKSES</th></thead></table>');
    $.ajax({
        type : 'GET',
        url : 'http://localhost:8000/user/rule/'+level,
        success : function(res) {
            $.each(res.count, function(c, count){
                    try {
                        $.each(res.menu, function (m, menu) {
                        $('#mytable').append('<tbody><tr><td>'+menu.id+'</td><td>'+menu.nama_menu+'</td><td>'+menu.link+'</td><td id="check" class="text-center"><input type="checkbox" class="check"></td></tr></tbody>');
                                if (menu.id == count.id) {
                                    console.log(count.id);
                                    $('#check').html('<input type="checkbox" checked>');
                                }
                        })
                    } catch (error){
                        console.log(error);
                    }
                })
                // console.log(res.menu)
            }
        })
    }
</script>