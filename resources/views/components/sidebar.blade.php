<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="mdi mdi-close"></i>
    </button>

    <div class="left-side-logo d-block d-lg-none">
        <div class="text-center">

            <a href="admin" class="logo"><img src="{{ asset('assets/images/logo_dark.png') }}" height="20"
                    alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                <li>
                    <a href="admin" class="waves-effect">
                        <i class="dripicons-home"></i>
                        <span> Dashboard <span class="badge badge-success badge-pill float-right">3</span></span>
                    </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span>
                            Pekerjaan </span> <span class="menu-arrow float-right"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="ui-alerts.html">Alerts</a></li>
                        <li><a href="ui-badge.html">Badge</a></li>
                    </ul>
                </li>

                {{-- @php


                @php

                    $sidebarJobCategory = sidebar_job_category();
                @endphp

                {{-- If not working or something like sidebar_job_category undefined, please run "composer dump-autoload" --}}

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span>
                            Data Master </span> <span class="menu-arrow float-right"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="/admin/job/category/create"><i class="dripicons-plus"></i> Tambah Kategori </a>
                        </li>
                        <li>
                            <a href="/admin/job/jurusan/create"><i class="fas fa-tasks"></i> Data Jurusan</a>
                        </li>

                        @foreach ($sidebarJobCategory as $category)
                            <li><a href="/admin/job/category/{{ $category->id }}"> {{ $category->name_category }} </a></li>
                        @endforeach

                    </ul>
                </li>



            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>