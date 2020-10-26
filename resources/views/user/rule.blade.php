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
                        <tbody id="modul">
                            @foreach ($modul as $m)
                            <tr>
                                <td><input id="id_menu" value="{{$m->id}}" type="hidden">{{$m->id}}</td>
                                <td>
                                    {{$m->nama_menu}}
                                </td>
                                <td>{{$m->link}}</td>

                                <td id="check" class="text-center">
                                    @if ($count > 0)

                                    <input class="id_check" type="checkbox" checked>
                                    @else
                                    <input class="id_check" type="checkbox">

                                    @endif
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
    $('#check').html('<td id="check" class="text-center"></td>');
        $.ajax({
            type : 'GET',
            url : 'http://localhost:8000/user/rule/'+level,
            success : function(res) {
                console.log(res)
            }
        })
    }
</script>