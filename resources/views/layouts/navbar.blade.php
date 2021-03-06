@extends('layouts/template')

@section('navbar')
<header class="main-header">
  <!-- Logo -->
  <a href="/" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>L</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>SIAK </b>SMA</span>
  </a>

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="hidden-xs">{{ Auth::user()->nama_lengkap }}</span>
          </a>
        </li>

        <li>
          <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out">
              {{ __('Logout') }}
            </i></a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>

      </ul>
    </div>
  </nav>
</header>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset ('dist/img/logo.png') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Adi Luhur Jakarta</p>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->

    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>

      <!-- menu dinamis -->

      @foreach ($sql_menu as $main)

      @if ($sub = $menu->where('is_main_menu', '=', $main->id)->count())

      <li class='treeview'>
        <a href="/{{ $main->link }}"><i class='{{ $main->icon }}'></i>
          <span>{{ $main->nama_menu }}</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
          {{-- {{ $sub }} --}}

          {{-- submenunya disini --}}
          <ul class='treeview-menu'>
            @foreach ($sub=$menu->where('is_main_menu', '=', $main->id)->get() as $m)
            <li>
              <a href="/{{$m->link }}"><i class="{{ $m->icon }}"></i>
                <span>{{ $m->nama_menu }}</span>
              </a>
            </li>
            @endforeach
          </ul>
        </a>
      </li>
      @else
      <li>
        <a href="/{{ $main->link }}"><i class="{{ $main->icon }}"></i>
          <span>{{ $main->nama_menu }}</span>
        </a>
      </li>
      @endif
      @endforeach
    </ul>




  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <!-- Main content -->
    @yield('content')
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <a href="https://adminlte.io"><b>AdminLTE</b> V2</a>
  </div>
  SKRIPSI Yunita Rustania | Sistem Informasi Akademik SMA Adi Luhur Jakarta
</footer>
@endsection