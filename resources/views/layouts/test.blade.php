//submenu true
<li class='treeview'>".anchor($main->link,"<i class='".$main->icon."'></i>".
    <span>".$main->nama_menu."</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>');
    //submenunya disini
    <ul class='treeview-menu'>
        foreach ($submenu->result() as $sub) {
        <li>" .anchor($sub->link,"<i class='".$sub->icon."'></i>"."<span>".$sub->nama_menu."</span></li>

        echo "</ul>
</li>";
} else {
//submenu false dan main menu true
echo "<li>" .anchor($main->link,"<i class='".$main->icon."'></i>"."<span>".$main->nama_menu."</span>"). "</li>";

<a href="{{ $main->link }}">
    <li class='treeview'>
        <i class='{{ $main->icon }}'></i>
        <span>{{ $main->nama_menu }}</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
</a>

{{-- submenunya disini --}}
<ul class='treeview-menu'>

    @foreach ($sub as $m)
    <li>
        <a href="{{$m->link }}"><i class={{ $m->icon }}></i>
            <span>{{ $m->nama_menu }}</span>
        </a>
    </li>
    @endforeach
</ul>
</li>
el