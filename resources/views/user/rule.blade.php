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
                            <select name="level_user" class="form-control" id="filter_level" onchange="loadData()">
                                <option value="">Pilih Level User</option>
                                @foreach ($level as $l)
                                <option value="{{$l->id_level_user}}">{{$l->nama_level}}</option>
                                @endforeach
                            </select>
                        </th>

                    </tr>
                </table>

                </form>

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
                                <td></td>
                                <td>
                                    <input id="id_menu" type="hidden" name="id_menu" value="">
                                    {{$m->nama_menu}}
                                </td>
                                <td>{{$m->link}}</td>
                                <td class="text-center">
                                    <input type="checkbox" onclick="addRule({{$m->id}})" @if (count($check)> 0)
                                    checked
                                    @endif>
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
    // function loadData digunakan untuk menampilkan table yang ada di function module
        function loadData()
        {
        var level = $("#filter_level").val();
        
        $.ajax({
            type : 'GET',
            url : 'http://localhost:8000/user/rule/'+level,
            success : function(res) {
                console.log(res);
            }
        })
        }
    
        function addRule(id_modul)
        {
            var level = $("#filter_level").val();
            $.ajax({
                type    : 'GET',
                url     : '',
                data    : 'level_user='+level+'&id_modul='+id_modul,
                success : function(html) 
                    alert("Sukses Merubah Hak Akses");
                }
            })
            
        }
</script>